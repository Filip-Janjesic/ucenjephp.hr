<?php

    function Zbrajanje($x){

        if($x>0){
            echo 'Zbrajanje'. $x . '<br />';
            Zbrajanje($x+1);
        }
    }

    Zbrajanje(100);