<? php
use  App \ Models \ Organizador ;
use  Illuminate \ Support \ Facades \ Validator ;


clase  OrganizadorController  extiende  Controlador
{
    / **
@@ -15,8 +16,12 @@ class OrganizadorController extiende el controlador
     * /
     índice de función  pública ()
    {

        $ organizador = Organizador :: all ();
         vista de retorno ( 'organizador / index' , compacto ( 'organizador' ));

        //

    }

    / **
@@ -26,7 +31,11 @@ índice de función pública ()
     * /
     función  pública create ()
    {

         vista de retorno ( 'organizador / create' );

        //

    }

    / **
@@ -37,6 +46,7 @@ public function create ()
     * /
     tienda de funciones  públicas ( Solicitud $ solicitud ) 
    {

  // print_r ($ request-> all ()); exit;


@@ -76,13 +86,21 @@ tienda de funciones públicas (Solicitud $ solicitud)

        $ organizador = Organizador :: crear ( $ campos );
        return  redirect ( 'organizador' ) -> with ( 'success' , $ organizador -> nombreorazonsocial . 'guardado satisfactoriamente ...' );    

        //

    }

    / **
     * Mostrar el recurso especificado.
     * *
     // * @param int $ id
     // * @return \ Illuminate \ Http \ Response
     * @param int $ id
     * @return \ Illuminate \ Http \ Response
     * /
     función  pública show ( $ id )
    {
@@ -97,9 +115,13 @@ show de funciones públicas ($ id)
     * /
     función  pública editar ( $ id )
    {

        $ organizador = Organizador :: find ( $ id );
        vista de retorno ( 'organizador / edit' ,
        compacto ( 'organizador' ));

        //

    }

    / **
@@ -111,6 +133,7 @@ edición de función pública ($ id)
     * /
     actualización de la función  pública ( Solicitud $ solicitud , $ id ) 
    {

        $ campos = [ 'id' => $ id ,
        'nombreorazonsocial' => $ request [ 'nombreorazonsocial' ],
        'rfc' => $ request [ 'rfc' ],
@@ -121,6 +144,9 @@ actualización de la función pública (Solicitar $ solicitud, $ id)
        'direccion' => $ request [ 'direccion' ]];
        Organizador :: whereId ( $ id ) -> actualización ( $ campos );
         redirección de retorno ( 'organizador' );

        //

    }

    / **
@@ -131,8 +157,12 @@ actualización de la función pública (Solicitar $ solicitud, $ id)
     * /
     función  pública destruir ( $ id )
    {

        $ organizador = Organizador :: find ( $ id );
        $ organizador -> delete ();
         redirección de retorno ( 'organizador' );

        //

    }
}