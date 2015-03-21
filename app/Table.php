<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model {

    protected $fillable=[
        
      'name',
      'email',
      
      'job',
      'salary',
    ];

}
