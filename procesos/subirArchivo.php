<?php
    $dir_subida='..\uploads';
    //$_FILES['imagen']['imagen'];
    print_r($_FILES);
    $tmp_name=$_FILES["imagen"]["tmp_name"];
    $name = basename($_FILES["imagen"]["name"]);
    move_uploaded_file($tmp_name, $dir_subida.'/'.$name);
?>