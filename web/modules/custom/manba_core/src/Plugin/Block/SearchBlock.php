<?php

namespace Drupal\manba_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a search block.
 *
 * @Block(
 *   id = "search_block",
 *   admin_label = @Translation("Search block"),
 *   category = @Translation("Custom")
 * )
 */
class SearchBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'search_block',
      '#attached' => array(
        'library' => array(
          'custom_theme/tagify',
        ),
      ),
    );
  }

}
