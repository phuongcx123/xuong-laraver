<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Danh Mục</title>
</head>

<body>
    <h1>List Danh Mục</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>CRE</th>
            <th>UPD</th>
            <th>ACS</th>
        </tr>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
