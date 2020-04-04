<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setting;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        config(['site.page' => 'setting']);
        $setting = Setting::first();
        return view('backend.setting', compact('setting'));
    }

    public function update(Request $request) {
        $request->validate([
            'whatsapp' => 'required|string',
            'email' => 'required|email|string',
            'about_us' => 'required|string',
            'warranty' => 'required|string',
            'description' => 'required|string',
        ]);

        Setting::find(1)->update([
            'whatsapp' => $request->get('whatsapp'),
            'email' => $request->get('email'),
            'about_us' => $request->get('about_us'),
            'warranty' => $request->get('warranty'),
            'description' => $request->get('description'),
        ]);

        return back()->with('success', 'Updated Successfully.');
    }
}
