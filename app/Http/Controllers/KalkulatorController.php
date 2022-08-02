<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KalkulatorController extends Controller
{
    public function calcFitrah(Request $request)
    {
        $price = $request->get('price');
        $weight = $request->get('weight');
        $response = '';
        if($price != NULL && $weight != NULL){
            $response = $price * $weight;
        }else{
            $response = '<b>Ooops!</b>pilih jenis zakat';
        }
        return $response;
        // $validator = Validator::make(request()->all(),[
        //     'harga' => 'required|numeric|min:1',
        // ]);
        // if($validator->fails())
        // {
        //     return redirect('index-fitrah')->withInput()->withErrors($validator);
        // }
        // $total = request('harga') * 2.5;
        // return redirect('index-fitrah')->with('total',$total);
    }

    public function calcMaal(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'gajiPokok' => 'required|numeric|min:1000',
            'tunjangan' => 'required|numeric|min:1000',
            'hutang' => 'required|numeric|min:1000',
        ]);
        if($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $gaji = $request->get('gajiPokok');
        $tunjangan = $request->get('tunjangan');
        $hutang = $request->get('hutang');
        $harga = $gaji + $tunjangan - $hutang;
        $total = $harga * 2.5 / 100;
        return $total;
    }

    public function calcFidyah(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'jiwa' => 'required|numeric|min:1',
            'hari' => 'required|numeric|min:1',
        ]);
        if($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $day = $request->get('jiwa');
        $soul = $request->get('hari');
        $total = $day * $soul * 50000;
        return $total;
    }

    public function calcQurban(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'jenisQurban' => 'required',
        ]);
        if($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $qurban = $request->get('jenisQurban');
        switch($qurban)
        {
            case 'A' :
                $total = 2200000;
                break;
            case 'B' :
                $total = 2500000;
                break;
            case 'C' :
                $total = 17500000;
                break;
            default :
                $total = 0;
        }
        return $total;
    }

    public function calcInfaq(Request $request)
    {
        $validator = Validator::make(request()->all(),[
            'gaji' => 'required|numeric|min:1000',
            'tunjangan' => 'required|numeric|min:0',
        ]);
        if($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $gaji = $request->get('gaji');
        $tunjangan = $request->get('tunjangan');
        $harga = $gaji + $tunjangan;
        $total = $harga * 2.5 / 100;
        return $total;
    }
}
