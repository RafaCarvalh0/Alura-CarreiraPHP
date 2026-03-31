<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf

    @if($update)
    @method('PUT')
    @endif

    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text"
               id="nome"
               name="nome"
               class="form-control"
               @isset($nome)value="{{ $nome }}"@endisset>
    </div>

    <div class="mb-3">
        <label for="cover" class="form-label">Capa da Série:</label>
        <input type="file"
               id="cover"
               name="cover"
               class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
