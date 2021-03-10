<?php
    class Produk {
        public $judul, $penulis, $penerbit, $harga;

        public function getLabel() {
            return "$this->judul ,$this->penulis, $this->penerbit, $this->harga";
        }

        public function __construct( $judul = "judul" ,$penulis = "penulis" ,$penerbit = "penerbit" ,$harga = 0) {
             $this->judul = $judul;
             $this->penulis = $penulis;
             $this->penerbit = $penerbit;
             $this->harga = $harga ;
        }
    }

    $produk1 = new Produk("Naruto", "Daffa", "Bintang Utama", 25000);
    $produk2 = new Produk("Point Blank", "Zeppeto", "Gamescool" , "free");
    $produk3 = new Produk("Ada Apa dengan Cinta");

    echo "Komik :"  . $produk1->getLabel();
    echo "<br>";
    echo "Game :"  . $produk2->getLabel();
    echo "<br>";
    var_dump($produk3);
?>