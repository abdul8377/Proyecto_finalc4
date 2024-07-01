
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
        text-align: center;
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

<h1>LISTADO DE CATEGORIAS</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key=>$category)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$category->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
