@extends('layouts.admin')

@section('content')
    <div class="table"></div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>IMAGE</th>
                    <th>CODE</th>
                    <th>PRICE</th>
                    <th>REGISTRADO EM</th>
                    <th>ATUALIZADO EM</th>
                    <th>ACAO</th>
                </tr>
            </thead>

            <tbody>
                @foreach($products as $products)
                    <tr>
                        <td>{{ $products->id }}</td>
                        <td>{{ $products->name }}</td>
                        <td>{{ $products->image }}</td>
                        <td>{{ $products->code }}</td>
                        <td>{{ $products->price }}</td>
                        <td>{{ $products->create_at }}</td>
                        <td>{{ $products->update_at }}</td>
                        <td>
                            <a href="{{ route('products.edit', $products) }}">EDITAR</a>
                            <button>DELETAR</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



@endsection
