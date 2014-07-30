<?php

namespace App\Presenters;

use Nette,
	App\Model,
	App\Model\UserManager;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
		$database = new Nette\Database\Connection('mysql:host=127.0.0.1:33069;dbname=test','root');
		var_dump($database);
	}

	public function renderTest($id=0)
	{
		$this->template->id = $id;
		$this->template->list = array('test','rendering','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut repellendus assumenda obcaecati itaque quod recusandae reiciendis blanditiis tempora ratione iusto dolore ducimus quo optio maiores eum quam dolores! Est quod!');
		$this->template->title = 'Rendering Test page';
		$this->template->test = "Testing renderings me";
	}

}
