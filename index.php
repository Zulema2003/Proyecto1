<?php
    incluir ( 'Controlador / Home.controller.php' );

   if ( isset ( $ _GET [ 'controlador' ]) && isset ( $ _GET [ 'm�todo' ]))
   {
        $ controlador = $ _GET [ 'controlador' ];
        $ m�todo = $ _GET [ 'm�todo' ];
   }
   m�s
   {
        $ controller = "Inicio" ;
        $ m�todo = "Inicio" ;
   }
   
   if ( class_exists ( $ controlador ) && method_exists ( $ controlador , $ m�todo ))
   {
        $ clase = nuevo  $ controlador ;
        $ clase -> $ m�todo ();
   }
   m�s
   {
       echo  "clase no existe o el metodo es incorrecto" ;   
   }
 
?>
