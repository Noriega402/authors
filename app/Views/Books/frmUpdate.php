<?php
// print_r($book);
// print_r($author);
$idBook = $book[0]['id_book'];
$titleBook = $book[0]['title_book'];
$description = $book[0]['description_book'];
?>
<div class="container">
    <h1 class="justify-content-center pt-4 pb-4">Update Data of Book.</h1>
</div>
<div class="container">
    <form action="<?= base_url() . '/UpdateBook'; ?>" method="POST" autocomplete="off">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="idBook" id="idBook" aria-describedby="helpId" hidden="" value="<?= $idBook; ?>">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="nombre">New Title Book:</label>
                    <input type="text" name="title_book" id="title_book" class="form-control" placeholder="New Name For Book" aria-describedby="helpId" value="<?= $titleBook; ?>">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="description">New Description Book</label>
                    <textarea name="description" id="description" rows="5" class="form-control"><?= $description; ?></textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="author"></label>
                    <select class="form-control" name="author" id="author">
                        <?php foreach ($author as $key) : ?>
                            <?php echo "<option value=" . $key->id_author . ">" . $key->name . "</option>" ?>
                        <?php endforeach; ?>
                    </select>
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