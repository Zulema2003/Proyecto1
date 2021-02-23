<?php

    //include ("./Framework/Smarty/Smarty.class.php");
    class Home
    {
        public $smarty;

        public function __construct()
        {
            $this->smarty=new Smarty();
        }

        public function Inicio()
        {
          //  $conex=new Conexion();


            $this->smarty->assign('tittle',"Home");
            $this->smarty->display('Home.tpl');
        }

    }
?>