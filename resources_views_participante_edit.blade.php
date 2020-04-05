<? php
@extends ( ' plantilla ' )

@section ( ' contenido ' )
< estilo >
  .uper {
    margen superior : 40 px ;
  }
</ estilo >
< div  class = " card uper " >
  < div  class = " card-header " >
    Editar Participante
  </ div >
  < div  class = " card-body " >
    @if ( $ errores -> any () )
      < div  class = " alert alert-danger " >
        < ul >
            @foreach ( $ errores -> all () como  $ error )
              < li > {{ $ error } } </ li >  
            @endforeach
        </ ul >
      </ Div > < br />
    @terminara si
      < form  method = " POST "
      action = " {{ route ( ' participante.update ' , $ participante -> id ) } } "  
      enctype = " multipart / form-data " >
        {{ csrf_field () } } 
        @method ( ' PUT ' )
        < div  class = " form-group " >
              @csrf
              < label  for = " id " > Identificador modificado por mishos: </ label >
              < input  type = " text " 
              clase = " control de formulario " 
              readonly = " verdadero "
              valor = " {{ $ participante -> id } } "
              nombre = " id " />
          </ div >

          < div  class = " form-group " >
              @csrf
              < label  for = " nombrecompleto " > nombre del participante: </ label >
              < input  type = " text " 
              valor = " {{ $ participante -> nombrecompleto } } "
              clase = " control de formulario " 
              nombre = " nombrecompleto " />
          </ div >
          < div  class = " form-group " >
              @csrf
              < label  for = " curp " > Curp: </ label >
              < input  type = " text " 
              valor = " {{ $ participante -> curp } } "
              clase = " control de formulario " 
              nombre = " curp " />
          </ div >
          < div  class = " form-group " >
              @csrf
              < label  for = " intitucionprocedencia " > Institucion de procedencia: </ label >
              < input  type = " text " 
              value = " {{ $ participante -> intitucionprocedencia } } "
              clase = " control de formulario " 
              name = " intitucionprocedencia " />
          </ div >
          < div  class = " form-group " >
              @csrf
              < label  for = " cuenta " > Cuenta: </ label >
              < input  type = " text " 
              valor = " {{ $ participante -> cuenta } } "
              clase = " control de formulario " 
              nombre = " cuenta " />
          </ div >
          < div  class = " form-group " >
              @csrf
              < label  for = " password " > Contraseña: </ label >
              < input  type = " text " 
              valor = " {{ $ participante -> contraseña } } "
              clase = " control de formulario " 
              nombre = " contraseña " />
          </ div >
          < etiqueta > leonel </ etiqueta >
          < button  type = " submit "  class = " btn btn-primary " > Guardar </ button >
      </ form >
  </ div >
</ div >
@endsection