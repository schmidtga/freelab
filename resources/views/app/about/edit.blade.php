@extends('layouts.app')

@section('menu', 'Editar Sobre')

@section('content')

    @section('header_name', 'Editar Sobre')
    @section('breadcrumb_active', 'editar Sobre')

    <div class="row">
        @if (count($errors) > 0)
            @include('app.inc.errors')
        @endif
        <div class="col-12">
            {!! Form::model($about, ['method' => 'PATCH','route' => ['about.update', $about->id], 'files' => true]) !!}
            {{ Form::hidden('status', 0) }}
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sobre</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Título do Sobre</label>
                                {!! Form::text('title', null, array('placeholder' => 'Título do Sobre', 'id' => 'title', 'class' => 'form-control')) !!}
                            </div>
                            <div class="form-group">
                                <label for="headerimage">Imagem (Opcional)</label>
                                {!! Form::file('headerimage', ['id' => 'headerimage', 'class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="description">Corpo do Sobre</label>
                                {!! Form::textarea('description', null, array('placeholder' => 'Corpo do Sobre', 'id' => 'description', 'rows' => 10, 'class' => 'form-control summernote')) !!}
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                {!! Form::checkbox('status') !!}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a class="btn btn-sm btn-primary" href="{{ route('about.index') }}"><i class="fas fa-chevron-left"></i> VOLTAR</a>
                            <button type="submit" class="btn btn-sm bg-teal"><i class="fas fa-paper-plane"></i> SALVAR</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

@section('js')
    @include('app.inc.summernote')
@stop