<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class FiturProductController extends Controller
{
    public function index($category, Request $request){

        $product = Product::where("category", $category)
                    ->when(request('brandName'), function ($q) {
                        return $q->where('brandName', 'LIKE', request('brandName'));
                })->paginate(9);

        // if ($request->get('brandName')) {
        //     $brandName = $request->brandName;
        //     // dd($brandName);
        //     $product->where('brandName', 'LIKE' , '%'.$brandName.'%');
        // }

        // $product->paginate(9);
        // $brandName = $request->brandName;
        // $product = Product::where("category", $category)->where('brandName', 'LIKE' , '%'.$brandName.'%');
        // $product->paginate(9)->withQueryString();
        // dd($product);
        return view('fiturproduct', compact('product'));
    }

    public function clear(){
    }
}
