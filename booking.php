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
    
    $today = date("Y-m-d");

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
<script>
    function Validate(){
        var email = document.forms["registration"]["email"].value;
        var date = document.forms["registration"]["dat"].value;
        var dateBack = document.forms["registration"]["datBack"].value;
        
        var date1 = new Date(date);
        var date2 = new Date(dateBack);
        
        var fName = document.forms["registration"]["firstName"].value;
        var lName = document.forms["registration"]["lastName"].value;

        if(date1.getTime() > date2.getTime()){
            alert("Datum i vreme vraćanja mora biti nakon preuzimanja.")
            return false;
        }
        if(date1.getTime() == date2.getTime()){
            alert("Datum izmedju preuzimanja i vracanja vozila mora da bude 1 dan.")
            return false;
        }
        if(email == ""){
            alert("Molimo Vas da unesete email!");
            return false;
        }else{
            var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
            var x=re.test(email);
            if(x){
            }else{
                alert("Email nije ispravan, upisite pravilan email!");
                return false;
            } 
        }
    }
</script>
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
        <section class="for-fixed-menu slice has-bg-cover bg-size-cover">
            <div class="container">
                <div class="section-title section-title--style-1 text-center mb-2">
                    <h1 class="heading heading-3 strong-500 text-normal mb-5 mt-3">Rezervacija</h1>
                </div>
                <form action="finish_booking.php" method="POST" name="registration" onsubmit="return Validate()"  autocomplete ="off">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h3 class="heading heading-5  text-normal mb-4">
                                <span>1.</span>&nbsp;Lokacija
                            </h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="strong-400"><span>*</span>Lokacija preuzimanja</label>                                
                                        <select class="form-control form-control-lg"  name="location" required >
                                            <option value="" disabled selected hidden>Izaberite lokaciju...</option>
                                            <option <?php if(isset($location) && $location == "Loznička 8 Beograd, Vračar"){echo "selected";} ?>>Loznička 8 Beograd, Vračar</option>
                                            <option <?php if(isset($location) && $location == "Beograd-Aerodrom Nikola Tesla"){echo "selected";} ?>>Beograd-Aerodrom Nikola Tesla</option>
                                            <option <?php if(isset($location) && $location == "Na teritoriji Beograda + 2400 Din"){echo "selected";} ?>>Na teritoriji Beograda + 2400 Din</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="strong-400"><span>*</span>Lokacija vracanja</label>
                                        <select class="form-control form-control-lg" name="locationBack" required>
                                            <option value="" disabled selected hidden>Izaberite lokaciju...</option>
                                            <option <?php if(isset($locationBack) && $locationBack == "Loznička 8 Beograd, Vračar"){echo "selected";} ?>>Loznička 8 Beograd, Vračar</option>
                                            <option <?php if(isset($locationBack) && $locationBack == "Beograd-Aerodrom Nikola Tesla"){echo "selected";} ?>>Beograd-Aerodrom Nikola Tesla</option>
                                            <option <?php if(isset($locationBack) && $locationBack == "Na teritoriji Beograda + 2400 Din"){echo "selected";} ?>>Na teritoriji Beograda + 2400 Din</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="" class="strong-400"><span>*</span>Datum preuzimanja vozila</label>
                                        <input type="date" name="dat" value="<?php echo $date ?>"  min="<?php echo date("Y-m-d") ?>" class="form-control form-control-lg" required placeholder="Izaberite datum...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="" class="strong-400"><span>*</span>Datum vracanja vozila</label>
                                        <input type="date" name="datBack" value="<?php echo $dateBack?>"  min="<?php echo date('Y-m-d', strtotime(date("Y-m-d") . ' + 1 days')); ?>" class="form-control form-control-lg" required placeholder="Izaberite datum...">
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="" class="strong-400"><span>*</span>Vreme preuzimanja</label>
                                        <input type="time" name="time" value="<?php echo $time?>" min="<?php echo $min ?>" class="form-control form-control-lg" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="" class="strong-400"><span>*</span>Vreme vracanja vozila</label>
                                        <input type="time" name="timeBack" value="<?php echo $timeBack?>" class="form-control form-control-lg" required>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="" class="strong-400"><span>*</span>Starost vozača</label>
                                        <select name="age" class="form-control">
                                            <option selected value="21 do 70 godina">21 do 70 godina</option>
                                        </select>
                                    </div>
                                </div><?php foreach($cars as $car): ?>
                                    <input type="hidden" name="hidden_id" value="<?php echo $car['id']; ?>">
                            </div><?php endforeach; ?>                                            
                            <hr>
                            <h3 class="heading heading-5  text-normal mb-4">
                                <span>2.</span>&nbsp;Izbor vozila
                            </h3>
                                <div class="shop-default shop-cards shop-tech shop">
                                    <div class="col-12" >
                                        <div class="block product no-border z-depth-2-top z-depth-2--hover" >
                                            <div class="block-image ">
                                                <a href="carInfo.php?id=<?php echo $car['id']; ?>" target="_blank">
                                                    <img src="<?php echo $car['image']; ?>" class="img-center" style="width:100%;">
                                                </a>
                                            </div>
                                            <div class="block-body text-center">
                                                <h3 class="heading heading-3 strong-500 text-capitalize"><?php echo $car['name']; ?></h3>
                                                <p class="product-description">od<?php echo $car['price']; ?> Din/dan</p>
                                                <hr>
                                                <a href="cars.php">
                                                    <i class="icon fa fa-chevron-left mr-1"></i> <span>Izaberite drugo vozilo </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="clearfix"></div>
                            <hr>
                            <div class="clearfix"></div>
                            <h3 class="heading heading-5 text-normal mb-4"><span>3.</span>&nbsp;Dodatne usluge</h3>
                            <div class="col-md-12">
                                <div class="form-group has-feedback mt-2">
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" name="choice[]" value="1" id="chk-usluga-1">
                                        <label for="chk-usluga-1">Full Kasko - SCWD</label>
                                        <p class="ml-4 small-prike">Full Kasko osiguranje 706 Din. / dan</p>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="choice[]" value="2" id="chk-usluga-2">
                                            <label for="chk-usluga-2">Premium Osiguranje - PCDW</label>
                                            <p class="ml-4 small-prike">Premium osiguranje bez učešća u šteti 1.176 Din. </p>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="choice[]" value="3" id="chk-usluga-3">
                                            <label for="chk-usluga-3">GPS uređaj</label>
                                            <p class="ml-4 small-prike">Uređaj sa detaljnom mapom Srbije i EU. 706 Din. / dan</p>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="choice[]" value="4" id="chk-usluga-4">
                                            <label for="chk-usluga-4">Mobilni Wi-Fi</label>
                                            <p class="ml-4 small-prike">10GB Internet saobraćaja na teritoriji Srbije 588 Din. / dan</p>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="choice[]" value="5" id="chk-usluga-5">
                                            <label for="chk-usluga-5">Dečije sedište</label>
                                            <p class="ml-4 small-prike">Sedišta sa Isofix kačenjem. 588 Din. / dan</p>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="choice[]" value="6" id="chk-usluga-6">
                                            <label for="chk-usluga-6">Dečiji buster</label>
                                            <p class="ml-4 small-prike">Za decu 7+ 470 Din. / dan</p>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="choice[]" value="7" id="chk-usluga-7">
                                            <label for="chk-usluga-7">Dozvola za izlazak iz zemlje</label>
                                            <p class="ml-4 small-prike">Ukoliko putujete van granica republike Srbije. 4.704 Din. </p>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="choice[]" value="8" id="chk-usluga-8">
                                            <label for="chk-usluga-8">Zeleni karton</label>
                                            <p class="ml-4 small-prike">Potreban za zemlje: Bosna i Hercegovina i Severna Makedonija 2.352 Din. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <h3 class="heading heading-5 text-normal mb-4 mt-4">
                                    <span>4.</span>&nbsp;Podaci vozača
                                    <div class="dropdown-menu dropdown-menu-xl py-0">
                                        <div class="list-group">
                                            <span href="#" class="list-group-item list-group-item-action d-flex align-items-center" disabled="disabled"></span>
                                        </div>
                                    </div>
                                </h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <label for="" class="strong-400"><span>*</span> Ime (iz vozačke dozvole)</label>
                                            <input type="text" name="firstName" class="form-control form-control-lg" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <label for="" class="strong-400"><span>*</span> Prezime (iz vozačke dozvole)</label>
                                            <input type="text" name="lastName" class="form-control form-control-lg" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <label for="" class="strong-400"><span>*</span>E-mail</label>
                                            <input type="email" name="email" class="form-control form-control-lg" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback">
                                            <label for="" class="strong-400"><span>*</span> Telefon</label>
                                            <input type="number" name="phoneNumber" class="form-control form-control-lg" required>
                                        </div>
                                    </div>                   
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <label for="" class="strong-400">Poruka</label>
                                            <textarea name="message" class="form-control no-resize" rows="5"></textarea>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <p>Polja označena <span>*</span> su obavezna.</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="checkbox checkbox-primary pull-right">
                                    <input type="checkbox" name="prihvatam_uslove" id="chk-prihvatam-uslove" required="">
                                    <label for="chk-prihvatam-uslove">
                                        Prihvatam <a href="#" class="strong-400" data-toggle="modal" data-target="#uslovikoriscenja">uslove najma </a> vozila.
                                    </label>
                                </div>
                                <div class="clearfix"></div>
                                <input type="submit" name="btn" value="Rezervacija" class="btn btn-styled btn-success mt-4 mb-4 pull-right" >
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
</body>
</html>
</body>
</html>
