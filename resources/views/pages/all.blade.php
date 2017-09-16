@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Questions</div>

                <div class="panel-body">

                    <table class="table table-responseive">
                    	<thead>
                    		<tr>
                    			<th>id</th>
                    			<th>question</th>
                    			<th>name</th>
                    			<th>answer this! </th>
                    		</tr>
                    	</thead>

                    	<tbody>
                            @foreach($questions AS $question)
                    		<tr>
                    			<td>{{ $question->id }}</td>
                    			<td>{{ $question->question }}</td>
                    			<td>{{ $question->admin->name }}</td>
                    			<td><a class="btn btn-sm btn-primary" href="/question/{{ $question->id }}">Answer this!</a></td>
                    		</tr>
                            @endforeach
                    	</tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
