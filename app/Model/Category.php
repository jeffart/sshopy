<?php
/**
 * Created by PhpStorm.
 * User: sullivan2013
 * Date: 21/02/14
 * Time: 18:26
 */

class Category extends AppModel {

    // regele de validation pour l'editon et la creation des categories

    public $validate = array(
        'name' => array('rule' => 'notEmpty',
        'message' => 'Votre nom de la categorie n\'est pas valide' )  // le champ name du formulaire doit etre rempli
    );


} 