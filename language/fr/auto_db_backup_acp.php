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
	'AUTO_DB_BACKUP_SETTINGS'				=> 'Paramètres de la sauvegarde automatique de la base de données',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'		=> 'Ici vous pouvez configurer les paramètres par défaut de la sauvegarde automatique de la base de données. Selon la configuration de votre serveur, vous pourrez compresser la base de données. Toutes les sauvegardes seront stockées dans le répertoire <samp>/store/</samp>. Vous pouvez restaurer une sauvegarde depuis le panneau <em>Restaurer</em>.',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'		=> 'Les paramètres de la sauvegarde automatique ont été modifiés.',
	'AUTO_DB_BACKUP_ENABLE'					=> 'Activer la sauvegarde automatique',
	'AUTO_DB_BACKUP_ENABLE_EXPLAIN'			=> 'Active ou désactive la sauvegarde automatique de la base de données.',
	'AUTO_DB_BACKUP_FREQ'					=> 'Fréquence de la sauvegarde',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'			=> 'Détermine la fréquence de la sauvegarde. La valeur doit être supérieure à 0.',
	'AUTO_DB_BACKUP_FREQ_ERROR'				=> 'La valeur saisie pour la <em>Fréquence de la sauvegarde</em> est incorrecte. La valeur doit être supérieure à <strong>0</strong>.',
	'AUTO_DB_BACKUP_COPIES'					=> 'Sauvegardes stockées',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'			=> 'Nombre de sauvegardes qui seront stockées sur le serveur. 0 signifie désactivé et toutes les sauvegardes seront stockées sur le serveur.',
	'AUTO_DB_BACKUP_COPIES_ERROR'			=> 'La valeur saisie pour les <em>Sauvegardes stockées</em> est incorrecte. La valeur doit être supérieure ou égale à <strong>0</strong>.',
	'AUTO_DB_BACKUP_FILETYPE'				=> 'Type de fichier',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'		=> 'Choisir le type de fichier pour les sauvegardes.',
	'AUTO_DB_BACKUP_OPTIMIZE'				=> 'Optimiser la base de données avant de la sauvegarder',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'		=> 'Optimise uniquement les tables non optimisées de la base de données avant de réaliser la sauvegarde.',
	'AUTO_DB_BACKUP_TIME'					=> 'Prochaine date de la sauvegarde',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'			=> 'Spécifier quand se réalisera la prochaine sauvegarde de la base de données.<br /><strong>Note</strong> : vous devez spécifier une date à venir.',
	'AUTO_DB_BACKUP_TIME_ERROR'				=> 'La date de la <em>prochaine sauvegarde</em> est incorrecte. La date doit être à venir.',

	'HOUR'		=> 'Heure',
	'MINUTE'	=> 'Minute',
));
