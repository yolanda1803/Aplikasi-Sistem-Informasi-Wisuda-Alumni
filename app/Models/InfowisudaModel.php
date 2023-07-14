<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class InfowisudaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'infowisuda';
    protected $primaryKey       = 'idinfowisuda';
    protected $allowedFields    = ['judul', 'tanggal', 'deskripsi', 'foto'];

    // Dates
    protected $useTimestamps = true;

    function getAll()
    {
        $builder = $this->db->table('infowisuda')->orderBy('idinfowisuda', 'desc');
        $query = $builder->get();

        return $query->getResultArray();
    }

    function getInfowisuda()
    {
        $builder = $this->db->table('infowisuda');
        $query = $builder->get();

        return $query->getResultArray();
    }
}
