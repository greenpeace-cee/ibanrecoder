<?php
use CRM_IbanRecoder_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_IBAN_Recoder',
    'entity' => 'SavedSearch',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'IBAN_Recoder',
        'label' => E::ts('IBAN Recoder'),
        'api_entity' => 'IbanRecoder',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'iban_old',
            'iban_new',
            'status_id:label',
            'result',
            'created_date',
            'modified_date',
            'created_id',
          ],
          'orderBy' => [],
          'where' => [],
          'groupBy' => [],
          'join' => [],
          'having' => [],
        ],
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'SavedSearch_IBAN_Recoder_SearchDisplay_IBAN_Recoder_Table',
    'entity' => 'SearchDisplay',
    'cleanup' => 'never',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'IBAN_Recoder_Table',
        'label' => E::ts('IBAN Recoder Table'),
        'saved_search_id.name' => 'IBAN_Recoder',
        'type' => 'table',
        'settings' => [
          'description' => NULL,
          'sort' => [
            [
              'id',
              'ASC',
            ],
          ],
          'limit' => 50,
          'pager' => [
            'expose_limit' => TRUE,
          ],
          'placeholder' => 50,
          'columns' => [
            [
              'type' => 'field',
              'key' => 'id',
              'dataType' => 'Integer',
              'label' => E::ts('ID'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'iban_old',
              'dataType' => 'String',
              'label' => E::ts('IBAN Old'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'iban_new',
              'dataType' => 'String',
              'label' => E::ts('IBAN New'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'status_id:label',
              'dataType' => 'Integer',
              'label' => E::ts('Status ID'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'result',
              'dataType' => 'Text',
              'label' => E::ts('Result'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'created_date',
              'dataType' => 'Timestamp',
              'label' => E::ts('Created Date'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'modified_date',
              'dataType' => 'Timestamp',
              'label' => E::ts('Modified Date'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'created_id',
              'dataType' => 'Integer',
              'label' => E::ts('Created By'),
              'sortable' => TRUE,
            ],
          ],
          'actions' => TRUE,
          'classes' => [
            'table',
            'table-striped',
            'crm-sticky-header',
          ],
          'headerCount' => TRUE,
        ],
      ],
      'match' => [
        'saved_search_id',
        'name',
      ],
    ],
  ],
];
