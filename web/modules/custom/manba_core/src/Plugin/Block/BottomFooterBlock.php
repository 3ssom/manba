<?php

namespace Drupal\manba_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a bottom footer block.
 *
 * @Block(
 *   id = "bottom_footer_block",
 *   admin_label = @Translation("Bottom Footer"),
 *   category = @Translation("Custom")
 * )
 */
class BottomFooterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'bottom_footer_block',
    );
  }

}
