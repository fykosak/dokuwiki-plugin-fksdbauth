<?php

/**
 * Options for the authfksdb plugin
 *
 * @author Michal Koutný <michal@fykos.cz>
 */
$meta['mysql_host'] = array('string');
$meta['mysql_user'] = array('string');
$meta['mysql_password'] = array('password');
$meta['mysql_database'] = array('string');
$meta['contest'] = array('multichoice', '_choices' => array('fykos', 'vyfuk'));

