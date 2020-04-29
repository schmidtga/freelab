@extends('layouts.app')

@section('menu', 'Projeto')

@section('content')

    @section('header_name', 'Projeto')
    @section('breadcrumb_active', 'Projeto')

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
                            <a href="{{ route('project.create') }}"><i class="fas fa-plus"></i> Novo Projeto</a>
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
                        <th>IMAGEM</th>
                        <th>TÍTULO</th>
                        <th>STATUS</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td><img class="img-fluid thumb" src="{{ asset('storage/projects/' . $project->image) }}" alt="{{ $project->title }}"></td>
                            <td>{{ $project->title }}</td>
                            <td>
                                <h2>
                                    <i class="far {{ $project->status ? 'fas fa-check' : 'fas fa-times' }}"></i>
                                </h2>
                            </td>
                            <td class="project-actions text-right">
                                @if ($project->trashed())
                                    {!! Form::open(['method' => 'PATCH','route' => ['app.project.restore.id', $project->id], 'class' => 'form-restore', 'style'=>'display:inline']) !!}
                                        <button type="submit" class="btn btn-sm btn-success">
                                            <i class="fas fa-trash-restore"></i>
                                            RESTAURAR
                                        </button>
                                    {!! Form::close() !!}
                                @else
                                    <a class="btn btn-primary btn-sm" href="{{ route('site.project', $project->slug) }}" target="_blank">
                                        <i class="fas fa-eye"></i>
                                        PREVIEW
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ route('project.edit', $project->id) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                        EDITAR
                                    </a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['project.destroy', $project->id], 'class' => 'form-delete', 'style'=>'display:inline']) !!}
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                            APAGAR
                                        </button>
                                    {!! Form::close() !!}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $data->render() !!}
        </div>
    </div>

@endsection