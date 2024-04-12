<?php

namespace App\Controllers;

use App\Models\UsersModel;
use PHPUnit\TextUI\XmlConfiguration\Validator;

class Inicio extends BaseController
{
    public function index(): string
    {
        $model = new UsersModel();
        $datos = $model->getUsers();



        return view('layout/header') . view('/users/listado', compact('datos')) . view('layout/footer');
    }

    public function add()
    {

        return view('layout/header') . view('/users/add') . view('layout/footer');
    }

    public function store()
    {
        $validacion = $this->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'correo' => 'required'

        ]);


        if ($_POST && $validacion) {
            //print_r($_POST);
            $datos = [
                'nombre' => $_POST['nombre'],
                'telefono' => $_POST['telefono'],
                'correo' => $_POST['correo'],
            ];
            $model = new UsersModel();
            $model->addUsers($datos);
            session()->setFlashdata('mensaje', 'registrado exitosamente');

            return redirect()->to(base_url('Inicio'));
        } else {
            $error = $this->validator->listErrors();
            session()->setFlashdata('mensaje', $error);
            return redirect()->to(base_url('Inicio/add'));
        }
    }

    public function edit($id)
    {

        $model = new UsersModel();
        $dato = $model->getUser($id);

        return view('layout/header') . view('/users/edit', compact('dato')) . view('layout/footer');

    }

    public function update()
    {

        $validacion = $this->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'correo' => 'required'

        ]);


        if ($validacion) {
            print_r($_POST);
            $datos = [
                'id' => $_POST['id'],
                'nombre' => $_POST['nombre'],
                'telefono' => $_POST['telefono'],
                'correo' => $_POST['correo'],
            ];

            $id = $_POST['id'];

            $model = new UsersModel();
            $model->updateUser($id,$datos);

            session()->setFlashdata('mensaje', 'editado exitosamente');

            return redirect()->to(base_url('Inicio'));
        } else {
            $id = $_POST['id'];
            $error = $this->validator->listErrors();
            session()->setFlashdata('mensaje', $error);
            return redirect()->to(base_url('Inicio/edit/'.$id));
        }
    }


    public function delete($id){
        $model= new UsersModel();
        $model ->delete($id);
        session()->setFlashdata('mensaje','User Eliminado');
        return redirect()->to(base_url('Inicio'));
    }


}
