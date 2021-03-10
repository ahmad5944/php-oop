<?php
    class Produk {
        public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 2000;

        public function getLabel() {
            return "$this->penulis, $this->penerbit";
        }
    }

    // $produk1 = new Produk();
    // $produk1->judul = "Naruto";
    // var_dump($produk1);

    // $produk2 = new Produk();
    // $produk2->judul = "Point Blank";
    // $produk2->coba = "xixixi";
    // var_dump($produk2);

    $produk3 = new Produk();
    $produk3->judul = "Tante Baru";
    $produk3->penulis = "Ibnu";                                             
    $produk3->penerbit = "Ilham";
    $produk3->harga = 500;

    $produk4 = new Produk();
    $produk4->judul = "Point Blank";
    $produk4->penulis = "Ahmed";
    $produk4->penerbit = "Daffa";
    $produk4->harga = 200000;

    echo "Komik :"  . $produk3->getLabel();
    echo "<br>";
    echo "Game :"  . $produk4->getLabel();

?>