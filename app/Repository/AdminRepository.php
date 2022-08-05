<?php

namespace BukuTamu\Repository;

use BukuTamu\Domain\Admin;
use BukuTamu\Domain\RekapTamu;
use BukuTamu\Domain\Tamu;
use BukuTamu\Domain\TamuLastWeek;

class AdminRepository
{

    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Admin $admin): Admin
    {
        $statement = $this->connection->prepare("INSERT INTO admin(id, name, password) VALUES (?, ?, ?);");
        $statement->execute([
            $admin->id, $admin->name, $admin->password
        ]);

        return $admin;
    }


    public function findById(string $id): ?Admin
    {
        $statement = $this->connection->prepare("SELECT id, name, password FROM admin WHERE id = ?");
        $statement->execute([$id]);

        try {
            if ($row = $statement->fetch()) {
                $admin = new Admin();
                $admin->id = $row['id'];
                $admin->name = $row['name'];
                $admin->password = $row['password'];
                return $admin;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    function getAllTamu()
    {
        $statement = $this->connection->prepare("SELECT nama, institusi, telepon, foto FROM tamu ORDER BY check_in DESC");
        $statement->execute();

        try {
            $result = [];

            foreach ($statement as $row) {
                $tamu = new Tamu();
                $tamu->nama = $row['nama'];
                $tamu->institusi = $row['institusi'];
                $tamu->tujuan = $row['telepon'];
                $tamu->foto = $row['foto'];

                $result[] = $tamu;
            }
            return $result;
        } finally {
            $statement->closeCursor();
        }
    }

    public function hapusTamu(string $fotoId)
    {
        $statement = $this->connection->prepare("DELETE FROM tamu WHERE foto = ?");
        $statement->execute(["$fotoId.jpg"]);
    }

    public function tamuSeminggu()
    {
        $statement = $this->connection->prepare(
            "SELECT
                date(check_in) AS tanggal,
                count(1) AS jumlah
            FROM tamu 
            WHERE check_in > date_sub(now(), interval 1 week)
            GROUP BY 1"
        );
        $statement->execute();

        try {
            $result = [];

            foreach ($statement as $row) {
                $tamu = new TamuLastWeek();
                $tamu->tanggal = $row['tanggal'];
                $tamu->jumlah = $row['jumlah'];

                $result[] = $tamu;
            }
            return $result;
        } finally {
            $statement->closeCursor();
        }
    }

    public function searchData(string $name)
    {
        $pattern = '%' . $name . '%';
        $statement = $this->connection->prepare("SELECT * FROM tamu WHERE nama LIKE :pattern");
        $statement->execute([':pattern' => $pattern]);

        try {
            $result = [];

            foreach ($statement as $row) {
                $tamu = new Tamu();
                $tamu->nama = $row['nama'];
                $tamu->institusi = $row['institusi'];
                $tamu->telepon = $row['telepon'];
                $tamu->foto = $row['foto'];

                $result[] = $tamu;
            }
            return $result;
        } finally {
            $statement->closeCursor();
        }
    }

    function getRekapTamu(string $id_tamu)
    {
        $statement = $this->connection->prepare("SELECT id_tamu, id_rekap, tujuan, check_in FROM rekaptamu WHERE id_tamu = ? ORDER BY check_in DESC");
        $statement->execute(["$id_tamu.jpg"]);

        try {
            $result = [];

            foreach ($statement as $row) {
                $tamu = new RekapTamu;
                $tamu->id_tamu = $row['id_tamu'];
                $tamu->id_rekap = $row['id_rekap'];
                $tamu->tujuan = $row['tujuan'];
                $tamu->check_in = $row['check_in'];

                $result[] = $tamu;
            }
            return $result;
        } finally {
            $statement->closeCursor();
        }
    }

    public function rekapTamuSeminggu()
    {
        $statement = $this->connection->prepare(
            "SELECT
                date(check_in) AS tanggal,
                count(1) AS jumlah
            FROM rekaptamu 
            WHERE check_in > date_sub(now(), interval 1 week)
            GROUP BY 1"
        );
        $statement->execute();

        try {
            $result = [];

            foreach ($statement as $row) {
                $tamu = new TamuLastWeek();
                $tamu->tanggal = $row['tanggal'];
                $tamu->jumlah = $row['jumlah'];

                $result[] = $tamu;
            }
            return $result;
        } finally {
            $statement->closeCursor();
        }
    }
}
