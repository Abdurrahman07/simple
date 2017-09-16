@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">answer form</div>

                <div class="panel-body">
                <p><b style="font-weight: bold;">Question :- </b> {{$question->name}}</p>

                <form method="post" action="/question/{{ $question->id }}">
                {{ csrf_field() }}

                <?php $answers = json_decode($question->answers); ?>

                @foreach($answers AS $answer) 
                    <div class="form-group">
                        <input type="checkbox" name="answers[]" value="{{ $answer }}">
                        <label>{{ $answer }}</label>
                        
                    </div>
                @endforeach
                <input class="btn btn-primary" type="submit" value="just answer">
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
