<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Drupal\admin_config_assignment\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Description of AdminConfigController
 *
 * @author Hitesh Bhargav
 * 
 */
class AdminConfigController extends ControllerBase {

    /**
     * 
     * @return type
     */
    public function getTimeConfig() {
        $callService = \Drupal::service('admin_cnf_timezone.config');
        $result = $callService->getCurentTime();
        return $result;
    }

}
