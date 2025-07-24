<?php

$fruitSoort = array('Appels', 'Peren', 'Kersen');
for ($i = 0; $i < count($fruitSoort); $i++){ 
    echo $fruitSoort[$i].'<br />';
}
foreach ($fruitSoort AS $fruit) {
    if ($fruit == 'Appels'){
        echo 'Dit is een appel<br />';

    }else{
        echo $fruit. ' zijn geen appels <br />';
    }
}