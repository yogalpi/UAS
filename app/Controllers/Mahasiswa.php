<?php 

namespace App\Controllers;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController{

    private $mahasiswa;

    public function __construct(){
        $this->mahasiswa = new MahasiswaModel();
    }

    public function index(): string{
        $data = ['mahasiswa' => $this->mahasiswa->findAll()];
        return view('Mahasiswa/mahasiswaList', $data);
    }
    
    public function formMahasiswa(){
        return view('mahasiswa/mahasiswaForm');
    }
    public function editMahasiswa($nim)
    {
        $data = [
            'mahasiswa' => $this->mahasiswa->where(['nim' => $nim])->first()
        ];
        return view('mahasiswa/mahasiswaForm', $data);
    }

    public function simpanMahasiswa(){
        $post = $this->request->getPost(['nim', 'nama', 'program_studi', 'konsentrasi']);
        
        if(!$this->validateData($post, [
            'nim' => 'required',
            'nama' => 'required',
            'program_studi' => 'required',
            'konsentrasi' => 'required'
        ])){
            return view('mahasiswa/mahasiswaForm', [
                'mahasiswa' => $this->mahasiswa->where(['nim' => $post['nim']])->first(),
                'errors' => $this->validator->getErrors()
            ]);
        }else{
            $this->mahasiswa->save([
                'nim' =>$post['nim'],
                'nama' =>$post['nama'],
                'program_studi' =>$post['program_studi'],
                'konsentrasi' =>$post['konsentrasi']
            ]);
        }

        return view('Mahasiswa/mahasiswaList', [
            'sukses' => 'Data Berhasil Di Ubah :)',
            'mahasiswa' => $this->mahasiswa->findAll()]);
    }

}

?>