<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjoutPostController extends Controller
{
    public function store(Request $request)
    {
        // $name = Storage::disk('public')->put('photo', $request->file('photo'));

        $validated = $request->validate([
            'nom' => 'required|max:255',
            'content' => 'required',
            'image' => 'required',
            'date' => 'required|max:255',
            'type' => 'required',
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

        Post::create($validated);

        return redirect('lifestylerap');
    }

    public function show()
    {
        return view('ajoutlifestylerap');
    }

    function display(Request $request)
    {
        if (isset($request->role)) {
            $data = DB::select('select * from post = ?', $request->all());
        }
        $data = Post::all();
        return view('lifestylerap', ['post' => $data]);
    }
}
