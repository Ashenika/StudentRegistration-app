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
        form {
            background: #fff;
            padding: 1em 1em 1em;
            max-width: 400px;
            margin: 50px auto 0;
            border-radius: 2px;

        }

        h2 {
            font-family: 'Raleway', sans-serif;
            margin: 0 0 2px 0;
            padding: 0px;
            text-align: center;
            font-size: 30px;
            border-bottom:solid 1px #e5e5e5;
        }


        label {
            position: static;
            color: #122B38;
            font-family: sans-serif;
            font-size: 16px;
            padding: 10px;
            font-weight: 200;
        }

        input {
            padding: 12px 20px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
        }

        input[type="text"],
        input[type="password"] {
            background: #fff;
            border: 1px solid #dbdbdb;
            font-size: 1em;
            padding: 12px 20px;
            border-radius: 2px;
        }

        input[type=submit]{
            background-color: #198992;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #21abb6 ;
        }
        input[type="submit"]:hover {

        }

        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
            font-family: 'Raleway';
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }


    </style>
    <h2> Student Details Edit </h2>
    {{-- Form to Edit action is update method in controller --}}
 <Form action="{{route('users.update')}}" method="post" >

        <label> Student Name    : </label>
        <input name="stuName" type="text" value="{{ old('stuName', $input->stuName) }}"/>{{-- laravel statement to display data from DB to txtfield --}}
        </br> {{--$input is the variable defined in controller class`s editStu method and it assignes to txtfield  --}}
        </br>

        <label> Username        : </label>
        <input name="username" type="text" value="{{ old('username', $input->username) }}"/>
        </br>
        </br>

        <label> Student Index   : </label>
        <input name="stuIndex" type="text" value="{{ old('stuIndex', $input->stuIndex)}}" readonly />
        </br>
        </br>

        <label> Student Address : </label>
        <input name="stuAddress" type="text" value="{{ old('stuAddress', $input->stuAddress) }}"/>
        </br>
        </br>

        <label> Password        : </label>
        <input name="password" type="text" value="{{ old('password', $input->password) }}"/>
        </br>

        <input type="submit" name="update" value="Save Details"/>
        <input type="hidden" name="_token" value="{{csrf_token()}}"> {{-- CSRF token code --}}


 </Form>
</body>

{{-- Validation to Edit page --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>

</head>
</html>







