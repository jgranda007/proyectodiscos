<?php

/**
 * album actions.
 *
 * @package    proyectodiscos
 * @subpackage album
 * @author     usuario
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class albumActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->album=Doctrine::getTable('Album')->getTodos();
    #$this->forward('default', 'module');
  }
  
  public function executeFiltradosPorArtista(sfWebRequest $request)
  {
    $artista=Doctrine::getTable('Artista')->find($request->getParameter('id'));
    $this->album=Doctrine::getTable('Album')->getFiltradosPorArtista($artista);
    #echo $this->modelos;
    $this->setTemplate('index');
  }
}
