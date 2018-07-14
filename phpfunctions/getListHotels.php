<?php
	// Variables publicas para los botones volver y avanzar segun el paginado.
	$nexturl;
	$backurl;

	/**
	 *	Genera el listado de hoteles obtenidos por GET
	 * 	@return result (string) con el contenido de la lista, o el mensaje de que esta vacia.
	 **/
	function getListHotels(){
		include 'conectionsApi.php';

		$return='';

		$data = array(
			'guests[]'			=>	$_GET['guests'],
	      	'checkin'			=>	date('Y-m-d', strtotime($_GET['date_from'])),
	      	'checkout'			=>	date('Y-m-d', strtotime($_GET['date_to'])),
	      	'destination'		=>	$_GET['destination'],
	      	'page'				=>	$_GET['page'],
	      	'currency'			=>	$_GET['currency'],
	      	'price_low'			=>	$_GET['price_low'],
	      	'price_high'		=>	$_GET['price_high'],
	      	'rooms'				=>	'1',
	      	'sort_criteria'		=>	'Overall',
	      	'sort_order'		=>	'desc',
	      	'per_page'			=>	'',
	      	'keyword'			=>	'',
	      	'longitude'			=>	'',
	      	'latitude'			=>	'',
	  	);
	  	
	  	//Preparo las variables para enviarlas a la API
		$url='https://beta.id90travel.com/api/v1/hotels.json';
		$postData = urldecode(http_build_query($data));

	    $results = getDataApi($url,$postData);

	    $jsonResults = json_decode($results, TRUE);

	    //confirmo si tengo hoteles o no, en caso verdadero, arma cada hotel, caso falso, muestra un mensaje de que no se encontraro.
	    if(isset($jsonResults)){

		    foreach($jsonResults['hotels'] as $data)
		    {
	            $return .= '
	            <article class="box">
	                <figure class="col-sm-5 col-md-4">
	                    <a title=""><img width="270" height="160" alt="" src="'.$data['image'].'"></a>
	                </figure>
	                <div class="details col-sm-7 col-md-8">
	                    <div>
	                        <div>
	                            <h4 class="box-title">'.$data['name'].'<small><i class="soap-icon-departure yellow-color"></i> '.$data['location']['city'].' ('.$data['location']['description'].')</small></h4>
	                            <div class="amenities">
	                                <i class="soap-icon-wifi circle"></i>
	                                <i class="soap-icon-fitnessfacility circle"></i>
	                                <i class="soap-icon-fork circle"></i>
	                                <i class="soap-icon-television circle"></i>
	                            </div>
	                        </div>
	                        <div>
	                            <div class="five-stars-container">
	                                <span class="five-stars" style="width: '.getStarsWidth($data['star_rating']).'%;"></span>
	                            </div>
	                            <span class="review">'.rand(230, 1500).' reviews</span>
	                        </div>
	                    </div>
	                    <div>
	                        '.$data['description'].'
	                        <div>
	                            <span class="price"><small>AVG/NIGHT</small>$'.number_format((float)$data['display_rate'], 2, '.', '').'</span>
	                            <a class="button btn-small full-width text-center" title="" href="#">SELECT</a>
	                        </div>
	                    </div>
	                </div>
	            </article>   
	            ';
		    }
		}else
	    {
	        $return = '<center><h1> No results! Please Change filters. </h1></center>';
	    }


	    //configuracion de botones de siguiente y atras para la paginacion

	    $url_base='hotel-list-view.php?guests='.$_GET['guests'].'&checkin='.date('Y-m-d', strtotime($_GET['date_from'])).'&checkout='.date('Y-m-d', strtotime($_GET['date_to'])).'&destination='.$_GET['destination'].'&rooms=1&currency='.$_GET['currency'].'&price_low='.$_GET['price_low'].'&price_high='.$_GET['price_high'].'';

	    if($jsonResults['meta']['total_pages']>$_GET['page']){
	        $GLOBALS['nexturl']=$url_base.'&page='.($_GET['page']+1);
	    }

	    if($_GET['page']>1){
	        $GLOBALS['backurl']=$url_base.'&page='.($_GET['page']-1);
	    }

	    return $return;
	}
       
    /**
	 *	Devuelve el largo de 0% a 100% para las estrellas
	 *  @param $rating (double) numero del 0 al 5 relacionado con la reputacion del hotal
	 * 	@return result (string) con el contenido de la lista, o el mensaje de que esta vacia.
	 **/                                                     
    function getStarsWidth($rating)
    {
        return ($rating*100)/5;
    }

?>