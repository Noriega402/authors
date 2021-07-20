<div class="container">
    <div class="row">
        <div class="col-12 ">
            <table class="table table-striped table-bordered">
                <thead style="background-color: black;" class="text-white ">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>NAME AUTHOR</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($value as $key) :
                    ?>
                        <tr class="text-center">
                            <td scope="row"><?= $key->id_author; ?></td>
                            <td scope="row"><?= $key->name; ?></td>
                            <td scope="row"><a href="<?= base_url() . '/ActualizarAutor/' . $key->id_author; ?>" class="btn btn-warning"><i class="far fa-edit"></i></a></td>
                            <td scope="row"><a href="<?= base_url() . '/Eliminar/' . $key->id_author; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- <a href="" class="btn btn-danger"><i class="fas fa-minus-circle"></i> Eliminar Todos</a> -->
            <a class="btn btn-danger" href="<?= base_url().'/TruncateAuthors/'?>"><i class="fas fa-minus-circle"></i> Delete All</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- SCRIPT OFICIAL PARA SWEET ALERT -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
        let mensaje = '<?= $condicion; ?>';
        if (mensaje == 0) {

        } else if (mensaje == 1) {
            swal.fire({
                icon: 'success',
                title: 'Save',
                text: 'The new author was inserted'
            });
        }else if(mensaje == 2){
            swal.fire({
                icon: 'error',
                title: 'Ups!!',
                text: 'Error inserting new author'
            });
        }else if(mensaje == 3){
            swal.fire({
                icon: 'success',
                title: 'Updated',
                text: 'Updated author data'
            });
        }else if(mensaje == 4){
            swal.fire({
                icon: 'error',
                title: 'Ups!!',
                text: 'Failed to update author data'
            });
        }else if(mensaje == 5){
            swal.fire({
                icon: 'success',
                title: 'Delete',
                text: 'Author successfully removed'
            });
        }else if(mensaje == 6){
            swal.fire({
                icon: 'error',
                title: 'Ups!!',
                text: 'Failed to remove author'
            });
        }else if(mensaje == 7){
            swal.fire({
                icon: 'success',
                title: 'Delete All',
                text: 'Authors removed successfully'
            });
        }else if(mensaje == 8){
            swal.fire({
                icon: 'error',
                title: 'Ups!!',
                text: 'Fatal error when deleting authors'
            });
        }
    </script>
</body>
</html>