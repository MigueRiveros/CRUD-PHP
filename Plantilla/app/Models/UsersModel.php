<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model{

    protected $table = "users";
    protected $allowedFields = ['id','nombre','telefono','correo'];

    public function getUsers(){

        return $this->findAll();

    }

    public function addUsers($dato){

        return $this->save($dato);

    }
    
    public function getUser($id){

        return $this->where('id',$id)->first($id);

    }

    public function updateUser($id,$datos){

        return  $this-> update($id,$datos);
    }

}