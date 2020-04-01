<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Models\Product;
use App\Models\Customer;

class IndexController extends Controller
{
    public function index(Request $request) {
        return view('index');
    }

    public function add_to_cart(Request $request) {
        if (!$request->session()->exists('cart')) {
            $request->session()->put('cart', []);
        }

        $cart = $request->session()->get('cart');
        $product = Product::find($request->get('product_id'));

        if(!array_key_exists($product->id, $cart)) {
            $cart[$product->id] = 0;
        }

        $request->session()->put('cart', $cart);
        $data = [
            'status' => 200,
            'count' => count($cart),
            'data' => $cart,
        ];
        return response()->json($data);
    }

    public function cart(Request $request) {
        return view('frontend.cart');
    }

    public function get_cart(Request $request) {
        if (!$request->session()->exists('cart')) {
            $request->session()->put('cart', []);
        }

        $cart = $request->session()->get('cart');
        $cart_data = array();
        foreach ($cart as $key => $value) {
            $item = [
                'product' => Product::find($key),
                'quantity' => $value,
            ];
            array_push($cart_data, $item);
        }

        return response()->json(['status' => 200, 'data' => $cart_data]);
    }

    public function save_cart(Request $request) {
        $cart_data = $request->get('cart');
        $cart = array();
        foreach ($cart_data as $item) {
            $product = $item['product'];
            $cart[$product['id']] = $item['quantity'];
        }
        $request->session()->put('cart', $cart);
        $data = [
            'status' => 200,
            'count' => count($cart),
            'data' => $cart,
        ];
        return response()->json($data);
    }

    public function input_customer(Request $request) {
        return view('frontend.customer');
    }

    public function save_customer(Request $request) {
        $request->validate([
            'name_as_ic' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'postcode' => 'required|string',
        ]);

        $request->session()->put('customer', $request->all());

        return redirect(route('checkout'));
    }

    public function checkout(Request $request) {
        return view('frontend.checkout');
    }
}
