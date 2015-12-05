<?php
//hhhaaha 
    session_start();
    $_SESSION = array();
    session_destroy();

    header("location: index.php?hal=login&file=login");
?>
