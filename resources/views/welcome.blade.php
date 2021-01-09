@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card border-0 bg-light">
                    <form action="{{ route('statuses.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <textarea class="form-control bg-light border-0" name="body" placeholder="¿Qué estás pensando Jorge?"></textarea>
                        </div>
                        <div class="card-footer">
                            <button id="create-status" class="btn btn-primary">Publicar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
