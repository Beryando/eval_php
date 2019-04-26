<?php require_once './templates/header.html' ?>




<h1>AWESOME!</h1>
<h2>Vous avez réussi à vous connecter !</h2>



<p>Choisissez la partie que vous desirez afficher</p>

<form action="selecta.php" method="POST">
    <div>
        <input type="checkbox" id="caboche" name="scales" checked>
        <label for="scales">La tête</label>
    </div>

    <div>
        <input type="checkbox" id="bedaine" name="horns" >
        <label for="horns">Le torse</label>
    </div>

    <div>
        <input type="checkbox" id="papatte" name="horns" >
        <label for="horns">les pattes</label>
    </div>
    <input type="submit" value="Envoyer">
</form>

<?php require_once './templates/footer.html' ?>