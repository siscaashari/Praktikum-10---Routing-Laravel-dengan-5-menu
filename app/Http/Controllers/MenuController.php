<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'Ini adalah aplikasi routing Laravel untuk praktikum 10',
            'version' => '1.0.0'
        ];
        return view('about', $data);
    }

    public function profile($name = null)
    {
        $userName = $name ?? 'Guest';
        return view('profile', ['name' => $userName, 'title' => 'User Profile']);
    }

    public function contactForm()
    {
        return view('contact', ['title' => 'Contact Us']);
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        return redirect()->route('contact.form')
            ->with('success', 'Pesan berhasil dikirim!');
    }

    public function dashboard()
    {
        return view('admin.dashboard', ['title' => 'Admin Dashboard']);
    }

    public function settings()
    {
        return view('admin.settings', ['title' => 'Pengaturan']);
    }
}