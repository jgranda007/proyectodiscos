<?php

/**
 * Album filter form base class.
 *
 * @package    proyectodiscos
 * @subpackage filter
 * @author     usuario
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAlbumFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'artista_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Artista'), 'add_empty' => true)),
      'nombre'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'urlComprar' => new sfWidgetFormFilterInput(),
      'urlSpotify' => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'artista_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Artista'), 'column' => 'id')),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'urlComprar' => new sfValidatorPass(array('required' => false)),
      'urlSpotify' => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('album_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Album';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'artista_id' => 'ForeignKey',
      'nombre'     => 'Text',
      'urlComprar' => 'Text',
      'urlSpotify' => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
