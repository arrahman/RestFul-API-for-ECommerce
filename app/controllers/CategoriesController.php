<?php

class CategoriesController extends \ApiController {

	/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
		$cat = Categories::all();
		if (!$cat) return $this->respondNotFound('No categories exist on record');

		return $this->respondWithSuccess(
				array('categories' => $cat)
		);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categories
	 *
	 * @return Response
	 */
	public function store()
	{
		// Get data
		$data = Input::all();

		if (!$data) return $this->respondNotFound('Unable to parse the data provided');

		$cat = Categories::create($data);

		return $this->setStatusCode(201)->respond(
				array('categories' => $cat)
		);

	}

	/**
	 * Display the specified resource.
	 * GET /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cat = categories::find($id);
		if (!$cat) return $this->respondNotFound('No categories exist on record');

		return $this->respondWithSuccess(
				array('categories' => $cat)
		);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /categories/{id}/edit
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
	 * PUT /categories/{id}
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
	 * DELETE /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
