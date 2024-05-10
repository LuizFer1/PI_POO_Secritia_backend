<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table            = 'Usuario';
    protected $primaryKey       = 'id_usuario';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome_usuario',
        'email_usuario',
        'senha_usuario',
        'cargo_usuario',
        'id_grupo',
        'is_ceo',
        'is_admin',
        'is_leader'
    ];

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
    public function getUserByEmail($email) {
        return $this->where('email_usuario', $email)->first();
    }
    public function create(array $attributes){
        return $this->insert($attributes);
    }
    public function checkCredentials($email, $password)
    {
        $user = $this->where('email_usuario', $email)->first();

        if ($user && password_verify($password, $user['senha_usuario'])) {
            return $user;
        }

        return null;
    }
}
