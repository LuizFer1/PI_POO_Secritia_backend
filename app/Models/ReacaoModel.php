<?php

namespace App\Models;

use CodeIgniter\Model;

class ReacaoModel extends Model
{
    protected $table            = 'Reacao';
    protected $primaryKey       = 'id_reacao';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [ 'id_usuario', 'id_publicacao'];

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';

    public function list(){
        return $this->findAll();
    } 
    public function create(array $attributes){
        return $this->insert($attributes);
    }
}

?>
 