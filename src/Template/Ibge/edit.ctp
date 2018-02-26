<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ibge $ibge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ibge->cod_mun],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ibge->cod_mun)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ibge'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ibge form large-9 medium-8 columns content">
    <?= $this->Form->create($ibge) ?>
    <fieldset>
        <legend><?= __('Edit Ibge') ?></legend>
        <?php
            echo $this->Form->control('nome_municipio');
            echo $this->Form->control('estado');
            echo $this->Form->control('sigla');
            echo $this->Form->control('cod_uf');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
