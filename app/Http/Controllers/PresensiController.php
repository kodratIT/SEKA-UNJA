<?php

namespace App\Http\Controllers;

use App\Models\historyModel;
use App\Models\QrcodeModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $histories = historyModel::where('user_id',Auth::User()->id)->latest()->get();
        $breadcrumb = "Qr Code";
        $data= [
            'created_at' => 'success',
            'updated_at' => 'success'
        ];

        $status= [
            'btn' => 'inactive'
        ];

        $date =substr(Carbon::now(),0,10);
        foreach ($histories as $history) {
            $data = substr($history->created_at,0,10);
            $data2 = $history->surah_akhir;
            if($data === $date && $data2 !== "" ){
                $data = [
                    'created_at' => $data,
                    'updated_at' => $data2,
                ];
                $status = [
                    'btn' => 'inactive',
                ];
            }elseif($data === $date){
                $data = [
                    'created_at' => $data,
                    'updated_at' => 'success',
                ];
                $status = [
                    'btn' => 'active',
                ];
            }
        }

        $user = Auth::user();
        $breadcrumb = "Presensi";
        return view('pages.presensi.index',compact('breadcrumb','user','data','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'juz_awal' => 'required|min:1',
            'surah_awal' => 'required|min:2',
            'ayat_awal' => 'required|min:1'
        ]);

        $data = [
            'user_id' => $request->user_id,
            'ayat_awal' =>$request->ayat_awal,
            'ayat_akhir' =>'',
            'juz_awal' => $request->juz_awal,
            'juz_akhir' => ' ',
            'surah_awal' =>$request->surah_awal,
            'surah_akhir' =>'',
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ];


        historyModel::create($data);
        return redirect()->route('presensi.index')->with('success','Berhasil Mengimput Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $breadcrumb = "Presensi";
        // return view('pages.presensi.datang',compact('breadcrumb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = [

            'ayat_awal' =>$request->ayat_awal,
            'ayat_akhir' =>$request->ayat_akhir,
            'juz_awal' => $request->juz_awal,
            'juz_akhir' => $request->juz_akhir,
            'surah_awal' =>$request->surah_awal,
            'surah_akhir' =>$request->surah_akhir,
            'created_at' =>$request->time,
            'updated_at' =>Carbon::now()

        ];

        historyModel::where('user_id',$id)->latest()->update($data);
        return redirect()->route('presensi.index')->with('success2','Berhasil Mengimput Data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function datang(){
        $breadcrumb = "presensi";
        return view('pages.presensi.datang',compact('breadcrumb'));
    }

    public function pulang(){
        $user = Auth::User();
        $histories = historyModel::where('user_id',$user->id)->latest()->get();
        $breadcrumb = "presensi";
        return view('pages.presensi.pulang',compact('breadcrumb','user','histories'));
    }

    public function validasi(Request $request)
    {
        $codes = QrcodeModel::latest()->get();
        $qrcode = [];
        $date =substr(Carbon::now(),0,10);
        foreach ($codes as $code) {
            $qrcode = substr($code->created_at,0,10);
            if($qrcode === $date){
                $qrcode = [
                    'firstQR' => $code->firstQR,
                    'lastQR' => $code->firstQR,
                ];
            }
        }
        $qr = $request->qr_code;
        $data =$qrcode['firstQR'];
        if($qr == $data){
            return response()->json([
                'status'=> 200,
            ]);
        }else{
            return response()->json([
                'statuss'=> 400,
            ]);
        }



    }

    
    public function createqr(Request $request){
      
        $code = substr(Carbon::now(),11,15);
        $data = [
            'id' =>'NULL',
            'id_admin' =>  $request->admin_id,
            'firstQR' => hash('sha256',"DATANG".$code ),
            'lastQR'   => hash('sha256', "PULANG".$code),
            'created_at' => Carbon::now(),
            'updated_at' =>Carbon::now(), 
        ];

        QrcodeModel::create($data);
        return redirect()->route('admin.qrcode.index')->with('success','Berhasil Membuat QRCODE');
    }
}