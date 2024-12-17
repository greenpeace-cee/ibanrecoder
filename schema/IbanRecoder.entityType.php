<?php
use CRM_Ibanrecoder_ExtensionUtil as E;
return [
  'name' => 'IbanRecoder',
  'table' => 'civicrm_iban_recoder',
  'class' => 'CRM_Ibanrecoder_DAO_IbanRecoder',
  'getInfo' => fn() => [
    'title' => E::ts('IbanRecoder'),
    'title_plural' => E::ts('IbanRecoders'),
    'description' => E::ts('IBAN Recoder records'),
    'log' => TRUE,
  ],
  'getFields' => fn() => [
    'id' => [
      'title' => E::ts('ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Number',
      'required' => TRUE,
      'description' => E::ts('Unique IbanRecoder ID'),
      'primary_key' => TRUE,
      'auto_increment' => TRUE,
    ],
    'iban_old' => [
      'title' => E::ts('IBAN Old'),
      'sql_type' => 'varchar(34)',
      'input_type' => 'Text',
      'required' => TRUE,
      'description' => E::ts('Old IBAN that needs to be updated'),
    ],
    'iban_new' => [
      'title' => E::ts('IBAN New'),
      'sql_type' => 'varchar(34)',
      'input_type' => 'Text',
      'required' => TRUE,
      'description' => E::ts('New IBAN that replaces the old one'),
    ],
    'status_id' => [
      'title' => ts('Status ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'Select',
      'required' => TRUE,
      'default' => 1,
      'description' => ts('IBAN Recoder Status'),
      'pseudoconstant' => [
        'option_group_name' => 'iban_recoder_status',
      ],
    ],
    'result' => [
      'title' => ts('Result'),
      'sql_type' => 'text',
      'input_type' => 'Text',
      'description' => ts('IBAN Recoder Import Result'),
    ],
    'created_id' => [
      'title' => ts('Created By Contact ID'),
      'sql_type' => 'int unsigned',
      'input_type' => 'EntityRef',
      'description' => ts('FK to contact table.'),
      'default_callback' => ['CRM_Core_Session', 'getLoggedInContactID'],
      'input_attrs' => [
        'label' => ts('Created By'),
      ],
      'entity_reference' => [
        'entity' => 'Contact',
        'key' => 'id',
        'on_delete' => 'SET NULL',
      ],
    ],
    'created_date' => [
      'title' => ts('Created Date'),
      'sql_type' => 'timestamp',
      'input_type' => NULL,
      'readonly' => TRUE,
      'description' => E::ts('When was the IBAN Recoding created.'),
      'default' => 'CURRENT_TIMESTAMP',
      'input_attrs' => [
        'label' => ts('Created Date'),
      ],
    ],
    'modified_date' => [
      'title' => ts('Modified Date'),
      'sql_type' => 'timestamp',
      'input_type' => NULL,
      'readonly' => TRUE,
      'description' => ts('When was the IBAN Recoding updated.'),
      'default' => 'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
      'input_attrs' => [
        'label' => ts('Modified Date'),
      ],
    ],
  ],
  'getIndices' => fn() => [],
  'getPaths' => fn() => [],
];
