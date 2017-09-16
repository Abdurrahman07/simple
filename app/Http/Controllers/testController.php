<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Question;
use App\Admin;
use DB;



class testController extends Controller
{
    //

    public function allquestions () {


    	$questions = Question::all();

    	return view('pages.all', compact('questions'));

    }

    public function addquestionform () {


    	return view('pages.questionform');
    }

    public function addquestion (Request $request) {

    	$answers = json_encode($request->answers);

		Question::create([

			'question' => $request->question,
			'correct_answer' => $request->correct_answer,
			'answers' => $answers,
			'admin_id' => 1,

			]);

		return redirect('/');

    }

    public function answerform ($id) {



    	$question = Question::find($id);

    	return view('pages.answerform', compact('question'));
    }

    public function answer (Request $request, $id) {

    	// check if the answer is correct 
    	$correct_answer = Question::find($id)->correct_answer;


    	if($correct_answer == $request->answers) {


    		$request->correct = 1;


    		// add 10 points to user if the answer is correct 
    		$user = User::find(Auth::user()->id);
			$user->points += 10;
			$user->save();

    	} else {
    		$request->correct = 0;
    	}

    	
    	DB::table('question_user')->insert([

    		'user_id' => Auth::user()->id,
    		'question_id' => $id,
    		/*'answer' => $request->answer,*/
    		'correct' => $request->correct,

    		]);

    	return redirect('/');


    }


    public function test() {


    	$user = Auth::user();

    	dd($user->questions);

    }
}
