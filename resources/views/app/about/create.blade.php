@extends('layouts.app')

@section('menu', 'Criar Sobre')

@section('content')

    @section('header_name', 'Criar Sobre')
    @section('breadcrumb_active', 'criar Sobre')

    <div class="row">
        @if (count($errors) > 0)
            @include('app.inc.errors')
        @endif
        <div class="col-12">
            {!! Form::open(['route' => 'about.store', 'method' => 'POST', 'files' => true]) !!}
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sobre</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Título do Sobre</label>
                                {!! Form::text('title', null, ['placeholder' => 'Título do Sobre', 'id' => 'title', 'class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="image">Imagem (opcional)</label>
                                {!! Form::file('image', ['id' => 'image', 'class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="description">Corpo do Sobre</label>
                                {!! Form::textarea('description', null, ['placeholder' => 'Corpo do Sobre', 'id' => 'description', 'rows' => 10, 'class' => 'form-control summernote']) !!}
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                {!! Form::checkbox('status', true, true) !!}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a class="btn btn-sm btn-primary" href="{{ route('about.index') }}"><i class="fas fa-chevron-left"></i> VOLTAR</a>
                            <button type="submit" class="btn btn-sm bg-teal"><i class="fas fa-paper-plane"></i> SALVAR</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
         
@endsection

@section('js')
    @include('app.inc.summernote')
@stop