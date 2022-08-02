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
            $response = 'Oopsss';
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

    public function calcMaal()
    {
        $validator = Validator::make(request()->all(),[
            'gaji' => 'required|numeric|min:1',
            'tunjangan' => 'required|numeric|min:0',
            'hutang' => 'required|numeric|min:0',
        ]);
        if($validator->fails())
        {
            return redirect('index-maal')->withInput()->withErrors($validator);
        }
        $harga = request('gaji') + request('tunjangan') - request('cicilan');
        $total = $harga * 2.5 / 100;
        return redirect('index-maal')->with('total',$total);
    }

    public function calcFidyah()
    {
        $validator = Validator::make(request()->all(),[
            'hari' => 'required|numeric|min:1',
            'jiwa' => 'required|numeric|min:1',
        ]);
        if($validator->fails())
        {
            return redirect('index-fidyah')->withInput()->withErrors($validator);
        }
        $total = request('hari') * request('jiwa') * 50000;
        return redirect('index-fidyah')->with('total',$total);
    }

    public function calcQurban()
    {
        $validator = Validator::make(request()->all(),[
            'qurban' => 'required',
        ]);
        if($validator->fails())
        {
            return redirect('index-qurban')->withInput()->withErrors($validator);
        }
        switch(request('qurban'))
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
        return redirect('index-qurban')->with('total',$total);
    }

    public function calcInfaq()
    {
        $validator = Validator::make(request()->all(),[
            'gaji' => 'required|numeric|min:1',
            'tunjangan' => 'required|numeric|min:0',
        ]);
        if($validator->fails())
        {
            return redirect('index-infaq')->withInput()->withErrors($validator);
        }
        $harga = request('gaji') + request('tunjangan');
        $total = $harga * 2.5 / 100;
        return redirect('index-infaq')->with('total',$total);
    }
}
