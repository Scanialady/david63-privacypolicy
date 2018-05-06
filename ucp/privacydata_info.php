<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\privacypolicy\ucp;

class privacydata_info
{
	function module()
	{
		return array(
			'filename'	=> '\david63\privacypolicy\ucp\privacydata_module',
			'title'		=> 'PRIVACY_POLICY',
			'modes'		=> array(
				'main'	=> array('title' => 'PRIVACY_DETAILS', 'auth' => 'ext_david63/privacypolicy && acl_u_privacy_view', 'cat' => array('PRIVACY_POLICY')),
			),
		);
	}
}
