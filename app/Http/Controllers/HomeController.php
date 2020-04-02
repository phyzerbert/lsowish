<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sale;
use App\Models\Product;
use App\Models\ProductSale;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        config(['site.page' => 'sale']);
        $mod = new Sale();
        $data = $mod->orderBy('created_at')->paginate(15);
        return view('backend.index', compact('data'));
    }

    public function delete_sale($id) {
        $sale = Sale::find($id);
        $sale->payment->delete();
        $sale->customer->delete();
        ProductSale::where('sale_id', $id)->delete();
        $sale->delete();
        return back()->with('success', 'Deleted Successfully');
    }

    public function get_sale_products(Request $request) {
        $data = [
            'status' => 200,
            'result' => ProductSale::with('product')->where('sale_id', $request->get('sale_id'))->get(),
        ];
        return response()->json($data);
    }
}
