<?php

namespace Drupal\manba_core\Plugin\Action;

use Drupal\views_bulk_operations\Action\ViewsBulkOperationsActionBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;


/**
 * Action description.
 *
 * @Action(
 *   id = "manba_core_set_langcode_ar",
 *   label = @Translation("Set Langcode to Arabic"),
 *   type = "",
 *   pass_context = TRUE,
 *   requirements = {
 *     "_role" = "administrator",
 *   },

 * )
 */
class SetLangcodeAr extends ViewsBulkOperationsActionBase
{

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function execute($entity = NULL)
  {
      $entity->set('langcode', 'ar');
      $entity->save();
  }


  /**
   * {@inheritdoc}
   */
  public function access($object, AccountInterface $account = NULL, $return_as_object = FALSE)
  {
    return $object->access('view', $account, $return_as_object);
  }
}
