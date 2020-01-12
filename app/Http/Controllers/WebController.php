<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();
        return view('front.home', ['posts' => $posts]);
    }

    public function course()
    {
        return view('front.course');
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(12)->get();
        return view('front.blog', ['posts' => $posts]);
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();
        Log::info($post);
        return view('front.article', ['post' => $post]);
    }

    public function sendMail(Request $request)
    {
        $data = [
            'reply_name' =>  $request->first_name . " " . $request->lastName,
            'reply_email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        return New Contact($data);
        var_dump($data);
    }
}
