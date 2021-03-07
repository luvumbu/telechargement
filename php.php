<?php
header("Access-Control-Allow-Origin: *");
echo "connection ok"; 

 
 
$username =$_POST["login"] ;
 
$url = $_POST["src_name"]; 





$monfichier = fopen('source.php', 'a+');
 
 
fputs($monfichier, ',"'.$url.'"'); // On écrit le nouveau nombre de pages vues
 
fclose($monfichier);
 
 
$url="https://cdn.pixabay.com/photo/2021/02/26/19/31/snowdrop-6052942__340.jpg";

 
 
// Le chemin de sauvegarde
$path = 'images/';
// On coupe le chemin
$exp = explode('/',$url);
// On recup l'adresse du serveur
$serv = $exp[0].'//'.$exp[2];
 
// On recup le nom du fichier
$name = "ok.jpg";
// On genere le contexte (pour contourner les protections anti-leech)
$xcontext = stream_context_create(array("http"=>array("header"=>"Referer: ".$serv."\r\n")));
// On tente de recuperer l'image
$content = file_get_contents($url,false,$xcontext);
if ($content === false) {
	echo "\nImpossible de récuperer le fichier.";
	exit(1);
}
// Sinon, si c'est bon, on sauvegarde le fichier
$test = file_put_contents($path.'/'.$name,$content);
if ($test === false) {
	echo "\nImpossible de sauvegarder le fichier.";
	exit(1);
}
// Tout est OK
echo "\nSauvegarde effectuée avec succés."; 


?>