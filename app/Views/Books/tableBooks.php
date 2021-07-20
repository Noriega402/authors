<div class="container">
    <div class="row">
        <div class="col-12 ">
            <table class="table table-striped table-bordered">
                <thead style="background-color: black;" class="text-white ">
                    <tr class="text-center">
                        <th>TITLE BOOK</th>
                        <th>DESCRIPTION</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($value as $key):
                ?>
                    <tr>
                        <td scope="row"><?= $key->title_book; ?></td>
                        <td scope="row" class="text-justify"><?= $key->description_book; ?></td>
                        <td scope="row"><a href="<?= base_url().'/ActualizarLibro/' .$key->id_book; ?>" class="btn btn-warning"><i class="far fa-edit"></i></a></td>
                        <td scope="row"><a href="<?= base_url().'/EliminarLibro/'.$key->id_book; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>