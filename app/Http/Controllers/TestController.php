<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function test()
    {
        Mail::raw('hiii', function ($msg) {
            $msg->to('vermakapil770@gmail.com')->subject('test');
        });
    }
}
