<?php
//php/autoloader.inc.php
spl_autoload_register(function ($cname) {
    include "class/class_".$cname.".inc.php";
});
?>