<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>réponse</title>
    </head>
 
    <body>	
    	<?php
        if (isset($_POST['reponse']) AND $_POST['reponse'] ==  "Jonathan")
        {
            echo '<p>Bonne réponse. La devinette était facile !</p>';
        }
        else
        {
            echo '<p>Mauvaise réponse. Il y a une majuscule dans la réponse. ;)</p>';
        }
        ?>
   
    </body>
</html>