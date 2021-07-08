<?php 
    require __DIR__ . "/classes/class.php";

    $bastardi_senza_gloria = new Movie("Bastardi senza Gloria","Guerra/Azione",2009,"148 min");
    $bastardi_senza_gloria->language = "en";
    $bastardi_senza_gloria->plot = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eos, ad dolore facilis accusantium voluptatum pariatur ullam earum rem non. Facere officiis ullam ad laboriosam consequuntur voluptatum vitae aut, aliquam iure, consectetur sapiente quibusdam velit libero! ";

    $hooligans = new Movie("Hooligans","Drammatico/Giallo",2005,"109 min");
    $hooligans -> language = "en";

    $arancia_meccanica = new Movie("Arancia Meccanica","Drammatico",1973,"137 min");
    $arancia_meccanica -> language = "en";

    $trainspotting = new Movie("Trainspotting","Drammatico",2013,"142 min");
    $trainspotting -> language = "en";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <title>Oggetti PHP</title>
    </head>
    <body>
        <?php include __DIR__ . "/./partials/header.php" ?>
    
        <main class="container d-flex f-wrap justify-content-between margin-auto">
            <div class="card d-flex justify-content-center">
                <div class="cover position-relative m-auto">
                    <img src="https://e.snmc.io/i/300/s/3b8c8987b9ae8b3642ea3f278349a321/4883433" alt="la_grande-bellezza">
                    <h3 class="align-self-center"> <?= "Titolo : " . $bastardi_senza_gloria -> title; ?> </h3>
                    <h4> <?= "Genere : " . $bastardi_senza_gloria -> genre; ?> </h4>
                    <h5> <?= "Anno di produzione : " . $bastardi_senza_gloria -> year; ?> </h5>
                    <h5> <?= "Durata : " . $bastardi_senza_gloria -> runtime; ?> </h5>
                    <h6> <?= "Lingua : " . $bastardi_senza_gloria -> getLanguage() ; ?>  </h6>
                </div>
            </div>
            <div class="card">
                <div class="cover position-relative">
                    <img src="https://live.staticflickr.com/180/380750037_629e7468c9_b.jpg" alt="hooligans">
                    <h3> <?= "Titolo : " . $hooligans -> title; ?> </h3>
                    <h4> <?= "Genere : " . $hooligans -> genre; ?> </h4>
                    <h5> <?= "Anno di produzione : " . $hooligans -> year; ?> </h5>
                    <h5> <?= "Durata : " . $hooligans -> runtime; ?> </h5>
                    <h6> <?= "Lingua : " . $hooligans -> getLanguage() ; ?>  </h6>
                </div>
            </div>
            <div class="card">
                <div class="cover position-relative">
                    <img src="https://pad.mymovies.it/filmclub/2002/08/201/locandina.jpg" alt="arancia_meccanica">
                    <h3> <?= "Titolo : " . $arancia_meccanica -> title; ?> </h3>
                    <h4> <?= "Genere : " . $arancia_meccanica -> genre; ?> </h4>
                    <h5> <?= "Anno di produzione : " . $arancia_meccanica -> year; ?> </h5>
                    <h5> <?= "Durata : " . $arancia_meccanica -> runtime; ?> </h5>
                    <h6> <?= "Lingua : " . $arancia_meccanica -> getLanguage() ; ?>  </h6>
                </div>
            </div>
            <div class="card">
                <div class="cover position-relative">
                    <img src="https://2.bp.blogspot.com/-0jEkQGec3BA/UWRbbc7mcoI/AAAAAAAAITk/pU9kcLJiNr4/s1600/url.jpg" alt="trainspotting">
                    <h3> <?= "Titolo : " . $trainspotting -> title; ?> </h3>
                    <h4> <?= "Genere : " . $trainspotting -> genre; ?> </h4>
                    <h5> <?= "Anno di produzione : " . $trainspotting -> year; ?> </h5>
                    <h5> <?= "Durata : " . $trainspotting -> runtime; ?> </h5>
                    <h6> <?= "Lingua : " . $trainspotting -> getLanguage() ; ?>  </h6>
                </div>
            </div>
        </main>
        
        <?php include __DIR__ . "/./partials/footer.php" ?>
    </body>
</html>