<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Patiekalas;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        return view('comment.index', [
            'patiekalai' => Patiekalas::orderBy('updated_at', 'desc')->paginate(5),
           ]);
    }

    
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back();
    }
}