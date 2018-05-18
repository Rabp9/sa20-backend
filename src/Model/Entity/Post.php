<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property string $title
 * @property string $subtitle
 * @property string $resumen
 * @property string $body
 * @property string $portada
 * @property \Cake\I18n\FrozenTime $fecha_registro
 * @property \Cake\I18n\FrozenTime $fecha_publicacion
 * @property int $estado_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Estado $estado
 */
class Post extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'category_id' => true,
        'title' => true,
        'subtitle' => true,
        'resumen' => true,
        'body' => true,
        'portada' => true,
        'fecha_registro' => true,
        'fecha_publicacion' => true,
        'user' => true,
        'category' => true,
        'estado' => true
    ];
}
