<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'it_students';

    function testFun(){
        echo "This is model test function.";
    }
}
