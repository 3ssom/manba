<?php

namespace Drupal\manba_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an important links block.
 *
 * @Block(
 *   id = "important_links_block",
 *   admin_label = @Translation("Important Links"),
 *   category = @Translation("Custom")
 * )
 */
class ImportantLinksBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'important_links_block',
    );
  }

}
