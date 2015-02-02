<?php
/**
 * Access for global methods
 *
 * @package Html5videoplayerPowermail\Utility
 * @author  Tim Lochmüller
 */

namespace FRUIT\Html5videoplayerPowermail\Utility;

use TYPO3\CMS\Core\Database\DatabaseConnection;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

/**
 * Access for global methods
 *
 * @author Tim Lochmüller
 */
class GlobalUtility {

	/**
	 * Get the TSFE
	 *
	 * @return TypoScriptFrontendController
	 */
	static public function getTypoScriptFrontendController() {
		return $GLOBALS['TSFE'];
	}

	/**
	 * Get the database connection
	 *
	 * @return DatabaseConnection
	 */
	static public function getDatabaseConnection() {
		return $GLOBALS['TYPO3_DB'];
	}
}