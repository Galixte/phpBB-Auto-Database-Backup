<?php
/**
*
* Auto Database Backup
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2014 Lukasz Kaczynski
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_AUTO_DB_BACKUP'					=> 'Sauvegarde automatique de la base de données',
	'ACP_AUTO_DB_BACKUP_SETTINGS'			=> 'Sauvegarde automatique',
	'LOG_AUTO_DB_BACKUP'					=> '<strong>Sauvegarde automatique de la base de données</strong>',
	'LOG_AUTO_DB_BACKUP_SETTINGS_CHANGED'	=> '<strong>Les paramètres de la sauvegarde automatique ont été modifiés</strong>',
));
