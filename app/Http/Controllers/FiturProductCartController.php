<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class FiturProductCartController extends Controller
{
    public function index(){
        return view('fiturproductcart');
    }

    public function addCart(Request $request){
        $id = $request->id;
        $product = Product::find($id);
        $cart = session()->get('cart');

        if($request->quantity == 0){
            $request->quantity++;
        }
        
        if(!$cart) {
            $cart = [
                    $id => [
                        "id" => $id,
                        "name" => $product->name,
                        "quantity" => $request->quantity,
                        "image" => $product->image,
                    ]
            ];
            session()->put('cart', $cart);
            // dd($cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if(isset($cart[$id])) {
            $cart[$id]["quantity"] += $request->quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        $cart[$id] = [
            "id" => $id,
            "name" => $product->name,
            "quantity" => $request->quantity,
            "image" => $product->image,
        ];

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function plusQty(Request $request){
        $id = $request->id;
        $product = Product::find($id);

        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            $cart[$id]["quantity"]++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        return redirect()->back();

    }

    public function minQty(Request $request){
        $id = $request->id;
        $product = Product::find($id);

        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            $cart[$id]["quantity"]--;

            if($cart[$id]["quantity"] == 0){
                unset($cart[$id]);
            }

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        return redirect()->back();

    }
}
