<?php

namespace BukuTamu\Repository;

use BukuTamu\Domain\RekapTamu;
use BukuTamu\Domain\Tamu;

class TamuRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save(Tamu $tamu): Tamu
    {
        $statement = $this->connection->prepare("INSERT INTO tamu(nama, institusi, telepon, foto, email, pin) VALUES (?, ?, ?, ?, ?, ?)");
        $statement->execute([
            $tamu->nama, $tamu->institusi, $tamu->telepon, $tamu->foto, $tamu->email, $tamu->pin
        ]);

        return $tamu;
    }

    public function saveRekap(RekapTamu $rekapTamu): RekapTamu
    {
        $statement = $this->connection->prepare("INSERT INTO rekaptamu(id_tamu, id_rekap, tujuan) VALUES (?, ?, ?)");
        $statement->execute([
            $rekapTamu->id_tamu, $rekapTamu->id_rekap, $rekapTamu->tujuan
        ]);
        return $rekapTamu;
    }

    public function findById(string $idFoto): ?Tamu
    {
        $statement = $this->connection->prepare("SELECT nama, institusi, telepon, foto, email, pin FROM tamu WHERE foto = ?");
        $statement->execute(["$idFoto.jpg"]);

        try {
            if ($row = $statement->fetch()) {
                $tamu = new Tamu();
                $tamu->nama = $row['nama'];
                $tamu->institusi = $row['institusi'];
                $tamu->telepon = $row['telepon'];
                $tamu->foto = $row['foto'];
                $tamu->email = $row['email'];
                $tamu->pin = $row['pin'];

                return $tamu;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function getTamuByPhone(string $telepon)
    {
        $statement = $this->connection->prepare("SELECT telepon, pin FROM tamu WHERE telepon = ?");
        $statement->execute([$telepon]);

        if ($row = $statement->fetch()) {
            $response = [];
            $response['telepon'] =  $row['telepon'];
            $response['pin'] =  $row['pin'];
            return $response;
        }
    }
}
