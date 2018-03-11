<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model // Model of the DB named "student"
{
    //fillable is to fill all the fields inorder to save to the DB
    protected $fillable = [
        'stuName', 'username', 'stuIndex', 'stuAddress','password'
    ];

    protected $table = 'registerstudent';//table name
}
/*
 * first create the DB in phpmyadmin
 * then create a model using this cmnd in command prompt "php artisan make:model student"
 * Model name => student
 * DB Name => student
 * Table name => registerstudent
 * === Methods ===
 *  to store data to DB - store()
 *  to redirect after registration submit - view()
 *  to edit - editStu()
 *  to update - update()
 *  to view - show()
 *  to Add Student Button Action - add()
 *  to delete - delete()                  */