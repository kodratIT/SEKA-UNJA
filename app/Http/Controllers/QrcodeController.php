<?php

namespace App\Http\Controllers;

use App\Models\QrcodeModel;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;
class QrcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codes = QrcodeModel::latest()->get();
        $user = auth();
        $breadcrumb = "Qr Code";
        $qrcode = ['created_at' => 'failed',];

        $date =substr(Carbon::now(),0,10);
        foreach ($codes as $code) {
            $qrcode = substr($code->created_at,0,10);
            if($qrcode === $date){
                $qrcode = [
                    'firstQR' => $code->firstQR,
                    'lastQR' => $code->firstQR,
                    'created_at' => $code->created_at,
                ];
            }
        }
        return view('pages.qrcode.index',compact('breadcrumb','user','qrcode'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
}
