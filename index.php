<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Simplon</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ecole Simplon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>

    <?php
        include "includes/header.php"
    ?>

        <main>

            <div class="rsframe" id="rs" style="display:flex">
                <div class="rs">
                    <i class="fab fa-facebook-square f"></i>
                </div>
                <div class="rs">
                    <i class="fab fa-linkedin l"></i>
                </div>
                <div class="rs">
                    <i class="fab fa-twitter-square t"></i>
                </div>
                <div class="rs">
                    <i class="fab fa-google-plus-square g"></i>
                </div>
           </div>

           <div class="int">

                <div class="module a">
                    <div class="sub pict"><img class="img" src="images/user.png"></div>
                    <div class="sub sou"><p>Vous souhaitez</p></div>
                    <div class="sub mod"><p class="txtbig">Apprendre ?</p></div>
                    <a href="#" class="sub click txtbtn">CLIQUEZ ICI</a>
                </div>
                <div class="module b">
                    <div class="sub pict"><img class="img" src="images/info.png"></div>
                    <div class="sub sou"><p>Vous souhaitez</p></div>
                    <div class="sub mod"><p class="txtbig">Proposer un Projet ?</p></div>
                    <a href="#" class="sub click txtbtn">CLIQUEZ ICI</a>
                </div>
                <div class="module c">
                    <div class="sub pict"><img class="img" src="images/ouvrier.png"></div>
                    <div class="sub sou"><p>Vous souhaitez</p></div>
                   <div class="sub mod"><p class="txtbig">Engager un Stagiaire ?</p></div>
                    <a href="#" class="sub click txtbtn">CLIQUEZ ICI</a>
                </div>
                <div class="module d">
                    <div class="sub pict"><img class="img" src="images/cloud.png"></div>
                    <div class="sub sou"><p>Vous souhaitez</p></div>
                    <div class="sub mod"><p class="txtbig">Nous Aider ?</p></div>
                    <a href="#" class="sub click txtbtn">CLIQUEZ ICI</a>
                </div>

            </div>

            <div class="helpframe" id="help" style="display:flex">
                <i class="fas fa-question help"></i>
            </div>

        </main>

    <?php
        include "includes/footer.php"
    ?>

            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

            <script src="js/menu.js"></script>

    </body>
</html>