<?php
	$zeiger = fopen("https://www.google.com/calendar/feeds/kjg.altenfurt%40googlemail.com/private-35c9e90434f5ffee5da7463d454f89fb/basic", "r");
	$seite;
	if ($zeiger) 
	{
		while (($buffer = fgets($zeiger)) !== false) 
		{
			$seite = $seite . $buffer;
		}
		if (!feof($zeiger)) 
		{
			echo "Fehler: unerwarteter fgets() Fehlschlag\n";
		}
		fclose($zeiger);
	}
	echo $seite;

	#$teil = substr($inhalt, strpos($inhalt, "<title type='html'>"), strpos($inhalt, "<title type='html'>") - strpos($inhalt, "</title>"));
	#echo $teil;
?>