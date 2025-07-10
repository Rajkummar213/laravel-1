<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
 function homepage(){
    return view('Homepage');
 }
 function todos(){
    return view('AllTodos');

 }
 function storeTodo(Request $request){
  //validation
  $request->validate([
   'title' => 'required|min:3',
   'detail' => 'resqired|max:200',
   'date' => 'after_or_equal: today'
  ]);
 }
}
