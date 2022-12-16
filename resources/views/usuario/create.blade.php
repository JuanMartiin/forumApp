<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="{{ url('assets//vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('assets//vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ url('assets///vendor/select2/select.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('assets///datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ url('assets///css/main2.css') }}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-white p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form action="{{ url('usuario') }}" method="post">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="nombre">Name</label>
                                    <input class="input--style-4" required value="{{ old('nombre') }}" type="text" minlength="2" maxlength="60" id="nombre" name="nombre" placeholder="Nombre">
                                    @error('nombre')
                                        <div>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="correo">Email</label>
                                    <input class="input--style-4" required value="{{ old('correo') }}" type="email" minlength="2" maxlength="60" id="correo" name="correo" placeholder="Correo">
                                    @error('correo')
                                        <div>{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" for="fechaNacimiento">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" required value="{{ old('fechaNacimiento') }}" required type="date" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha Nacimiento">
                                        @error('fechaNacimiento')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Register</button>
                            &nbsp;
                            <a class="btn btn--radius-2 btn--blue" href="{{ url('usuario') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>