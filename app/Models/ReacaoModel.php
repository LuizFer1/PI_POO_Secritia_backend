<?php

namespace App\Models;

use CodeIgniter\Model;

class ReacaoModel extends Model
{
    protected $table = 'Reacao';
    protected $primaryKey = 'id_reacao';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['id_usuario', 'id_publicacao'];

    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';


    public function list()
    {
        return $this->findAll();
    }
    public function create(array $attributes)
    {
        return $this->insert($attributes);
    }
    public function listUser($user_id)
    {
        return $this->select('id_publicacao')->where('id_usuario', $user_id)->get()->getResultArray();
    }
    public function deleteRecord(array $data)
    {
        $deleted = $this->where($data)->delete();

        if ($deleted) {
            return 200;
        }

        return 500;
    }
}

