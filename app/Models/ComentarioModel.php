<?php

namespace App\Models;

use CodeIgniter\Model;

class ComentarioModel extends Model
{
    protected $table            = 'Comentario';
    protected $primaryKey       = 'id_comentario';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_publicacao', 'corpo', 'id_usuario', 'created_at'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
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
    public function getComentarioByCorpo($corpo) {
        return $this->where('corpo', $corpo)->first();
    }
    public function create(array $attributes){
        return $this->insert($attributes);
    }
}

?>
