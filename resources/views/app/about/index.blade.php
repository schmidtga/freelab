@extends('layouts.app')

@section('menu', 'Sobre')

@section('content')

    @section('header_name', 'Sobre')
    @section('breadcrumb_active', 'Sobre')

    <div class="card card-primary card-outline">
        <div class="card-header p-3">
            <div class="row">
                <div class="col-md-6">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-pills float-right">
                        <li class="nav-item">
                            <a href="{{ route('about.create') }}"><i class="fas fa-plus"></i> Novo Sobre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TÍTULO</th>
                        <th>STATUS</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $about)
                        <tr>
                            <td>{{ $about->id }}</td>
                            <td>{{ $about->title }}</td>
                            <td>
                                @if ($about->status)
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                @endif
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{ route('about.show', $about->id) }}"><i class="fas fa-folder"></i> MOSTRAR</a>
                                <a class="btn btn-info btn-sm" href="{{ route('about.edit', $about->id) }}"><i class="fas fa-pencil-alt"></i> EDITAR</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['about.destroy', $about->id],'style'=>'display:inline']) !!}
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> APAGAR</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $data->render() !!}
        </div>
    </div>

@endsection