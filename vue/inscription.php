<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Inscription</title>
    <!-- Police -->
    <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="vue/style.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>-->
    <link rel="stylesheet" type="text/css" href="vue/semantic.css">
    <link rel="stylesheet" type="text/css" href="vue/style.css">
    <script type="text/javascript" src="vue/script/jquery.js"></script>
    <script type="text/javascript" src="vue/script/semantic.js"></script>
    <script type="text/javascript" src="vue/script/inscription.js"></script>
</head>
<body>
    <div class="connexion">
        <div class="ui attached teal message">
            <div class="header">
                <h2>Inscription</h2>
            </div>
            <p>Entrer les informations demandées.</p>
        </div>
        <form method="post" class="ui form error attached fluid segment">
            <?php
            if (!empty($erreur)) {
                echo '  <div class="ui error message">
                <div class="header">
                    Certains champs ont été remplis incorrectement.
                </div>
                <ul class="list">';
                    foreach ($erreur as $err) {
                        if (!empty($err) && $err != '') {
                            echo "<li>" . $err . "</li>";
                        }
                    }
                    echo "</ul>
                </div>";
            }
                ?>
                <div class="field">
                    <label for="pseudo">Pseudo</label>
                    <div class="ui icon input">
                        <input type="text" name="pseudo" id="pseudo" required="required" value="<?php echo $pseudo; ?>" placeholder="Pseudo" onkeyup="pseudoDejaUtilise()">
                        <i id="validPseudo" class=""></i>
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Prénom</label>
                        <input type="text" name="prenom" required="required" placeholder='Prénom' />
                    </div>
                    <div class="field">
                        <label>Nom</label>
                        <input type="text" name="nom" required="required" placeholder='Nom' />
                    </div>
                </div>
                <div class="two fields">
                    <div class="field">
                        <label>Mot de passe</label>
                        <input type="password" name="pass" required="required" placeholder='Mot de passe' />
                    </div>
                    <div class="field">
                        <label>Retapez votre mot de passe</label>
                        <input type="password" name="pass2" required="required" placeholder='Mot de passe' />
                    </div>
                </div>
                <button class="ui teal button" type="submit"><i class="add user icon"></i>S'inscrire</button>
            </form>   
        </body> 
        </html>


