<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<?php
$try="ZAFACK";
for($t=0;$t<20;$t++)
{
	$a[]=$t;
}
srand ((float) microtime() * 10000000);
$b=array_rand($a,20);
for($t=0;$t<20;$t++)
{
	echo($a[$b[$t]]);
}

srand ((float) microtime() * 10000000);
$input = array ("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand ($input, 5);
print $input[$rand_keys[0]]."\n";
print $input[$rand_keys[1]]."\n";
print $input[$rand_keys[2]]."\n";
print $input[$rand_keys[3]]."\n";
print $input[$rand_keys[4]]."\n";
?>
</body>
</html>