<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    table{
        border: 1px solid gray;
        border-collapse: collapse;
        width: 100%;
    }
    tr,td,th{
        border: 1px solid gray;
        padding: 4px;
    }
    thead{
        background-color: gray;
        color: white;
    }
    h1{
        text-align: center;
        color: gray;
        text-decoration: underline;
        margin-top: 60px;
    }

</style>

<h1>LISTADO DE PRODUCTOS</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Categoria</th>
            <th>proveedor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $key=>$product)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->stock}}</td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->supplier->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
