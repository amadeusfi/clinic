
<?php
//class/class_View.inc.php

class View
{
    private static $out;

    public static function setLayout($tpl, $data = [])
    { //was is $data???
        ob_start(); //Puffer from Server gonna start
        include_once "tpl/header.tpl";
        include_once "tpl/" . $tpl . ".tpl";
?>

        <?php
        include_once "tpl/footer.tpl";

        self::$out = ob_get_contents(); //read from puffer
        ob_end_clean(); //erease puffer    
    }

    public static function toDisplay()
    {
        echo self::$out;
    }
}

        ?>


       