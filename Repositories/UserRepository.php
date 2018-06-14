<?php


namespace Repositories;


class UserRepository extends BaseRepository
{
    public function one($email) {
        $sql = "SELECT
        `email`,
        `password`
        FROM
        `user`
        WHERE
        `email`=:email
        LIMIT
        1;";

        $stmt = self::$pdo->prepare($sql);
        $stmt->bindValue(":email", htmlentities($email));
        $stmt->execute();

        if($stmt->errorCode() !== '00000') {
            die($stmt->errorInfo()[2]);
        }

        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
}