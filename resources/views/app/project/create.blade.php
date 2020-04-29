@extends('layouts.app')

@section('menu', 'Criar Projeto')

@section('content')

    @section('header_name', 'Criar Projeto')
    @section('breadcrumb_active', 'criar Projeto')

    <div class="row">
        @if (count($errors) > 0)
            @include('app.inc.errors')
        @endif
        <div class="col-12">
            {!! Form::open(['route' => 'project.store', 'method' => 'POST', 'files' => true]) !!}
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Projeto</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Título do Projeto</label>
                                {!! Form::text('title', null, ['placeholder' => 'Título do Projeto', 'id' => 'title', 'class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="link">Código do Vídeo</label>
                                {!! Form::text('link', null, ['placeholder' => 'Código do Vídeo', 'id' => 'link', 'class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4 imageUploadPreview">
                                        <label for="imagePreview">Preview da Imagem:</label>
                                        <img id="imagePreview" class="img-fluid" src="" alt="">
                                    </div>
                                    <div class="col-8">
                                        <label for="image">Imagem para a Home</label>
                                        {!! Form::file('image', ['id' => 'image', 'class' => 'form-control imageUpload']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Descriçao</label>
                                {!! Form::textarea('description', null, ['placeholder' => 'Descriçao', 'id' => 'description', 'rows' => 10, 'class' => 'form-control summernote']) !!}
                            </div>
                            <div class="form-group">
                                <label class="checkContainer">
                                    {!! Form::checkbox('status', true) !!}
                                    <span class="checkmark"></span>
                                </label>
                                <label for="status">Publicar? </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a class="btn btn-sm btn-primary" href="{{ route('project.index') }}"><i class="fas fa-chevron-left"></i> VOLTAR</a>
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