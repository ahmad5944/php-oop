<?php 
    class PublicStatic{
        public static $angka = 1;

        public static function halo() {
            return "hello" .self::$angka++ . "x";
        }
    }

    echo PublicStatic::$angka;
    echo "<br>";
    echo PublicStatic::halo();
    echo "<hr>";
    echo PublicStatic::halo();
?>