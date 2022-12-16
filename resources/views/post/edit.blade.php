@extends('base')
@section('modalContent')
        <main role="main">
            <div class="jumbotron bg-white">
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                <div class="card mb-2 m-auto" style="width:700px; height:430px;">
                    <div class="card-body p-2 p-sm-3" >
                        <form action="{{ url('post/' . $post->id) }}" method="post">
                            @csrf
                            @method('put')
                            <label for="mensaje">Mensaje</label><br>
                            <textarea required minlength="2" maxlength="300" id="mensaje" name="mensaje" placeholder="Escriba un mensaje" cols="70" rows="10">{{$post->mensaje}}</textarea>
                            <div class="p-t-15">
                                <button class="btn btn-info btn-lg btn-block mt-5" type="submit" style="width:100px; float:left">
                                    <a style="list-style-type:none; color:white">Edit</a>
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
@endsection