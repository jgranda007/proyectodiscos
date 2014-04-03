<?php

/**
 * genero actions.
 *
 * @package    proyectodiscos
 * @subpackage genero
 * @author     usuario
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class generoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->genero=Doctrine::getTable('Genero')->getTodos();
    #$this->forward('default', 'module');
  }
}
