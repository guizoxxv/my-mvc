<?php

class Controller {

  protected function model($model) {

    // ** Add file check later ** - View Codecourse Youtube PHP MVC - Part 6
    require_once '../app/models/'.$model.'.php';
    return new $model();

  }

  protected function view($view, $data = []) {

    require_once '../app/views/'.$view.'.php';

  }

}

?>
