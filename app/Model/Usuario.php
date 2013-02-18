<?php
App::uses('AppModel', 'Model');

class Usuario extends AppModel {
	public $displayField = 'nombre_usuario';

	public $hasMany = array(
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
