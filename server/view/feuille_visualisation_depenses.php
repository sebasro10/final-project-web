<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feuille visualisation depenses</title>
</head>
<body>
<div class="container">
<h1 class="display-1">Feuille visualisation dépenses</h1>       
<form method="post" action="http://www.monsite.net/redirection_navigation.php">
<p>choix de l'option </p>
<p>
<!-- une balise select ou input ne peut pas être imbriquée directement dans form -->
     <select class="form-select" name="choix du filtre">
          <option value="http://www.monsite.net/accueil.html">par salarié</option>
          <option value="http://www.monsite.net/apropos.html">par service</option>
          <option value="http://www.monsite.net/contact.html">par année</option>
          <option value="http://www.monsite.net/contact.html">par type de dépense</option>
     </select>


</p>
</form>

<table class="table table-dark table-striped" frame="above">
    <thead>
        <tr class="table-dark" text-dark>
            <th class="table-primary">Option choisie</th>
            <th class="table-primary">Dépense</th>
        </tr>
        <br />
    </thead>
</table>
</div>
</body>
</html>