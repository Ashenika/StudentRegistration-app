<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
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
                padding: 0em 1em 1em;
                max-width: 400px;
                margin: 30px auto 0;
                border-radius: 2px;

            }

            h2 {
                font-family: 'Raleway', sans-serif;
                margin: 0 0 1px 0;
                padding: 0px;
                text-align: center;
                font-size: 30px;
                border-bottom:solid 1px #e5e5e5;
            }


            label {
                position: relative;
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

            button{
                background-color: #198992;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
            }
            button:hover {
                background: #21abb6 ;
            }
            button:hover {

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

            .required::after{
             content: '*';
                color: #e95353;
            }
        </style>
    </head>

    <h2> Student Registration
           <button type="button" onclick="window.location='{{route('users.show')}}'">View Students</button>  {{--here calls the show() in controller class--}}

       </h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </div>
    @endif

    <div>
        {{-- to show validation to each text field.  --}}
       {{-- @if($errors->has('username'))
            {{$errors->first('username')}}
            @endif--}}
       <?php
         echo Form::open(array('url' => 'stu/view')); /*the form`s action is URL 'stu/view'*/
            echo Form::label('Student Name     :                ','',['class' => 'required']);
            echo Form::text('stuName',null,['class' => 'form-controll', 'foo' => 'bar']);
            echo '<br/>';

            echo Form::label('Username         :                ','',['class' => 'required']);
            echo Form::text('username',null,['class' => 'form-controll', 'foo' => 'bar']);
            echo '<br/>';
            echo '<br/>';

            echo Form::label('Student Index          :                ','',['class' => 'required']);
            echo Form::text('stuIndex',null,['class' => 'form-controll', 'foo' => 'bar']);
            echo '<br/>';
            echo '<br/>';

            echo Form::label('Student Address  :                ','',['class' => 'required']);
            echo Form::text('stuAddress',null,['class' => 'form-controll', 'foo' => 'bar']);
            echo '<br/>';
            echo '<br/>';

            echo Form::label('Password         :                ','',['class' => 'required']);
            echo Form::password('password',null,['class' => 'form-controll', 'foo' => 'bar']);
            echo '<br/>';

       /*
      * stuname
      * username
      * stuIndex
      * stuAddress
      * password    all the txt field names and DB table names are similar */

            // echo Form::checkbox('name', 'value');
            // echo '<br/>';

            // echo Form::radio('name', 'value');
            // echo '<br/>';

            // echo Form::file('image');
            // echo '<br/>';

            // echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
             echo '<br/>';
             echo '<Span>';


            echo Form::submit('Submit',['class' => 'btn btn-primary form-controll', 'foo' => 'bar']);

         echo Form::close();
      ?>
{{-- validation --}}
    </div>


    </body>
</html>
