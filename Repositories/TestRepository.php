<?php


namespace Repositories;


class TestRepository extends BaseRepository
{
    public function all() {
        $sql = "SELECT
        *
        FROM
        `user`
        ;";

        $stmt = self::$pdo->prepare($sql);
        $stmt->execute();

        if($stmt->errorCode() !== '00000') {
            die($stmt->errorInfo()[2]);
        }

        return $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}