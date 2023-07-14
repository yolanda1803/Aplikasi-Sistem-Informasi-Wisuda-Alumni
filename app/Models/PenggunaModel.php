<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table      = 'pengguna';
    protected $primaryKey = 'idpengguna';

    protected $allowedFields = ['nama', 'email', 'password', 'nohp'];
    protected $useTimestamps = true;
}
