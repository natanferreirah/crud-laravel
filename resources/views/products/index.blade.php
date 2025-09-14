<table>
    <th>Nome</th>
    <th>Preço</th>
    <th>Estoque</th>
@foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td><a href="{{ route('products.edit', $product->id)}}">Editar</a></td>
        <td> <a href="{{ route('products.destroy', $product->id)}}">Excluir</a></td>
    </tr>
    @endforeach
</table>    