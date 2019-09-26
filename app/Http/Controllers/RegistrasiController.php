<?php

namespace App\Http\Controllers;

use DB;
// use App\Direktorat;
// use App\Divisi;
// use App\Bagian;
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
        $direktorat = DB::table("direktorat")->pluck("nama", "id");
        // $direktorat = Direktorat::all();
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
        $divisi = DB::table("divisi")->where("id_direktorat",$id)->pluck("nama_divisi","id");
        return json_encode($divisi);
        // $divisi = Divisi::where('id_direktorat', $id)->get();
        // return response()->json($divisi);
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
        $bagian = DB::table("bagian")->where("id_divisi",$id)->pluck("nama_bagian","id");
        return json_encode($bagian);
    //     $bagian = Bagian::where('id_divisi', $id)->get();
    //     return response()->json($bagian);
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
        $this->validate($request,[
            'direktorat' => 'required',
            'divisi' => 'required',
            'bagian' => 'required',
            'uraianTugas' => 'required',
            'kompetensi' => 'required',
            'temaPelatihan' => 'required',
            'sasaran' => 'required',
            'targetPeserta' => 'required',
            'tempatPenyelenggaraan' => 'required',
            'tanggalPenyelenggaraan' => 'required',
            'jumlahPeserta' => 'required',
            'durasi' => 'required',
            'fileProposal' => 'required',
        ]);

        Submission::create([
            'direktorat' => $request->direktorat,
            'divisi' => $request->divisi,
            'bagian' => $request->bagian,
            'uraianTugas' => $request->uraian_tugas,
            'kompetensi' => $request->kompetensi,
            'temaPelatihan' => $request->tema_pelatihan,
            'sasaran' => $request->sasaran,
            'targetPeserta' => $request->target_peserta,
            'tempatPenyelenggaraan' => $request->tempat_peyelenggaraan,
            'tanggalPenyelenggaraan' => $request->tanggal_penyelenggaraan,
            'jumlahPeserta' => $request->jumlah_peserta,
            'durasi' => $request->durasi,
            'fileProposal' => $request->file_proposal,
        ]);

        // DB::table('pengajuan')->insert([
        //     'direktorat' => $request->direktorat,
        //     'divisi' => $request->divisi,
        //     'bagian' => $request->bagian,
        //     'uraian' => $request->uraian
        // ]);

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
