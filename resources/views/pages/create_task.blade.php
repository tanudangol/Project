@extends('layout')

@section('content')

    @include('common.errors')

        {!! Form::open(['url'=>'/store/task','class'=>'col-lg-9'])!!}

    <div class="form-group col-lg-12">
        {!!Form::label('task name', 'Task name:',['class'=>'control-label']) !!}
        {!!Form::input('text','task_name',null,['class'=>'form-control', 'placeholder'=>'Enter Task'])!!}
    </div>

    <div class="form-group col-lg-12">
        {!!Form::label('task notes','Notes:',['class'=>'control-label'])!!}
        {!!Form::textarea('task_notes',null,['class'=>'form-control'])!!}
    </div>

    {!!Form::submit('create new task',['class'=>'btn btn-success'])!!}
    {!!Form::close()!!}

@endsection