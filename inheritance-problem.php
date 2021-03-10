<?php
    class Produk {
        public $judul, $penulis, $penerbit, $harga, $halHal, $waktuMain, $tipe;

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoLengkap() {
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            if ($this->tipe == "Komik") {
                $str .= " - {$this->jmlHal} Halaman.";
            }elseif($this->tipe == "Game"){
                $str .= "~ {$this->waktuMain} Jam.";
            }

            return $str;
        }

        public function __construct( $judul = "judul" ,$penulis = "penulis" ,$penerbit = "penerbit" ,$harga = 0, $jmlHal = 100, $waktuMain = 50, $tipe) {
             $this->judul = $judul;
             $this->penulis = $penulis;
             $this->penerbit = $penerbit;
             $this->harga = $harga;
             $this->jmlHal = $jmlHal;
             $this->waktuMain = $waktuMain;
             $this->tipe = $tipe;
        }
    }

    class CetakInfoProduk {
        public function cetak( Produk $produk) { 
            $str  = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
            return "$str";
        }
    }

    $produk1 = new Produk("Naruto", "Daffa", "Bintang Utama", 25000, 100, 0, "Komik");
    $produk2 = new Produk("Point Blank", "Zeppeto", "Gamescool" , "free", 0, 50, "Game");

    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();

?>