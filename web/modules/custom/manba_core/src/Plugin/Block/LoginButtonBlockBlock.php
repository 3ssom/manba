<?php

namespace Drupal\manba_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Provides a loginblock block.
 *
 * @Block(
 *   id = "login_button_block",
 *   admin_label = @Translation("Login Button Block"),
 *   category = @Translation("Custom")
 * )
 */
class LoginButtonBlockBlock extends BlockBase
{

  /**
   * {@inheritdoc}
   */
  public function build()
  {
    return array(
      '#theme' => 'login_button_block',
    );
  }
}
