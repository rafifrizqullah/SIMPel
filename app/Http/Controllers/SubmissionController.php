<?php

namespace App\Http\Controllers;

use App\Direktorat;
use App\Divisi;
use App\Bagian;
use App\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
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
			return view('submission.index', compact('direktorat'));
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
			$file = $request->file('fileProposal');
			$nama_file = time()."_".$file->getClientOriginalName();
			$tujuan_upload = 'file_proposal';
			$file->move($tujuan_upload,$nama_file);
			
			Submission::create([
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
				'file_proposal' => $nama_file,
			]);

			return redirect()->back();

			// return redirect('/');
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
