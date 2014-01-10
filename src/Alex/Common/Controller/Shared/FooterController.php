<?php

namespace Alex\Common\Controller\Shared;

class FooterController extends \Sifo\Controller
{
	public function build()
	{
		$this->setLayout( 'shared/footer.tpl' );
	}
}
?>