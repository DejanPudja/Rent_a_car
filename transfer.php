<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $text = $_POST['text'];
    
        $to = "";
        $subject = "Ovo je naslov";
        $message = $text;
        $headers = "From: ".$email;
    
    if(mail($to, $subject, $message, $headers)){
        echo 'Uspesno' ;
    }else{
        echo "Greska";
    }
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
                <a href="index.php" class="logo">Carvoltserbia</a>
                <a href="index.php">Početna</a>
                <a href="cars.php">Automobili</a>
                <a href="transfer.php" class="active">Transferi</a>
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
        <section class="slice sct-color-1 unutra">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mb-5">
                        <div class="block block-post">
                            <div class="mb-3">
                                <h1 class="heading heading-3 strong-500 text-normal">Carvoltserbia / Transferi / Prevoz putnika</h1>
                                <hr>
                                <h2 class="heading heading-4 strong-500 text-normal">Aerodromski i međugradski transferi sa Vaše adrese do željene destinacije</h2>
                            </div>
                            <div class="block-body block-post-body strong-300">
                                <p>U mogućnosti smo da Vam ponudimo kompletnu uslugu prevoza putnika u zemlji i inostranstvu. Sva vozila su klimatizovana, komforna s visokim nivoom opreme. Svi vozači su profesionalci, s znanjem barem jednog stranog jezika. Engleski jezik se podrazumeva.</p>
                                <p>Carvoltserbia Transfer je firma s dugogodišnjim iskustvom. Naš tim čine profesionalni vozači. Uz naše vozače osećaćete se sigurno, a oni će učiniti sve da vaš put do željene destinacije bude siguran, udoban i profesionalno realizovan. Ponašamo se kulturno i poslovno, poštujemo kodeks oblačenja, govorimo engleski i ruski jezik.</p>
                                <p>Uz nas možete poslovne obaveze završiti bez stresa. Ne mislite o parkiranju i vremenu. Naši vozači su tu da o svemu vode računa.</p>
                                <p class="mb-4">Uz nas možete poslovne obaveze završiti bez stresa.ne mislite o parkiranju i vremenu.naši vozači su tu da o svemu vode računa.</p>
                                <h2 class="heading heading-3 strong-500 text-normal">Prevoz putnika na teritoriji Srbije</h2>
                                <br>
                                <table class="table table-striped mb-5">
                                    <thead>
                                        <tr align="center" style="background-color: rgb(1, 165, 194);">
                                            <td>Start</td>
                                            <td>Cilj</td>
                                            <td>Cena</td>
                                        </tr>
                                    </thead>
                                    <tbody align="center">
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Prigradska naselja</td>
                                            <td>1.999 - 2.587 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Aranđelovac</td>
                                            <td>7.055 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Bor</td>
                                            <td>20.578 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Kruševac</td>
                                            <td>16.463 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Kraljevo</td>
                                            <td>16.463 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Leskovac</td>
                                            <td>23.518 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Jagodina</td>
                                            <td>12.935 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Kopaonik</td>
                                            <td>25.870 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Mokra Gora</td>
                                            <td>19.991 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Novi Sad</td>
                                            <td>8.231 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Novi Pazar</td>
                                            <td>23.518 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Niš</td>
                                            <td>19.991 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Ruma</td>
                                            <td>5.880 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Pula</td>
                                            <td>52.916 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Paraćin</td>
                                            <td>14.111 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Subotica</td>
                                            <td>15.287 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Smederevo</td>
                                            <td>5.880 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Užice</td>
                                            <td>15.287 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Vršac</td>
                                            <td>7.055 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Vranje</td>
                                            <td>29.398 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Valjevo</td>
                                            <td>8.231 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Čačak</td>
                                            <td>11.759 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Zajčar</td>
                                            <td>21.166 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Zrenjanin</td>
                                            <td>7.055 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Zlatibor</td>
                                            <td>18.815 Din</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h2 class="heading heading-3 strong-500 text-normal">
                                    Prevoz putnika van teritorije Srbije
                                </h2>
                                <br>
                                <table class="table table-striped mb-5" >
                                    <thead>
                                        <tr align="center" style="background-color: rgb(1, 165, 194);">
                                            <td>Start</td>
                                            <td>Cilj</td>
                                            <td>Cena</td>
                                        </tr>
                                    </thead>
                                    <tbody align="center">
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Atina</td>
                                            <td>79.962 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Banja Luka</td>
                                            <td>28.222 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Beč</td>
                                            <td>52.916 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Bled</td>
                                            <td>50.564 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Bukurešt</td>
                                            <td>51.740 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Budva</td>
                                            <td>45.861 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Budimpešta</td>
                                            <td>30.574 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Maribor</td>
                                            <td>43.509 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Ljubljana</td>
                                            <td>44.685 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Osijek</td>
                                            <td>20.578 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Pula</td>
                                            <td>52.916 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Podgorica</td>
                                            <td>38.805 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Rijeka</td>
                                            <td>48.212 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Sarajevo</td>
                                            <td>27.046 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Solun</td>
                                            <td>49.388 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Sofija</td>
                                            <td>32.926 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Skoplje</td>
                                            <td>35.277 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Temišvar</td>
                                            <td>16.463 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Tuzla</td>
                                            <td>17.639 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Beograd</td>
                                            <td>Zagreb</td>
                                            <td>31.750 Din</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h2 class="heading heading-3 strong-500 text-normal">
                                    Prevoz putnika <i class="fa fa-plane"></i> Aerodrom Beograd
                                </h2>
                                <br>
                                <table class="table table-striped">
                                    <thead>
                                        <tr align="center" style="background-color: rgb(1, 165, 194);">
                                            <td>Start</td>
                                            <td>Cilj</td>
                                            <td>Cena</td>
                                        </tr>
                                    </thead>
                                    <tbody align="center">
                                        <tr>
                                            <td>Aerodrom <i class="fa fa-plane"></i> BEG</td>
                                            <td>Beograd</td>
                                            <td>1.764 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Aerodrom <i class="fa fa-plane"></i> BEG</td>
                                            <td>Loznica</td>
                                            <td>11.171 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Aerodrom <i class="fa fa-plane"></i> BEG</td>
                                            <td>Niš</td>
                                            <td>21.166 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Aerodrom <i class="fa fa-plane"></i> BEG</td>
                                            <td>Novi Pazar</td>
                                            <td>23.518 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Aerodrom <i class="fa fa-plane"></i> BEG</td>
                                            <td>Nov Sad</td>
                                            <td>6.468 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Aerodrom <i class="fa fa-plane"></i> BEG</td>
                                            <td>Podgorica</td>
                                            <td>38.805 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Aerodrom <i class="fa fa-plane"></i> BEG</td>
                                            <td>Pančevo</td>
                                            <td>3.528 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Aerodrom <i class="fa fa-plane"></i> BEG</td>
                                            <td>Smederevo</td>
                                            <td>5.409 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Aerodrom <i class="fa fa-plane"></i> BEG</td>
                                            <td>Subotica</td>
                                            <td>15.287 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Aerodrom <i class="fa fa-plane"></i> BEG</td>
                                            <td>Užice</td>
                                            <td>12.935 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Aerodrom <i class="fa fa-plane"></i> BEG</td>
                                            <td>Čačak</td>
                                            <td>10.583 Din</td>
                                        </tr>
                                        <tr>
                                            <td>Aerodrom <i class="fa fa-plane"></i> BEG</td>
                                            <td>Šabac</td>
                                            <td>5.880 Din</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="alert alert-warning mb-5" role="alert">
                                    <strong class="heading-4 mb-5">Napomene:</strong>
                                    <br>
                                    <ul>
                                        <li>fiksne cene su date okvirno, radi lakše orjentacije za tačnu cenu pošaljite nam upit sa detaljima;</li>
                                        <li>doplata za vozilo više klase kao i za kombi vozilo 8+1 ide uz dogovor;</li>
                                        <li>putarine su uračunate u cenu;</li>
                                        <li>povratak i dodatno čekanje se naplaćuje;</li>
                                        <li>u cenu nisu uračunati troškovi eventualnog noćenja vozača;</li>
                                        <li>cene su izražene u EUR plaćanje se vrši u dinarskoj protivvrednosti po zvaničnom prodajnom kursu nbs na dan fakturisanja;</li>
                                        <li>plaćanje je moguće izvršiti preko računa, u gotovini ili kreditnim karticama (Visa, Dina, Master Card);</li>
                                        <li>cene za usluge koje nisu navedene u cenovniku formiraju se po dogovoru;</li>
                                        <li>sve vreme prevoza putnici su osigurani.</li>
                                    </ul>
                                    Cene su iskazane sa PDV-om.
                                </div>
                                <p style="font-size:24px;">
                                    Zahtev za ponudu transfera
                                </p>
                                <div class="for-fixed-menu slice has-bg-cover bg-size-cover mt-4" >
                                    <div class="container">
                                        <div class="section-title section-title--style-1 text-center mb-5">                                          
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-13">
                                                <form id="form_contact2" method="post" action="transfer.php" class="form-default">         
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label for="">Ime i prezime</label>
                                                                <input type="text" name="name" class="form-control form-control-lg" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group has-feedback">
                                                                <label for="">Telefon</label>
                                                                <input type="tel" name="phone" class="form-control form-control-lg" require>
                                                            </div>
                                                        </div>                   
                                                        <div class="col-md-12">
                                                            <div class="form-group has-feedback">
                                                                <label for="">E-mail</label>
                                                                <input type="email" name="email" class="form-control form-control-lg" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group has-feedback">
                                                                <label for="">Poruka</label>
                                                                <textarea name="text" class="form-control no-resize" rows="5" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix">
                                                        <button type="submit" name="submit" class="btn btn-styled btn-success mt-4 pull-right"><i class="fa fa-send"></i>&nbsp;&nbsp;Pošalji poruku</button>
                                                    </div>                           
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <hr>
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
</body>
</html>
