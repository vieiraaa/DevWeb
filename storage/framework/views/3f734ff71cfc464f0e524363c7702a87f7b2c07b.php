

<?php $__env->startSection('conteudo'); ?>
<br><br>
<h1> Cadastro de Fornecedor </h1>
<form method="post">
    <?php echo csrf_field(); ?>
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
            <option value="PR">PR</option>
            <option value="RS">RS</option>
            <option value="SC">SC</option>
        </select> 
    </lable>
<br>
    <input type="Submit" name="Enviar" class="btn btn-secondary">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('titulo'); ?>

    Fornecedores - Novo

<?php $__env->stopSection(); ?>

<?php $__env->startSection('atividade'); ?>
<br><br><br><h1>
        Arquiteturas!
    </h1>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Model View Controller (MVC)
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Relacionando o Padrão MVC a um Padrão de Arquiteturas de software</strong> , podemos assumir que este é como um Controle dos Modelos de Visão, criados para facilitar a troca de informações entre a interfae do usuário aos dados no banco. Desta forma, obtendo respostas de forma agil e dinamica!
            <ul class="list-group">
                <li class="list-group-item">Modelo: Responsável por gerenciar e controlar a forma como os dados se comportam por meio das funções, Lóticas e Regras estabelecidas.</li>
                <li class="list-group-item">Controle: Responsável por intermediar as requisições enviadas pelo View com as respostas fornecidas pelo model (Processando os dados.)</li>
                <li class="list-group-item">Modelo: Responsável por gerenciar e controlar a forma como os dados se comportam por meio das funções, Lóticas e Regras estabelecidas.</li>
            </ul>
         <br>   
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Vantagens
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <li class="modal-title" id="exampleModalLabel">Vantagens: </li>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          (Segurança) Podemos assumir que o controller funciona como uma espécie de filtro, podendo impedir que dados incorretos e não conhecidos cheguem até o Model.
        </div>
      </div>
    </div>
  </div>

            </div>
          </div>
        </div>
        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Object Relational Mapper (ORM)
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>uma técnica de mapeamento objeto relacional que permite fazer uma relação dos objetos com os dados que os mesmos representam.</strong> Ultimamente tem sido muito utilizada e vem crescendo bastante nos últimos anos.
                            
                        <br><br>     
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Vantagens
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <li class="modal-title" id="exampleModalLabel">Vantagens: </li>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            (Desenvolvimento Front and End) Você escreve menos código e programa com muito mais produtividade. Seu código fica mais elegante. É mais fácil de dar manutenção no projeto.
                            </div>
      </div>
    </div>
  </div>

            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Migration
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            Migrations trabalha na manipulação da base de dados: criando, alterando ou removendo. Uma forma de controlar as alterações do seu banco juntamente com o versionamento de sua aplicação e compartilhar-la.
            </div>
          </div>
        </div>
      </div>
    
    

<br><br><br>
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
<?php echo $__env->make('tamplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Vieira\resources\views/novo_fornecedor.blade.php ENDPATH**/ ?>