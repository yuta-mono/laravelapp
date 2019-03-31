<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
    <style>
    body {font-size:16pt; color:#999;}
    h1 {font-size:100pt; text-align:right; color:#eee;
        margin:-40px 0px -50px 0px;}
    </style>
EOF;
$body = '</head><body>';
$end = '</body></head>';

function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
    public function index() {
        $data = [
            ['name'=>'山田太郎', 'mail'=>'yamada@mail.com'],
            ['name'=>'田中花子', 'mail'=>'tanaka@mail.com'],
            ['name'=>'鈴木幸子', 'mail'=>'suzuki@mail.com']
        ];

        return view('hello.index', ['data'=>$data]);
    }
}
