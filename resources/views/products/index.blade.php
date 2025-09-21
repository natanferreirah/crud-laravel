<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    {{-- Opcional: Adicionar ícones para os botões --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>StockOnline</title>
</head>
<body>
<div id="container">
    <h1>Lista de Produtos</h1>
    @if (session('success'))
        <div class="messagem">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="messagem" style="background-color: #dc3545;">
            {{ session('error') }}
        </div>
    @endif
    <a href="{{ route('products.create') }}" class="btn create_button">
        <i class="fa-solid fa-plus"></i>
        Cadastrar Produto
    </a>


    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-edit">
                        <i class="fa-solid fa-pen-to-square"></i> Editar
                    </a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir?')">
                            <i class="fa-solid fa-trash"></i> Excluir
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>