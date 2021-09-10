<?php require 'connection.php';
    $location = $_POST['location'];
    $locationBack = $_POST['locationBack'];
    $date = $_POST['dat'];
    $dateBack = $_POST['datBack'];
    $time = $_POST['time'];
    $timeBack = $_POST['timeBack'];
    $hidden_id = $_POST['hidden_id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    $i = 0;
    $service1 = array();
    $price = array();
    $Totalprice = 0;
    if(isset($_POST["choice"])){
        $service = $_POST["choice"];
        $c = count($service);

        while($i < $c){
            if($service[$i] == 1){
                $Totalprice += 706;
                $price[] = 706;
                $service1[] = "Full kasko";
            }if($service[$i] == 2){
                $Totalprice += 1176;
                $price[] = 1176;
                $service1[] = "Premium Osiguranje - PCDW";
            }if($service[$i] == 3){
                $Totalprice += 706;
                $price[] = 706;
                $service1[] = "GPS uređaj";
            }if($service[$i] == 4){
                $Totalprice += 588;
                $price[] = 588;
                $service1[] = "Mobilni Wi-Fi";
            }if($service[$i] == 5){
                $Totalprice += 588;
                $price[] = 588;
                $service1[] = "Dečije sedište";
            }if($service[$i] == 6){
                $Totalprice += 470; 
                $price[] = 470;
                $service1[] = "Dečiji buster";
            }if($service[$i] == 7){
                $Totalprice += 4704;
                $price[] = 4704;
                $service1[] = "Dozvola za izlazak iz zemlje";
            }if($service[$i] == 8){
                $Totalprice += 2352;
                $price[] = 2352;
                $service1[] ="Zeleni karton";
            }
            $i++;
        }
    }
    $i = 0;
    global $c; 
    global $TotalPrice;
    $servic = implode("," , $service1);

    $sql = "SELECT * FROM `cars` WHERE id='$hidden_id'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
    foreach ($result as $car) {}

    function datetime($dt1,$dt2){
        $date1 = date_create($dt1);
        $date2 = date_create($dt2);
        $days = date_diff($date1, $date2);
        return $days->format("%a");
    }
    $dodatno1 = 0;
    $dodatno2 = 0;

    if($location  == "Na teritoriji Beograda + 2400 Din"){
        $dodatno1 = 2400;
    }
    if($locationBack  == "Na teritoriji Beograda + 2400 Din"){
        $dodatno2 = 2400;
    }

    $numberDays = datetime($date,$dateBack);
    $first_total = ($car['price'] * $numberDays);
    $total = ($first_total + $dodatno1 + $dodatno2 + $Totalprice);
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
<body>
    <header>
        <nav>
            <div class="topnav" id="nav">
                <a href="main.php" class="logo">Carvoltserbia</a>
                <a href="main.php">Početna</a>
                <a href="cars.php">Automobili</a>
                <a href="transfer.php">Transferi</a>
                <a href="transport.html">Kombi prevoz</a>
                <a href="conditions.html">Uslovi najma</a>
                <a href="about.html">O nama</a>
                <a href="contact.html">Kontakt</a>
                <a  class="icon" onclick="myFunction()">
                  <i class="fa fa-bars" style="color:white"></i>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <section class="for-fixed-menu slice has-bg-cover bg-size-cover">
            <div class="container">
                <div class="section-title section-title--style-1 text-center mb-4">
                    <h1 class="heading heading-3 strong-500 text-normal">Račun</h1>
                </div>
                <form action="end_booking.php" method="POST">
                    <div class="row justify-content-center">                               
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">                        
                                    <div class="table-responsive">
                                        <table class="table table-striped ">
                                            <thead>
                                                <tr style="background-color: aqua;">
                                                    <td>Kategorija - Vozila</td>
                                                    <td class="text-center">Cena po danu</td>
                                                    <td class="text-center">Broj dana</td>
                                                    <td class="text-center">Popust</td>
                                                    <td class="text-center">Ukupno</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $car['name'];?></td>
                                                    <td class="text-center"><?php echo $car['price']. " Din";?></td>
                                                    <td class="text-center"><?php echo $numberDays ?></td>
                                                    <td class="text-center">0</td>
                                                    <td class="text-center"><?php echo $first_total ." Din" ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr style="background-color: aqua;">
                                                    <td>Dodatne usluge</td>
                                                    <td>Cena usluge</td>                               
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(isset($service1)):?>
                                                    <?php while($i < $c):?>
                                                        <tr>
                                                            <td><?php echo $service1[$i] ?></td>
                                                            <td><?php echo $price[$i] . " Din"?></td>
                                                        </tr>
                                                        <?php $niz[] = $service1[$i];?>
                                                        <?php $i++?>
                                                    <?php endwhile ?>
                                                <?php endif ?>
                                                <?php if($dodatno1 > 0):?>
                                                        <tr>
                                                            <td><?php echo "Lokacija preuzimanja vozila";?></td>
                                                            <td><?php echo $dodatno1 . " Din";?></td>
                                                        </tr>
                                                <?php endif?>
                                                <?php if($dodatno2 > 0):?>
                                                        <tr>
                                                            <td><?php echo "Lokacija vracanja vozila";?></td>
                                                            <td><?php echo $dodatno2 . " Din";?></td>
                                                        </tr>
                                                <?php endif?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Total Tabela -->
                                    <div class="table-responsive text-right">
                                        <table class="table table-striped">
                                            <thead class="success">
                                                <tr>
                                                    <td>Dodatne usluge: <span id="summary-usluge_cena"><?php echo $Totalprice + $dodatno1 + $dodatno2.  " Din"?></span></td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <!-- Total Tabela -->
                                    <div class="table-responsive text-right">
                                        <table class="table table-striped">
                                            <thead class="success">
                                                <tr>
                                                    <td class="heading-5 strong-600" >Ukupno: <span id="summary-ukupno"><?php echo $total . " Din"?></span></td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <p>U cenu je uračunat PDV.</p>
                                    <p class="small">Izdavanje vozila van radnog vremena i praznicima u poslovnicama se doplaćuje.</p>
                                    <ul class="list-unstyled mt-3 small">
                                        <li><i class="fa fa-check"></i> Poslovnica Trnska: 1.764 Din van radnog vremena. Pre 09:00 i posle 17:00, subotom pre 09:00 i posle 15:00 (Nedelja                                          ceo dan.)</li>
                                        <li><i class="fa fa-check"></i> Poslovnica Aerodrom Beograd: 1.764 Din van radnog vremena. Pre 09:00 i posle 21:00 svakim danom.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                <div class="clearfix"></div>                     
                                <input type="hidden" name="location" value="<?php echo $location?>">
                                <input type="hidden" name="locationBack" value="<?php echo $locationBack?>">
                                <input type="hidden" name="date" value="<?php echo $date?>">
                                <input type="hidden" name="dateBack" value="<?php echo $dateBack?>">
                                <input type="hidden" name="time" value="<?php echo $time?>">
                                <input type="hidden" name="timeBack" value="<?php echo $timeBack?>">
                                <input type="hidden" name="firstName" value="<?php echo $firstName?>">
                                <input type="hidden" name="lastName" value="<?php echo $lastName?>">
                                <input type="hidden" name="number" value="<?php echo $phoneNumber?>">
                                <input type="hidden" name="email" value="<?php echo $email?>">
                                <input type="hidden" name="message" value="<?php echo $message?>">
                                <input type="hidden" name="id" value="<?php echo $hidden_id?>">
                                <input type="hidden" name="hidden_total" value="<?php echo $total?>">                              
                                <input type="hidden" name="services" value="<?php echo $servic?>">
                                <input type="submit" class="btn btn-styled btn-success mt-4 pull-right " name="Submit" value="Rezervacija">   
                            </div>
                            <div class="clearfix"></div>
                            <div class="alert alert-icon alert-info strong-400 text-center mt-4">
                                <i class="fa fa-info-circle"></i> Na e-mail adresu će Vam stići detalji porudžbine.
                            </div>
                        </div>                 
                    </div>
                </form>
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
                    <p><a href="main.php" class="text-white fa fa-chevron-right"> POČETNA STRANA</a></p>
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
      window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
</body>
</html>
</body>
</html>
