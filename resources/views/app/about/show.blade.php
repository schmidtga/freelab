@extends('layouts.app')

@section('menu', 'Sobre')

@section('content')

    @section('header_name', 'Sobre')
    @section('breadcrumb_active', 'Sobre')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $about->title }}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            @isset($about->image)
                                <div class="profile-image">
                                    <img class="img-fluid" src="{{ asset('storage/about/' . $about->image) }}" alt="{{ $about->title }}" title="{{ $about->title }}">
                                </div>    
                            @endisset
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <label for="description">Slug</label>
                                {!! $about->slug !!}
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                {!! $about->description !!}
                            </div>
                            <div class="form-group">
                                <label for="description">Status</label>
                                @if ($about->status)
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
                        <a class="btn btn-sm btn-primary" href="{{ route('about.index') }}"><i class="fas fa-chevron-left"></i> VOLTAR</a>
                        <a class="btn btn-info btn-sm" href="{{ route('about.edit', $about->id) }}"><i class="fas fa-pencil-alt"></i> EDITAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection