<?php

namespace App\Controllers;

use App\Models\DairyModel;

class Dairy extends BaseController
{
	// instansiasi Dairy Model
	protected $dairyModel;

	public function __construct()
	{
		$this->dairyModel = new DairyModel();
	}

	// method untuk menampilkan halaman utama (Dairy::index)
	public function index()
	{
		// memvalidasi apakah sudah login
		if (session()->has('nama')) {
			$data = [
				'title' => 'Dairy Apps',
				'validation' => \Config\Services::validation()
			];

			return view('dairy/index', $data);
		} else {
			// mengarahkan ke halaman login
			return redirect()->to('/');
		}
	}

	// methond untuk menampilkan halaman tulisan alfi (Dairy::tulisanku)
	public function mutawakkil()
	{
		if (session()->has('nama')) {
			$dairy = $this->dairyModel->where('penulis', 'Mutawakkil Alallah')->findAll();

			$data = [
				'title' => 'Mutawakkil Alallah',
				'dairy' => $dairy
			];

			return view('dairy/mutawakkil', $data);
		} else {
			// mengarahkan ke halaman login
			return redirect()->to('/');
		}
	}

	// methond untuk menampilkan halaman tulisan mutawakkil (Dairy::pesan)
	public function alfi()
	{
		if (session()->has('nama')) {
			$dairy = $this->dairyModel->where('penulis', 'Alfi Nurindiana')->findAll();

			$data = [
				'title' => 'Alfi Nurindiana',
				'dairy' => $dairy
			];

			return view('dairy/alfi', $data);
		} else {
			// mengarahkan ke halaman login
			return redirect()->to('/');
		}
	}

	// method untuk menyimpan data (Dairy::simpan)
	public function simpan()
	{
		// validasi
		if (!$this->validate([
			'judul' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Isi Judul Terlebih dahulu'
				]
			],
			'keterangan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Isi Terlebih dahulu'
				]
			]
		])) {

			return redirect()->to('/Dairy')->withInput();
		}

		// simpan data ke database
		$this->dairyModel->save([
			'penulis' => $this->request->getVar('penulis'),
			'judul' => $this->request->getVar('judul'),
			'keterangan' => $this->request->getVar('keterangan')
		]);

		// set notifikasi
		session()->setFlashdata('notifikasi', 'Dairy berhasil di kirim !');

		// arahkan ke halaman dairy (Dairy::index)
		return redirect()->to('/Dairy');
	}

	//--------------------------------------------------------------------

}
