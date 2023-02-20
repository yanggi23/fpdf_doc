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
                $fpdi->Text(65, 120, "Ketetapan Panglima");
            }
            if ($i == '2') {
                $fpdi->Text(30, 120, "Letkol Siapa");
                $fpdi->Image("https://1.bp.blogspot.com/-cTTuRO8QNq0/UOYc_tD75bI/AAAAAAAAAx4/wg-S154-jUA/s1600/tanda-tangan.jpg", 120, 80, 50, 50);
            }
        }
        //$count = $fpdi->importPage($i);
        return $fpdi->Output($outputFilePath, 'F');
    }
}
