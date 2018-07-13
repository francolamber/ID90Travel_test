<?PHP
	session_start();

	include 'conectionsApi.php';
  	
  	// Tomo las variables que ingresan por POST
  	$airline = $_POST['airline'];
  	$username = $_POST['username'];
  	$password = $_POST['password'];
	if(isset($_POST['remember_me'])) { $remember_me =1; } else{ $remember_me =0; }

	// Guardo las credenciales del usuario en una variable de session
	$_SESSION['tiempo']=time();
  	$_SESSION['remember_me']=$remember_me;
  	$_SESSION['username']=$username;
  	$_SESSION['airline']=$airline;

  	// Creao la informacion para mandar por POST 
	$data = array(

		'session[airline]'		=>	$airline,
		'session[username]'		=>	$username,
      	'session[password]'		=>	$password,
      	'session[remember_me]'	=>	$remember_me

  	);
  	
  	//Preparo las variables para enviarlas a la API
	$url='https://beta.id90travel.com/session.json';
	$postData = http_build_query($data);

	// Envio la peticion y lo almacenamos en RESULTS
	echo $results = postDataApi($url,$postData);

	//Convertimos el resultado en un json
	$jsonResults = json_decode($results, TRUE);


	//verificamos el resultado en caso de REDIRECT, se loguea, en caso contrario vuelve al login

	if(isset($jsonResults['redirect']))
	{
		$_SESSION['remember_me']=$remember_me;
		header("Location: ../index.php");
		die();
	}

	if(isset($jsonResults['error']))
	{
		$_SESSION['remember_me']=0;
		header("Location: ../login.php?error=".$jsonResults['error']);
		die();
	}
?>