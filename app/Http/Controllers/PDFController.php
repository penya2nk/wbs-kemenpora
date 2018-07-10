<?php

namespace rni\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PDF;
use rni\LaporanWeb;
use rni\LaporanLain;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PDFController extends Controller
{
    //
    public function pdfViewMember($id){
    	// return url();
    	// return view('pdfview');

    	$laporan = LaporanWeb::where('id',$id)->first();
    
    	view()->share('laporan',$laporan);

    	$pdf = PDF::loadView('pdf.laporan-satuan-member');
    	// return $pdf->stream();
    	return $pdf->download('laporan-'.$laporan->noRegistrasi.'.pdf');

  //   	$pdf = App::make('dompdf.wrapper');
		// $pdf->loadHTML('<h1>{{ url("/") }}</h1>');
		// return $pdf->stream('tes123.pdf');
    	// return "PDF TEST";

  //   	$data = "TES";
  //   	$pdf = PDF::loadView('pdf.invoice', $data);
		// return $pdf->download('invoice.pdf');
    }

    public function pdfViewMemberRekap(Request $request){
    	// return url();
    	// return view('pdfview');

        // Parsing Month Year

        // echo "TEST";

        // return;

        $sp1 = explode(" ",$request['dateStartFieldRekap']);

        $temp1 = $sp1[0] . "/" . "01" . "/" . $sp1[2];  

        $sp2 = explode(" ",$request['dateEndFieldRekap']);

        // echo $temp1;
        // return;

        $sub1 = 0;
        $sub2 = 0;

        if($sp2[0]=="12"){
            $sub1 = 1;
            $sub2 = ($sp2[2]+1);
        }else{
            $sub1 = ($sp2[0]+1);
            $sub2 = $sp2[2];
        }

        $space = "";

        if($sub1 < 10){
            $space = "0";
        }

        $temp2 = $space. $sub1 . "/" . "01" . "/" . $sub2;  


        $sd = Carbon::parse($temp1);
        $ed = Carbon::parse($temp2);

        // $ed = Carbon::parse($request['dateEndFieldRekap'])->addDay()->subSecond();

    	$laporan = LaporanWeb::where('created_at','>=',$sd)->where('created_at','<',$ed)->get();

        // Naming PDF

        $date1 = str_replace('/','-',$request['dateStartFieldRekap']);
        $date2 = str_replace('/','-',$request['dateEndFieldRekap']);

        // $date1 = split(" ",$request['dateStartFieldRekap']);
        // $date2 = split(" ",$request['dateStartFieldRekap']);


        $name = 'Rekap Laporan Member Bulan ' . $date1 . ' s.d. ' . $date2 ;

        //return $name;
    
    	view()->share('lap',$laporan);

    	$pdf = PDF::loadView('pdf.laporan-satuan-member-rekap');
    	
    	return $pdf->download($name.'.pdf');

    }

    public function pdfViewNonMemberRekap(Request $request){
    	// return url();
    	// return view('pdfview');

    	// Parsing Month Year

        $sp1 = explode(" ",$request['dateStartFieldRekap']);

        $temp1 = $sp1[0] . "/" . "01" . "/" . $sp1[2];  

        $sp2 = explode(" ",$request['dateEndFieldRekap']);

        // echo $temp1;
        // return;

        $sub1 = 0;
        $sub2 = 0;

        if($sp2[0]=="12"){
            $sub1 = 1;
            $sub2 = ($sp2[2]+1);
        }else{
            $sub1 = ($sp2[0]+1);
            $sub2 = $sp2[2];
        }

        $space = "";

        if($sub1 < 10){
            $space = "0";
        }

        $temp2 = $space. $sub1 . "/" . "01" . "/" . $sub2;  
        

        $sd = Carbon::parse($temp1);
        $ed = Carbon::parse($temp2);


        $laporan = LaporanLain::where('created_at','>=',$sd)->where('created_at','<=',$ed)->get();

        // Naming PDF

        $date1 = str_replace('/','-',$request['dateStartFieldRekap']);
        $date2 = str_replace('/','-',$request['dateEndFieldRekap']);

        $name = 'Rekap Laporan Non-Member ' . $date1 . ' s.d. ' . $date2;
    
    	view()->share('lap',$laporan);

    	$pdf = PDF::loadView('pdf.laporan-satuan-nonmember-rekap');
    	// return $pdf->stream();

    	return $pdf->download($name.'.pdf');

    }

    public function pdfViewNonMember($id){
    	// return url();
    	// return view('pdfview');

    	$laporan = LaporanLain::where('id',$id)->first();
    
    	view()->share('laporan',$laporan);

    	$pdf = PDF::loadView('pdf.laporan-satuan-nonmember');

    	return $pdf->download('laporan-'.$laporan->noRegistrasi.'.pdf');
    	// return $pdf->stream();
  //   	return $pdf->download('pdfview.pdf');

  //   	$pdf = App::make('dompdf.wrapper');
		// $pdf->loadHTML('<h1>{{ url("/") }}</h1>');
		// return $pdf->stream('tes123.pdf');
    	// return "PDF TEST";

  //   	$data = "TES";
  //   	$pdf = PDF::loadView('pdf.invoice', $data);
		// return $pdf->download('invoice.pdf');
    }
}
