<?php
use CRM_IbanRecoder_ExtensionUtil as E;

return [
  [
    'name' => 'OptionGroup_iban_recoder_status',
    'entity' => 'OptionGroup',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'iban_recoder_status',
        'title' => E::ts('IBAN Recoder Status'),
        'data_type' => 'Integer',
        'is_reserved' => TRUE,
        'option_value_fields' => [
          'name',
          'label',
          'description',
        ],
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_iban_recoder_status_OptionValue_Scheduled',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'iban_recoder_status',
        'label' => E::ts('Scheduled'),
        'value' => '1',
        'name' => 'Scheduled',
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_iban_recoder_status_OptionValue_Completed',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'iban_recoder_status',
        'label' => E::ts('Completed'),
        'value' => '2',
        'name' => 'Completed',
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
  [
    'name' => 'OptionGroup_iban_recoder_status_OptionValue_Failed',
    'entity' => 'OptionValue',
    'cleanup' => 'never',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'iban_recoder_status',
        'label' => E::ts('Failed'),
        'value' => '3',
        'name' => 'Failed',
      ],
      'match' => [
        'option_group_id',
        'name',
      ],
    ],
  ],
];
