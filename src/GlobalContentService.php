<?php

/**
* @file providing the service for get global content entities data.
*
*/

namespace Drupal\global_content;


class GlobalContentService {

 /*
 *  Function to check string starting with given substring 
 */
 private function is_starts_with($string, $startString){ 
  $len = strlen($startString); 
  return (substr($string, 0, $len) === $startString); 
 } 

 /*
 *  Function for get all global content entity data
 */
 public function get_content(){ 
  $entity_type = 'global_content';
  $ids = \Drupal::entityQuery($entity_type)->execute();
  $entities = \Drupal::entityTypeManager()->getStorage($entity_type)->loadMultiple($ids);

  $entity_data = array();
  foreach($entities as $entity)
  {
    $entity_title = str_replace(' ', '_',strtolower($entity->get('name')->value));
    $entity_fields_values = $entity->getFields();
    $entity_data[$entity_title]['id'] = $entity->get('id')->getValue()[0]["value"];
    $entity_data[$entity_title]['name'] = $entity->get('name')->getValue()[0]["value"];
    $entity_data[$entity_title]["_entity"] = $entity;
    foreach($entity_fields_values as $field_name => $field){
      if($this->is_starts_with($field_name,"field_"))
      {
        $entity_data[$entity_title][$field_name] = $field->getValue();
      }
    }
  }

  $entity_data['code_defined_variables'] = _global_content_code_defined_variables();

  return $entity_data;
 }

}