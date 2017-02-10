<?php
/**
 * @file
 * Contains \Drupal\test_twig\Controller\TestTwigController.
 */
namespace Drupal\test_twig\Controller;

use Drupal\Core\Controller\ControllerBase;

class TestTwigController extends ControllerBase {

  public function content() {

    return array(
      '#theme' => 'test_twig',
      '#test_var' => $this->t('Test Value'),
       '#attached' => array(
        'library' =>  array(
          'test_twig/test_twig'
        ),
      ),
    );

  }
}
