<?php

    session_start();
?>

<?php require_once './templates/header.html' ?>

                    <form action="cible.php" method="POST">
                        <div>
                            <label for="pseudo">Login</label>
                            <input type="text" name="pseudo">
                        </div>
                        <div>
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password">
                        </div>
                        <div>
                            <label for="password">Confirmez votre mot de passe</label>
                            <input type="password" name="password_confirm" class="form-control" required>
                        </div>
                        <input type="submit" value="Envoyer">
                    </form>

                    
                    
<?php require_once './templates/footer.html' ?>
