<?php

namespace App\Classes;

/**
 * Class dataClass
 * @package App\Classes
 */
/**
 * Class dataClass
 * @package App\Classes
 */
class dataClass {
	/**
	 * @var
	 */
	protected $list_endpoint;

	/**
	 * dataClass constructor.
	 */
	function __construct() {

		//Set up the endpoints
		$this->list_endpoint = config( 'endpoint' ) . config( 'endpoint-list' );
		$this->info_endpoint = config( 'endpoint' ) . config( 'endpoint-info' );

	}

	/**
	 *
	 */
	public function getList() {

		$complete = false;
		while( $complete === false ){

			$data = $this->curler( $this->list_endpoint );
			
			if ( $data <> false )  {

				$complete = true;
	
				return json_decode( $data['data'] );
				
	
			}
		}


	}

	public function getProductID( $url )
	{
		//Get the end of the URL
		return substr($url , strrpos($url , '/' ) + 1 ) ;
	}

	public function getProductInfo( $id )
	{
		//Call the data for the product from the API
		$complete = false;
		while( $complete === false ){

			$data = $this->curler( $this->info_endpoint . '?id=' . $id );
			
			if ( $data <> false )  {

				$complete = true;
	
				return json_decode( $data['data'] )->$id;
				
			}
		}
	}

	/**
	 * Method that actually calls the API
	 *
	 * @param $endpoint
	 *
	 * @return array
	 */
	private function curler( $endpoint ) 
	{
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, $endpoint );
		curl_setopt( $ch, CURLOPT_TIMEOUT, 20 );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );

		/*
		* Build the result and status code and return two object parameters
		*/
		$result      = curl_exec( $ch );
		$status_code = curl_getinfo( $ch, CURLINFO_HTTP_CODE );

		$data = json_decode( $result );

		//Catch any errors and reprocess the request.
		if ( isset( $data->error )){
			return false;
		}

		return [ 'status_code' => $status_code, 'data' => $result ];

	}


}
