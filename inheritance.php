<?php
    class Produk {
        public $judul, $penulis, $penerbit, $harga, $jmllHal, $waktuMain;

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoProduk() {
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str;
        }

        public function __construct( $judul = "judul" ,$penulis = "penulis" ,$penerbit = "penerbit" ,$harga = 0, $jmlHal = 100, $waktuMain = 50) {
             $this->judul = $judul;
             $this->penulis = $penulis;
             $this->penerbit = $penerbit;
             $this->harga = $harga;
             $this->jmlHal = $jmlHal;
             $this->waktuMain = $waktuMain;
        }
    }

    class CetakInfoProduk {
        public function cetak( Produk $produk) { 
            $str  = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
            return "$str";
        }
    }

    class Komik extends Produk {
        public function getInfoProduk(){
            $str = "Komik : {$this->judul} | {$this->getlabel()} - {$this->jmlHal} Halaman.";
            return $str;
        }
    }

    class Game extends Produk {
        public function getInfoProduk(){
            $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";

        }
    }

    $produk1 = new Komik("Naruto", "Daffa", "Bintang Utama", 25000, 100, 0);
    $produk2 = new Game("Point Blank", "Zeppeto", "Gamescool" , "free", 0, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();

?>