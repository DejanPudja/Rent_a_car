<?php require 'connection.php'; 
     $sql = "SELECT*FROM cars;";
     $query = mysqli_query($conn,$sql);
     $result = mysqli_fetch_all($query,MYSQLI_ASSOC);

     if(isset($_GET['id'])){
        $id = $_GET['id'];
        $cars = array_filter($result,function($el){
            global $id;
            return $el['id'] == $id;
        });
    }
    global $cars;
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
                  <i class="fa fa-bars" style="color:white;"></i>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <section class="for-fixed-menu slice has-bg-cover bg-size-cover mt-4 mb-5 " >
            <div class="container">
                <div class="row-wrapper">
                    <div class="row cols-xs-space cols-md-space cols-md-space">
                        <div class="shop-default shop-cards shop-tech col-11 masonry-container">
                            <div class="row" >
                                <?php foreach($cars as $car): ?>
                                    <div class="col-md-12 col-lg-9 center-block masonry-item">
                                        <div class="block product no-border z-depth-2-top z-depth-2--hover">
                                            <div class="block-image mt-3">
                                                    <img src="<?php echo $car['image']; ?>" class="img-center">
                                            </div>
                                            <div class="block-body text-center">
                                                <h2 class="heading heading-2 strong-500"><?php echo $car['name']; ?></h2>
                                                <h3 class="text-info" style="font-size:18px;"><?php echo $car['car_class']; ?></h3>
                                                <p class="product-description"><span class="small text-default"></span>od <?php echo $car['price']; ?><small> Din./ dan<sup                                                                  class="text-default">*</sup></small></p>
                                                <hr>
                                                <div class="product-buttons mt-4">
                                                    <div class="row">                                               
                                                        <div class="col-md-3 col-sm-6 col-xs-12 mb-2 align">
                                                            <i class="fa fa-car"></i>&nbsp;<span class="list-info"><?php echo $car['number_door']." vrata" ?></span>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 col-xs-12 mb-2 align">
                                                            <i class="fa fa-gears"></i>&nbsp;<span class="list-info"><?php echo $car['gearbox'] ?></span>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 col-xs-12 mb-2 align">
                                                            <i class="fa fa-user-o"></i>&nbsp;<span class="list-info"><?php echo $car['number_passenger'] . " putnika"; ?></span>
                                                        </div>
                                                        <div class="col-md-3 col-sm-6 col-xs-12 mb-2 align">
                                                            <i><img src="Slike/fuel.png" ></i>&nbsp;<span class="list-info"><?php echo $car['fuel'] ?></span>
                                                        </div>                           
                                                        <div class="col-12 mt-2">
                                                            <hr>
                                                            <a href="cars.php" class="btn btn-styled btn-link mt-2">
                                                                <i class="icon fa fa-chevron-left mr-1"></i><span>Drugo vozilo </span>
                                                            </a>
                                                            <a href="booking.php?id=<?php echo $car['id']; ?>" class="btn btn-styled btn-success mt-2">
                                                                <i class="icon fa fa-check mr-1"></i> Rezerviši
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12 col-md-6 text-left">
                                                            <hr>
                                                            <ul class="list-unstyled"  style="padding:0 20px;">
                                                                <h4 class="heading-4 strong-400">Šta je sve uračunato u cenu?</h4>
                                                                <li><i class="fa fa-check mr-2"></i>Cena sa uračunatim PDV-om i taksama;</li>
                                                                <li><i class="fa fa-check mr-2"></i>Neograničena kilometraža;</li>
                                                                <li><i class="fa fa-check mr-2"></i>Osnovno kasko osiguranje sa 10% učešća;</li>
                                                                <li><i class="fa fa-check mr-2"></i>Osiguranje putnika;</li>
                                                                <li><i class="fa fa-check mr-2"></i>Aerodromska/gradska taksa;</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xs-12 col-md-6 text-left">
                                                            <hr>
                                                            <h4 class="heading-4 strong-400" style="padding-left: 20px">Napomena:</h4>
                                                            <div style="padding:0 20px">
                                                                <p>Vozila mogu iznajmiti vozači od 21 do 70 godina starosti.</p>
                                                                <p>Za iznajmiljavnje ovog vozila potrebno je da posedujete kreditnu karticu ili gotovinu za depozit. Prihvatamo MasterCard, Visa i Dina <span class="strong-400">kreditne kartice</span>. U periodu najma biće vam rezervisana sredstva u visini depozita.</p>
                                                            </div>
                                                            <img src="Slike/kartice.png" class="mt-2" title="kartice">
                                                        </div>
                                                        <div class="col-12 mt-2 text-left" style="padding:0 20px;">
                                                            <hr>
                                                                <p class="strong-400">* Nismo u mogućnosti da garantujemo tačan model vozila koje ćete dobiti.</p>
                                                                <p class="strong-400">* Depozit: <?php echo $car['deposit']; ?> din</p>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;  ?>    
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
</body>
</html>
</body>
</html>