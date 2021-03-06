<?php

/**
 * BaseFavoritos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $usuario_id
 * @property integer $artista_id
 * @property integer $album_id
 * @property Artista $Artista
 * @property Album $Album
 * 
 * @method integer   getUsuarioId()  Returns the current record's "usuario_id" value
 * @method integer   getArtistaId()  Returns the current record's "artista_id" value
 * @method integer   getAlbumId()    Returns the current record's "album_id" value
 * @method Artista   getArtista()    Returns the current record's "Artista" value
 * @method Album     getAlbum()      Returns the current record's "Album" value
 * @method Favoritos setUsuarioId()  Sets the current record's "usuario_id" value
 * @method Favoritos setArtistaId()  Sets the current record's "artista_id" value
 * @method Favoritos setAlbumId()    Sets the current record's "album_id" value
 * @method Favoritos setArtista()    Sets the current record's "Artista" value
 * @method Favoritos setAlbum()      Sets the current record's "Album" value
 * 
 * @package    proyectodiscos
 * @subpackage model
 * @author     usuario
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFavoritos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('favoritos');
        $this->hasColumn('usuario_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('artista_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('album_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Artista', array(
             'local' => 'artista_id',
             'foreign' => 'id'));

        $this->hasOne('Album', array(
             'local' => 'album_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}