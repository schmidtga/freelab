@extends('layouts.app')

@section('menu', 'Projeto')

@section('content')

    @section('header_name', 'Projeto')
    @section('breadcrumb_active', 'Projeto')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $project->title }}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            @isset($project->image)
                                <div class="profile-image">
                                    <span class="text-muted">
                                        Banner Desktop
                                    </span>
                                    <img class="img-fluid" src="{{ asset('storage/projects/' . $project->image) }}" alt="{{ $project->title }}" title="{{ $project->title }}">
                                </div>    
                            @endisset
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <label for="description">Slug</label>
                                <br>
                                {!! $project->slug !!}
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                {!! $project->description !!}
                            </div>
                            <div class="form-group">
                                <label for="description">Status</label>
                                @if ($project->status)
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a class="btn btn-sm btn-primary" href="{{ route('project.index') }}"><i class="fas fa-chevron-left"></i> VOLTAR</a>
                        <a class="btn btn-info btn-sm" href="{{ route('project.edit', $project->id) }}"><i class="fas fa-pencil-alt"></i> EDITAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection