@extends('layout.general')
@section('container')

<div class="container">

    <div class="row align-items-stretch  mb-4 mb-lg-3 p-2">
        <div class="col-5 col-lg-12 mb-auto mt-auto text-center ">
            <h1 class="fw-bold mb-auto mt-auto bg-white text-primary letra">Búsqueda de cliente</h3>
        </div>
    </div>

    <form  class="bg-white" action="" method="GET">
        @method('GET')
        @csrf
        <label class="col-12 text-center col-form-label ">ID del cliente a buscar
        </label>

        <div class="col-11 col-lg-12mr-auto ml-auto mb-auto">
            <input name="id" type="text" class="form-control" placeholder="ID cliente" value="{{ old('id') }}">
        </div>
        <div class="col-12 text-center">

            <button type="submit" id="registrame" class="btn btn-primary  rounded-top text-white ml-auto  mr-auto">
                <h5><i></i> Buscar</h5>
            </button>
        </div>
    </form>

</div>

@endsection