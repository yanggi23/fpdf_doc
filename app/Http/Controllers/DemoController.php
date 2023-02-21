<?php

namespace App\Http\Controllers;

use App\Models\Surat_keterangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use setasign\Fpdi\Fpdi;

class DemoController extends Controller
{
    public function index(Request $request, $id)
    {
        $filePath = public_path("sc_wna.pdf");
        $outputFilePath = public_path('sample_output.pdf');

        $this->fillPDFFile($filePath, $outputFilePath, $id);

        return response()->file($outputFilePath);
    }
    public function fillPDFFile($file, $outputFilePath, $id)
    {
        $fpdi = new Fpdi();

        $count = $fpdi->setSourceFile($file);
        //dd($count);
        for ($i = 1; $i <= $count; $i++) {
            $data = Surat_keterangan::where('id', $id)->first();
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


                $fpdi->SetY(118);
                $fpdi->SetX(25);
                $fpdi->MultiCell(165, 6, "                          Surat Keputusan TNI Nomor R/109/IX/2022 tanggal 9 September 2022 tentang Permohonan Penerbitan Security Clearance");
                // $fpdi->Text(65, 122, "Surat Keputusan TNI Nomor R/109/IX/2022 tanggal 9 September");
                // $fpdi->Text(25, 127, "2022 tentang Permohonan Penerbitan Security Clearance");


                $fpdi->Text(103, 150, $data->warga_negara);
                $fpdi->Text(80, 167, $data->nama);
                $fpdi->Text(80, 174, $data->jabatan);
                $fpdi->Text(80, 181.5, date('d F Y', strtotime($data->tgl_lahir)));
                $fpdi->Text(80, 189, $data->kebangsaan);
                $fpdi->Text(80, 196,  $data->no_paspor);
                $fpdi->Text(80, 209,  $data->tujuan);

                $fpdi->SetY(216);
                $fpdi->SetX(79);
                $fpdi->MultiCell(110, 5,  $data->keperluan);
                
                $fpdi->Text(80, 231.5, date('d F Y', strtotime($data->berlaku)));
            }
            if ($i == '2') {

                $fpdi->Text(143, 87, "Jakarta,");
                $fpdi->Text(142, 91.8, date('d F Y'));
                $fpdi->Text(40, 138, "Letkol Maulana");
                $fpdi->Text(135, 138, "Kolonel Maulana");
                $fpdi->Text(27, 167, "Yanggi Rizkal");
                $fpdi->Text(27, 173.5, "Ahmad Irfan");
                $fpdi->Text(27, 180.5, "Raldi Risdiantoro");
                // $fpdi->Image("https://1.bp.blogspot.com/-cTTuRO8QNq0/UOYc_tD75bI/AAAAAAAAAx4/wg-S154-jUA/s1600/tanda-tangan.jpg", 125, 120, 50, 25);
            }
        }

        //$count = $fpdi->importPage($i);
        return $fpdi->Output($outputFilePath, 'F');
    }
    public function datatabel()
    {
        $data = Surat_keterangan::get();

        return view("isi_data_pdf", compact('data'));
    }

    public function create()
    {
        return view('add-surat');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nama' => 'required',
        //     'jabatan' => 'required',
        //     'tgl_lahir' => 'required',
        //     'kebangsaan' => 'required',
        //     'no_paspor' => 'required',
        //     'tujuan' => 'required',
        //     'keperluan' => 'required',
        //     'berlaku' => 'required',
        //     // 'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        //     // 'address' => 'required|max:255',
        // ]);

        
        // $data = Surat_keterangan::create([
        //     'nama' => $request->nama,
        //     'jabatan' => $request->jabatan,
        //     'tgl_lahir' => $request->tgl_lahir,
        //     'kebangsaan' => $request->kebangsaan,
        //     'no_paspor' => $request->paspor,
        //     'tujuan' => $request->tujuan,
        //     'keperluan' => $request->keperluan,
        //     'berlaku' => $request->tgl_berlaku,
        //     // 'image' => $request->image,
        //     // 'address' => $request->address
            
        // ]);

        $data = array();
        $data['warga_negara'] = $request->select_negara;
        $data['nama'] = $request->nama;
        $data['jabatan'] = $request->jabatan;
        $data['tgl_lahir'] = $request->tgl_lahir;
        $data['kebangsaan'] = $request->select_kebangsaan;
        $data['no_paspor'] = $request->paspor;
        $data['tujuan'] = $request->tujuan;
        $data['keperluan'] = $request->keperluan;
        $data['berlaku'] = $request->tgl_berlaku;
            // 'image' = $request->image,
            // 'address' = $request->address
            

        $insert = DB::table('surat_keterangan')->insert($data);
        // $data->save();

        if ($request) 
        {
            $notification=array(
                'messege'=>'Successfully User Created',
                'alert-type'=>'success'
            );
            return redirect()->route('allsurat')->with($notification);
        }
        else {
            $notification=array(
                'messege'=>'Something is wrong, please try again!',
                'alert-type'=>'error'
            );
            return redirect()->route('allsurat')->with($notification);
        }

        // $notification=array(
        //     'messege'=>'Successfully Data Created',
        //     'alert-type'=>'success'
        // );
        // return redirect()->route('allsurat')->with($notification);
        
    }
}
