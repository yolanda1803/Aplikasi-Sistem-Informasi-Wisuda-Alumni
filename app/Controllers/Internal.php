<?php

namespace App\Controllers;

use PDO;
use App\Models\InfowisudaModel;
use App\Models\PenggunaModel;
use App\Controllers\BaseController;

class Internal extends BaseController
{
    protected $infowisudaModel;
    protected $penggunaModel;
    protected $helpers = ['form', 'fungsi'];
    protected $db;

    public function __construct()
    {
        $this->infowisudaModel = new infowisudaModel();
        $this->penggunaModel = new PenggunaModel();
        $this->db      = \Config\Database::connect();
    }

    public function logout()
    {

        $session = session();
        $session->remove(['idpengguna', 'nama', 'email', 'isLoggedIn']);


        return redirect()->to('/home');
    }

    public function index()
    {

        if (!session()->get('isLoggedIn')) {

            return redirect()->to('/home/login');
        }

        $data = [
            'title' => 'Dashboard',
            'jumlahadmin' => $this->db->table('pengguna')->countAllResults(),
            'jumlahinfowisuda' => $this->db->table('infowisuda')->countAllResults(),
            'jumlahalumni' => $this->db->table('alumni')->countAllResults(),
        ];
        return view('internal/index', $data);
    }

    public function infowisudadaftar()
    {

        if (!session()->get('isLoggedIn')) {

            return redirect()->to('/home/login');
        }
        $data = [
            'title' => 'Daftar Informasi Wisuda',
            'infowisuda' => $this->infowisudaModel->getAll(),
        ];
        return view('internal/infowisudadaftar', $data);
    }

    public function infowisudatambah()
    {

        if (!session()->get('isLoggedIn')) {

            return redirect()->to('/home/login');
        }
        $data = [
            'title' => 'Form Tambah Informasi Wisuda',
            'validation' => \Config\Services::validation(),
            'infowisuda' => $this->infowisudaModel->findAll(),

        ];

        return view('internal/infowisudatambah', $data);
    }

    public function simpaninfowisuda()
    {

        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.png';
        } else {

            $namaFoto = $fileFoto->getRandomName();

            $fileFoto->move('foto', $namaFoto);
        }

