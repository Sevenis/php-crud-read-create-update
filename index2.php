<?php
    include __DIR__ . '/partials/templates/header.php';
    include __DIR__ . '/partials/home/server.php';
 ?>

    <body>
        <div class="container">
            <table class= "table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Numero stanza</th>
                        <th>Piano</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $room) {?>
                    <tr>
                        <td><?php echo $room['id']; ?></td>
                        <td><?php echo $room['room_number']; ?></td>
                        <td><?php echo $room['floor']; ?></td>
                        <td><a href="show.php?id=<?php echo $room['id']; ?>">VIEW</a></td>
                        <td><a href="#">UPDATE</a></td>
                        <td>
                            <form class="" action="partials/delete/server.php" method="post">
                                <input type="submit" name="" value="X" class="btn btn-sm btn-danger">
                                <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
