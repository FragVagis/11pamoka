<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patiekalas;
use App\Models\Comment;
use Auth;

class HomeController extends Controller
{


    public function homeList(Request $request)
    {

        if ($request->s) {
            $search = explode(' ', $request->s);
            if (count($search) == 1) {
                $patiekalai = Patiekalas::where('title', 'like', '%'.$request->s.'%');
            }
            else {
                $patiekalai = Patiekalas::where('title', 'like', '%'.$search[0].'%'.$search[1].'%')
                ->orWhere('title', 'like', '%'.$search[1].'%'.$search[0].'%')
                ->orWhere('title', 'like', '%'.$search[0].'%')
                ->orWhere('title', 'like', '%'.$search[1].'%');
            }
        }
        else {
            $patiekalai = Patiekalas::where('id', '>', 0);
        }

        // Sort
        if ($request->sort == 'rate_asc') {
            $patiekalai->orderBy('rating');
        }
        else if ($request->sort == 'rate_desc') {
            $patiekalai->orderBy('rating', 'desc');
        }
        else if ($request->sort == 'title_asc') {
            $patiekalai->orderBy('title');
        }
        else if ($request->sort == 'title_desc') {
            $patiekalai->orderBy('title', 'desc');
        }
        else if ($request->sort == 'price_asc') {
            $patiekalai->orderBy('price');
        }
        else if ($request->sort == 'price_desc') {
            $patiekalai->orderBy('price', 'desc');
        }
        
        return view('home.index', [
            'patiekalai' => $patiekalai->paginate(5)->withQueryString(),
            'sort' => $request->sort ?? '0',
            'sortSelect' => Patiekalas::SORT_SELECT,
            's' => $request->s ?? '',
        ]);
    }

    public function rate(Request $request, Patiekalas $patiekalas)
    {
        $votes = json_decode($patiekalas->votes ?? json_encode([]));
        if (in_array(Auth::user()->id, $votes)) {
            return redirect()->back()->with('not', 'You already voted!');
        }
        $votes[] = Auth::user()->id;
        $patiekalas->votes = json_encode($votes);

        $patiekalas->rating_sum = $patiekalas->rating_sum + $request->rate;
        $patiekalas->rating_count ++;
        $patiekalas->rating = $patiekalas->rating_sum / $patiekalas->rating_count;
        $patiekalas->save();
        return redirect()->back()->with('ok', 'Thank you for your rating!');
    }

    public function addComment(Request $request, Patiekalas $patiekalas)
    {
        Comment::create([
            'patiekalas_id' => $patiekalas->id,
            'post' => $request->post
        ]);

        return redirect()->back();
    }




}