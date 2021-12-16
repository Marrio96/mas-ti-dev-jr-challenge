@extends('layout.general')
@section('header')
@section('container')
<div
            class="container border border-primary p-1 p-lg-4 bg-white w-80 ml-auto mr-auto mt-2 mb-2 mt-lg-3 mb-lg-2 rounded shadow">
            <div class="row align-items-stretch">
                <div class="col">

                    <div class="row align-items-stretch  mb-4 mb-lg-3 p-2">
                        <div class="col-5 col-lg-12 mb-auto mt-auto text-center ">
                            <h1 class="fw-bold mb-auto mt-auto  text-primary letra">Editar información  del cliente </h3>
                        </div>
                    </div>

                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $err )
                                <li> {{$err}} </li>
                            @endforeach
                        </ul>
                    @endif

                    <form class="row" action="/customer/{{$cliente->id}}" method="POST">
                       
                        @csrf
                        @method('PUT')
                        <!-- Nombre del usuarios -->
                        <label class="col-12 text-center col-form-label ">Nombre(s) y apellidos:
                        </label>

                        <div class="col-11 col-lg-6 mr-auto ml-auto mb-3">
                            <input name="name" type="text" class="form-control " placeholder="Nombre(s)" value="{{ $cliente->name }}">
                        </div>


                        <div class="col-11 col-lg-6 mr-auto ml-auto mb-3">
                            <input name="lastName"  type="text" class="form-control" placeholder="Apellidos" value="{{ $cliente->last_name }}">
                        </div>

                        <!-- Datos Generales -->
                        <label class="col-12 text-center col-form-label font-weight-bold">Datos Generales: </label>

                        <div class="col-11 col-lg-6 mr-auto ml-auto mb-3">
                            <input name="personal_phone"  type="tel" class="form-control" placeholder="No. celular" value="{{ $cliente->personal_phone }}">
                        </div>

                        <div class="col-11 col-lg-6 mr-auto ml-auto mb-3">
                            <input name="contact_phone"  type="tel" class="form-control" placeholder="Numero de contacto"
                                 value="{{ $cliente->contact_phone}}" >
                        </div>

                        <div class="col-11 col-lg-6 mr-auto ml-auto mb-3">
                            <input name="email"  type="email" class="form-control" placeholder="Correo electrónico"
                                 value="{{$cliente->email }}">
                        </div>
                       

                        <div class="col-11 col-lg-6 mr-auto ml-auto mb-3">
                            <select class="form-control mb-auto mt-auto" name="gender" 
                                 value="{{ $cliente->gender }}">
                                <option value="0" selected>Genero</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </div>

                        <div class="col-11 col-lg-6 mr-auto ml-auto mb-3">
                            <input name="address" type="text" class="form-control"
                                placeholder="Dirección de Domicilio" 
                                value="{{ $cliente->address }}">
                        </div>

                        <div class="col-11 col-lg-6 mr-auto ml-auto mb-3">
                            <input name="zipcode" type="tel" class="form-control" placeholder="Código postal"
                                 value="{{ $cliente->zip_code }}">
                        </div>
                        
                        <div class="col-11 col-lg-6 mr-auto ml-auto mb-3">
                            <input name="state" type="text" class="form-control"
                                placeholder="Estado" 
                                value="{{ $cliente->state}}">
                        </div>

                        <div class="col-11 col-lg-6 mr-auto ml-auto mb-3">
                            <input name="city" type="text" class="form-control"
                                placeholder="ciudad"  
                                value="{{ $cliente->city }}">
                        </div>

                        <div class="col-11 col-lg-6 mr-auto ml-auto mb-3">
                            <input name="suburb" type="text" class="form-control"
                                placeholder="subuirbio"  
                                value="{{ $cliente->suburb }}">
                        </div>

                        <div class="col-11 col-lg-6 mr-auto ml-auto mb-3">
                            <input name="birthdate" type="date" class="form-control"
                                placeholder="birthdate"  
                                value="{{ $cliente->birth_date }}">
                        </div>
                        
                        
                       
                        <!--Cierre Datos Generales -->

                        <!--Botones-->
                        <div class="col-12 text-center">
                            
                            <button type="submit" id="registrame"
                                class="btn btn-primary  rounded-top text-white ml-auto  mr-auto">
                                <h5><i></i> Guardar</h5>
                            </button>
                        </div>
                        <!--Cierre Botones-->
                    </form>
                </div>
            </div>
        </div>



@endsection