<?php

	/**
	 *	Completa el select del login con los options de airlines.
	 * 	@param name(string) nombre de aerolinia guardada en la session para marcarla como seleccionada dentro del formulario select
	 * 	@return $airLinesOptions (string) string compuesto de todas las opciones de aerolineas obtenidas de la API
	 **/
	
	function getAirOptions($name=null){
		include 'conectionsApi.php';

		$airlinesOptions='';

		$url='https://beta.id90travel.com/airlines';

		$results = getDataApi($url);

		$jsonResults = json_decode($results, TRUE);

		foreach($jsonResults as $data)
	    {
	    	$selected='';
	    	if(isset($name))
	    	{
	    		if($data['name'] == $name)
	    		{
	    			$selected='selected';
	    		}
	    	}
	    	
			$airlinesOptions .= '
				<option value="'.$data['name'].'" '.$selected.'>'.$data['display_name'].'</option>	
			';
	    } 
	    return $airlinesOptions;
	}

?>