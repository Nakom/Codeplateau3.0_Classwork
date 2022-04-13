<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
    <style>
        table{
            border-collapse: collapse;
            text-align: center;
        }
        .button{
            border: none;
            background-color: green;
            padding: 5px;
            margin: 4px 2px;
            
        }
        a{
            color: white;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            padding: 5px;
            margin: 4px 2px;
            border: none;
        }
        .edit{
            background-color: green;
        }
        .delete{
            background-color: red;
        }
    </style>
</head>
<body>
    <table border="1px" width="50%">
        <caption><strong>CODEPLATEAU3.0 LIST </strong></caption>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>ACTION</th>

        @foreach ($all as $key=>$value)

        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->firstname }}</td>
            <td>{{ $value->lastname }}</td>
            <td>
                <a class="edit" href="{{ url('name/'.$value->id.'/edit') }}">Edit</a>
                <a class="delete" href="{{ URL::to('/name/'.$value->id.'/delete') }}">Delete</a>
            </td>
        </tr>
        
            
        @endforeach
    </table>
</body>
</html>