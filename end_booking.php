<?php require 'connection.php';
  $location = $_POST['location'];
  $locationBack = $_POST['locationBack'];
  $date = $_POST['date'];
  $dateBack = $_POST['dateBack'];
  $time = $_POST['time'];
  $timeBack = $_POST['timeBack'];
  $hidden_id = $_POST['id'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $phoneNumber = $_POST['number'];
  $message = $_POST['message'];
  $hidden_total = $_POST['hidden_total'];
  $service = $_POST['services'];

     $insert = "INSERT INTO booking VALUES(NULL, '$firstName','$lastName','$email','$phoneNumber','$message','$location','$locationBack','$date','$dateBack','$time','$timeBack',$hidden_id,'$service',$hidden_total)";
    $queryInsert = mysqli_query($conn,$insert);
    header("refresh: 5; url = index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carvoltserbia</title>
    <link rel="icon" href="Slike/icon.png">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
    <header>
        <nav>
            <div class="topnav" id="nav">
                <a href="index.php" class="logo">Logo</a>
                <a href="index.php" >Početna</a>
                <a href="cars.php">Automobili</a>
                <a href="transfer.php">Transferi</a>
                <a href="transport.html">Kombi prevoz</a>
                <a href="conditions.html">Uslovi najma</a>
                <a href="about.html">O nama</a>
                <a href="contact.html">Kontakt</a>
                <a  class="icon" onclick="myFunction()">
                  <i class="fa fa-bars" style="color:white;"></i>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <section class="slice sct-color-1  no-padding-bottom mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-13 mb-5 mt-5">
                        <div class="block block-post">
                            <div class="mb-4 text-center" >
                                <h1 class="heading heading-1 strong-600 success text-normal zeleno  mb-4">Uspešna rezervacija!</h1>
                                <p class="heading heading-4 strong-400 text-normal mb-4">Vaš upit je uspešno poslat.
                                    <br><br>Očekujte odgovor ili poziv u narednom periodu.</p>
                                <div class="block-icon circle">
                                    <i class="fa fa-check fa-5x" style="color:rgb(0, 112, 50);"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer style="background-color: #252525;" class="text-white text-center text-lg-start">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img src="Slike/logo.png" style="width:300px; height:200px;">
                    <p class="describe">Carvoltserbia ja najveća domaća kompanija u oblasti iznajmljivanja automobila za fizička i pravna lica, koja uspešno posluje već 10 godina.</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5>Rent a Car</h5>
                    <p><a href="index.php" class="text-white fa fa-chevron-right"> POČETNA STRANA</a></p>
                    <p><a href="cars.php" class="text-white fa fa-chevron-right"> AUTOMOBILI</a></p>
                    <p><a href="transfer.php" class="text-white fa fa-chevron-right"> TRANSFERI</a></p>
                    <p><a href="transport.html" class="text-white fa fa-chevron-right"> KOMBI PREVOZ</a></p>
                    <p><a href="conditions.html" class="text-white fa fa-chevron-right"> USLOVI NAJMA</a></p>
                    <p><a href="about.html" class="text-white fa fa-chevron-right"> O NAMA</a></p>
                    <p><a href="contact.html" class="text-white fa fa-chevron-right"> KONTAKT</a></p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-4 mx-auto mt-3 ">
                    <h5>Lokacije Kontakt</h5>
                    <p><a href="#" class="text-white fa fa-chevron-right">Loznička 8, Vračar, 11000 Beograd, Srbija</a></p>
                    <p><a href="#" class="text-white fa fa-chevron-right">carvoltserbia@gmail.com</a></p>
                    <p><a href="#" class="text-white fa fa-chevron-right">Beograd / Surčin 11180, Srbija</a></p>
                    <p><a href="#" class="text-white fa fa-chevron-right">065 8543 982</a></p>
                </div>
            </div>
        </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2021/Carvoltserbia/Beograd,Srbija.</div>
    </footer>
    <script src="JS/script.js"></script>
    <script type="text/javascript">
      function preventBack(){window.history.forward();}
        setTimeout("preventBack()", 0);
        window.onunload=function(){null};
    </script>
</body>
</html>
