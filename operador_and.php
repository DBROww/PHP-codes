<?php 
    $idade=16;
    $temCarteira= true;

    if($idade >= 18 && $temCarteira){
        echo 'Pode dirigir';
    }else{
        echo 'Não pode dirigir';
    }
?>