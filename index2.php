<?php
    include __DIR__ . '/partials/templates/header.php';
    include __DIR__ . '/partials/home/server.php';

 ?>

        <div class="container">
            <!-- Alert in caso di cancellazione stanza
            segnalando il nr della stanza cancellata -->
            <?php if(!empty($_GET['roomNr'])) {
                $stanza_cancellata = $_GET['roomNr'];  ?>
                <div class="alert alert-warning">
                    <?php echo "Hai cancellato la stanza nr. $stanza_cancellata"; ?>
                </div>
            <?php } ?>
            <!-- fine alert -->

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
                        <td><a href="update.php?id=<?php echo $room['id']; ?>">UPDATE</a></td>
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
        </div> <!-- container close -->

<?php     include __DIR__ . '/partials/templates/footer.php'; ?>
