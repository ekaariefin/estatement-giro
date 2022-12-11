<?php


namespace App\Controllers;

use App\Models\Atm;

class Home extends BaseController
{
    public function index()
    {
        ob_end_clean();
        unset($dompdf);
        $atmModel = new Atm();
        $data['transaction'] = $atmModel->get()->getResultArray();
        $filename =  'DAFTAR PENILAIAN KINERJA BCAS TAHUN ' . date('Y');
        $dompdf = new \Dompdf\Dompdf;
        $dompdf->loadHtml(view('pdf/estatement', $data));
        $dompdf->setPaper('letter', 'portait');
        $dompdf->render();
        ob_end_clean();
        $dompdf->stream($filename, array('Attachment' => 0));
    }
}
