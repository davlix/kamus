<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KamusController extends Controller
{
    // ...

    public function checkMeaning(Request $request)
    {
        // Mendapatkan kata dari input form
        $word = $request->input('word');

        // Memanggil API Dictionary
        $response = Http::get("https://dictionaryapi.dev/api/v2/entries/en_US/{$word}");

        // Memeriksa apakah request sukses (status code 200)
        if ($response->successful()) {
            // Mendapatkan data JSON dari respons
            $data = $response->json();

            // Lakukan sesuatu dengan data, seperti menyimpan ke database

            // Contoh: Menyimpan ke database riwayat kata yang diperiksa
            // History::create([
            //     'user_id' => auth()->user()->id,
            //     'word' => $word,
            //     'meaning' => $data,
            // ]);

            // Kembalikan tampilan dengan data hasil
            return view('result', ['word' => $word, 'meaning' => $data]);
        } else {
            // Jika request gagal, tangani kesalahan di sini
            $error = $response->json(); // Mendapatkan data JSON dari pesan kesalahan
            return redirect()->back()->with('error', 'Gagal mendapatkan arti kata.');
        }
    }

    public function index()
{
    return view('welcome');
}


}
