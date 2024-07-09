@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mb-3">
            <div class="card-body bg-white shadow-sm p-4">
                <form action="{{ route('tasks.store') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="col-12 mb-2">
                        <label for="tarefa" class="form-label @error('tarefa') is-invalid @enderror">Tarefas</label>
                        <input type="text" name="{{ old('tarefa') }}" id="tarefa" class="form-control">
                        @error('tarefa')
                            <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mb-2">
                        <label for="tarefa" class="form-label">Data Término</label>
                        <input type="date" name="{{ old('tarefa') }}" id="tarefa"
                            class="form-control @error('tarefa') is-invalid @enderror">
                        @error('tarefa')
                            <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-12 mb-2">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="" {{ old('status') == '' ? 'selected' : '' }}></option>
                            <option value="{{ App\Enums\StatusEnum::EmAndamento }}"
                                {{ old('status') == App\Enums\StatusEnum::EmAndamento ? 'selected' : '' }}>
                                {{ App\Enums\StatusEnum::EmAndamento }}
                            </option>
                            <option value="{{ App\Enums\StatusEnum::Finalizado }}"
                                {{ old('status') == App\Enums\StatusEnum::Finalizado ? 'selected' : '' }}>
                                {{ App\Enums\StatusEnum::Finalizado }}
                            </option>
                        </select>
                        @error('status')
                            <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
