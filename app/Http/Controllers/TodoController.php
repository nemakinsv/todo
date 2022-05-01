<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Forms\TodoForm;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilderTrait;

class TodoController extends Controller
{
    use FormBuilderTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo = Todo::paginate(15);
        return view('todo.index',  ['todo' => $todo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = $this->form(TodoForm::class, [
            'method' => 'POST',
            'url' => route('todo.store')
        ]);
        return view('crud.form', compact('form'), ['title' => 'Задача']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = $this->form(TodoForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $form->redirectIfNotValid();

        $values = $form->getFieldValues();
        $todo = new Todo();
        $todo->fill($values);
        $todo->save();
        return redirect()->route('todo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Todo::find($id);
        $form = $this->form(TodoForm::class, [
            'method' => 'POST',
            'url' => route('todo.update', ['id' => $id]),
            'model' => $item,
        ]);

        return view('crud.form', compact('form'), ['title' => 'Задача']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $itemId = $request->route('id');
        $item = Todo::find($itemId);
        $form = $this->form(TodoForm::class, [
            'model' => $item,
        ]);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $form->redirectIfNotValid();

        $values = $form->getFieldValues();

        $item->fill($values);
        $item->save();
        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->route('id');
        $item = Todo::find($id);
        if (isset($item)) {
            $item->delete();
        }
        return redirect()->route('todo.index');
    }
}
