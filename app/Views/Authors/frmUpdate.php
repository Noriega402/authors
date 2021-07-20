<?php
    $id = $author[0]['id_author'];
    $nombres = $author[0]['name'];
?>
<div class="container">
    <h1 class="justify-content-center pt-4 pb-4">Update Data of Author.</h1>
    <?php //print_r($author); ?>
</div>
<div class="container">
    <form action="<?= base_url().'/UpdateAuthor'; ?>" method="POST" autocomplete="off">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="idAuthor" id="idAuthor" aria-describedby="helpId" hidden="" value="<?= $id; ?>">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="nombre">New Name:</label>
                    <input type="text" name="name" id="nombre" class="form-control" placeholder="New Name For Author" aria-describedby="helpId" value="<?= $nombres;?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-md-2">
                <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
            </div>
        </div>
    </form>
</div>