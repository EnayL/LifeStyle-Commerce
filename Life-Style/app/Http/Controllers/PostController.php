<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function show($id)
    {
        $data = Post::where('id', $id)->first();
        return view('lifestylerap', ['post' => $data]);
    }



    public function destroy($id)
    {

        $sneakers = Post::findOrFail($id);
        $sneakers->delete();

        return redirect('/cataloguesneakers');
    }
}
