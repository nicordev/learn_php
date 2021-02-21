<?php

function calculateInterval(string $strDateBegin, string $strDateEnd)
{
	$dateBegin = new DateTime($strDateBegin);
	$dateEnd = new DateTime($strDateEnd);

	$interval = $dateEnd->diff($dateBegin);

	return $interval->format("%y années %m mois %d jours %h heures %i minutes %s secondes");
}

if (isset($_POST['date_begin']) &&
	isset($_POST['date_end'])) {
    $interval = calculateInterval($_POST['date_begin'], $_POST['date_end']);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Dates</title>
    </head>
        
    <body>
        <h1>Calcul de dates</h1>

    	<form action="" method="post">
            <p>
                <label for="">Date début</label>
                <input type="text" name="date_begin" value="<?= $_POST['date_begin'] ?? "" ?>" placeholder="AAAA-MM-DD hh:mm:ss">
            </p>
            <p>
                <label for="">Date fin</label>
    		    <input type="text" name="date_end" value="<?= $_POST['date_end'] ?? "" ?>" placeholder="AAAA-MM-DD hh:mm:ss">
            </p>
            <p>
    		    <input type="submit" value="Soustraire">
            </p>
    	</form>

    	<div>
    		<?= $interval ?? "" ?>
    	</div>
    </body>
</html>