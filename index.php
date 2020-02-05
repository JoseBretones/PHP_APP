<?php
    if(isset($_GET('vista'))){
        switch ($_GET('vista')){
            case 0:
                require('views/login.html');
        }
    }

?>