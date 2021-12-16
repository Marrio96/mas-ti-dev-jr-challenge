<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9f65203141.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    @section('header')
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-md w-100 bg-white navbar-dark border-bottom border-primary">
            <div class="container-fluid">
                <button class="navbar-toggler bg-primary text-right" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item btn btn-secondary border border-white" type="button" aria-haspopup="true" aria-expanded="false"><a class="nav-link text-white" href="{{ url('customer/') }}"><i class="fas fa-list"></i> Lista de clientes</a></li>

                        <li class="nav-item btn btn-secondary border border-white" type="button" aria-haspopup="true" aria-expanded="false"><a class="nav-link text-white" href="{{ url('customer/create') }}"><i class="fas fa-user"></i> Buscar cliente</a></li>

                        <li class="nav-item btn btn-secondary border border-white" type="button" aria-haspopup="true" aria-expanded="false"><a class="nav-link text-white" href="{{ url('customer/create') }}"><i class="fas fa-user-check"></i> Registrar cliente</a></li>

                        <li class="nav-item btn btn-secondary border border-white" type="button" aria-haspopup="true" aria-expanded="false"><a class="nav-link text-white" href="{{ url('customer/') }}"><i class="fas fa-user-check"></i> Registrar cliente</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @show
    @yield('container')


</body>

</html>