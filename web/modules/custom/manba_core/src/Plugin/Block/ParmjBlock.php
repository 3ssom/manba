<?php

namespace Drupal\manba_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a parmg block.
 *
 * @Block(
 *   id = "parmg_block",
 *   admin_label = @Translation("Parmg"),
 *   category = @Translation("Custom")
 * )
 */
class ParmjBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'parmg_block',
    );
  }

}
