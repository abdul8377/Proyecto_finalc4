
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

<h1>LISTADO DE Empleados</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>fecha_n</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $key=>$employee)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->lastname}}</td>
            <td>{{$employee->dni}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->phone}}</td>
            <td>{{$employee->birthdate}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
