<?php namespace App\Controllers;

use App\Models\LaptopModel;

class Laptop extends BaseController
{
	protected $LaptopModel;
	public function __construct()
	{

		$this->LaptopModel = new LaptopModel();
	}

	public function index()
	{
		$l = $this->LaptopModel->findAll();
		$data = [
			'title' => 'Daftar Laptop',
			'laptop' => $l
		];

		return view('laptop/index',$data);

	}
	public function detail($slug)
	{
		$lm = $this->LaptopModel->getLaptop($slug);
		$data = [
			'title' => 'Detail Laptop',
			'detail' => $lm
		];

		if(empty($lm)){
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Laptop '. $slug .' yang anda cari tidak ditemukan');
		}

		return view('laptop/detail',$data);
	}

	public function create()
	{
		session();
		$data = [
			'title' => 'Tambah Laptop',
			'validation' => \Config\Services::validation()
		];

		return view('laptop/tambah',$data);
	}

	public function save()
	{
		if(!$this->validate([
			'nama' => [
				'rules' => 'required|is_unique[laptop.nama]',
				'errors' => [
					'required' => '{field} tidak boleh kosong',
					'is_unique' => '{field} nama tidak boleh sama'
				]
			]
			])) {
				$validation = \Config\Services::validation();
				return redirect()->to('/laptop/create')->withInput()->with('validation', $validation);
			}


			$dataslug = url_title($this->request->getVar('nama'), '-', true);
			$this->LaptopModel->save([
				'nama' => $this->request->getVar('nama'),
				'gambar' => $this->request->getVar('gambar'),
				'slug' => $dataslug
			]);
			$session = session();
			$session->setFlashdata('alert','Berhasil Menambahkan Data');
			return redirect()->to('/laptop');
		}

		public function delete($id) {
			$this->LaptopModel->delete($id);
			$session = session();
			$session->setFlashdata('alert','Berhasil Menghapus Data');
			return redirect()->to('/laptop');
		}

		public function edit($slug) {
			session();
			$data = [
				'title' => 'Edit Laptop',
				'validation' => \Config\Services::validation(),
				'laptop' => $this->LaptopModel->getLaptop($slug)
			];

			return view('laptop/edit',$data);
		}

		public function update($id) {
			
			if(!$this->validate([
				'nama' => [
					'rules' => "required|is_unique[laptop.nama,id,{$id}]",
					'errors' => [
						'required' => '{field} wajib diisi boss',
						'is_unique' => '{field} sudah ada boss'
					]
				]
			])) {
				$validation = \Config\Services::validation();
				return redirect()->to('/laptop/edit/'.$this->request->getVar('slug'))->withInput()->with('validation',$validation);
			}

			$dataslug = url_title($this->request->getVar('nama'), '-', true);
			$this->LaptopModel->save([
				'id' => $id,
				'nama' => $this->request->getVar('nama'),
				'gambar' => $this->request->getVar('gambar'),
				'slug' => $dataslug
			]);
			session()->setFlashdata('alert', 'Data Berhasil Diupdate');
			return redirect()->to('/laptop');
		}

	}
