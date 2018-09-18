@extends('layouts.master')

@section('content')
    <table>
        <thead>
        <tr>
            <th>Task</th>
            @isAdmin
            <th>Assigned out</th>
            @endisAdmin
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>

        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>
                    <a href="">
                        @if(!$task->status)
                            {{ $task->product_info }}
                        @else
                        <strike class="grey-text">{{ $task->product_info }}</strike>
                        @endif
                    </a>
                </td>
                @isAdmin
                <td>{{ $task->user->name }}</td>
                @endisAdmin
                <td><a href="{{ route('edit', $task->id) }}" title="edit"><i class="small material-icons">edit</i></a></td>
                <td><a onclick="return confirm('Delete?')" href="{{ route('delete', $task->id) }}" title="delete"><i class="small material-icons">delete_forever</i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>


    <form method="POST" action="{{ route('store') }}" class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <input name="task" id="task" type="text" class="validate">
                <label for="task">New task</label>
            </div>
        </div>

        @include('partials.coworkers')

        <button type="submit" class="waves-effect waves-light btn">Add new task</button>
        @csrf
    </form>

    @isWorker
    <form action="" class="col s12">
        <div class="input-field">
            <select>
                <option value="" disabled selected>Send invitation to:</option>
                <option value="2">Buzz McCallister</option>
                <option value="2">Fuller McCallister</option>
                <option value="2">Harry Lame</option>
                <option value="2">Murv Merchants</option>
            </select>
            <label>Send invitation</label>
        </div>
        <a href="" class="waves-effect waves-light btn">Send invitation</a>
    </form>

    @endisWorker





    @isAdmin
    <ul class="collection with-header">
        <li class="collection-header"><h4>My coworkers</h4></li>
        <li class="collection-item"><div>Buzz McCallister<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
        <li class="collection-item"><div>Fuller McCallister<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
        <li class="collection-item"><div>Harry Lame<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
        <li class="collection-item"><div>Murv Merchants<a href="#!" class="secondary-content"><i class="material-icons">delete</i></a></div></li>
    </ul>
    @endisAdmin


@endsection