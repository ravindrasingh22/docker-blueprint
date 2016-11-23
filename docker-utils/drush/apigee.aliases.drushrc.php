<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site devportal2, environment dev
$aliases['csi'] = array(
  'root' => '/var/www/html/devportal/docroot',
  'uri' => 'local.csi.devportal.org',
  'remote-host' => 'local.csi.devportal.org',
  'remote-user' => 'root',
  //'ssh-options' => '-p 49100',
);
