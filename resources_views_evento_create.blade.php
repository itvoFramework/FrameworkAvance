<? php
@extends ( ' plantilla ' )

@section ( ' contenido ' )
< estilo >
  .uper {
@@ -21,6 +20,11 @@
      </ Div > < br />
    @terminara si
      < form  method = " post "  action = " {{ route ( ' evento.store ' ) } } "    enctype = " multipart / form-data " >
          < div  class = " form-group " >
              @csrf
              < label  for = " titulo " > Titulo: </ label >
              < input  type = " text "  class = " form-control "  name = " titulo " />
          </ div >
          < div  class = " form-group " >
              @csrf
              < label  for = " descripcion " > Evento: </ label >
@@ -35,10 +39,36 @@
              < input  type = " date "  class = " form-control "  name = " fechafin " />
          </ div >
          < div  class = " form-group " >
              < label  for = " imagenalusivo " > Imagen: </ label >
              < input  type = " file "  class = " form-control "  name = " imagenalusivo " />
              < label  for = " categoria_id " > Categoria: </ label >
              < select  class = " form-control " 
              nombre = " categoria_id " >
                @foreach ( $ categorías  como  $ categoria )
                  < option  value = ' {{ $ categoria -> id } } '   > {{ $ categoria -> descripcion } }  
                  </ opción >
                @endforeach

              </ select >
          </ div >

          < div  class = " form-group " >
              < label  for = " logotipo " > Logotipo: </ label >
              < input  type = " file "  class = " form-control "  name = " logotipo " />
          </ div >
          < div  class = " form-group " >
              < label  for = " eslogan " > eslogan: </ label >
              < input  type = " text "  class = " form-control "  name = " eslogan " />
          </ div >

          < div  class = " form-group " >
              < label  for = " lugar " > eslogan: </ label >
              < input  type = " text "  class = " form-control "  name = " lugar " />
          </ div >

         < div  class = " form-group " >
              < label  for = " observacionesd " > Observaciones: </ label >
              < textarea  class = " form-control "  name = " observacionesd " > </ textarea >
          </ div >

          < button  type = " submit "  class = " btn btn-primary " > Guardar </ button >
      </ form >
  </ div >