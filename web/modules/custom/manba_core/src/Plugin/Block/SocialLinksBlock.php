<?php

namespace Drupal\manba_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a social links block.
 *
 * @Block(
 *   id = "social_links_block",
 *   admin_label = @Translation("Social Links"),
 *   category = @Translation("Custom")
 * )
 */
class SocialLinksBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'social_links_block',
    );
  }

}
