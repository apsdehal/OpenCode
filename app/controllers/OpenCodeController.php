<?php

class OpenCodeController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getNew($defaultCode='')
	{
		return View::make('OpenCode.new')->with('code',$defaultCode);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postCreate()
	{
		$newCode = OpenCode::create(array('code'=>Input::get('code')));
		if($newCode){
			return Redirect::route('show_code', $newCode->id);
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}
	/**
	 * Fork the specified resource
	 * @param int $id
	 * @return Response
	 */

	public function getFork($id)
	{
		$code = OpenCode::find($id);
		if(!$code) return Redirect::route('new_code');
		return $this->getNew($code->code);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$text = OpenCode::find($id);
		return View::make('OpenCode.show', $text->toArray());
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