<?php
include __DIR__ .'/partials/templates/header.php';



?>

<div class="container p-3">
        <form action="partials/create/server.php" method="post">
            <div class="form-group">
                <label for="">Nr. Stanza</label>
                <input type="text" class="form-control" name="roomNumber" value="" placeholder="Inserisci il numero della stanza..." id="roomNumber">
            </div>
            <div class="form-group">
                <label for="">Nr. Letti</label>
                <input type="text" class="form-control" name="beds" value="" placeholder="Inserisci il numero di posti letto..." id="beds">
            </div>
            <div class="form-group">
                <label for="">Piano stanza</label>
                <input type="text" class="form-control" name="floor" value="" placeholder="Inserisci il piano della stanza..." id="floor">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control bg-warning" name="" value="Inserisci">
            </div>
        </form>
</div>

<?php
include __DIR__ .'/partials/templates/footer.php'
?>
