<?php

namespace App\Http\Controllers;

use App\Models\Scrolling;
use Illuminate\Http\Request;

class homePageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function div1($id)
    {
        if(Scrolling::orderBy('id','desc')->first()->id > $id)
        {
            $posts   = Scrolling::offset($id)
                ->limit(200)
                ->get();
            $item   = '';
            foreach ($posts as $post)
            {
                $item      .= $post->post.'<br />';
                $last_id    = $post->id;
            }

            return response()->json([
                'last_id'   => $last_id,
                'item'      => $item,
            ]);

        }
        return response()->json([
            'last_id'   => Scrolling::orderBy('id','desc')->first()->id,
            'item'      => '',
        ]);

    }
}
