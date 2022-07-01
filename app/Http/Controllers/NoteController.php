<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('result', compact('notes'));
    }

    public function update(Request $request)
    {
        if ($request->input('submit')) {
            Validator::make($request->all(),[
                'name' => 'required',
                'description' => 'required'
            ], [
                'name.required' => 'Поле "Имя записи" обязательно для заполнения',
                'description.required'  => 'Поле "Описание записи" обязательно для заполнения'
            ])->validate();

            DB::table('notes')->insert([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }

        return back()->withInput();
    }
}
