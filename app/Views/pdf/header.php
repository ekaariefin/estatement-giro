<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eStatement BCA Syariah - 0010028491</title>
    <style>
        body {
            font-family: 'Courier';
            font-size: 8pt;
        }

        .line {
            border-top: 3px double #333;
        }

        .page_break {
            page-break-before: always;
        }
    </style>
</head>

<body>
    <p style="text-align:'left'">PT BANK BCA SYARIAH<br />KC JATINEGARA (JTG)</p>
    <center>
        <p style="margin-bottom: 20px;">REKENING KORAN GIRO</p>
    </center>
    <table style="width: 100%" border="0">
        <tr>
            <td style="width: 50%;">
                <table border="0">
                    <tr>
                        <td>008001001</td>
                    </tr>
                    <tr>
                        <td>EKA PRASETYO ARIEFIN</td>
                    </tr>
                </table>
            </td>
            <td style="width: 50%;">
                <table border="0">
                    <tr>
                        <td>HALAMAN</td>
                        <td>:<?= $num_page; ?></td>
                    </tr>
                    <tr>
                        <td>SALDO AWAL</td>
                        <td>:<?= number_format($saldo_awal, 2, ".", ","); ?></td>
                    </tr>
                    <tr>
                        <td>JUMLAH KREDIT</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td>JUMLAH DEBIT</td>
                        <td>: </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br />
    <table style="width: 100%;">
        <tr>
            <td colspan="7" width="100%">
                <div class="line"></div>
            </td>
        </tr>
        <tr>
            <td style="width: 3%;">NO.</td>
            <td style="width: 8%;">TGL INPUT</td>
            <td style="width: 20%;">KETERANGAN</td>
            <td style="width: 8%;">REFERENSI</td>
            <td style="width: 10%;text-align:center;">KREDIT</td>
            <td style="width: 10%;text-align:center;">DEBIT</td>
            <td style="width: 10%;text-align:center;">SALDO</td>
        </tr>
        <tr>
            <td colspan="7" width="100%">
                <div class="line"></div>
            </td>
        </tr>
        <tr>
            <?php
            $data['mutasi_rekening'] = $mutasi_rekening;
            $data['data_start'] = $data_start;
            $data['data_end'] = $data_end;
            $data['saldoAwal'] = $saldo_awal;
            echo view('pdf/mutasi', $data);
            ?>
        </tr>
        <tr>
            <td colspan="7" width="100%">
                <div class="line"></div>
                <p style="text-align:right"><i>bersambung ke halaman berikut...</i></p>
            </td>
        </tr>

    </table>

    </div>
</body>

</html>