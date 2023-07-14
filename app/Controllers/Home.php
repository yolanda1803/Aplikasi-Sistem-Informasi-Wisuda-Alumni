<?php

namespace App\Controllers;

use App\Models\InfowisudaModel;
use App\Models\PenggunaModel;
use App\Controllers\BaseController;

class Home extends BaseController
{

    protected $infowisudaModel;
    protected $penggunaModel;
    protected $db;

    protected $helpers = ['form', 'fungsi'];

    public function __construct()
    {
        $this->infowisudaModel = new InfowisudaModel();
        $this->penggunaModel = new PenggunaModel();
        $this->db      = \Config\Database::connect();
    }

    public function login()
    {
        $data['title'] = 'Data Informasi Wisuda & Alumni Polinela';

        $data['infowisuda'] = $this->infowisudaModel->getAll();
        return view('home/login', $data);
    }

    public function doLogin()
    {
        $session = session();
        $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required'
        ]);
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $pengguna = $this->penggunaModel->where('email', $email)->first();
        if ($pengguna) {
            $pass = $pengguna['password'];
            if ($password === $pass) {
                $ses_data = [
                    'idpengguna' => $pengguna['idpengguna'],
                    'nama' => $pengguna['nama'],
                    'email' => $pengguna['email'],
                    'nohp' => $pengguna['nohp'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                session()->setFlashdata('alert', 'Anda berhasil login');
                return redirect()->to('/internal');
            } else {
                $session->setFlashdata('msg', 'Password salah');

                return redirect()->to('/home/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email tidak terdaftar');
            return redirect()->to('/home/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Data Informasi Wisuda & Alumni Polinela';
        $data['infowisuda'] = $this->db->table('infowisuda')
            ->orderBy('tanggal', 'desc')
            ->limit(3)
            ->get()->getResultArray();
        return view('home/index', $data);
    }

    public function alumnidaftar()
    {
        $data = [
            'title' => 'Daftar Alumni',
            'alumni' => $this->db->table('alumni')->get()->getResult()
        ];
        return view('home/alumnidaftar', $data);
    }

    public function infowisudadaftar()
    {
        $data['title'] = 'Informasi Wisuda';
        $data['infowisuda'] = $this->infowisudaModel->getAll();
        return view('home/infowisudadaftar', $data);
    }

    public function infowisudadetail($idinfowisuda)
    {
        $data['title'] = 'Data Informasi Wisuda & Alumni Polinela';

        $data['infowisuda'] = $this->infowisudaModel->getAll();

        $cariinfowisuda = $this->infowisudaModel->where('idinfowisuda', $idinfowisuda)->first();
        $data['datainfowisuda'] = $cariinfowisuda;

        return view('home/infowisudadetail', $data);
    }
}
