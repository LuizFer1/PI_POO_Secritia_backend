<?php

namespace App\Models;

use CodeIgniter\Model;

class ReacaoModel extends Model
{
    protected $table            = 'Reacao';
    protected $primaryKey       = 'id_reacao';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['tipo', 'id_usuario', 'id_publicacao'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';

    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function list(){
        return $this->findAll();
    }
    public function getReacaoByTipo($tipo) {
        return $this->where('tipo', $tipo)->first();
    }
    public function create(array $attributes){
        return $this->insert($attributes);
    }
}

?>
