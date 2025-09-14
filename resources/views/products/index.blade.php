<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>StockOnline</title>
</head>
<body>
    <table>
        <th>Nome</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th><a href="{{ route('products.create') }}" class="content_button"><button class="create_button">Cadastrar Produto</button></a>
        @foreach($products as $product)</th>
            <tr>
                <td class="content"> {{ $product->name }}</td>
                <td class="content"> {{ $product->price }}</td>
                <td class="content"> {{ $product->stock }}</td>
                <td class="button"><a href="{{ route('products.edit', $product->id)}}">Editar</a></td>
                <td class="button"> <a href="{{ route('products.destroy', $product->id)}}">Excluir</a></td>
            </tr>
        @endforeach
    </table>    
</body>
</html>