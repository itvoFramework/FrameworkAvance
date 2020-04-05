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
    Agregar Organizador
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
      < form  method = " post "  action = " {{ route ( ' organizador.store ' ) } } "    enctype = " multipart / form-data " >
        {{ csrf_field () } } 
          < div  class = " form-group " >
              @csrf
              < label  for = " descripcion " > Organizador: </ label >
              < input  type = " text "  class = " form-control "  name = " descripcion " />
          </ div >

          < button  type = " submit "  class = " btn btn-primary " > Guardar </ button >
      </ form >
  </ div >
</ div >
@endsection