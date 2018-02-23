<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cadastro[]|\Cake\Collection\CollectionInterface $cadastro
 */
?>
<div id='cadastro-index' class='container-fluid'>
    <h2 class='page-header'>
        <?= __('Clientes') ?>
        <a href='/cadastro/add' class='btn btn-success'>
            <?= __('Novo Cadastro') ?> <i class='fas fa-plus'></i>
        </a>
    </h2>
    <?= $this->Flash->render() ?>
    <div class='table-fixed-height'>
        <table class='table table-striped table-bordered'>
            <thead>
                <tr>
                    <th><i class='fas fa-sort'></i> <?= __('#') ?></th>
                    <th class='hidden-xs'><i class='fas fa-sort'></i> <?= __('ID') ?></th>
                    <th><i class='fas fa-sort'></i> <?= __('Razão Social') ?></th>
                    <th class='hidden-xs'><i class='fas fa-sort'></i> <?= __('CNPJ/CPF') ?></th>
                    <th class='hidden-xs'><i class='fas fa-sort'></i> <?= __('Tipo') ?></th>
                    <th class='hidden-xs'><i class='fas fa-sort'></i> <?= __('Estado') ?></th>
                    <th class='hidden-xs hidden-sm'><i class='fas fa-sort'></i> <?= __('CEP') ?></th>
                    <th class='hidden-xs'><i class='fas fa-sort'></i> <?= __('Cidade') ?></th>
                    <th class='hidden-xs hidden-sm'><i class='fas fa-sort'></i> <?= __('Endereço') ?></th>
                    <th class='hidden-xs hidden-sm'><i class='fas fa-sort'></i> <?= __('Bairro') ?></th>
                    <th class='actions'><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cadastro as $indice => $cadastro): ?>
                    <tr>
                        <th><?= $this->Number->format(++$indice) ?></th>
                        <td class='hidden-xs'><?= $this->Number->format($cadastro->cod_cadastro) ?></td>
                        <td><?= h($cadastro->razao) ?></td>
                        <td class='hidden-xs'><?= h($cadastro->cnpj) ?></td>
                        <td class='hidden-xs'>
                            <?= (h($cadastro->tipo) === 'F') ? h('FORNECEDOR') : h('CLIENTE') ?>
                        </td>
                        <td class='hidden-xs'><?= h($cadastro->estado) ?></td>
                        <td class='hidden-xs hidden-sm'><?= h($cadastro->cep) ?></td>
                        <td class='hidden-xs'><?= h($cadastro->cidade) ?></td>
                        <td class='hidden-xs hidden-sm'><?= h($cadastro->endereco) ?></td>
                        <td class='hidden-xs hidden-sm'><?= h($cadastro->bairro) ?></td>
                        <td class='actions'>
                            <a href=/cadastro/view/<?= $cadastro->cod_cadastro ?> class='btn btn-info btn-xs'>
                                <i class='fas fa-eye'></i>
                            </a>
                            <a href=/cadastro/edit/<?= $cadastro->cod_cadastro ?> class='btn btn-primary btn-xs'>
                                <i class='fas fa-pencil-alt'></i>
                            </a>
                            <button value=<?= $cadastro->cod_cadastro ?> class='btn btn-danger btn-xs delete' type='button' data-toggle='modal' data-target='#delete'>
                                <i class='fas fa-trash-alt'></i>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class='paginator'>
        <ul class='pagination'>
            <?= $this->Paginator->first(__('Início')) ?>
            <?= $this->Paginator->prev(__('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo')) ?>
            <?= $this->Paginator->last(__('Fim')) ?>
        </ul>
        <p>
            <?= $this->Paginator->counter(['format' => __(
                    "Página {{page}} de {{pages}}, mostrando {{current}} registro(s), do total de {{count}}"
                )]) 
            ?>
        </p>
    </div>
    <!-- Modal Start -->
        <div id='delete' class='modal fade' role='dialog'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal'>&times;</button>
                        <h4 class='modal-title text-center'>
                            <?= __('Deseja realmente apagar este?') ?>
                        </h4>
                    </div>
                    <div class='modal-body'>
                        
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-dismiss='modal'>
                            <?= __('Fechar') ?>
                        </button>
                        <button type='button' class='btn btn-success'>
                            <?= __('Confirmar') ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script type='text/javascript'>
            /*$('#delete.modal').on('show.bs.modal', function(evento) {
                $(this).find('form').attr({ 
                    action: '/cadastro/delete/' + $(evento.relatedTarget).val() 
                });
            })
            .on('hidden.bs.modal', function(evento) {
                $(this).find('button.confirm').off('click');
            });*/
        </script>
    <!-- Modal End -->
</div>