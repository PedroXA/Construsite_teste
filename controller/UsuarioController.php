<?php
class UsuarioController{


    public function all(){
        $obj = new Usuario();
        $usuarios = $obj->all();

        include 'view/usuario_all.php';
    }

    public function create(){
        $obj = new Usuario();

        if( isset($_POST['email_cliente']) && isset($_POST['nome_cliente']) && isset($_POST['telefone_cliente']) && isset($_POST['senha_cliente']) && isset($_POST['data_nasc_cliente']) ){
            $obj->setEmail_cliente($_POST['email_cliente']);
            $obj->setNome_cliente($_POST['nome_cliente']);
            $obj->setTelefone_cliente($_POST['telefone_cliente']);
            $obj->setSenha_cliente($_POST['senha_cliente']);
            $obj->setData_nasc_cliente($_POST['data_nasc_cliente']);
            $obj->create();
        }

        include 'view/usuario_create.php';
    }

    public function read(){

    }

    public function update(){
        if( !isset($_GET['id']) ){
            echo "Id não informado";
            exit;
        }

        $obj = new Usuario();

        $obj->setId($_GET['id']);

        if( isset($_POST['email_cliente']) && isset($_POST['nome_cliente']) && isset($_POST['telefone_cliente']) && isset($_POST['senha_cliente']) && isset($_POST['data_nasc_cliente']) ){
            $obj->setEmail_cliente($_POST['email_cliente']);
            $obj->setNome_cliente($_POST['nome_cliente']);
            $obj->setTelefone_cliente($_POST['telefone_cliente']);
            $obj->setSenha_cliente($_POST['senha_cliente']);
            $obj->setData_nasc_cliente($_POST['data_nasc_cliente']);
            $obj->update();
        }

        $usuario = $obj->read();

        include 'view/usuario_update.php';
    }

    public function delete(){

        if( !isset($_GET['id']) ){
            echo "Id não informado";
            exit;
        }

        $obj = new Usuario();
        $obj->setId($_GET['id']);
        $obj->delete();

        
    }


}