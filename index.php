<?php

require('./PropertyConstan.php');

use Pbo\Marketplace\Produk;

//object
$produk = new produk('P0001','Laptop',10000000,5);

//hasil
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "Harga: ".$produk->harga;
echo "<br/>";

echo "stok: ".$produk->stok;
echo "<br/>";

echo "Pajak: ".$produk->pajak() ."%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.".$produk->total();
