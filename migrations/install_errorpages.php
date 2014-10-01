<?php
/**
*
* @package Error Pages
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\errorpages\migrations;

class install_errorpages extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['error_pages_log']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('error_pages_log', 1)),
			array('config.add', array('error_pages_explain', 1)),
		);
	}
}
