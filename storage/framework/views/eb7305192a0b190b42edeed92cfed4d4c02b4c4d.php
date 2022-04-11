

<?php $__env->startSection('conteudo'); ?>
<?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
<table class='table'>
   
    <thead>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>endereco</th>
            <th>cep</th>
            <th>cidade</th>
            <th>estado</th>
            <th>Operações</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $fornecedor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($c->id); ?></td>
            <td><?php echo e($c->nome); ?></td>
            <td><?php echo e($c->endereco); ?></td>
            <td><?php echo e($c->cep); ?></td>
            <td><?php echo e($c->cidade); ?></td>
            <td><?php echo e($c->estado); ?></td>
            <td>
                <a href="<?php echo e(route('fornecedor_alterar', ['id' => $c->id])); ?>" class="btn btn-warning">Altrar</a>
                <a href="#" onclick="excluir(<?php echo e($c->id); ?>)" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<script>
    function excluir(id){
        if (confirm('Deseja realmente excluir o cliente ${id}? Este processo será irreversível.')){
            location.href = route('fornecedor_excluir', {'id':id});
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tamplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Vieira\resources\views/lista_fornecedor.blade.php ENDPATH**/ ?>