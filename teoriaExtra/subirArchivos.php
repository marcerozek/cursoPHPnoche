<?php

    $prdImagen = $_FILES['prdImagen'];

    echo '<pre>';
    print_r($prdImagen);
    echo '</pre>';

    $dir = 'productos/';
    $temp = $_FILES['prdImagen']['tmp_name'];
    $ext = pathinfo($_FILES['prdImagen']['name']);
    $prdImagen = time().'.'.$ext['extension']; //timestamp + extension

    move_uploaded_file($temp, $dir.$prdImagen);