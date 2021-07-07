<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function about(Request $request)
    {
        $currentTime = (new \DateTime())->format('Y-m-d H:i:s');
        $greetings = $request->name ? "<p>it's $currentTime now. <b>$request->name</b></p>" : "<p>it's $currentTime now, you know.</p>";
        $res = <<<EOD
        <html>
        <head><title>Document 1</title></head>
        <body>
        <h4>about</h4>
        <p><a href="/users" target="_blank">USERS</a></p>
        $greetings
        </body>
        </html>
        EOD;
        return $res;
    }
}
