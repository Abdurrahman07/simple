<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    protected $fillable = [

    	'admin_id',
    	'question',
    	'correct_answer',
    	'answers'


    ];

    public function admin () {


		return $this->belongsTo('App\Admin');

	}
}
