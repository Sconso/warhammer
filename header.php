<?php include_once('init.php'); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Page</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/ui-darkness/jquery-ui.css">
        <link rel="stylesheet" href="index.css" type="text/css">

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="warhammer.js"></script>
    </head>
    
    <body>
        <div id="content">
            <header>
                <div id="accountmenu">
                    <p>
                        Welcome <?=$_SESSION["user"]?> !
                    </p>
                    <?php
                        if ($_SESSION["status"] < 2)
                        {
                            if (isset($_SESSION["error"]) && !empty($_SESSION["error"]))
                            {
                                echo "<span style='color:red;'>".$_SESSION["error"]."</span>";
                                $_SESSION["error"] = null;
                            }
                            ?>
                            <form action="connexion.php" method="post">
                                  <fieldset>
                                    <label for="login">Identifiant: </label>
                                    <input type="text" name="login" value="<?=$_SESSION["login"]?>" id="login" pattern="^[\w]{4,255}$" title="De 4 à 255 caractères, alphanumériques et underscore seulement." required/>
                                    <br />
                                    <label for="passwd">Mot de passe: </label>
                                    <input type="password" name="passwd" value="" id="passwd" pattern="^[\w]{4,255}$" title="Alphanumériques et underscore seulement. De 6 à 255 caractères" required />
                                    <br />
                                    <input type="submit" name="submit" value="Se connecter" />
                                    <input type="submit" name="submit" value="S'inscrire" />
                                    <input type='button' value='chat' id='chat' />
                                </fieldset>
                            </form>
                    <?php
                        }
                        else
                        {
                    ?>
                            <form action="account.php" method="post">
                                <input type="submit" name="submit" value="Se deconnecter" />
                                <input type="submit" name="submit" value="Zone Membre" />
                            </form>
                    <?php
                        }
                    ?>
                </div>
            </header>
            
            <div id='chatbox' title='Chat'>
                <?php include_once('chat.php'); ?>
            </div>