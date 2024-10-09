@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <form method="GET" action="{{ route('tasks.index') }}">
        <select name="status">
            <option value="">Todos</option>
            <option value="pendente">Pendente</option>
            <option value="concluída">Concluída</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>
</div>
@endsection
