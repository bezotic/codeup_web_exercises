<?php



function getRandomElement($array) {
	$random = array_rand($array);
	$value = $array[$random];
	return $value;
}




function generateServerName($array1, $array2) {
	$server_name = array_rand($array1);
	$server_name2 = array_rand($array2);
	$nouns = $array1[$server_name];
	$adjectives = $array2[$server_name2];

	
	
	return $adjectives . ' ' . $nouns;
	
	

}

function pageController() {
	$nouns = ['dog', 'boi', 'kitten', 'rabbit', 'manitee', 'salmon', 'papaya', 'lamp', 'cat', 'bug', 'flipflops'];

	$adjectives = ['hungry', 'sleepy', 'sassy', 'energetic', 'rotten', 'hopeful', 'curious', 'grumpy', 'lavish', 
	'delicious', 'gucci'];

	$data = [];
	$data['serverName'] = generateServerName($nouns, $adjectives); 
	return $data;

	//return $data = [
		//'serverName' => generateServerName($nouns, $adjectives);
		//'nouns'=>$nouns,
		//'adjectives'=> $adjectives
	//]
//}
}
extract(pageController());


?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Server Name Generator</title>
</head>
<h1>Server Name Generator</h1>
<h1><?= $serverName; ?> </h1>
<form>
</form>
<body>
	













</body>
</html>