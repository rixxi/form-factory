<?php

namespace Rixxi\FormFactory;

use Nette;



class FormFactory extends Nette\Object implements IFormFactory
{

	/** @var \Nette\Localization\ITranslator */
	private $translator;

	/** @var \Nette\Forms\IFormRenderer */
	private $renderer;


	/**
	 * Creates a form
	 * @return Nette\Application\UI\Form
	 */
	public function createForm()
	{
		$form = new Nette\Application\UI\Form;
		$form->setTranslator($this->translator);
		$form->setRenderer($this->renderer);

		return $form;
	}


	/**
	 * Sets translate adapter.
	 */
	public function setTranslator(Nette\Localization\ITranslator $translator = NULL)
	{
		$this->translator = $translator;
	}


	/**
	 * Sets form renderer.
	 */
	public function setRenderer(Nette\Forms\IFormRenderer $renderer = NULL)
	{
		$this->renderer = $renderer;
	}

}