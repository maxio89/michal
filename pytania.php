<?php
if (count($_POST))
{
	$email = 'michalg97@gmail.com';	
	$subject = 'temat';	
	$message = 'Dziękujemy za wysłanie formularza';	
	$error = 'Wystąpił błąd podczas wysyłania formularza';	
	$charset = 'iso-8859-2';	
	$head =
		"MIME-Version: 1.0\r\n" .
		"Content-Type: text/plain; charset=$charset\r\n" .
		"Content-Transfer-Encoding: 8bit";
	$body = '';
	foreach ($_POST as $name => $value)
	{
		if (is_array($value))
		{
			for ($i = 0; $i < count($value); $i++)
			{
				$body .= "$name=".(get_magic_quotes_gpc() ? stripslashes($value[$i]) : $value[$i])."\r\n";
			}
		}
		else $body.= "$name=".(get_magic_quotes_gpc() ? stripslashes($value) : $value)."\r\n";
	}
	echo mail($email, "=?$charset?B?".base64_encode($subject)."?=",$body, $head) ? $message : $error;
}
else
{
?>
<html>
<head>

</head>
<body>
<form action="?" method="post">

<textarea name="nazwa" cols="50" rows="10">pytanie</textarea>

<input type="submit" value="wartość" />
</form>
</body>
</html>
<?php
}
?>