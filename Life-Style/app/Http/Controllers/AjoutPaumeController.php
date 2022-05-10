<?php

namespace App\Http\Controllers;

use App\Models\Paume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjoutPaumeController extends Controller
{
    public function store(Request $request)
    {
        // $name = Storage::disk('public')->put('photo', $request->file('photo'));

        $validated = $request->validate([
            'title' => 'required',
            'titlesecond' => 'required',
            'image' => 'required',
            'url' => 'required',
            'tag' => 'required',
        ]);


        $filename = time() . '.' . $request->image->extension();
        //creation nom unique photo

        $request->file('image')->storeAs(
            'avatars',
            //stock dans avatars
            $filename,
            // avec le nom filename
            'public'
            // dans le storage public.
        );

        $validated['image'] = $filename;

        Paume::create($validated);

        return redirect('paume');
    }

    public function show()
    {
        return view('ajoutpaume');
    }

    function display(Request $request)
    {
        if (isset($request->role)) {
            $data = DB::select('select * from paume = ?', $request->all());
        }
        $data = Paume::all();

        return view('paume', ['paume' => $data]);
    }
}
