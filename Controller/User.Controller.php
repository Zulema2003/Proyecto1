<?php

  class User
  {
    public $user;

    public function __construct()
    {
      $this->user=new usuarios();
    }

    public function BuscarUsuario()
    {
      $email=$_POST['email'];
      $pass=$_POST['pass'];

      //var_dump($_POST);

      $us=$this->user->BuscarUser($email,$pass);
      //var_dump($us);

     $usuario=mysqli_fetch_assoc($us);

      var_dump($usuario);
    }
  }
?>
