<html lang="ru-RU">

	<head>
	
		<meta charset="utf-8">
	
	</head>
	
	<body>


		<?php
		
			include "lib/otphp.php"; 
			
			$totp = new \OTPHP\TOTP('BFFOSEUMZLWJPTDK');
			
			// echo $totp->now(); //- отобразить SecureCode
			$API_KEY = '19586f8b-71d0-473c-83dc-afdcfe8ae537';
			$CODE = $totp->now();
			$MARKET_HASH_NAME = 'Dark%20Artistry%20Cape';
			$APP_ID = '570';
			$PAGE = '1';
			$getmarketbuyorders = "https://bitskins.com/api/v1/get_market_buy_orders/?api_key=$API_KEY&code=$CODE&market_hash_name=$MARKET_HASH_NAME&page=$PAGE&app_id=$APP_ID";
			
			$client = new GuzzleHttp\Client();
			$res = $client->get('https://bitskins.com/api/v1/get_market_buy_orders/', [
			'api_key' => $API_KEY, 
			'code' => $CODE, 
			'market_hash_name' => $MARKET_HASH_NAME, 
			'page' => $PAGE, 
			'app_id' => $APP_ID 
			]);
			echo $res->getStatusCode();           // 200
			echo $res->getHeader('content-type'); // 'application/json; charset=utf8'
			echo $res->getBody();                 // {"type":"User"...'
			var_export($res->json());
			
			// $ch = curl_init();
			// echo $getmarketbuyorders;
			// curl_setopt($ch, CURLOPT_URL, $getmarketbuyorders);


			// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


			// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);


			// $data = curl_exec($ch);


			// curl_close($ch);


			// echo $data;
			
			// $json = file_get_contents($getmarketbuyorders); 

			// $array = json_decode($json);
			// $status = $getmarketbuyorders["status"];
			// echo $array;
			// header("Location: $getmarketbuyorders");

			// var_dump(json_decode(file_get_contents("https://bitskins.com/api/v1/get_market_buy_orders/?api_key=$API_KEY&code=$CODE&market_hash_name=$MARKET_HASH_NAME&page=$PAGE&app_id=$APP_ID"), true));
			
			// $data1 = $_POST[data];
			// foreach( $data1 as $dataful)
			// {
				// echo 'Market buy orders: ' $dataful;
			// }
		?>

	</body>



</html>