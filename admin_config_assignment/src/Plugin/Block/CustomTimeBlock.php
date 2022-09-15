<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
namespace Drupal\admin_config_assignment\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Description of CustomTimeBlock
 *
 * @author Hitesh bhargav
 */
/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "custom_time_block",
 *   admin_label = @Translation("Custom Time block"),
 * )
 */
class CustomTimeBlock extends BlockBase {
    //put your code here
    /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('This is a simple block!'),
      '#theme' => 'custom_time_block',  
    ];
  }
  
}
