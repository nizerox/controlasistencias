<div class="usuarios view">
<h2><?php  echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombre_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['apellidos_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pacientes'); ?></h3>
	<?php if (!empty($usuario['Paciente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellido Paterno'); ?></th>
		<th><?php echo __('Apellido Materno'); ?></th>
		<th><?php echo __('Fecha Nacimiento'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Estado Civil'); ?></th>
		<th><?php echo __('Domicilio'); ?></th>
		<th><?php echo __('Lugar Nacimiento'); ?></th>
		<th><?php echo __('Procedencia'); ?></th>
		<th><?php echo __('Fecha Registro'); ?></th>
		<th><?php echo __('Nombre Madre'); ?></th>
		<th><?php echo __('Nombre Padre'); ?></th>
		<th><?php echo __('Religion'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Nro Historia Clinica'); ?></th>
		<th><?php echo __('Grado Id'); ?></th>
		<th><?php echo __('Ocupacione Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usuario['Paciente'] as $paciente): ?>
		<tr>
			<td><?php echo $paciente['id']; ?></td>
			<td><?php echo $paciente['nombres']; ?></td>
			<td><?php echo $paciente['apellido_paterno']; ?></td>
			<td><?php echo $paciente['apellido_materno']; ?></td>
			<td><?php echo $paciente['fecha_nacimiento']; ?></td>
			<td><?php echo $paciente['sexo']; ?></td>
			<td><?php echo $paciente['estado_civil']; ?></td>
			<td><?php echo $paciente['domicilio']; ?></td>
			<td><?php echo $paciente['lugar_nacimiento']; ?></td>
			<td><?php echo $paciente['procedencia']; ?></td>
			<td><?php echo $paciente['fecha_registro']; ?></td>
			<td><?php echo $paciente['nombre_madre']; ?></td>
			<td><?php echo $paciente['nombre_padre']; ?></td>
			<td><?php echo $paciente['religion']; ?></td>
			<td><?php echo $paciente['dni']; ?></td>
			<td><?php echo $paciente['telefono']; ?></td>
			<td><?php echo $paciente['nro_historia_clinica']; ?></td>
			<td><?php echo $paciente['grado_id']; ?></td>
			<td><?php echo $paciente['ocupacione_id']; ?></td>
			<td><?php echo $paciente['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pacientes', 'action' => 'view', $paciente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pacientes', 'action' => 'edit', $paciente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pacientes', 'action' => 'delete', $paciente['id']), null, __('Are you sure you want to delete # %s?', $paciente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
