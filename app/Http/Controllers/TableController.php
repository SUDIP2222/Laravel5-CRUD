<?php

namespace App\Http\Controllers;

use App\Table;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class TableController extends Controller {

    public function index() {

        $tables = Table::paginate(7);
        return view('users.index', compact('tables'));
    }

    public function create() {

        return view('users.create');
    }

    public function store(Requests\TableRequest $request) {


        Table::create($request->all());
        
        \Session::flash('flash_message','Your Data has been saved !!!');

        return redirect('table');
    }

    public function edit($id) {


        $table = Table::findOrFail($id);

        return view('users.edit', compact('table'));
    }

    public function update($id, Requests\TableRequest $request) {

        $table = Table::findOrFail($id);

        $table->update($request->all());
        \Session::flash('flash_message','Your Data has been Edited !!!');
        return redirect('table');
    }

    public function delete($id) {

        Table::find($id)->delete();
        return redirect('table');
    }

    public function search() {

        $name = Request::input('name');

        return View('users.search')->with('tables', Table::where('name', 'like', '%' . $name . '%')->paginate(7));
    }

}
