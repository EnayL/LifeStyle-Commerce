<?php

namespace App\Http\Controllers;

use App\Models\Sneakers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjoutSneakersController extends Controller
{
    public function store(Request $request)
    {
        // $name = Storage::disk('public')->put('photo', $request->file('photo'));

        $validated = $request->validate([
            'nom' => 'required|max:255',
            'prix' => 'required',
            'image' => 'required',
            'marque' => 'required|max:255',
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

        Sneakers::create($validated);

        return redirect('cataloguesneakers');
    }

    public function show()
    {
        return view('ajoutsneakers');
    }

    function display(Request $request)
    {
        if (isset($request->role)) {
            $data = DB::select('select * from sneakers = ?', $request->all());
        }
        $data = Sneakers::all();
        return view('cataloguesneakers', ['sneakers' => $data]);
    }
}
