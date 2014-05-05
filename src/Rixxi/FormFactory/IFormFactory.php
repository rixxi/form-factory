<?php

namespace Rixxi\FormFactory;

use Nette;



interface IFormFactory
{

	/**
	 * Creates a form
	 * @return \Nette\Application\UI\Form
	 */
	function create();


	/**
	 * Sets translate adapter.
	 */
	function setTranslator(Nette\Localization\ITranslator $translator = NULL);


	/**
	 * Sets form renderer.
	 */
	function setRenderer(Nette\Forms\IFormRenderer $renderer = NULL);

}