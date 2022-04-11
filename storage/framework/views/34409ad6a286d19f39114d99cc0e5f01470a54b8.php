

<?php $__env->startSection('titulo'); ?>

    Alterar Cliente #<?php echo e($cliente->id); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                            <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-vector-graphic-pixabay-15.png" alt="" width="40" height="40.62">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            </div>
                        </div>
                    </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
<br><br>
<h1> Cadastro de Fornecedor </h1>
<form method="post">
    @csrf
<div class="row">
<div class="col">
    
    <label> Nome </lable>
    <input type="text" class="form-control" name="nome">

</div>
<div class="col">

    <label> Endereço </lable>
    <input type="text" class="form-control" name="endereco">

</div>
</div>
<div class="row">
<div class="col">

    <label> CEP </lable>
    <input type="text" class="form-control" name="cep">

</div>
<div class="col">

    <label> Cidade </lable>
    <input type="text" class="form-control" name="cidade">

</div>
</div>

    <label> Estado 
        <select class="form-select" aria-label="Default select example" name="estado">
            <option selected>Escolha: </option>
            <option value="1">PR</option>
            <option value="2">RS</option>
            <option value="3">SC</option>
        </select> 
    </lable>
<br>
    <input type="Submit" name="Enviar" class="btn btn-secondary">
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('tamplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Vieira\resources\views/altera_cliente.blade.php ENDPATH**/ ?>