<div class="col-12">
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">ERROS</h3>
        </div>
        <div class="card-body">
            <strong>Ops!</strong> Encontramos alguns problemas para salvar os dados:<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    </div>
</div>