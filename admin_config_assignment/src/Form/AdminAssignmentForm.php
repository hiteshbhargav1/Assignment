<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace Drupal\admin_config_assignment\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class AdminAssignmentForm extends ConfigFormBase {

    public function getEditableConfigNames() {
        return [
            'AssignmentConfigAdminForm.form',
                   ];
    }

    public function getFormId() {
        return 'AssignmentConfigAdmin_Form';
    }

    /**
           * {@inheritdoc}
           */
    public function buildForm(array $form, FormStateInterface $form_state) {
        $config = $this->config('AssignmentConfigAdminForm.form');
        $form['cnf_country'] = array(
            '#type' => 'textfield',
            '#title' => t('Country'),
            '#required' => TRUE,
            '#default_value' => $config->get('cnf_country'),
        );
        $form['cnf_city'] = array(
            '#type' => 'textfield',
            '#title' => t('City'),
            '#required' => TRUE,
            '#default_value' => $config->get('cnf_city'),
        );
        $form['cnf_timezone'] = [
            '#type' => 'select',
            '#title' => t('Timezone'),
            '#options' => [
                'America/Chicago' => t('America/Chicago'),
                'America/New_York' => t('America/New_York'),
                'Asia/Tokyo' => t('Asia/Tokyo'),
                'Asia/Dubai' => t('Asia/Dubai'),
                'Asia/Kolkata' => t('Asia/Kolkata'),
                'Europe/Amsterdam' => t('Europe/Amsterdam'),
                'Europe/Oslo' => t('Europe/Oslo'),
                'Europe/Oslo' => t('Europe/Oslo'),
            ],
            '#default_value' => $config->get('cnf_timezone'),
                   ];
        return parent::buildForm($form, $form_state);
    }

    /**
           * {@inheritdoc}
           */
    public function validateForm(array &$form, FormStateInterface $form_state) {
        
    }

    /**
           * {@inheritdoc}
           */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        $this->config('AssignmentConfigAdminForm.form')
                ->set('cnf_country', $form_state->getValue('cnf_country'))
                ->set('cnf_city', $form_state->getValue('cnf_city'))
                ->set('cnf_timezone', $form_state->getValue('cnf_timezone'))
                ->save();
    }

}
