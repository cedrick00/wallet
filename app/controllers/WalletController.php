<?php

class WalletController extends \BaseController {

	protected $layout = "tpl.main";
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		return View::make('user.login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postCreate()
	{
		$rules = array(
			'first_name'	=>'required',
			'last_name'		=>'required',
			'email'			=>'required|email|unique:users',
			'password'		=>'required|alpha_num|between:8,12'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->passes()) :
			$user = User::create(array(
				'firstname' => Input::get('first_name'),
				'lastname'  => Input::get('last_name'),
				'email' 	=> Input::get('email'),
				'password' 	=> Hash::make(Input::get('password'))
			));
			return Redirect::to('wallet/login')->with('success', 'Thanks for registering! Please log-in now.');
		else :
			return Redirect::to('wallet/create')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		endif;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
