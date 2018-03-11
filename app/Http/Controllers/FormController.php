<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 9/15/2017
 * Time: 9:34 AM
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\student;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;


class FormController
{

    /* store method to store data to DB */
    function store(Request $request){
        //validation
        $request->validate([
            'stuName' => 'required',//displays "stuName required "
            'username' => 'required|unique:registerstudent',//required and if already taken
            'stuIndex' => 'required|unique:registerstudent',//"      "
            'stuAddress' => 'required',
            'password' => 'required|min:6' //minimum charactors are 6!!
        ]);

        //this code is to store data into the database named 'student' / model name 'student'
        //after creating a DB we need to create a model called that DB name
        //$user is a local variable to create a new object in student model
        $user = new student;
        $user->stuName = $request->stuName;
        $user->username = $request->username;
        $user->stuIndex = $request->stuIndex;
        $user->stuAddress = $request->stuAddress;
        $user->password = $request->password;
        $user->save(); //to save data to DB


    }
    /* view Method */
    function view(Request $request){
        echo 'View Page';

        $this->store($request);
        //get data from  DB table named 'registerstudent' "get() returns an array of query results"
        $data['data'] = DB::table('registerstudent')->get();
        //$data is an array of query results
        if(count($data) > 0){
            return view('view',$data);//views all the data in the html table
        }else{
            echo 'No Data';
        }
    }

    /*Edit function*/
    function editStu($index){
        echo 'Edit Page';
        //here checks the $index and DB column stuIndex. value to $index is given by URL. To URL that index is given by the button click
        $input =  student::where('stuIndex', $index) ->first();
        //$input = DB::table('registerstudent')->where('stuIndex',$index)->first();
        if(count($input) > 0){
            return view('edit',compact('input'));//input is the value of the each text field.
        }else{
            echo 'No Data';
        }
    }

    /* function to update */
    function update(Request $request){
        echo 'Updated';
        //here calls the validations
        $request->validate([
            'stuName' => 'required',
            'username' => 'required',
            'stuIndex' => 'required',
            'stuAddress' => 'required',
            'password' => 'required|min:6'
        ]);
        //query to match the stuIndex of the DB table and text field`s name and updates all the fields that edited.
        $student = student::where('stuIndex',$request->input('stuIndex'))
                    ->update([
                        'stuName' => $request-> input("stuName"),
                        'username' => $request->input("username"),
                        'stuAddress' => $request->input("stuAddress"),
                        'password' => $request->input("password")
                    ]);
        // redirect
       // Session::flash('message', 'Successfully updated!');
      //  Session::flash('message', 'Successfully updated!');
        return Redirect::to('stu/view');
    }
    /* function for the 'view Students' button actions URL is 'stu/view' */
    function show(){
        //getdata method
        $data['data'] = DB::table('registerstudent')->get();
        if(count($data) > 0){
            return view('view',$data);
        }else{
            echo 'No Data';
        }

    }

    /* Method to Call 'Add Student' button Action, in order to View page*/
    function  add(){
        echo 'Add Page';
        return view('welcome');
    }

   function delete(Request $request,$index){
        echo 'Delete Page';
       // delete query **Note : We can`t use both get and delete methods in the same line like '->get()->delete()'

       $post= student::where(['stuIndex'=>$index])->get();
              student::where(['stuIndex'=>$index])->delete();

       //redirect to View Page after deleting
       return Redirect::to('stu/view');

   }

}
