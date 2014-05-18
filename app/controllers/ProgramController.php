<?php

class ProgramController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($q) {
		/*$query = Input::get('query');
		Log::error($query);
		$programs = new Program;
		$content = $programs->get($query);
		$response = Response::make($content, 200);
		$response->header('Content-Type', 'application/json');
		return $response;
		*/
		$programs = new Program;
		$content = $programs->get($q);
		$response = Response::make($content, 200);
		$response->header('Content-Type', 'application/json');
		return $response;
	}

}
