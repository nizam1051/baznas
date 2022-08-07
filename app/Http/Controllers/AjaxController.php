<?php

namespace App\Http\Controllers;

use App\Models\DataZis;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getDataZisCategory(Request $request){
        $id = $request->get('id');
        $output = '';
        $no = 1;
        if($id != NULL){
            $data = DataZis::where('kategori', $id)->get();
        }else{
            $data = DataZis::all();
        }
        foreach($data as $b){
            $output .= '
            <tr>
                <th scope="row">'.$no++.'</th>
                <td>'.$b->category->display.'</td>
                <td>'.$b->price.'</td>
                <td>
                    '.$b->created_at.'
                </td>
                <td>

                    <a href="'. url('admin/data-zis/edit/'.$b->id) .'"
                        class="btn btn-transparent text-center text-dark">
                        <i class="fas fa-edit fa-2x"></i>
                    </a>
                    <a  href="'. url('admin/data-zis/delete/'.$b->id) .'"
                        class="btn btn-transparent text-center text-dark" >
                        <i class="fas fa-trash-alt fa-2x"></i>
                    </a>
                </td>
            </tr>
            ';
        }

        return $output;
    }
}
