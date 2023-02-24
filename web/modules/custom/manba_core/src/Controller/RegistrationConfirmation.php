<?php


namespace Drupal\manba_core\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for custom services routes.
 */
class RegistrationConfirmation extends ControllerBase
{

  /**
   * Builds the response.
   */
  public function build()
  {
    // display the confirmation message
    return [
      '#markup' => $this->t('Welcome to the Manba3 community <br> We inform you that your registration has been successful and your account will be reviewed and approved as soon as possible'),
    ];
  }
}
