<!DOCTYPE html>
<html>
<head>
	<title>Random Quote PHP Generetor</title>
</head>
<body>
	<h2>Generate a Random motivational Qoute every time the browser window is reloaded</h2>
	<?php  
		$quotes = [
			["text"=> "What would you attempt to do if you knew you would not fail?", "Author" => "Gitz"],
			["text"=> "Many things catch your eye, but pursue only those that capture the heart.", "Author" => "Indian Proverb"],
			["text"=> "No masterpiece was ever created by a lazy artist.", "Author" => "Ephra"],
			["text"=> "Everyone has a plan until they get punched in the mouth.", "Author" => "Mike Tyson"],
			["text"=> "If you have everything under control, you’re not moving fast enough.", "Author" => "Mario Andretti"],
			["text"=> "Knowing is not enough, we must apply. Willing is not enough, we must do.", "Author" => "Bruce Lee"],
			["text"=> "If it scares you, it might be a good thing to try.", "Author" => "CarlosBunny"],
		];

		
		//Create a random no generator
		$qoute = $quotes[rand(0, count($quotes) -1)];
		// var_dump($qoute);

		//Extract and store the qoute and author
		$quoteText = $qoute['text'];
		$quoteAuthor = $qoute['Author'];


		// echo "<pre>";
		// 	print_r($quoteAuthor);
		// echo "</pre>";
		// echo "<pre>";
		// 	print_r($quoteText);
		// echo "</pre>";
		// // var_dump($quotes);
		// foreach($quotes as $quote => $q){
		// 	echo $quote . " : " . $q . "<br>";
		// }
	?>

	<blockquote>
		<h2><?php echo "&quot;" . $quoteText . "&quot;"; ?></h2>
		<em><?php echo " - " . $quoteAuthor; ?></em>
	</blockquote>
</body>
</html>