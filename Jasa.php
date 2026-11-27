<?php
namespace Pbo\Marketplace;

require_once __DIR__ . '/PropertyConstan.php';

class Jasa {

    use Produk;

    public function payment($tipe) {

        return match($tipe) {
            "virtual" => 'Virtual Account',
            "qris" => 'QRIS',
            default => 'hanya bisa pembayaran va dan qris'
        };

    }

}

