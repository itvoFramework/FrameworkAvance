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
    Agregar nuevo Participante
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
      < form  method = " post "  action = " {{ route ( ' participante.store ' ) } } "    enctype = " multipart / form-data " >
          < div  class = " form-group " >
              @csrf
              < label  for = " nombrecompleto " > Nombre completo: </ label >
              < input  type = " text "  class = " form-control "  name = " nombrecompleto " />
          </ div >
          < div  class = " form-group " >
              @csrf
              < label  for = " curp " > CURP: </ label >
              < input  type = " text "  class = " form-control "  name = " curp " />
          </ div >
          < div  class = " form-group " >
              < label  for = " intitucionprocedencia " > Intitucion de procedencia: </ label >
              < input  type = " text "  class = " form-control "  name = " intitucionprocedencia " />
          </ div >
          < div  class = " form-group " >
              < label  for = " cuenta " > Cuenta: </ label >
              < input  type = " text "  class = " form-control "  name = " cuenta " />
          </ div >
          < div  class = " form-group " >
              < label  for = " password " > Contraseña: </ label >
              < input  type = " password "  class = " form-control "  name = " contraseña " />
          </ div >         
          < button  type = " submit "  class = " btn btn-primary " > Guardar </ button >
      </ form >
  </ div >
</ div >
@endsection 