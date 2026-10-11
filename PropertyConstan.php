<?php

class produk {
    //property
    public string $kode; 
    public string $nama;
    public int $harga;
    public int $stok;

//constant
    public const PAJAK = 0.11;

}
//input ke property
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung harga
$pajak = Produk::PAJAK * 100;
$jumlahpajak = $produk->harga * Produk::PAJAK;

//total
$total = $produk->harga + $jumlahpajak;

//hasil
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "Harga: ".$produk->harga;
echo "<br/>";

echo "stok: ".$produk->stok;
echo "<br/>";

echo "Pajak: ".$pajak ."%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.".$total;
