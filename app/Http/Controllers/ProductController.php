<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class ProductController extends Controller
{
    public function index(){
        $product=Product::get();
        return view('index',['product'=>$product]);
    }

    public function add(){
        return view('add');
    }

    public function store(Request $request){
        $product=new Product();
        $product->name=$request->name;
        $product->type=$request->type;
        $product->url=$request->url;
        $product->save();
        $request->Session()->flash('alert-success','added successfully');
        return redirect(route('list'));
    }
    public function edit($id){
        $product=Product::find($id);
        return view('edit',['product'=>$product]);
    }

    public function update(Request $request){
        $products=Product::find($request->id);
        $products->name = $request->name;
        $products->type=$request->type;
        $products->url=$request->url;

        $products->save();
        $request->Session()->flash('alert-success','updated successfully');
        return redirect(route('list'));
    }
    public function delete(Request $request){
        $product=Product::find($request->id);
        $product->delete();
        $request->Session()->flash('alert-success','delete successfully');
        return redirect(route('list'));
    }

}
