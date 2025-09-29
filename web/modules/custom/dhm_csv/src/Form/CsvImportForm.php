<?php
namespace Drupal\dhm_csv\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
class CsvImportForm extends FormBase {
  public function getFormId(){ return 'dhm_csv_import'; }
  public function buildForm(array $form, FormStateInterface $form_state){
    $form['csv'] = [
      '#type' => 'textarea', '#title' => $this->t('CSV content'), '#description' => $this->t('Paste CSV here (header supported)')
    ];
    $form['submit'] = ['#type'=>'submit', '#value'=>$this->t('Import')];
    return $form;
  }
  public function submitForm(array &$form, FormStateInterface $form_state){
    $csv = $form_state->getValue('csv');
    // parse and create users/documents - stub
    $this->messenger()->addStatus($this->t('Imported CSV (stub)'));
  }
}
