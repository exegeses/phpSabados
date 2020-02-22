<?php

    $numero = 150;
    if ( $numero < 100 ){
        echo '<img src="ok.png">';
    }
    else{
        echo '<img src="error.png">';
    }
?>
<br>
<?= $numero; ?>
<hr>
<?php
    $numero = 150;
    $img = 'error';
    if ( $numero < 100 ){
        $img = 'ok';
    }
?>
<br>
    <img src="<?= $img ?>.png">

<?php echo $img; ?>
