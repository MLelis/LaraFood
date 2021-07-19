@extends('adminlte::page')

@section('title', "Detalhes da Mesa  $table->identify ")

@section('content_header')
    <h1>Detalhes da Mesa <b>{{ $table->identify }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Identificador da Mesa: </strong> {{ $table->identify }}
                </li>
                <li>
                    <strong>Descrição: </strong> {{ $table->description }}
                </li>

            </ul>

            @include('admin.includes.alerts')

            <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">DELETAR MESA {{ $table->identify }} <i class="fas fa-trash"></i></button>
            </form>
        </div>
    </div>
@endsection
