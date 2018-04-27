<?php
namespace App\Http\Controllers;

class FooController extends Controller
{

// foo4アクションを追加
    public function foo4()
    {
        return view('foo.foo4', [
            'title' => 'Foo4(FooController.phpで記入)',
            'body' => 'Hello World!(FooController.phpで記入)'
        ]);
    }
    
}