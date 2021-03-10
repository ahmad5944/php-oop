<?php
    class Produk {
        public $judul, $penulis, $penerbit, $harga;

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function __construct( $judul = "judul" ,$penulis = "penulis" ,$penerbit = "penerbit" ,$harga = 0) {
             $this->judul = $judul;
             $this->penulis = $penulis;
             $this->penerbit = $penerbit;
             $this->harga = $harga ;
        }
    }

    class CetakInfoProduk {
        public function cetak( Produk $produk) { 
            $str  = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
            return "$str";
        }
    }

    $produk1 = new Produk("Naruto", "Daffa", "Bintang Utama", 25000);
    $produk2 = new Produk("Point Blank", "Zeppeto", "Gamescool" , "free");

    echo "Komik :"  . $produk1->getLabel();
    echo "<br>";
    echo "Game :"  . $produk2->getLabel();
    echo "<br>";
    
    $infoProduk1 = new CetakInfoProduk();
    echo $infoProduk1->cetak($produk1);
?>