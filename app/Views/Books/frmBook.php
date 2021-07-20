<h1 style="padding: 5px; margin: 20px; margin-left: 120px">Registered Books</h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?= base_url() . '/NewBook' ?>" method="POST">
                <div class="form-group">
                    <label for="book">Name Book</label>
                    <input type="text" name="titleBook" id="book" class="form-control" placeholder="New Name of the Book" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="description">Description Book</label>
                    <textarea name="description" id="description" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="author"></label>
                    <select class="form-control" name="author" id="author">
                        <?php foreach($value as $key):?>
                            <?php echo "<option value=".$key->id_author.">".$key->name."</option>"?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary col-3">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>