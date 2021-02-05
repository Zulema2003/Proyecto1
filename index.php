<?php
    incluir ( 'Controlador / Home.controller.php' );

   if ( isset ( $ _GET [ 'controlador' ]) && isset ( $ _GET [ 'método' ]))
   {
        $ controlador = $ _GET [ 'controlador' ];
        $ método = $ _GET [ 'método' ];
   }
   más
   {
        $ controller = "Inicio" ;
        $ método = "Inicio" ;
   }
   
   if ( class_exists ( $ controlador ) && method_exists ( $ controlador , $ método ))
   {
        $ clase = nuevo  $ controlador ;
        $ clase -> $ método ();
   }
   más
   {
       echo  "clase no existe o el metodo es incorrecto" ;   
   }
 
?>
