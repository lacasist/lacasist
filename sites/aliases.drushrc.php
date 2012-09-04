$aliases['stage'] = array(
    'uri' => 'stage.lacasist.org',
    'root' => '/path/to/remote/drupal/root',
    'db-url' => 'pgsql://username:password@dbhost.com:port/databasename',
    'remote-host' => 'mystagingserver.myisp.com',
    'remote-user' => 'lacasist',
    'path-aliases' => array(
      '%drush' => '/path/to/drush',
      '%drush-script' => '/path/to/drush/drush',
      '%dump-dir' => '/path/to/dumps/',
      '%files' => 'sites/mydrupalsite.com/files',
      '%custom' => '/my/custom/path',
     ),
     'command-specific' => array (
       'sql-sync' => array (
         'no-cache' => TRUE,
       ),
     ),
  );
$aliases['dev'] = array(
    'uri' => 'dev.lacasist.local',
    'root' => '/Users/lauggh/Sites/lacasist.local',
  );
$aliases['server'] = array(
    'remote-host' => 'lacasist.org',
    'remote-user' => 'lacasist',
  );
$aliases['prod'] = array(
    'parent' => '@server,@dev',
    'uri' => 'lacasist.org',
     'target-command-specific' => array (
       'sql-sync' => array (
         'skip-tables-list' => 'comments',
       ),
     ),
  );