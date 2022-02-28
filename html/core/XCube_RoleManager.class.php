<?php
/**
 * XCube_RoleManager.class.php
 * @package XCube
 * @version    XCL 2.3.1
 * @author     Minahito, 2008/10/12
 * @copyright  (c) 2005-2022 The XOOPSCube Project
 * @license    https://github.com/xoopscube/xcl/blob/master/BSD_Modified.txt
 * @brief      Provider class to manage role information with the store.
 */

class XCube_RoleManager {
	public function getRolesForUser( $username = null ) {
	}
}

/**
 * The utility class which handles role information without the root object.
 */
class XCube_Role {
	public function getRolesForUser( $username = null ) {
		$root =& XCube_Root::getSingleton();

		return $root->mRoleManager->getRolesForUser( $username );
	}
}
