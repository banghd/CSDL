<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    session_start();
    if (!isset($_COOKIE['email'])) {
        header("Location: login.php");
        exit();
    }
    $row = "sometddhing";
    ?>
    <nav class="navbar navbar-expand-md bg-dark custom-navbar navbar-dark">
        <img class="navbar-brand " src="https://scontent-hkt1-1.xx.fbcdn.net/v/t1.0-9/84248416_2511972925729333_4913538501833654272_n.jpg?_nc_cat=102&_nc_sid=85a577&_nc_ohc=PapX4_DEZTQAX8pREqk&_nc_ht=scontent-hkt1-1.xx&oh=7eca3f411f34038e403a00b06bda83d2&oe=5EBC69A0" id="logo_custom" width="5%" alt="logo">
        <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="#offer"><b>About</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><b>Create survey</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php"><b>Logout</b></a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="bg-light">
        <div class="container p-3">
            <h2>Survey </h2>
            <div class="row">
                <?php
                $con = mysqli_connect('remotemysql.com','Y8ozx8Lvfd','KTxuOcdYX2','Y8ozx8Lvfd');
                $result = mysqli_query($con,"
                    SELECT * FROM surveys 
                ");
                
                $survey = '<div class="col-md-4 mb-4">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5> <a href="#" class="text-dark">  name   </a></h5>
                        <p class="text-muted card-text">content </p>
                        <p class="">author: owner </p>
                        <p class="card-text"><a href="#">Read more</a></p>
                    </div>
                </div>
                </div>
                
                ';
                while($row = mysqli_fetch_array($result)){
                     $temp = str_ireplace('content',$row['content'],$survey);
                     
                echo str_replace('name',$row['name'],$temp);
                }
                ?>

            </div>
        </div>
    </section>

</body>

</html>