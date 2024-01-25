<?php 

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model {
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nama', 'program_studi', 'konsentrasi'];
}

?>