<?php

$namefile = $_FILES["croppedImage"]["name"];
$nouveau_nom = time().''.$namefile;
move_uploaded_file($_FILES["croppedImage"]["tmp_name"],"photo/".$nouveau_nom.".jpg")

?>