<?php

/**
 * artista actions.
 *
 * @package    proyectodiscos
 * @subpackage artista
 * @author     usuario
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class artistaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->artista=Doctrine::getTable('Artista')->getTodos();
  }
  
  public function executeFiltradosPorGenero(sfWebRequest $request)
  {
    $genero=Doctrine::getTable('Genero')->find($request->getParameter('id'));
    $this->artista=Doctrine::getTable('Artista')->getFiltradosPorGenero($genero);
    $this->setTemplate('index');
  }
}
