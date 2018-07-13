<?php
/*
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://beta.id90travel.com/session.json");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "session[airline]=HAWAIIAN AIRLINES (HA)&session[username]=halucas&session[password]=1234567&session[remember_me]=0");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

echo $server_output = curl_exec ($ch);

 curl_close ($ch);
 */

 	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, 'https://beta.id90travel.com/api/v1/hotels.json?guests[]=4&checkin=2018-08-24&checkout=2018-08-27&destination=Cancun&keyword=&rooms=&longitude=&latitude=&sort_criteria=Overall&sort_order=desc&per_page=5&page=1&currency=USD&price_low=20&price_high=99');
	echo $result = curl_exec($ch);
	curl_close($ch);


	$links = json_decode($result, TRUE);

	foreach($links['hotels'] as $data)
    {
		echo '
		<div>
			<img src="'.$data['image'].'" style="width=200px">
			<div>
				<div>'.$data['name'].'</div>
				<div>'.$data['location']['city'].'('.$data['location']['city'].')</div>
				<div>'.$data['star_rating'].'</div>
				<div>'.$data['description'].'</div>

				<div>'.$data['display_rate'].'</div>
			</div>

		</div>		
		';
		/*foreach($mydata->values as $values)
		{
		  echo $values->value . "\n";
		}*/
    }  
/* https://beta.id90travel.com/api/v1/hotels.json?guests[]=2&checkin=2017-08-24&checkout=2017-08-25&destination=Cancun&keyword=&rooms=1&longitude=&latitude=&sort_criteria=Overall&sort_order=desc&per_page=25&page=1&currency=USD&price_low=&price_high=



	guests[]:2
	checkin:2017-08-24
	checkout:2017-08-25
	destination:Cancun
	keyword:
	rooms:1
	longitude:
	latitude:
	sort_criteria:Overall
	sort_order:desc
	per_page:25
	page:1
	currency:USD
	price_low:
	price_high:


	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, 'https://beta.id90travel.com/api/v1/hotels.json?guests[]=2&checkin=2017-08-24&checkout=2017-08-25&destination=Cancun&keyword=&rooms=1&longitude=&latitude=&sort_criteria=Overall&sort_order=desc&per_page=25&page=1&currency=USD&price_low=&price_high=');
	$result = curl_exec($ch);
	curl_close($ch);
	*/
//if ($server_output == "OK") { ... } else { ... }

?>