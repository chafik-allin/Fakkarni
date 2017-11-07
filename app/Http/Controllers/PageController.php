<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Client;

class PageController extends Controller
{
    
    public function index()
    {
    	return view('index');
    }

    public function Post(PostRequest $request )
    {
    	Client::create($request->all());
    	return redirect('/#inscription')->withSuccess('Votre inscription a été effectué avec succèss');
    }
}
