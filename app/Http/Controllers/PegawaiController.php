<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['name'] = 'Alif Taufiqurrahman';
        $birth_date = '2002-05-10'; // contoh tanggal lahir
        $data['my_age'] = date_diff(date_create($birth_date), date_create(date('Y-m-d')))->y;
        $data['hobbies'] = ['Membaca', 'Bermain game', 'Olahraga', 'Menulis', 'Traveling'];
        $data['tgl_harus_wisuda'] = '2028-08-01'; // contoh tanggal harus wisuda
        $data['time_to_study_left'] = (new \DateTime(date('Y-m-d')))->diff(new \DateTime($data['tgl_harus_wisuda']))->days;
        $data['current_semester'] = 3; // contoh semester saat ini
        if ($data['current_semester'] <= 3) {
            $data['info_semester'] = 'Masih Awal, Kejar TAK';
        } else {
            $data['info_semester'] = 'Jangan main-main, kurang-kurangi main game!';
        }
        $data['future_goal'] = 'Menjadi Software Engineer';

        return view('homepegawai', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
