@extends('layout.general')
@section('header')
@section('container')
        <!--Contenedor-->
        <div class="container p-2 bg-white w-75 mt-5 rounded shadow">
            <div class="row  align-items-stretch">
               
                <div class="col justify-content-center bg-white  p-4 rounded">
                    <h2 class="fw-bold text-center py-5">Bienvenidos</h2>
                    <!--Inicio de sesion-->
                    <form action="login.php" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light text-info"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="Correo eletrónico" autofocus required>
                        </div>

                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light text-info"><i class="fas fa-unlock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Contraseña" name="password" autofocus required pattern="[A-Za-z0-9]{5,15}">
                        </div>

                        <div class="col-auto d-grid">
                            <button type="submit" class="btn btn-secondary w-100">Iniciar sesión</button>
                        </div>
                        <div class="my-3">
                            <span>Ingresa nuevo cliente <a href="registro.html">Registrar</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection