<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //tutorial 2 5:10
    public function index(){
        
        return view('yamaduta.index');
    }

    public function contact(){
        return view('yamaduta.contact');
    }

    public function about(){
        return view('yamaduta.about');
    }

    
    public function shop(){
        $products = Employee::all();
        return view('yamaduta.shop' ,  compact('products'));
        
    }

 
    public function show($id){
        $products = Employee::find($id);
        return view('yamaduta.viewproducts' ,  compact('products'));
    }

    }
