<?php
require 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mert Demirezen Kontrol Sistemi</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">K.O.L.P.A Takip</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="attendance.php" class="nav-link">Takip Çizelgesi</a>
            </li>
            <li class="nav-item">
                <a href="users.php" class="nav-link active">Kullanıcılar</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
            <h1 class="mb-3">Hoşgeldiniz,</h1>
            <p class="lead">
                K.O.L.P.A Takip Sistemi.
            </p>
            <div class="row mx-n2">
                <div class="col-md px-2">
                    <a href="users.php" class="btn btn-lg btn-outline-secondary w-100 mb-3
">Kullanıcılar</a>
                </div>
                <div class="col-md px-2">
                    <a href="attendance.php" class="btn btn-lg btn-outline-secondary w-100
 mb-3" >Takip Çizelgesi</a>
                </div>
	    </div>
	   <p class = "lead">
		==========Created by Mert Demirezen==========                      
		Copyright © 2020 Mert Demirezen. All rights reserved.
		
	 </p>
        </div>
    </div>
</html>