 <? php
 aplicación de espacio de nombres \ Http \ Controllers ;

use  Illuminate \ Http \ Request ;
use  App \ Models \ Categorium ;
use  App \ Models \ Evento ;

clase  EventoController  extiende  controlador
{
@@ -23,7 +25,8 @@ índice de función pública ()
     * /
     función  pública create ()
    {
        //
        $ categorias = Categorium :: all ();
         vista de retorno ( "evento / create" , compact ( 'categorias' ));
    }

    / **