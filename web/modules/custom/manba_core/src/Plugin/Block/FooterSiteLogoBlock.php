<?php

namespace Drupal\manba_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Provides a footer_site_logo block.
 *
 * @Block(
 *   id = "footer_site_logo_block",
 *   admin_label = @Translation("Footer Site Logo Block"),
 *   category = @Translation("Custom")
 * )
 */
class FooterSiteLogoBlock extends BlockBase
{

  /**
   * {@inheritdoc}
   */
  public function build()
  {

    return array(
     '#theme' => 'footer_site_logo_block',
   );

  }
}
