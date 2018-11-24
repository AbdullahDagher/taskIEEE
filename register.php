<?php
    include 'connection.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['submit'])){
            $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
            $fullName = filter_var($_POST['fullName'], FILTER_SANITIZE_STRING);
            $position = filter_var($_POST['position'], FILTER_SANITIZE_STRING);
            $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
            $streetAddress = filter_var($_POST['streetAddress'], FILTER_SANITIZE_STRING);
            $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
            $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
            $state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
            $postalCode = filter_var($_POST['postalCode'], FILTER_SANITIZE_STRING);
            $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);

            $stm = $con->prepare('INSERT INTO data (title, fullName, position, company, email, streetAddress, country, city, state, postalCode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
            $stm->execute([
                $title,
                $fullName,
                $position,
                $company,
                $streetAddress,
                $country,
                $city,
                $state,
                $postalCode,
                $phone
            ]);
            header('Location: index.php');
        }else{
            echo 'hey';
        }
    }

