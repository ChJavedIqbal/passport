<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mylog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled text-light">Disabled</a>
                </li>
            </ul>
            <form class="d-flex mx-2" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>

            </form>
            <a href="partials/login.php"><button class="btn btn-outline-success" type="submit">login</button></a>

        </div>
    </div>
</nav>
<?php
if(isset($_SESSION['wrong'])){
     echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Sorry!</strong> Something went wrong.
</div>';
     session_unset();
     session_destroy();
}
if(isset($_SESSION['empty'])){
    echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Please!</strong> Please enter your details
</div>';
    session_unset();
    session_destroy();
}


?>





<div class="container-fluid bg-success">
    <h1 class="d-flex justify-content-center py-4  text-light">SignUp</h1>
    <div class="container d-flex justify-content-center">

        <form action="partials/signup.php" method="POST">
            <div class="mb-3">
                <label for="fname" class="form-label text-light">first name</label>
                <input type="text" class="form-control" id="fname"name="fname" aria-describedby="fname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label text-light">last name</label>
                <input type="text" class="form-control" id="lname"  name="lname"aria-describedby="lname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-light">Email address</label>
                <input type="email" class="form-control" id="email" name="email"aria-describedby="email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-light">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="p-2 d-flex flex-row-reverse "><button type="submit" class="btn btn-primary">SignUp</button>

            </div>

        </form>

        </div>
</div>
<?php include('partials/footer.php')?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>