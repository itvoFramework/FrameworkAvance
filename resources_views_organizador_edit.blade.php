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
    Editar Categoría
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
      action = " {{ route ( ' categoria.update ' , $ categoria -> id ) } } "  
      enctype = " multipart / form-data " >
        {{ csrf_field () } } 
        @method ( ' PUT ' )
        < div  class = " form-group " >
              @csrf
              < label  for = " id " > Identificador modificado por cardoso: </ label >
              < input  type = " text " 
              clase = " control de formulario " 
              readonly = " verdadero "
              valor = " {{ $ categoria -> id } } "
              nombre = " id " />
          </ div >

          < div  class = " form-group " >
              @csrf
              < label  for = " descripcion " > Categoría: </ label >
              < input  type = " text " 
              valor = " {{ $ categoria -> descripcion } } "
              clase = " control de formulario " 
              nombre = " descripcion " />
          </ div >
          < etiqueta > leonel </ etiqueta >
          < button  type = " submit "  class = " btn btn-primary " > Guardar </ button >
      </ form >
  </ div >
</ div >