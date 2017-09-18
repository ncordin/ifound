<?php

class TableItems extends Table {

	public $champ = [
		'reference' => ['bigint', 'unsigned'],
		'model' => ['varchar', 255],
		'capacity' => ['varchar', 255],
		'color' => ['varchar', 255],
		'title' => ['varchar', 255],
		'price' => ['int', 'unsigned'],
		'location' => ['varchar', 255],
		'href' => ['varchar', 255],
		'published' => ['datetime'],
		'created' => ['datetime'],
		'disabled' => ['datetime', null, null, true],
	];

	public $unique = [
		'reference',
	];

}
