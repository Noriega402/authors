<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="#"><b>Noriega</b></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url();?>/Home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url().route_to('Book'); ?>">Books</a>
            </li>
            <li class="nas-item">
                <a class="nav-link" href="<?= base_url().route_to('Author');?>">Authors</a>
            </li>
            <li class="nas-item">
                <a class="nav-link" href="<?= base_url().route_to('Aut_Book');?>">Author And Book</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Know more</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="https://elperiodico.com.gt/entretenimiento/libros/2020/08/26/los-10-libros-mas-leidos-de-todos-los-tiempos/">The 10 most read books</a>
                    <a class="dropdown-item" href="https://psicologiaymente.com/cultura/libros-recomendados">The 100 books you must read</a>
                </div>
            </li>
        </ul>
    </div>
</nav>