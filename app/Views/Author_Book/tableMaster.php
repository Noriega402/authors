<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped table-hover">
                <thead style="background-color: black;" class="text-white ">
                    <tr class="text-center">
                        <th>Author</th>
                        <th>Book</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($value as $key) : ?>
                        <tr class="cursor-pointer">
                            <td><?= $key->nameAuthor; ?></td>
                            <td><?= $key->title_book; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>