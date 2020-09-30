<?php
include __DIR__ .'/partials/templates/header.php';
include __DIR__ .'/partials/update/server.php';


?>

<div class="container p-3">
        <form action="partials/update/server-edit.php" method="post">
            <div class="form-group">
                <label for="">Nr. Stanza</label>
                <input type="text" class="form-control" name="roomNumber" value="<?php echo $row['room_number']; ?>" id="roomNumber">
            </div>
            <div class="form-group">
                <label for="">Nr. Letti</label>
                <input type="text" class="form-control" name="beds" value="<?php echo $row['beds']; ?>" id="beds">
            </div>
            <div class="form-group">
                <label for="">Piano stanza</label>
                <input type="text" class="form-control" name="floor" value="<?php echo $row['floor']; ?>" id="floor">
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control bg-warning" name="" value="Modifica">
            </div>
        </form>
</div>

<?php
include __DIR__ .'/partials/templates/footer.php'
?>
