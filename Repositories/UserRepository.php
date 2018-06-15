<?php


namespace Repositories;


class UserRepository extends BaseRepository
{
    public function one(string $email) {
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

        try {
            $stmt->execute();
        } catch (\PDOException $e) {
            if($stmt->errorCode() !== '00000') {
                return FALSE;
            }
        }

        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function create(string $email, string $hash) {
        $sql = "INSERT INTO `user`(
        `email`,
        `password`)
        VALUES (
        :email,
        :password)
        ;";

        $stmt = self::$pdo->prepare($sql);
        $stmt->bindValue(':email', htmlspecialchars($email));
        $stmt->bindValue(':password', $hash);

        try {
            $stmt->execute();

        } catch (\PDOException $e) {
            if($stmt->errorCode() !== '00000') {
                return FALSE;
            }
        }

        return (bool) $stmt->rowCount();
    }
}