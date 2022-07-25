<?php

namespace App\Http\Controllers;

use App\Mail\Test as MailTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
class Test extends Controller{
  
  public function __construct(){

    //$this->middlewaire('auth')->except('bar');
  }
  public function foo() {
    return view("test.foo");
  }


  public function bar() {

    $user =['nom'=>"yvan" , "prenom"=>"megnemo"];
    Mail::to('menemodonfack@gmail.com')->send( new MailTest($user));

    return view("test.bar");
  }
} 