<?php

namespace App\Http\Controllers;

use App\Direktorat;
use App\Divisi;
use App\Bagian;
use App\Submission;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $direktorat = Direktorat::pluck("nama","id");
        return view('registrasi.index', compact('direktorat'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDivisi($id)
    {
        //
        $divisi = Divisi::where('id_direktorat', $id)->pluck("nama_divisi","id");
        return response()->json($divisi);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getBagian($id)
    {
        //
        $bagian = Bagian::where('id_divisi', $id)->pluck("nama_bagian","id");
        return response()->json($bagian);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $messages = [
        //     'required' => ':attribute wajib diisi'
        // ];

        // $this->validate($request,[
        //     'direktorat' => 'required',
        //     'divisi' => 'required',
        //     'bagian' => 'required',
        //     'uraianTugas' => 'required',
        //     'kompetensi' => 'required',
        //     'temaPelatihan' => 'required',
        //     'sasaran' => 'required',
        //     'targetPeserta' => 'required',
        //     'tempatPenyelenggaraan' => 'required',
        //     'tanggalPenyelenggaraan' => 'required',
        //     'jumlahPeserta' => 'required',
        //     'durasi' => 'required',
        //     'fileProposal' => 'required',
        // ],$messages);

        Submission::create([
            'direktorat' => $request->direktorat,
            'divisi' => $request->divisi,
            'bagian' => $request->bagian,
            'uraian_tugas' => $request->uraianTugas,
            'kompetensi' => $request->kompetensi,
            'tema_pelatihan' => $request->temaPelatihan,
            'sasaran' => $request->sasaran,
            'target_peserta' => $request->targetPeserta,
            'tempat_penyelenggaraan' => $request->tempatPeyelenggaraan,
            'tanggal_penyelenggaraan' => $request->tanggalPenyelenggaraan,
            'jumlah_peserta' => $request->jumlahPeserta,
            'durasi' => $request->durasi,
            'file_proposal' => $request->fileProposal,
        ]);

        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
