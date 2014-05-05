<?php

namespace Rixxi\FormFactory;


interface IFormFactory
{

	/**
	 * Creates a form
	 * @return \Nette\Application\UI\Form
	 */
	function create();

}