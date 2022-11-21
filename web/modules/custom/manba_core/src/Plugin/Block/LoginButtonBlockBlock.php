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

    $build = [];
    $currentUser = \Drupal::currentUser();
    if (\Drupal::currentUser()->isAnonymous()) {
      $url = Url::fromRoute('user.login');
      $link = new Link(t('Log In'), $url);
      $renderable = $link->toRenderable();
      $build['link'] = $renderable;
      $build['link']['#attributes'] = ['class' => ['btn_get btn_hover saas_btn hidden-sm hidden-xs']];
    }

    return array(
      '#theme' => 'login_button_block',
      '#items' => $build,
    );
  }
}
