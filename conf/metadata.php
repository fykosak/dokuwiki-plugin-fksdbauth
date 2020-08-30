<?php

/**
 * Options for the fksdbauth plugin
 *
 * @author Michal Koutný <michal@fykos.cz>
 */
$meta['mysql_host'] = ['string'];
$meta['mysql_user'] = ['string'];
$meta['mysql_password'] = ['password'];
$meta['mysql_database'] = ['string'];
$meta['contest'] = ['multichoice', '_choices' => ['fykos', 'vyfuk']];
$meta['fallback_enabled'] = ['onoff'];
$meta['fallback_plugin'] = ['string'];
