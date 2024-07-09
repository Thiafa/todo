@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card-body bg-white shadow-sm">
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">Cadastrar</a>
        </div>
    </div>
@endsection
