@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Você está logado!!!
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Projetos</div>
                    <div class="card-body">
                        <h4>TOTAL <span class="badge badge-pill badge-info">{{ $projects->count() }}</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
