<?php

// DECLARE DEFAULT CONFIGURATION

use App\Models\Atm;

$pageNum        = 1;
$no             = 1;
$saldoAwal      = 100000000; //SERATUS JUTA RUPIAH
$limit_per_page = 25;
$total_page     = ceil(count($transaction) / $limit_per_page);


$mutasiModel    = new Atm();


// PERULANGAN PER PAGE
for ($i = 1; $i <= $total_page; $i++) {
    $data['num_page']       = $i;
    $data['saldo_awal']     = $saldoAwal;
    if (!isset($saldo_saat_ini)) {
        $saldo_saat_ini = $saldoAwal;
    } else {
        $saldo_saat_ini = $saldo_saat_ini;
    }
    echo $saldo_saat_ini;
    if (!isset($data['last_session_of_data'])) {
        $data['data_start'] = 0;
    } else {
        $data['data_start'] = $data['last_session_of_data'];
    }
    $data['data_end']               = $limit_per_page * $i;
    $data['last_session_of_data']   = $data['data_end'];
    $data['mutasi_rekening']        = $mutasiModel->get()->getResultArray();
    echo view('pdf/header', $data);
}
