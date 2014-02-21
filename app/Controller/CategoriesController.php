<?php

class CategoriesController extends AppController {
    public $helpers = array('Html', 'Form'); // on inclut les helpers


    public function index() {


        $categories = $this->Category->find('all');
        $this->set(compact('categories'));


        //var_dump($categories);die();

    }
}