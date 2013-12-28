<?php

class OpenCodeController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getNew($defaultCode='', $defaultPlaceholder='Start Typing Here')
	{	return View::make('OpenCode.new')->with(array(
			'code'=>$defaultCode,
			'placeholder'=>$defaultPlaceholder));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		$inputCode = Input::all();

		$rules = array(
			'code' => 'required'
			);

		$validator = Validator::make($inputCode, $rules);

		if($validator->passes()){

			$newCode = OpenCode::create(array('code'=>$inputCode['code']));
			if($newCode){
				return Redirect::route('show_code', $newCode->id);
			} else {
				return $this->getNew('','There was some error in saving. Please Try Again');
			}
		} else {

			return $this->getNew('', 'Some text is required, Now start typing!' );
		}
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
		if($text){
		return View::make('OpenCode.show', $text->toArray());
		} else {
			return $this->getNew('','You tried a url that doesn\'t exists, Now start typing!');
		}
	}
	/**
	 * Display Info
	 * @return Response
	 */
	public function getInfo(){
		return View::make('OpenCode.info');
	}

}