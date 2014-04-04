<?php

/**
 * Favoritos form base class.
 *
 * @method Favoritos getObject() Returns the current form's model object
 *
 * @package    proyectodiscos
 * @subpackage form
 * @author     usuario
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFavoritosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'usuario_id' => new sfWidgetFormInputText(),
      'artista_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Artista'), 'add_empty' => false)),
      'album_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Album'), 'add_empty' => false)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'usuario_id' => new sfValidatorInteger(),
      'artista_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Artista'))),
      'album_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Album'))),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('favoritos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Favoritos';
  }

}
