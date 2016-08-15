@extends('layout')

@section('content')


    <div class="task-to-do col-md-9">
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif

        <h3> Tasks List</h3>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <td>Task</td>
                    <td>Notes</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                </thead>

                <tbody>
                @foreach($task as $tasks)
                   <tr>
                       <td>{{$tasks->task_name}}</td>
                       <td>{{$tasks->task_notes}}</td>
                       <td><a href="{{url('edit/task',$tasks->id)}}">edit</a></td>
                       <td><a href="{{url('delete',$tasks->id)}}">delete</a></td>
                   </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
{{--end of container--}}
@endsection