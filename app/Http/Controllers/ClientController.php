<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Validator, Input, Redirect; 

use Illuminate\Support\Facades\View;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $clients = Client::all();
        return View::make('client.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'occupation' => 'required',
            'gender' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('nerds/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $client = new Client();
            $client->name       = Input::get('name');
            $client->email      = Input::get('email');
            $client->occupation = Input::get('occupation');
            $client->gender = Input::get('gender');
            $client->save();

            // redirect
            //Session::flash('message', 'Successfully created Client!');
            return Redirect::to('clients');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            // get the nerd
        $client = Client::find($id);

        // show the view and pass the nerd to it
        return View::make('client.show')->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the nerd
        $client = Client::find($id);

        // show the edit form and pass the nerd
        return View::make('client.edit')->with('client', $client);
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
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'occupation' => 'required',
            'gender' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
            return Redirect::to('nerds/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $client = Client::find($id);
            $client->name       = Input::get('name');
            $client->email      = Input::get('email');
            $client->occupation = Input::get('occupation');
            $client->gender = Input::get('gender');
            $client->save();

            // redirect
            //Session::flash('message', 'Successfully created Client!');
            return Redirect::to('clients');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $client = Client::find($id);
        $client->delete();

        // redirect
        return Redirect::to('clients');
    }
}
