<?php require 'connection.php'; 
    $sql = "SELECT * FROM cars;";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);

    if(isset($_POST['submit'])){
        $location = $_POST['location'];
        $locationBack = $_POST['locationBack'];
        $date = $_POST['date'];
        $dateBack = $_POST['dateBack'];
        $time = $_POST['time'];
        $timeBack = $_POST['timeBack'];
    }
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
                <a href="cars.php" class="active">Automobili</a>
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
        <div class="container">
            <div class="row-wrapper">
                <div class="row cols-xs-space cols-md-space cols-md-space">
                    <div class="shop-default shop-cards shop-tech col-12 masonry-container">
                        <div class="row">
                            <?php foreach($result as $row): ?>
                                <div class="col-md-12 col-lg-6 mb-4 masonry-item">
                                    <div class="block product z-depth-2-top z-depth-2--hover">
                                        <div class="block-image mt-3">
                                            <a href="carInfo.php?id=<?php echo $row['id']; ?>">
                                                <img src="<?php echo $row['image'] ?>" class="img-center hidden-xs-down">
                                            </a>    
                                        </div>
                                        <div class="block-body text-center">
                                            <h3 class="heading heading-3 strong-400 text-capitalize">
                                                <p class="text-dark"><?php echo $row["name"]; ?></p>
                                            </h3>
                                            <h3 class="heading heading-4 strong-400 text-capitalize">
                                                <p class="text-info"><?php echo $row["car_class"]; ?></p>
                                            </h3>
                                            <p class="product-description strong-400">
                                                <span class="small text-default"></span>od <?php echo $row["price"] . " Din"; ?><small>/dan</small>
                                            </p>
                                            <p>Prikazana cena po danu sa uračunatim PDV-om i neograničenom kilometražom.</p>
                                            <hr>
                                            <div class="product-buttons mt-4">
                                                <div class="row">                                               
                                                    <div class="col-md-3 col-sm-6 col-xs-12 mb-2 align">
                                                            <i class="fa fa-car"></i>&nbsp;<span class="list-info"><?php echo $row['number_door'] . " vrata"; ?></span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 mb-2 align">
                                                            <i class="fa fa-gears"></i>&nbsp;<span class="list-info"><?php echo $row['gearbox']; ?></span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 mb-2 align">
                                                            <i class="fa fa-user-o"></i>&nbsp;<span class="list-info"><?php echo $row['number_passenger'] . " putnika" ?></span>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6 col-xs-12 mb-2 align">
                                                            <i><img src="Slike/fuel.png" ></i>&nbsp;<span class="list-info"><?php echo $row['fuel']; ?></span>
                                                    </div>                           
                                                    <div class="col-12 mt-2">
                                                        <hr>
                                                        <form action="booking.php?id=<?php echo $row['id'];?>" method="POST">
                                                            <input type="hidden" name="location" value="<?php echo $location?>">
                                                            <input type="hidden" name="locationBack" value="<?php echo $locationBack?>">
                                                            <input type="hidden" name="date" value="<?php echo $date?>">
                                                            <input type="hidden" name="dateBack" value="<?php echo $dateBack?>">
                                                            <input type="hidden" name="time" value="<?php echo $time?>">
                                                            <input type="hidden" name="timeBack" value="<?php echo $timeBack?>">

                                                            <a href="carInfo.php?id=<?php echo $row['id']; ?>" class="btn btn-styled btn-link mt-2">
                                                                <i class="icon fa fa-info-circle mr-1"></i><span>Detalji </span>
                                                            </a>
                                                            <input type="submit" name="submit" class="btn btn-styled btn-success mt-2" value="Rezerviši">
                                                        </form>                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>            
                                </div>
                            <?php endforeach; ?>
                        </div><!--END ROW-->                 
                    </div>
                </div>
            </div>
        </div>
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