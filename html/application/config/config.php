<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
return array(
  'components' => array(
    'db' => array(
      'connectionString' => 'pgsql:host=db;port=5432;dbname=limesurvey;',
      'emulatePrepare' => true,
      'username' => 'limesurvey',
      'password' => 'Cie123',
      'charset' => 'utf8',
      'tablePrefix' => 'lime_',
    ),
    //'session' => array (
    //   'class' => 'application.core.web.DbHttpSession',
    //   'connectionID' => 'db',
    //   'sessionTableName' => '{{sessions}}',
    //),
    'urlManager' => array(
      'urlFormat' => 'path',
      'rules' => array(),
      'showScriptName' => true,
    ),
    'request' => array(
      'baseUrl' => '',
     ),
  ),
  'config'=>array(
    'publicurl'=>'limesurvey.dtqt.edu.vn',
    'debug'=>0,
    'debugsql'=>0,
    'mysqlEngine' => 'MyISAM',
  )
);

