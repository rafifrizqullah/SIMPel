<?php

namespace App\Http\Controllers;

use App\Direktorat;
use App\Divisi;
use App\Bagian;
use App\Training ;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $direktorat = Direktorat::pluck("nama","id");
        return view('pages.submission', compact('direktorat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Training::create([
            'direktorat' => $request->direktorat,
            'divisi' => $request->divisi,
            'bagian' => $request->bagian,
            'uraian_tugas' => $request->uraianTugas,
            'kompetensi' => $request->kompetensi,
            'tema_pelatihan' => $request->temaPelatihan,
            'sasaran' => $request->sasaran,
            'target_peserta' => $request->targetPeserta,
            'tempat_penyelenggaraan' => $request->tempatPenyelenggaraan,
            'tanggal_penyelenggaraan' => $request->tanggalPenyelenggaraan,
            'jumlah_peserta' => $request->jumlahPeserta,
            'durasi' => $request->durasi,
            'uang_saku' => $request->uangSaku,
            'uang_fasilitator' => $request->uangFasilitator,
            'narasumber' => $request->narasumber,
            'konsumsi' => $request->konsumsi,
            'akomodasi' => $request->akomodasi,
            'jumlah' => $request->jumlah,
            'file_proposal' => $request->fileProposal,
        ]);

        return redirect('/');
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
