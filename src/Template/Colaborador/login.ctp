<div id='colaborador-login' class='container'>
	<?= $this->Flash->render('auth') ?>
	<div class='col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3'>
		<?= $this->Form->create('', ['class' => 'form-content']) ?>
			<div class='form-header'>
				<h3 class='form-title text-center'><?= __('Entrar') ?></h3>
			</div>
			<div class='form-body'>
				<?= $this->Flash->render() ?>
				<div class='form-group icon-right'>
					<?= $this->Form->control('nome', [
							'placeholder' => 'Digite seu usuário',
							'class' => 'form-control',
							'required' => true,
							'label' => false
						]) 
					?>
					<i class='fas fa-user icon'></i>
				</div>
				<div class='form-group icon-right'>
					<?= $this->Form->control('senha', [
							'placeholder' => 'Digite sua senha',
							'class' => 'form-control',
							'type' => 'password',
							'required' => true,
							'label' => false
						]) 
					?>
					<i class='fas fa-key icon'></i>
				</div>
			</div>
			<div class='form-footer'>
				<div class='form-group'>
					<?= $this->Form->button(__('Entrar <i class="fas fa-sign-in-alt"></i>'), [
							'class' => 'btn btn-success btn-block'
						]); 
					?>
				</div>
			</div>
			<div class='copy'>
				<strong><small>&copy; SRI Automação</small></strong>
			</div>
		<?= $this->Form->end() ?>
	</div>
</div>