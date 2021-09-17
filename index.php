<?php require 'connection.php';
    $sql = "SELECT * FROM cars WHERE `price` > 2000 LIMIT 0,3;";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carvoltserbia</title>
    <link rel="icon" href="Slike/car.png">
    <link rel="stylesheet" href="Style/stil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="topnav" id="nav">
                <a href="index.php" class="logo">Carvoltserbia</a>
                <a href="index.php" class="active">Početna</a>
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
    <section class="for-fixed-menu slice has-bg-cover bg-size-cover">
        <div class="slide">
            <div class="container">
                <form action="cars.php" method="POST">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="row color">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="strong-400" >Lokacija preuzimanja</label>                                
                                        <select class="form-control" name="location" placeholder="Izaberite lokaciju..." autocomplete ="off">
                                            <option class="bs-title-option" value="">Izaberite lokaciju...</option>
                                            <option>Loznička 8 Beograd, Vračar</option>
                                            <option>Beograd-Aerodrom Nikola Tesla</option>
                                            <option>Na teritoriji Beograda + 2400 Din</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="strong-400">Lokacija vraćanja</label>
                                        <select class="form-control" name="locationBack" placeholder="Izaberite lokaciju..." autocomplete ="off">
                                            <option class="bs-title-option" value="">Izaberite lokaciju...</option>
                                            <option>Loznička 8 Beograd, Vračar</option>
                                            <option>Beograd-Aerodrom Nikola Tesla</option>
                                            <option>Na teritoriji Beograda + 2400 Din</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Datum preuzimanja vozila</label>
                                    <input type="date" class="form-control" name="date" min="<?php echo date("Y-m-d") ?>" placeholder="Izaberite datum...">
                                </div>
                                <div class="col-lg-6">
                                    <label>Datum vraćanja vozila</label>
                                    <input type="date" class="form-control" name="dateBack" min="<?php echo date('Y-m-d', strtotime(date("Y-m-d") . ' + 1 days')); ?>" placeholder="Izaberite datum...">
                                </div>
                                <div class="col-lg-6">
                                    <label>Vreme preuzimanja</label>
                                    <input type="time" class="form-control" name="time">
                                </div>
                                <div class="col-lg-6">
                                    <label>Vreme vraćanja vozila</label>
                                    <input type="time" class="form-control" name="timeBack" >
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="" class="strong-400">Starost vozača</label>
                                        <select name="age" class="form-control">
                                            <option selected value="21 do 70 godina">21 do 70 godina</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-feedback">
                                        <input type="submit" name="submit" class="form-control form-btn" value="Rezervacija">
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </form>                                                        
            </div>
        </div>
    </section>
    <main>
        <div class="container py-5 text-center">
            <div class="row mt-5 " >
                <?php foreach($result as $row): ?>
                <div class="col-md-4">
                    <a class="link" href="carInfo.php?id=<?php echo $row['id']; ?>">
                    <img src="<?php echo $row['image'] ?>" alt="car_image" class="w-100"></a>
                    <h3 class="py-2"><?php echo $row["name"]; ?></h3>
                    <span class="text-info"><?php echo $row["car_class"]; ?></span>
                    <p class="text-muted"><?php echo "od ". $row["price"] . " Din./dan*"; ?></p>                    
                </div>
                <?php endforeach; ?>
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
</body>
</html>

