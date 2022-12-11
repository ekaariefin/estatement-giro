<?php
$dataStart      = $data_start;
$dataEnd        = $data_end;
$no = 1;
if (!isset($saldo_saat_ini)) {
    $saldo_saat_ini = $saldoAwal;
}
for ($i = $dataStart; $i < $dataEnd; $i++) { ?>
    <tr>
        <td><?= $i + 1; ?></td>
        <td><?= '19-10-2022'; ?></td>
        <td><?= $mutasi_rekening[$i]['FDESC']; ?></td>
        <td><?= $mutasi_rekening[$i]['REFERENCE']; ?></td>
        <td style="text-align: right;">
            <?php
            if ($mutasi_rekening[$i]['TYPE'] == 'C') {
                echo $mutasi_rekening[$i]['AMOUNT'];
            } else {
                echo '0.00';
            }
            ?>
        </td>
        <td style="text-align: right;">
            <?php
            if ($mutasi_rekening[$i]['TYPE'] == 'D') {
                echo $mutasi_rekening[$i]['AMOUNT'];
            } else {
                echo '0.00';
            }
            ?>
        </td>
        <td style="text-align: right;">
            <?php
            if ($mutasi_rekening[$i]['TYPE'] == 'C') {
                $saldo_saat_ini = $saldo_saat_ini + $mutasi_rekening[$i]['AMOUNT'];
            } else {
                $saldo_saat_ini = $saldo_saat_ini - $mutasi_rekening[$i]['AMOUNT'];
            }
            echo $saldo_saat_ini;
            ?>
        </td>
    </tr>
<?php
}
?>