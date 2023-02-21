<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;

class DemoController extends Controller
{
    public function index()
    {
        $filePath = public_path("sc_wna.pdf");
        $outputFilePath = public_path('sample_output.pdf');

        $this->fillPDFFile($filePath, $outputFilePath);

        return response()->file($outputFilePath);
    }
    public function fillPDFFile($file, $outputFilePath)
    {
        $fpdi = new Fpdi();

        $count = $fpdi->setSourceFile($file);
        //dd($count);
        for ($i = 1; $i <= $count; $i++) {

            $template = $fpdi->importPage($i);

            $size = $fpdi->getTemplateSize($template);
            $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
            $fpdi->useTemplate($template);
            $fpdi->SetFont("helvetica", "", 12);
            $fpdi->SetTextColor(0, 0, 0);
            // $left = 10;
            //  $top = 10;
            //$text = "YANGGOI";
            if ($i == '1') {
                $fpdi->SetFont("helvetica", "", 12);
                $fpdi->Text(65, 122, "Surat Keputusan TNI Nomor R/109/IX/2022 tanggal 9 September");
                $fpdi->Text(25, 127, "2022 tentang Permohonan Penerbitan Security Clearance");

                $fpdi->SetFont("helvetica", "", 12);
                $fpdi->Text(103, 150, "Amerika Serikat");
            }
            if ($i == '2') {
                $fpdi->SetFont("helvetica", "", 12);
                $fpdi->Text(40, 138, "Letkol Maulana");
                $fpdi->Text(135, 138, "Letkol Maulana");
                // $fpdi->Image("https://1.bp.blogspot.com/-cTTuRO8QNq0/UOYc_tD75bI/AAAAAAAAAx4/wg-S154-jUA/s1600/tanda-tangan.jpg", 125, 120, 50, 25);
            }
        }
        //$count = $fpdi->importPage($i);
        return $fpdi->Output($outputFilePath, 'F');
    }
    public function datatabel()
    {
        return view("isi_data_pdf");
    }
}
