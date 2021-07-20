<h1 style="padding: 5px; margin: 20px; margin-left: 120px">Registered Authors</h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="<?= base_url() . '/NewAuthor' ?>" method="POST">
                <div class="form-group">
                    <label for="author">Name Author</label>
                    <input type="text" name="author" id="author" class="form-control" placeholder="New Author" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary col-3">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>