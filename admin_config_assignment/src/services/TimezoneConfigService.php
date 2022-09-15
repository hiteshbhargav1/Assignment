<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Drupal\admin_config_assignment\Services;
use Drupal\Core\Config\ConfigFactoryInterface;

/**
 * Description of TimezoneConfigService
 *
 * @author Hitesh Bhargav
 */
class TimezoneConfigService {

    /**
     * 
     */
    public function getCurentTime() {
        $config = \Drupal::config('AssignmentConfigAdminForm.form');
        $cnf_country = $config->get('cnf_country');
        $cnf_city = $config->get('cnf_city');
        $cnf_timezone = $config->get('cnf_timezone');
        if($cnf_timezone){
            $dt = new \DateTime('now', new \DateTimeZone($cnf_timezone));
            $format = $dt->format('jS M Y - h:i a');
        }
        return $format;
    }

}
