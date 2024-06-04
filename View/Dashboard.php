<?php
session_start();
if(!isset($_SESSION['status'])){
    header('Location: ./Login.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!--CDN FONTS-->
    <link rel="preconnect" href="ht
    tps://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Averia+Serif+Libre:ital,wght@1,300&family=Concert+One&family=Exo+2:ital,wght@0,700;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lexend:wght@100..900&family=Paytone+One&family=Tilt+Neon&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>

</head>
<body class="d-flex justify-content-center align-items-center">
<nav id="SideBar">
    <div class="container-fluid mt-3 d-flex justify-content-center align-items-center">
        <img id="Logo" src="../Assets/finalLogo.png" alt="Avatar">
    </div>
    <ul class="container-fluid d-flex flex-column justify-content-center align-items-center gap-3 mt-5">
        <li class="d-flex justify-content-center gap-1  align-items-center p-2">
            <i class="fa-solid fa-bowl-food text-warning"></i>
            <a class="fw-bold text-light" href="./Products.php">Products</a>
        </li>


        <li class="d-flex justify-content-center gap-1  align-items-center p-2">
            <i class="fa-solid fa-list text-warning"></i>
            <a class="fw-bold text-light" href="./Category.php">Category</a>
        </li>

        <li class="d-flex justify-content-center gap-1  align-items-center p-2 bg-danger rounded-3">
            <i class="fa-solid fa-right-from-bracket text-light "></i>
            <form method="post" action="../Model/Logout.php">
                <button name="Logout" type="submit" class="btn btn-danger">Logout</button>
            </form>
        </li>
    </ul>
</nav>
<main style="height: 100vh;" class="container-fluid">
    <header class="container-fluid d-flex justify-content-between align-items-center rounded-2 shadow-sm p-3 mt-2">
        <div>
            <i id="MenuBar" class="fa-solid fa-bars text-light"></i>
        </div>
        <div class="d-flex gap-2 align-items-center justify-content-between">
            <button class="btn">
                <i class="fa-solid fa-bell text-light fs-5"></i>
            </button>
            <div id='ProfileCon'>
                <img id="avatar" src="../Assets/avatar.jpg" alt="Avatar">
            </div>

        </div>
    </header>
    <section style="background-color: #EEF7FF" class="container-fluid  p-4 mt-5 shadow-sm rounded-3">
        <div  id="RevenueContainer"  class="container row gap-3">

        </div>
    </section>
    <div class="container-fluid mt-5">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h4 class="text-muted">Order List</h4>
            <div class="d-flex gap-2">
                <label for="SearchOrder"></label><input class="form-control" type="search" id="SearchOrder" placeholder="Tracking code..">
                <button id="SearchOrder_btn" style="background-color: #142D55" class="btn text-light">Search</button>
            </div>
        </div>
        <div class="container-fluid">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Total</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody id="data_container">

                </tbody>
            </table>
        </div>
    </div>
</main>
<div id="Modal_container"></div>
<script src="../index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
