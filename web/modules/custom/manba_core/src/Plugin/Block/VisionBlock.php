<?php

namespace Drupal\manba_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a vision 2030 block.
 *
 * @Block(
 *   id = "vision2030_block",
 *   admin_label = @Translation("Vision 2030"),
 *   category = @Translation("Custom")
 * )
 */
class VisionBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'vision2030_block',
    );
  }

}
