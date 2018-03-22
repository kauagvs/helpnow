<?php

namespace HelpNow\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{

    public function index()
    {
        return view('HelpNow.HelpController.listar');
    }


    public function create()
    {
        return view('HelpNow.HelpController.adicionar');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
