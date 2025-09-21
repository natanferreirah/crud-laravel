<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
</head>
<body>

<div id="form_container">
    <h1>Cadastro de Produtos</h1>

    @if ($errors->any())
        <div class="messagem" style="background-color: #dc3545; margin-bottom: 15px;">
            <strong>Ops!</strong> Ocorreram alguns erros.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nome do Produto:</label>
            <input type="text" name="name" placeholder="Ex: Camisa" class="input_box" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="text" name="price" placeholder="Ex: 29.99" class="input_box" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <label for="stock">Quantidade em Estoque:</label>
            <input type="number" name="stock" placeholder="Ex: 10" class="input_box" value="{{ old('stock') }}">
        </div>
        <div class="button-group">
            <a href="{{ route('products.index') }}" class="btn btn-back">Voltar</a>
            <button type="submit" class="btn btn-submit">Cadastrar</button>
        </div>
    </form>
</div>

</body>
</html>