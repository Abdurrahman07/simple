@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                <form method="post" action="/addquestion">
                {{ csrf_field() }}
                <input class="form-control" type="text" placeholder="question" name="question">
                <br>
                <input class="form-control" type="text" placeholder="correct answer" name="correct_answer"> <br>
                <input class="form-control" type="text" name="answers[]" placeholder="choice n1"> <br>
                <input class="form-control" type="text" name="answers[]" placeholder="choice n2"> <br>
                <input class="form-control" type="text" name="answers[]" placeholder="choice n3"> <br>

                <input class="btn btn-primary" type="submit" value="just ask">
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
