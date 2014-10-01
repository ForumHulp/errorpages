<?php
/**
*
* @package Error Pages
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\errorpages\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class acp_listener implements EventSubscriberInterface
{
	/* @var \phpbb\controller\helper */
	protected $helper;

	/**
	* Constructor
	*
	* @param \phpbb\controller\helper    $helper        Controller helper object
 	*/
	public function __construct(\phpbb\controller\helper $helper)
	{
		$this->helper = $helper;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.acp_board_config_edit_add'	=> 'load_config_on_setup',
		);
	}

	public function load_config_on_setup($event)
	{
		if ($event['mode'] == 'features')
		{
			$display_vars = $event['display_vars'];
			$add_config_var['error_pages_explain'] =
				array(
					'lang' 		=> 'ERRORPAGES_EXPLAIN',
					'validate'	=> 'bool',
					'type'		=> 'radio:yes_no',
					'explain'	=> true
				);
			$add_config_var['error_pages_log'] =
				array(
					'lang' 		=> 'ERRORPAGES_LOG',
					'validate'	=> 'bool',
					'type'		=> 'radio:yes_no',
					'explain'	=> true
				);
			$display_vars['vars'] = phpbb_insert_config_array($display_vars['vars'], $add_config_var, array('after' =>'allow_quick_reply'));
			$event['display_vars'] = array('title' => $display_vars['title'], 'vars' => $display_vars['vars']);
		}
	}
}
