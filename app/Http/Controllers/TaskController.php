<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = \App\task::all();
        return view('pages.index', compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create_task');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'task_name'=>'required',
            'task_notes'=>'required',
        ]);

        $task = new \App\Task;
        $task->task_name = $request->task_name;
        $task->task_notes = $request->task_notes;

        $task->save();
        return redirect('/')->with('message','Task has been created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = \App\task::find($id);
        return view('pages.edit',compact('task'));
        return redirect('/')->with('message','Task has been edited');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = \App\task::find($id);
        $this->validate($request,[
            'task_name'=>'required',
            'task_notes'=>'required',
        ]);

        $task->task_name = $request->task_name;
        $task->task_notes = $request->task_notes;

        $task->save();
        return redirect('/')->with('message','Task has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = \App\task::find($id);
        $task->delete();
        return redirect('/')->with('message','Task has been destroyed');
    }
}
