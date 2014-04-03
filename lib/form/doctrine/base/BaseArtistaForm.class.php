<?php

/**
 * Artista form base class.
 *
 * @method Artista getObject() Returns the current form's model object
 *
 * @package    proyectodiscos
 * @subpackage form
 * @author     usuario
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArtistaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'genero_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Genero'), 'add_empty' => false)),
      'nombre'     => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'genero_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Genero'))),
      'nombre'     => new sfValidatorString(array('max_length' => 255)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('artista[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Artista';
  }

}
