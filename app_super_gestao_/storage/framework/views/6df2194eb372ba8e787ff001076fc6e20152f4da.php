<h3>Fornecedor</h3>

<?php
    /*
    if(empty($variavel)) {} //retornar true se a variável estiver vazia
    - ''
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var
    */
?>

<?php if(isset($fornecedores)): ?>

    <?php $__empty_1 = true; $__currentLoopData = $fornecedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indice => $fornecedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        Iteração atual: <?php echo e($loop->iteration); ?>

        <br>
        Fornecedor: <?php echo e($fornecedor['nome']); ?>

        <br>
        Status: <?php echo e($fornecedor['status']); ?>

        <br>
        CNPJ: <?php echo e($fornecedor['cnpj'] ?? ''); ?>

        <br>
        Telefone: (<?php echo e($fornecedor['ddd'] ?? ''); ?>) <?php echo e($fornecedor['telefone'] ?? ''); ?>

        <br>
        <?php if($loop->first): ?>
            Primeira iteração no loop

            <br>
            Total de registros: <?php echo e($loop->count); ?>

        <?php endif; ?>

        <?php if($loop->last): ?>
            Última iteração no loop
        <?php endif; ?>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        Não existem fornecedores cadastrados!!!
    <?php endif; ?>
<?php endif; ?>

<?php /**PATH C:\workspace\10.PHP\Laravel\app_super_gestao\resources\views/app/fornecedor/index.blade.php ENDPATH**/ ?>