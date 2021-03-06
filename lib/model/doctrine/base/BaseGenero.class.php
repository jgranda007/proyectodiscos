<?php

/**
 * BaseGenero
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property Doctrine_Collection $Artistas
 * 
 * @method string              getNombre()   Returns the current record's "nombre" value
 * @method Doctrine_Collection getArtistas() Returns the current record's "Artistas" collection
 * @method Genero              setNombre()   Sets the current record's "nombre" value
 * @method Genero              setArtistas() Sets the current record's "Artistas" collection
 * 
 * @package    proyectodiscos
 * @subpackage model
 * @author     usuario
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGenero extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('genero');
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Artista as Artistas', array(
             'local' => 'id',
             'foreign' => 'genero_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}