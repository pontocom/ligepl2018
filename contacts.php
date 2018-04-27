<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
    header("Location: index.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='./google-maps/custom.css' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['user_id']; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="app.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div id="map"></div>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h5>Contact form</h5>

            <?php
            $type = "";
            $message = "";
            if(isset($_REQUEST['status'])) {
                switch ($_REQUEST['status']) {
                    case 0:
                        $type= "alert-success";
                        $message = "Email enviado com sucesso!!!!";
                        break;
                    case -1:
                        $type= "alert-danger";
                        $message = "Erro no envio da mensagem!!!!";
                        break;
                    default:
                        break;
                }
                ?>
                <div class="alert <?php echo $type;?>" role="alert">
                    <?php echo $message; ?>
                </div>
                <?php
            }
            ?>
            <form action="email.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name:</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <label for="exampleInputEmail1">Message:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDy_Hq7ogKhu2fg3RoHwXsEGICD6hsu7CQ"></script>
<script src="./google-maps/custom.js"></script>
</body>
</html>
