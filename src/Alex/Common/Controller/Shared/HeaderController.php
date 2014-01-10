<?php

namespace Alex\Common\Controller\Shared;

class HeaderController extends \Sifo\Controller
{
	public function build()
	{
		$this->setLayout( 'shared/header.tpl' );
	}
}
?>