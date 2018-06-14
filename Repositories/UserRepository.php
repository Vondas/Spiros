<?php


namespace Repositories;


class UserRepository extends BaseRepository
{
    public function one($email, $password) {
        $sql = "SELECT
        `email`
        FROM
        `user`
        WHERE
        `email`=:email
        AND
        `password`=:password
        LIMIT
        1;";

        $stmt = self::$pdo->prepare($sql);
        $stmt->bindValue(":email", htmlentities($email));
        $stmt->bindValue(":password", htmlentities($password));
        $stmt->execute();

        if($stmt->errorCode() !== '00000') {
            die($stmt->errorInfo()[2]);
        }

        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
}