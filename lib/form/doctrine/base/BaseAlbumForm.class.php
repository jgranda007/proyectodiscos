<?php

/**
 * Album form base class.
 *
 * @method Album getObject() Returns the current form's model object
 *
 * @package    proyectodiscos
 * @subpackage form
 * @author     usuario
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAlbumForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'artista_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Artista'), 'add_empty' => false)),
      'nombre'     => new sfWidgetFormInputText(),
      'urlComprar' => new sfWidgetFormInputText(),
      'urlSpotify' => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'artista_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Artista'))),
      'nombre'     => new sfValidatorString(array('max_length' => 255)),
      'urlComprar' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'urlSpotify' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('album[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Album';
  }

}
