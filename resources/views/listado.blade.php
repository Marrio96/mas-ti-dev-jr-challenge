@extends('layout.general')


@section('container')
<div class="row align-items-stretch  mb-4 mb-lg-3 p-2">
    <div class="col-5 col-lg-12 mb-auto mt-auto text-center ">
        <h1 class="fw-bold mb-auto mt-auto bg-white text-primary letra">Listado de clientes </h3>
    </div>
</div>
<table class="table table-light table-striped mt-2">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">email</th>
            <th scope="col">birth Date</th>
            <th scope="col">personal Phone</th>
            <th scope="col">Contact Phone</th>
            <th scope="col">Address</th>
            <th scope="col">gender</th>
            <th scope="col">state</th>
            <th scope="col">city</th>
            <th scope="col">suburb</th>
            <th scope="col">zip code</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cliente as $cl )
        <tr>
            <th scope="row"> {{$cl->id}} </th>
            <td> {{$cl->name}} </td>
            <td> {{$cl->last_name}} </td>
            <td> {{$cl->email}} </td>
            <td> {{$cl->birth_date}} </td>
            <td> {{$cl->personal_phone}} </td>
            <td> {{$cl->contact_phone}} </td>
            <td> {{$cl->address}} </td>
            <td> {{$cl->gender}} </td>
            <td> {{$cl->state}} </td>
            <td> {{$cl->city}} </td>
            <td> {{$cl->suburb}} </td>
            <td> {{$cl->zip_code}} </td>
            <td>
                <form action="{{route('customer.destroy',$cl->id)}}" method="post">
                    <a href="/customer/{{$cl->id}}/edit" class="btn btn-info"> Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection