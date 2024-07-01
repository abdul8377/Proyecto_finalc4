
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    table{
        border: 1px solid gray;
        border-collapse: collapse;
        width: 100%;
        font-size: 10px;
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

<h1>LISTADO DE Clientes</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Direccion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $key=>$customer)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->lastname}}</td>
            <td>{{$customer->dni}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->address}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
