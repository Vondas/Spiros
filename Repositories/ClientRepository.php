<?php


namespace Repositories;


class ClientRepository extends BaseRepository
{
    public function create(?string $email,
                           ?string $phone_number,
                           ?string $firstname,
                           ?string $lastname,
                           ?string $address,
                           ?string $project) {
        $sql = "INSERT INTO `customer`(
        `email`,
        `phone_number`,
        `firstname`,
        `lastname`,
        `address`,
        `project`
        )
        VALUES (
        :email,
        :phone_number,
        :firstname,
        :lastname,
        :address,
        :project
        )
        ;";

        $stmt = self::$pdo->prepare($sql);
        $stmt->bindValue(':email', htmlspecialchars($email));
        $stmt->bindValue(':phone_number', htmlspecialchars($phone_number));
        $stmt->bindValue(':firstname', htmlspecialchars($firstname));
        $stmt->bindValue(':lastname', htmlspecialchars($lastname));
        $stmt->bindValue(':address', htmlspecialchars($address));
        $stmt->bindValue(':project', htmlspecialchars($project));

        try {
            $stmt->execute();

        } catch (\PDOException $e) {
            if($stmt->errorCode() !== '00000') {
                return FALSE;
            }
        }

        return (bool) $stmt->rowCount();
    }

    public function all() {
        $sql = "SELECT
        `email`,
        `phone_number`,
        `firstname`,
        `lastname`,
        `address`,
        `project`
        FROM
        `customer`
        LIMIT
        8;";

        $stmt = self::$pdo->prepare($sql);

        try {
            $stmt->execute();
        } catch (\PDOException $e) {
            if($stmt->errorCode() !== '00000') {
                return FALSE;
            }
        }

        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}