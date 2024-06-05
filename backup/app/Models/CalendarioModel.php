<?php

namespace App\Models;

use CodeIgniter\Model;

class CalendarioModel extends Model
{
    protected $table            = 'events';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [ 'title', 'color', 'start', 'end'];

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