<?php

namespace App\Http\Controllers;

use App\Models\Sneakers;
use Illuminate\Http\Request;

class SneakersController extends Controller
{
    function show($id)
    {
        $data = Sneakers::where('id', $id)->first();
        return view('sneakers', ['sneakers' => $data]);
    }



    public function destroy($id)
    {

        $sneakers = Sneakers::findOrFail($id);
        $sneakers->delete();

        return redirect('/cataloguesneakers');
    }
}
