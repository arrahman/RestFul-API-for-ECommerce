<?php

/**
 * Description of ApiController
 *
 */

use Illuminate\Http\Response as IlluminateResponse;
use Illuminate\Support\Facades\Response as Response;


class ApiController extends \BaseController
{

	protected $statusCode = IlluminateResponse::HTTP_OK;

	public function respondNotFound($message = 'Not Found') 
	{
		if (!is_array($message)) $message = array($message);
		return $this->setStatusCode(IlluminateResponse::HTTP_NOT_FOUND)->respondWithError($message);
	}

	public function respondWithError($message) 
	{
		if (!is_array($message)) $message = array($message);

		return $this->respond(array(
				'error' => array(
						'message'     => $message,
						'status_code' => $this->getStatusCode()
				)
			));
	}

	public function respondWithSuccess($results) 
	{
		return $this->setStatusCode(IlluminateResponse::HTTP_OK)->respond($results);
	}

	public function respond($data, $headers = array()) 
	{
		return Response::json($data, $this->getStatusCode(), $headers);
	}

	private function getStatusCode() 
	{
		return $this->statusCode;
	}

	public function setStatusCode($code) 
	{
		$this->statusCode = $code;

		return $this;
	}

	public function getRequestData()
	{
		$data = file_get_contents('php://input');

		$xmlObj = @simplexml_load_string($data);
		$json = json_decode($data, true);

		if ($xmlObj) 
		{
		    $xmlJson = json_encode($xmlObj);
		    return json_decode($xmlJson, true);
		} 
		elseif ($json) 
		{
			return $json;
		}

		return false;
	}

}
