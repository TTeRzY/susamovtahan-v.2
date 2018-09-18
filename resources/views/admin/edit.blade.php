@extends('layouts.master')

@section('content')
    <form method="POST" action="{{ route('update',['id'=>$task->id]) }}" class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <input name="task" value="{{ $task->product_info }}" id="task2" type="text2" class="validate">
                <label for="task2">Edit task</label>
            </div>
        </div>

        @include('partials.coworkers')

        <button type="submit" class="waves-effect waves-light btn">Edit task</button>
        @csrf
    </form>
@endsection