<?php

namespace BukuTamu\Repository;

use BukuTamu\Domain\Session;

class SessionRepository
{
    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }
    public function save(Session $session): Session
    {
        $statement = $this->connection->prepare('INSERT INTO session(id, user_id) VALUES(?, ?)');
        $statement->execute([$session->id, $session->user_id]);
        return $session;
    }

    public function findById(string $id): ?Session
    {
        $statement = $this->connection->prepare('SELECT id, user_id from session WHERE id = ?');
        $statement->execute([$id]);

        try {
            if ($row = $statement->fetch()) {
                $session = new Session();
                $session->id = $row['id'];
                $session->user_id = $row['user_id'];
                return $session;
            } else {
                return null;
            }
        } finally {
            $statement->closeCursor();
        }
    }

    public function deleteById(string $id): void
    {
        $statement = $this->connection->prepare("DELETE FROM session where id = ?");
        $statement->execute([$id]);
    }

    public function deleteAll(): void
    {
        $this->connection->exec("DELETE FROM session");
    }
}
