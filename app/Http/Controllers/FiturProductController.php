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
                })
                    ->when(request('sort'), function ($q) {
                        return $q->orderBy('name', request('sort'));
                })
                ->paginate(9)->withQueryString();

        $brand = Product::distinct()->where([["category", $category],['brandName', 'NOT LIKE', ""]])->get(['brandName']);
        return view('fiturproduct', compact('product', 'brand'));
    }

    public function search(Request $request){
        $product = Product::where("name", "LIKE", "%".request('search')."%")->paginate(9)->withQueryString();
        $brand = Product::distinct()->where([["name", "LIKE", "%".request('search')."%"],['brandName', 'NOT LIKE', ""]])->get(['brandName']);
        return view('fiturproduct', compact('product', 'brand'));
    }
}
