

<?php
	if (empty($_POST['password']))
	{
		echo "Veuillez indiquer votre mot de passe SVP !";
	}
	elseif ($_POST['password'] === 'kangourou') 
	{
?>
		<h1>ACCES AUTHORIZED :</h1>
    	<p><strong>0000-1111-2222-3333-4444-5555</strong></p>
<?php
	}
	else
	{
		echo "<p>Mot de passe incorrect !</p>";
	}
?>