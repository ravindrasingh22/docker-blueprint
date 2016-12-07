<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site devportal2, environment dev
$aliases['local-dev'] = array(
  'root' => '/var/www/html/docroot',
  'uri' => 'dev.srijan.local',
);

$aliases['local-dev.ssh'] = array(
  'root' => '/var/www/html/docroot',
  'uri' => 'dev.srijan.local',
  'remote-host' => 'dev.srijan.local',
  'remote-user' => 'root',
  'ssh-options' => '-p 49100',
);
