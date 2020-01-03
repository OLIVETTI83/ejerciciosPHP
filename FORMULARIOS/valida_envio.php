<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "Se enviaron por POST";
    } else {
        echo "Se enviaron por GET";
    }

?>