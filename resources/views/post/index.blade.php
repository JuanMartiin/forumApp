@extends('base');
@section('modalContent')
        <main role="main">
            <div class="jumbotron bg-white">
                <div class="container">
                    <div class="btn btn-dark btn-lg btn-block mt-10" style="width: 200px; margin: 0 auto">
                        <a href="{{ url('post/create') }}" style="list-style-type:none; color:white">NEW POST</a>
                    </div>
                </div>
            </div>
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                @foreach($posts as $post)
                <div class="card mb-2 m-auto" style="width:1100px;">
                    <div class="card-body p-2 p-sm-3" >
                        <div class="media forum-item">
                            <div class="media-body">
                                <p class="text-secondary">
                                    {{ $post->mensaje }}
                                </p>
                                <p class="text-muted">
                                    <?php
                                        $result = \DB::select('select nombre from usuario where id = :id' ,  ['id' => $post->idusuario]);
                                    ?>
                                    {{ $result[0]->nombre }}
                                </p>
                            </div>
                            <?php
                                $diff = now()->diffInMinutes($post->created_at);
                            ?>
                            @if($diff <= 5)
                            <div class="text-muted text-center align-self-center mr-3">
                                    <a href="{{ url('post/' . $post->id . '/edit') }}">
                                        Edit
                                    </a>
                            </div>
                            <div class="text-muted text-center align-self-center mr-3">
                                    <a href="javascript: void(0);"
                                        class = "deleteRow"
                                        data-name="post with id {{ $post->id }}"
                                        data-url="{{ url('post/' . $post->id ) }}"
                                        data-toggle="modal"
                                        data-target="#modalDelete">
                                        Delete
                                        
                                    </a>
                            </div>
                            @endif
                            <form action="{{ url('comment/takeIdpost') }}" method="post">
                                @csrf
                                <input type="hidden" value= "{{ $post->id }}" name="idpost"/>
                                <div class="text-muted small text-center align-self-center">
                                    <button class="btn btn-info bg-secondary btn-sm mt-4" type="submit" style="border:0">
                                        Add comment
                                    </button>
                            </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
                    @foreach($post->comments as $comments)
                        <div class="card mb-2 m-auto" style="width:650px;">
                            <div class="card-body p-2 p-sm-3" >
                                <div class="media forum-item">
                                   
                                    <div class="media-body">
                                        <p class="text-secondary">
                                            {{ $comments->mensaje }}
                                        </p>
                                        <p class="text-muted">
                                            <?php
                                                $result = \DB::select('select nombre from usuario where id = :id' ,  ['id' => $comments->idusuario]);
                                            ?>
                                        {{ $result[0]->nombre }}
                                        </p>
                                    </div>
                                    <?php
                                        $diff = now()->diffInMinutes($comments->created_at);
                                    ?>
                                    @if($diff <= 5)
                                    <div class="text-muted text-center align-self-center mr-3">
                                    <a href="{{ url('comment/' . $comments->id . '/edit') }}">
                                        Edit
                                    </a>
                                    </div>
                                    <div class="text-muted text-center align-self-center mr-3">
                                    <a href="#"
                                        class = "deleteRow"
                                        data-name="comment with id {{ $comments->id }}"
                                        data-url="{{ url('comment/' . $comments->id ) }}">
                                        Delete
                                    </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </main>
        <form action="" method="post" id="deleteForm">
            @csrf
            @method('delete')
        </form>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{ url('assets/js/common.js') }}"></script>
@endsection