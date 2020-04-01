<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sale;

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
}
