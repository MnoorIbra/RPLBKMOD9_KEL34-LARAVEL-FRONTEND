<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{


    public function postLogin(Request $request)
    {
        $client = new Client();

        $response = $client->post('http://localhost:5265/api/UserAPI/login', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'json' => [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
            ],
        ]);

        $body = $response->getBody();
        $data = json_decode($body);

        // Check if login is successful based on the API response
        if ($response->getStatusCode() == 200) {
            // Jika login berhasil, kirim data ke tampilan
            return redirect()->back()->with('message', 'Login berhasil');
        } else {
            // Jika login gagal, atur pesan kesalahan dan kembali ke halaman login
            return redirect('/login')->with('message', 'Login failed. Please try again.');
        }
    }

    public function showLoginForm(){
        return view('login');
    }
}
