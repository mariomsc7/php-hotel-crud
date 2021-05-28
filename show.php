<?php require_once __DIR__ . '/partials/scripts/get_single_room.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php // <head>
require_once __DIR__ . '/partials/templates/head.php'; ?>


<body>
    <main>
        <?php if(!empty($room)) { ?>
            <h1>Stanza numero <?php echo $room['id']?></h1>
            <ul>
                <li>Numero stanza: <?php echo $room['id']?></li>
                <li>Piano: <?php echo $room['floor']?></li>
                <li>Letti: <?php echo $room['beds']?></li>
            </ul>
        <?php } else { ?>
            <h2>Room not found!</h2>    
        <?php } ?>    
        <a href="./">Indietro</a>
    </main>
</body>
</html>