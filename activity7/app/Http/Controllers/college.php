<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\collegeModel;

class college extends Controller
{
    //
    function show()
    {
        $data = collegeModel::all();
        return view('list', ['members' => $data]);
    }
    function delete($id)
    {
        $data = collegeModel::find($id);
        $data->delete();
        return redirect('list');
    }
}
