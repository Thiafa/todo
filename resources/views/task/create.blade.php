@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mb-3">
            <div class="card-body bg-white shadow-sm ps-4">
                <form action="" method="POST">
                    @csrf
                    <div class="col-md-6 ">
                        <label for="tarefa" class="form-label @error('tarefa') is-invalid @enderror">Tarefas</label>
                        <input type="text" name="{{ old('tarefa') }}" id="tarefa" class="form-control">
                        @error('name')
                            <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 ">
                        <label for="tarefa" class="form-label">data_termino</label>
                        <input type="text" name="{{ old('tarefa') }}" id="tarefa"
                            class="form-control  @error('tarefa') is-invalid @enderror">
                        @error('name')
                            <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
