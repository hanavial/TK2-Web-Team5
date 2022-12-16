<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Nilai::orderBy('created_at', 'DESC')->get();

        //Data untuk Grafik
        $mahasiswa = [];
        $nilai_total = [];
        $grade = [];

        foreach ($data as $dt) {
            $mahasiswa[] = $dt->nama;
            $nilai_total[] = $dt->total;
            $grade[] = $dt->grade;
        }

        return view('pages.index',compact('data','mahasiswa','nilai_total','grade'));
    }

    /**
     * Display a listing of the resource with table view.
     *
     * @return \Illuminate\Http\Response
     */
    public function table()
    {
        $data = Nilai::orderBy('created_at', 'DESC')->get();

        return view('pages.table',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'quiz' => 'required',
            'tugas' => 'required',
            'absensi' => 'required',
            'praktek' => 'required',
            'uas' => 'required'
        ]);

        // Quiz 10%, Tugas 20%, Absensi 10%, Praktek 20%, Uas 40%
        // $total = ($request->quiz * 0.1) + ($request->tugas * 0.2) + ($request->absensi * 0.1) + ($request->praktek * 0.2) + ($request->uas * 0.4);

        // Rata Rata
        $total = ($request->quiz + $request->tugas + $request->absensi + $request->praktek + $request->uas) / 5;

        if ($total <= 65) {
            $grade = "D";
        } elseif ($total <= 75) {
            $grade = "C";
        } elseif ($total <= 85) {
            $grade = "B";
        } elseif ($total <= 100) {
            $grade = "A";
        }

        Nilai::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'quiz' => $request->quiz,
            'tugas' => $request->tugas,
            'absensi' => $request->absensi,
            'praktek' => $request->praktek,
            'uas' => $request->uas,
            'total' => $total,
            'grade' => $grade,
        ]);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Nilai::findOrFail($id);
        return view('pages.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Nilai::findOrFail($id);
        return view('pages.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Nilai::findOrFail($id);

        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'quiz' => 'required',
            'tugas' => 'required',
            'absensi' => 'required',
            'praktek' => 'required',
            'uas' => 'required'
        ]);

        // Quiz 10%, Tugas 20%, Absensi 10%, Praktek 20%, Uas 40%
        // $total = ($request->quiz * 0.1) + ($request->tugas * 0.2) + ($request->absensi * 0.1) + ($request->praktek * 0.2) + ($request->uas * 0.4);

        // Rata Rata
        $total = ($request->quiz + $request->tugas + $request->absensi + $request->praktek + $request->uas) / 5;

        if ($total <= 65) {
            $grade = "D";
        } elseif ($total <= 75) {
            $grade = "C";
        } elseif ($total <= 85) {
            $grade = "B";
        } elseif ($total <= 100) {
            $grade = "A";
        }

        $data->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'quiz' => $request->quiz,
            'tugas' => $request->tugas,
            'absensi' => $request->absensi,
            'praktek' => $request->praktek,
            'uas' => $request->uas,
            'total' => $total,
            'grade' => $grade,
        ]);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Nilai::findOrFail($id);
        $data->delete();

        return redirect()->route('index');
    }
}
