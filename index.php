<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Welcome</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-8">
        </div>
        <div class="col-4">
            <h1>Login</h1>
            <?php
            $type = "";
            $message = "";
            if(isset($_REQUEST['status'])) {
                switch ($_REQUEST['status']) {
                    case 0:
                        $type= "alert-success";
                        $message = "Utilizador registado com sucesso!!!!";
                        break;
                    case -1:
                        $type= "alert-danger";
                        $message = "Erro no regito do utilizador!!!!";
                        break;
                    case -2:
                        $type= "alert-danger";
                        $message = "Erro na autenticação!!!!";
                        break;
                    case -3:
                        $type= "alert-warning";
                        $message = "Erro na base de dados!!!!";
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


            <form action="login.php" method="get">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="registo.php"><button type="button" class="btn btn-success">Registo</button></a>
            </form>
        </div>
    </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>