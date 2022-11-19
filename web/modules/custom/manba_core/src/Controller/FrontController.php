<?php

namespace Drupal\manba_core\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Custom module for Manba Core. routes.
 */
class FrontController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => '',
    ];

    return $build;
  }

}
