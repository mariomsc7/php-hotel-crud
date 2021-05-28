<?php require_once __DIR__ . '/partials/scripts/get_rooms.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php // <head>
require_once __DIR__ . '/partials/templates/head.php'; ?>


<body>
    <main>
        <h1>Stanze:</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room Number</th>
                    <th>Floor</th>
                    <th>Beds</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php // Loop DB records
                if(!empty($rooms)) {
                    foreach($rooms as $room) { ?>
                        <tr>
                            <td><?php echo $room['id']; ?></td>
                            <td><?php echo $room['room_number']; ?></td>
                            <td><?php echo $room['floor']; ?></td>
                            <td><?php echo $room['beds']; ?></td>
                            <td>
                                <a href="./show.php?id=<?php echo $room['id']; ?>">View Room Info</a>
                            </td>
                        </tr>
                    <?php }
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>