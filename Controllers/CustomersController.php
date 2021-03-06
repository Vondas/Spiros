<?php

namespace Controllers;

require "../connect.php";


class CustomersController
{
    public function list() {

        $sql = "SELECT 
            `id`,
            `email`,
            `phone_number`,
            `firstname`,
            `lastname`
        FROM 
            `customer`
        ;";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$row){
            header('Location: index.php');
        }

        echo $this->render('customersList.html.twig', $row);
    }

}