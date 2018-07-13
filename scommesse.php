
<DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<link rel="shortcut icon" href="https://cdn.icon-icons.com/icons2/390/PNG/512/soccer-ball_39433.png" />

<title> Scommesse proposte </title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">

<link rel="stylesheet" href="style.css">

</head>

<body>


<header class="header clearfix" >

<a href="Index.html" class="header_logo"><b><div align="right">  <img src="http://agentescommesse.it/wp-content/uploads/2017/08/scommesse-sul-web.png" width="240" height="85" ></div></b></a>

<ul class="header_menu">

<li class="header_menu_item"><a href="Index.html">Proponi</a></li>



</header>

<section class="cover1">

<div class="cover_caption">

<div class="cover_copy1">

<h2>Scommesse proposte</h2>

<?php
$host= "localhost";
$dbusername="root";
$dbpassword="peppe97";
$dbname="proposta";
$conn= new mysqli ($host, $dbusername, $dbpassword, $dbname);
if(mysqli_connect_error()){
die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());}
$nome= $_POST["nome"];
$email= $_POST["email"];
$sport= $_POST["sport"];
$partita= $_POST["manifestazione"];
$esito= $_POST["esito"];
$sql="INSERT INTO scommessa (nome, email, sport, partita, scommessa) values ('$nome','$email','$sport','$partita','$esito')";

mysqli_close();
echo $nome;
echo $email;
echo $sport;
echo $partita;
echo $esito;

?>

<p> Non hai ancora proposto una scommessa?<a href="Index.html">Proponi</a><p>

</section>

<footer class="footer clearfix">

<b><p>Progetto-TecWeb:</b> Giuseppe Esposito</p>

<b><p>Matricola:</b> 01241505</p>

</footer>
</form>

</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</body>

</html>
