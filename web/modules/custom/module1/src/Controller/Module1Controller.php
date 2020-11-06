<?php

namespace Drupal\module1\Controller;

use Drupal\Core\Controller\ControllerBase;

class Module1Controller extends ControllerBase {
  public function render(){
    return [
      /*
       * '#type' => 'checkbox',
       * '#checkbox' => time(),
       */

      '#theme' => 'post_list',
      '#title' => 'titulo para twig',
      '#items' => array('post1', 'post2', 'post3'),
    ];
  }
}
