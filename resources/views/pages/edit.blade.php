@extends('layout')

@section('content')

    @include('common.errors')

    {!! Form::model($task,['url'=>['/update/task',$task->id],'class'=>'col-lg-9'])!!}

    <div class="form-group col-lg-12">
        {!!Form::label('task name', 'Task name:',['class'=>'control-label']) !!}
        {!!Form::input('text','task_name',$task->task_name,['class'=>'form-control', 'placeholder'=>'Enter Task'])!!}
    </div>

    <div class="form-group col-lg-12">
        {!!Form::label('task notes','Notes:',['class'=>'control-label'])!!}
        {!!Form::textarea('task_notes',$task->task_notes,['class'=>'form-control'])!!}
    </div>

    {!!Form::submit('Save',['class'=>'btn btn-success'])!!}
    {!!Form::close()!!}

@endsection