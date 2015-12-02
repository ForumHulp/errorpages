<?php
/**
*
* @package Errorpages
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\errorpages;

class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		if (!class_exists('forumhulp\helper\helper'))
		{
			$this->container->get('user')->add_lang_ext('forumhulp/errorpages', 'info_acp_errorpages');
			trigger_error($this->container->get('user')->lang['FH_HELPER_NOTICE'], E_USER_WARNING);
		}

		if (!$this->container->get('ext.manager')->is_enabled('forumhulp/helper'))
		{
			$this->container->get('ext.manager')->enable('forumhulp/helper');
		}

		return class_exists('forumhulp\helper\helper');
	}

	function enable_step($old_state)
	{
		switch ($old_state)
		{
			case '': // Empty means nothing has run yet
				if (empty($old_state))
				{
					global $user, $template;
					$user->add_lang_ext('forumhulp/errorpages', 'info_acp_errorpages');
					$template->assign_var('L_EXTENSION_ENABLE_SUCCESS', $user->lang['EXTENSION_ENABLE_SUCCESS'] . (isset($user->lang['ERRORPAGE_NOTICE']) ?
							sprintf($user->lang['ERRORPAGE_NOTICE'], $user->lang['ACP_CAT_GENERAL'], $user->lang['ACP_BOARD_CONFIGURATION'], $user->lang['ACP_BOARD_FEATURES']) : ''));
				}

				// Run parent enable step method
				return parent::enable_step($old_state);

			break;

			default:

				// Run parent enable step method
				return parent::enable_step($old_state);
				
			break;
		}
	}
}
