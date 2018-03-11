<!doctype html>
<body lang="{{ app()->getLocale() }}">
<body>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Laravel</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<style>
    h2{
        font-family: 'Raleway', sans-serif;
        margin: 0 0 2px 0;
        padding: 0px;
        text-align: center;
        font-size: 30px;
        border-bottom:solid 1px #e5e5e5;
    }
    ul{
        font-family: sans-serif;
        text-align: left;
        border-bottom:solid 1px #e5e5e5;
    }

    button{
        background-color: #198992;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        padding: 5px;
    }

    tr, td ,th{
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

</style>
</body>
</body>

<h2> Student Details View
    <button type="button" onclick="window.location='{{ url("stu/welcome") }}'">Add Student</button>
</h2> {{-- Add student button redirect to URL 'stu/welcome' --}}

<table>
    <tr>
        <th> Student Name    :  </th>
        <th> Username        :  </th>
        <th> Student Index   :  </th>
        <th> Student Address :  </th>
    </tr>
    @foreach($data as $value) {{-- foreach loop to get the $data[] `s values to the local variable called $value and assigns them to txtfields --}}
        <tr>
            <td> {{$value->stuName}}  </td>
            <td> {{$value->username}}  </td>
            <td> {{$value->stuIndex}}  </td>
            <td> {{$value->stuAddress}}  </td>
            <td>
                <button type="button" onclick="window.location='{{ url("stu/edit/".$value->stuIndex ) }}'">Edit Student</button>
                {{-- Edit button URL 'stu/edit/2015337' index number by txtfield --}}
                <button type="button" onclick="window.location='{{ url("stu/delete/".$value->stuIndex ) }}'+ confirmDelete()">Delete</button>
                {{-- Delete button URL 'stu/edit/2015337' index number by txtfield --}}
            </td>
        </tr>
     @endforeach

</table>
<script>
    function confirmDelete() {
        confirm("Do you want to Delete??");
    }
</script>
</head>
</html>

