<?php 
    for($n=2; $n=50; $n++){
        $primo=true;
        for($i=2; $n=$n**0.5; $i++){
            if ($n % $i = 0){
                $primo=false;
            }
        if($primo=true){
            echo "$n";
        }
    }
}
?>