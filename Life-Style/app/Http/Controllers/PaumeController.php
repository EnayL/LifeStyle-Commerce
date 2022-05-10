<?php

namespace App\Http\Controllers;

use App\Models\Paume;
use Illuminate\Http\Request;

class PaumeController extends Controller
{
    function show($id)
    {
        $data = Paume::where('id', $id)->first();
        return view('paume', ['paume' => $data]);
    }



    public function destroy($id)
    {

        $sneakers = Paume::findOrFail($id);
        $sneakers->delete();

        return redirect('/paume');
    }
}
