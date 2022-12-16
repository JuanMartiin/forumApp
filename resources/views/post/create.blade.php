@extends('base')
@section('modalContent')
        <main role="main">
            <div class="jumbotron bg-white">
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                <div class="card mb-2 m-auto" style="width:550px; height:300px;">
                    <div class="card-body p-2 p-sm-3" >
                        <form action="{{ url('post') }}" method="post">
                            @csrf
                            <label for="mensaje">Mensaje</label><br>
                            <textarea required minlength="2" maxlength="300" id="mensaje" name="mensaje" placeholder="Escriba un mensaje" cols="70" rows="10"></textarea>
                            <div class="p-t-15">
                                <button class="btn btn-info btn-lg btn-block mt-5" type="submit" style="width:100px; float:left">
                                    <a style="list-style-type:none; color:white">Add</a>
                                </button>
                                <div class="btn btn-info btn-lg btn-block mt-5" style="width:100px; float:left; margin-left:10px">
                                    <a href="{{ url('post') }}" style="list-style-type:none; color:white">Back</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection