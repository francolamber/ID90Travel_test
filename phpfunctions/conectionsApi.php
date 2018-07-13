<?PHP

	/**
	 *	Función para enviar por POST y recibir un json como respuesta.
	 *	@param $url (string) url a la cual deberemos enviar dicho post.
	 *	@param $post (string) cadena con los datos a pasar por post.
	 *  @return $result contiene el json de respuesta proveniente de la url.
	 **/
	function postDataApi($url,$post){

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec ($ch);
		curl_close ($ch);

		return $result;
	}

	/**
	 *	Función para enviar por GET y recibir un json como respuesta.
	 *	@param $url (string) url a la cual deberemos enviar dicho post
	 *	@param $get (string) cadena con los parametros a pasar por get
	 *  @return $result contiene el json de respuesta proveniente de la url
	 **/
	function getDataApi($url,$get=null){

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url.'?'.$get);
		$result = curl_exec($ch);
		curl_close($ch);

		return $result;
	}

?>