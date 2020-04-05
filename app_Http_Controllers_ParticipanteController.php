<? php

 aplicación de espacio de nombres \ Http \ Controllers ;

use  Illuminate \ Http \ Request ;
use  App \ Models \ Categorium ;
use  App \ Models \ Participante ;

clase  ParticipanteController  extiende  Controlador
{
    / **
     * Mostrar una lista del recurso.
     * *
     * @return \ Illuminate \ Http \ Response
     * /
     índice de función  pública ()
    {
        $ participantes = Participante :: todos ();
         vista de retorno ( 'participante / index' , compact ( 'participantes' ));
    }

    / **
     * Mostrar el formulario para crear un nuevo recurso.
     * *
     * @return \ Illuminate \ Http \ Response
     * /
     función  pública create ()
    {
         vista de retorno ( 'participante / create' );
    }

    / **
     * Almacene un recurso recién creado en el almacenamiento.
     * *
     * @param \ Illuminate \ Http \ Request $ request
     * @return \ Illuminate \ Http \ Response
     * /
     tienda de funciones  públicas ( Solicitud $ solicitud ) 
    {
        {
        $ validacion = $ request -> validar ([
            'nombrecompleto' => 'requerido | max: 100' ,
            'curp' => 'requerido | max: 18' ,
            'intitucionprocedencia' => 'requerido | max: 100' ,
            'cuenta' => 'requerido | max: 20' ,
            'contraseña' => 'requerido | max: 128' ,
        ]);

        $ participante = Participante :: crear ( $ validacion );

        return  redirect ( 'participante' ) -> with ( 'success' ,
        $ participante -> nombrecompleto .  'guardado satisfactoriamente participante ...' );   
     }
    }

    / **
     * Mostrar el recurso especificado.
     * *
     * @param int $ id
     * @return \ Illuminate \ Http \ Response
     * /
     función  pública show ( $ id )
    {
        //
    }

    / **
     * Mostrar el formulario para editar el recurso especificado.
     * *
     * @param int $ id
     * @return \ Illuminate \ Http \ Response
     * /
     función  pública editar ( $ id )
    {
        $ participante = Categorium :: find ( $ id );
         vista de retorno ( 'participante / edit' ,
            compacto ( 'participante' ));
    }

    / **
     * Actualiza el recurso especificado en el almacenamiento.
     * *
     * @param \ Illuminate \ Http \ Request $ request
     * @param int $ id
     * @return \ Illuminate \ Http \ Response
     * /
     actualización de la función  pública ( Solicitud $ solicitud , $ id ) 
    {
        $ validacion = $ request -> validar ([
            'nombrecompleto' => 'requerido | max: 100' ,
            'curp' => 'requerido | max: 18' ,
            'intitucionprocedencia' => 'requerido | max: 100' ,
            'cuenta' => 'requerido | max: 20' ,
            'contraseña' => 'requerido | max: 128' ,
        ]);

        Participante :: whereId ( $ ID ) -> actualización ( $ validacion );
        volver a  redireccionar ( 'participante' )
            -> con ( 'éxito' , 'Actualizado correctamente ...' );
    }

    / **
     * Eliminar el recurso especificado del almacenamiento.
     * *
     * @param int $ id
     * @return \ Illuminate \ Http \ Response
     * /
     función  pública destruir ( $ id )
    {
        $ participante = Participante :: find ( $ id );
        $ participante -> eliminar ();
        volver a  redireccionar ( 'participante' );
    }
}