<?php

$uploaddir="../data/content/";
if (move_uploaded_file($_FILES['userarticle']['tmp_name'], $uploaddir.$_FILES['userarticle']['name'])){
header("Location: http://localhost/src/");
}


