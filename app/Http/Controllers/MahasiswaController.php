<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = mahasiswa::all();
        return view('view-data', compact('data'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('form-input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tanggal' => 'required|date',
            'program_studi' => 'required|in:Teknik Arsitektur,Teknik Sipil,Teknik Mesin,Teknik Elektro,Teknologi Informasi,Teknik Industri,Teknik Lingkungan',
            // Aturan validasi lainnya
        ]);

        $mahasiswa = new mahasiswa();
        $mahasiswa->nama=$request->nama;
        $mahasiswa->nim=$request->nim;
        $mahasiswa->password=$request->password;
        $mahasiswa->email=$request->email;
        $mahasiswa->tanggal = $request->tanggal;
        $mahasiswa->gender=$request->gender;
        $mahasiswa->semester = implode(', ', $request->semester);
        $mahasiswa->program_studi=$request->program_studi;
        $mahasiswa->alamat=$request->alamat;
        $mahasiswa->usia=$request->usia;
        $mahasiswa->telepon=$request->telepon;
        $mahasiswa->save();
        return redirect ('mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mahasiswa $mahasiswa)
    {
        return view ('edit-data', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        //

        $mahasiswa->nama=$request->nama;
        $mahasiswa->nim=$request->nim;
        $mahasiswa->password=$request->password;
        $mahasiswa->email=$request->email;
        $mahasiswa->tanggal = $request->tanggal;
        $mahasiswa->gender=$request->gender;
        $mahasiswa->semester = implode(', ', $request->semester);
        $mahasiswa->program_studi=$request->program_studi;
        $mahasiswa->alamat=$request->alamat;
        $mahasiswa->usia=$request->usia;
        $mahasiswa->telepon=$request->telepon;
        $mahasiswa->save();
        return redirect ('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
        
        $mahasiswa->delete();
        return redirect('mahasiswa')->with('success', 'Mahasiswa deleted successfully');;
    }
}
