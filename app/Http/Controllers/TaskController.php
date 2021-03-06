<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Task;
use Carbon\Carbon;
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
        $tasks = Task::latest()->get();

        return view( 'tasks.index' )->with( 'tasks', $tasks );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'tasks.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store( TaskRequest $request )
    {
        $task          = new Task();
        $task->user_id = 1;
        $task->title   = $request->title;
        $task->note    = $request->note;
        $task->save();

        return redirect( '/tasks' )->with( 'flash_message', 'Task Added!' );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $task = Task::findOrFail( $id );

        return view( 'tasks.show' )->with( 'task', $task );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $task = Task::findOrFail( $id );

        return view( 'tasks.edit' )->with( 'task', $task );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update( TaskRequest $request, $id )
    {
        $task          = Task::findOrFail( $id );
        $task->user_id = 1;
        $task->title   = $request->title;
        $task->note    = $request->note;
        $task->save();

        return redirect( '/tasks' )->with( 'flash_message', 'Task Updated!' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        $task = Task::findOrFail( $id );
        $task->delete();

        return redirect( '/tasks' )->with( 'flash_message', 'Task Deleted!' );
    }

}
