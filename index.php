<?php require_once("connexion.php"); ?>
<!DOCTYPE html><html><head><meta charset="utf-8">
<title>Parc Informatique</title>
<link rel="stylesheet" href="assets/css/style.css"></head>
<body>
<header><img src="assets/images/logo.png"><h2>Gestion de Parc Informatique</h2></header>
<div class="container">
<a href="ajouter.php" class="btn">+ Ajouter</a>
<table><tr><th>Nom</th><th>Type</th><th>Marque</th><th>Etat</th><th>Actions</th></tr>
<?php foreach($db->query("SELECT * FROM materiels") as $m){
echo "<tr><td>{$m['nom']}</td><td>{$m['type']}</td><td>{$m['marque']}</td><td>{$m['etat']}</td>
<td><a class='edit' href='modifier.php?id={$m['id']}'>✏</a>
<a class='delete' href='supprimer.php?id={$m['id']}'>🗑</a></td></tr>";} ?>
</table></div></body></html>