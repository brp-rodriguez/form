<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark    ">
  <a class="navbar-brand" href="#">
  <img src="{{ asset('logo.png') }}" alt="" width="150px" height="">
  </a>
  <div class="navbar navbar-expand-md" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" style="color:white;" href="#">Eventos digitales <span class="sr-only">(current)</span></a>
      </li>
    
    </ul>
  </div>
</nav>


<div class="container"> <div class=" text-center mt-2 ">
        <h1>Registro</h1>
    </div>
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-0 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" 
                        method="post" action="{{ route('formulario.store') }}">
                        <!-- CROSS Site Request Forgery Protection -->
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="name">Nombre *</label> 
                                        <input id="name" type="text" name="nombre" class="form-control" 
                                        placeholder="Por favor, ingrese su nombre *" value="{{ old('nombre', '') }}" 
                                        >
                                        @error('nombre')
                                             <small style="color:red;">*{{$message}}</small> 
                                        @enderror  
                                    </div>    
                                                                           
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="apellidos">Apellidos *</label>
                                         <input id="apellidos" type="text" name="apellidos" class="form-control"
                                          placeholder="Por favor, ingrese sus apellidos *" 
                                          value="{{ old('apellidos', '') }}"                                       
                                          >
                                          @error('apellidos')
                                          <small style="color:red;">*{{$message}}</small> 
                                          @enderror
                                        </div>
                                                                             
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="email">Correo *</label> 
                                        <input id="email" type="email" name="email" class="form-control" 
                                        placeholder="Por favor, ingrese su correo *" 
                                        value="{{ old('email', '') }}" 
                                        > 
                                        @error('email')
                                        <small style="color:red;">*{{$message}}</small> 
                                        @enderror
                                    </div>
                                        
                                    </div>

                               </div>

                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group"> <label for="pais">Pais *</label>
                                            <input id="pais" type="text" name="pais" class="form-control"
                                            placeholder="Por favor, ingrese su pais *" 
                                            value="{{ old('pais', '') }}"  > 
                                            @error('pais')
                                            <small style="color:red;">*{{$message}}</small> 
                                             @enderror
                                        </div>
                                            
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group"> <label for="telefono">Celular*</label>
                                            <input id="telefono" type="text" name="telefono" class="form-control"
                                            placeholder="Por favor, ingrese su celular *"  
                                            value="{{ old('telefono', '') }}"
                                            >
                                            @error('telefono')
                                            <small style="color:red;">*{{$message}}</small> 
                                            @enderror
                                        </div>
                                           
                                    </div>
                                </div>


                               <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group"> <label for="cargo">Cargo *</label>
                                            <input id="cargo" type="text" name="cargo" class="form-control"
                                            placeholder="Por favor, ingrese su cargo *"  
                                            value="{{ old('cargo', '') }}"
                                            > 
                                            @error('cargo')
                                            <small style="color:red;">*{{$message}}</small>
                                            @enderror
                                        </div>
                                            
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group"> <label for="form_lastname">Empresa *</label>
                                            <input id="empresa" type="text" name="empresa" class="form-control"
                                            placeholder="Por favor, ingrese su empresa *"  
                                            value="{{ old('empresa', '') }}"
                                            >
                                            @error('empresa')
                                            <small style="color:red;">*{{$message}}</small>
                                            @enderror
                                        </div>
                                           
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-check">


                                         <input type="checkbox" value="on"
                                                name="checkbox"
                                                @if(old('checkbox') == 'on') checked="checked" 
                                         @endif />
                                         

                                        <label class="form-check-label" for="flexCheckChecked">
                                            Autorizo compartir mis datos personales con AméricaEconomia y/o Socios de Negocio
                                        </label>
                                        <br>
                                        @error('checkbox')
                                        <small style="color:red;">*{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-3"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Registrarme" hidden> </div>
                                    <div class="col-md-6"> <input type="submit" class="btn btn-dark btn-send pt-2 btn-block " value="Registrarme"> </div>
                                    <div class="col-md-3"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Registrarme" hidden> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>

</body>