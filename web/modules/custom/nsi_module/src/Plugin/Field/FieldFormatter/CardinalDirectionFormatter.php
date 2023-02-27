<?php

namespace Drupal\nsi_module\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'nsi_module_cardinal_direction' formatter.
 *
 * @FieldFormatter(
 *   id = "nsi_module_cardinal_direction",
 *   label = @Translation("Cardinal direction"),
 *   field_types = {
 *     "field_degree"
 *   }
 * )
 */
class CardinalDirectionFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];

    foreach ($items as $delta => $item) {
      $degree = $item->value;
      $cardinal_direction = $this->getDegreeCardinalDirection($degree)->getContent();
      $elements[$delta] = [
        '#theme' => 'nsi_module_cardinal_direction',
        '#degree' => $degree,
        '#cardinal_direction' => $cardinal_direction,
      ];
    }

    return $elements;
  }

}