        $this->infowisudaModel->save([
            'judul' => $this->request->getVar('judul'),
            'tanggal' => $this->request->getVar('tanggal'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/internal/infowisudadaftar');
    }

    public function hapusinfowisuda($idinfowisuda)
    {

        $infowisuda = $this->infowisudaModel->find($idinfowisuda);

        $this->infowisudaModel->delete($idinfowisuda);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/internal/infowisudadaftar');
    }


    public function infowisudaedit($idinfowisuda)
    {

        if (!session()->get('isLoggedIn')) {

            return redirect()->to('/home/login');
        }
        $data = [
            'title' => 'Form Edit Informasi Wisuda',
            'validation' => \Config\Services::validation(),
            'row' => $this->infowisudaModel->find($idinfowisuda),


        ];

        return view('internal/infowisudaedit', $data);
    }

    public function updateinfowisuda($idinfowisuda)
    {

        $fileFoto = $this->request->getFile('foto');
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('FotoLama');
        } else {

            $namaFoto = $fileFoto->getRandomName();

            $fileFoto->move('foto', $namaFoto);
        }

        $this->infowisudaModel->save([
            'idinfowisuda' => $idinfowisuda,
            'judul' => $this->request->getVar('judul'),
            'tanggal' => $this->request->getVar('tanggal'),
            'stok_infowisuda' => $this->request->getVar('stok_infowisuda'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diedit.');
        return redirect()->to('/internal/infowisudadaftar');
    }


    public function alumnitambah()
    {

        if (!session()->get('isLoggedIn')) {

            return redirect()->to('/home/login');
        }
        if ($this->request->getMethod() === 'post') {

            $fileFoto = $this->request->getFile('foto');
            if ($fileFoto->getError() == 4) {
                $namaFoto = 'default.png';
            } else {

                $namaFoto = $fileFoto->getRandomName();

                $fileFoto->move('foto', $namaFoto);
            }
            $simpan = [
                'namaalumni' => $this->request->getPost('namaalumni'),
                'npm' => $this->request->getPost('npm'),
                'jeniskelamin' => $this->request->getPost('jeniskelamin'),
                'ipk' => $this->request->getPost('ipk'),
                'jurusan' => $this->request->getPost('jurusan'),
                'prodi' => $this->request->getPost('prodi'),
                'angkatan' => $this->request->getPost('angkatan'),
                'tahunlulus' => $this->request->getPost('tahunlulus'),
                'email' => $this->request->getPost('email'),
                'foto' => $namaFoto,
            ];
            $this->db->table('alumni')->insert($simpan);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
            return redirect()->to('/internal/alumnidaftar');
        } else {
            $data = [
                'title' => 'Tambah Alumni',
            ];
            return view('internal/alumnitambah', $data);
        }
    }

    public function alumniedit($id)
    {

        if (!session()->get('isLoggedIn')) {

            return redirect()->to('/home/login');
        }
        if ($this->request->getMethod() === 'post') {

            $fileFoto = $this->request->getFile('foto');
            if ($fileFoto->getError() == 4) {
                $namaFoto = $this->request->getVar('FotoLama');
            } else {

                $namaFoto = $fileFoto->getRandomName();

                $fileFoto->move('foto', $namaFoto);
            }
            $simpan = [
                'namaalumni' => $this->request->getPost('namaalumni'),
                'npm' => $this->request->getPost('npm'),
                'jeniskelamin' => $this->request->getPost('jeniskelamin'),
                'ipk' => $this->request->getPost('ipk'),
                'jurusan' => $this->request->getPost('jurusan'),
                'prodi' => $this->request->getPost('prodi'),
                'angkatan' => $this->request->getPost('angkatan'),
                'tahunlulus' => $this->request->getPost('tahunlulus'),
                'email' => $this->request->getPost('email'),
                'foto' => $namaFoto,
            ];
            $this->db->table('alumni')->where('idalumni', $id)->update($simpan);
            session()->setFlashdata('pesan', 'Data berhasil diedit.');
            return redirect()->to('/internal/alumnidaftar');
        } else {
            $data = [
                'title' => 'Edit Alumni',
                'id' => $id,
                'row' => $this->db->table('alumni')->where('idalumni', $id)->get()->getRow()

            ];

            session()->setFlashdata('pesan', 'Data berhasil diedit.');
            return view('internal/alumniedit', $data);
        }
    }

    public function alumnidaftar()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/home/login');
        }
        $data = [
            'title' => 'Daftar Alumni',
            'alumni' => $this->db->table('alumni')->get()->getResult()
        ];
        return view('internal/alumnidaftar', $data);
    }

    public function alumnihapus($id)
    {
        $this->db->table('alumni')->where('idalumni', $id)->delete();
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/internal/alumnidaftar');
    }

    public function profiledit()
    {
        $idpengguna = session('idpengguna');
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/home/login');
        }
        $data = [
            'title' => 'Edit Profil',
            'validation' => \Config\Services::validation(),
            'pengguna' => $this->penggunaModel->find($idpengguna),
        ];
        return view('internal/profiledit', $data);
    }


    public function updateprofil($idpengguna)
    {
        $this->penggunaModel->save([
            'idpengguna' => $idpengguna,
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'nohp' => $this->request->getVar('nohp'),
            'password' => $this->request->getVar('password'),
        ]);
        $session = session();
        $session->set('nama', $this->request->getVar('nama'));
        $session->set('email', $this->request->getVar('email'));
        $session->set('nohp', $this->request->getVar('nohp'));
        session()->setFlashdata('pesan', 'Profil berhasil diedit.');
        return redirect()->to('/internal/profiledit');
    }
}
