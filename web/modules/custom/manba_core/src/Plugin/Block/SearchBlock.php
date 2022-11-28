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
    $language_id =  \Drupal::languageManager()->getCurrentLanguage()->getId();
    $terms = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadByProperties([
      'vid' => 'keywords',
      'langcode' => $language_id
    ]);
    $results = [];
    $suggestion = [];
    foreach ($terms as $term) {
      if ($term->get('field_suggestion')->value) {
        $suggestion[$term->id()] = $term->getName();
      }
      $results[$term->id()] = $term->getName();
    }
    return array(
      '#theme' => 'search_block',
      '#attached' => array(
        'library' => array(
          'custom_theme/tagify',
        ),
        'drupalSettings' => array(
          'suggestion' => array_values($suggestion),
          'results' => array_values($results),
        ),
      ),
      '#cache' => ['tags' => ['taxonomy_term_list:keywords']],
    );
  }

}
