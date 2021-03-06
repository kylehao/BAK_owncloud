<?php
/**
 * ownCloud - firstrunwizard App
 *
 * @author Frank Karlitschek
 * @copyright 2012 Frank Karlitschek karlitschek@kde.org
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either 
 * version 3 of the License, or any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *  
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */
namespace OCA\FirstRunWizard;

use OCP\Util;

Util::addStyle('firstrunwizard', 'colorbox');
Util::addScript('firstrunwizard', 'jquery.colorbox');
Util::addScript('firstrunwizard', 'firstrunwizard');

Util::addStyle('firstrunwizard', 'firstrunwizard');

$config = \OC::$server->getConfig();
$userSession = \OC::$server->getUserSession();
$firstRunConfig = new Config($config, $userSession);

if ($userSession->isLoggedIn() && $firstRunConfig->isEnabled()) {
	Util::addScript( 'firstrunwizard', 'activate');
}
