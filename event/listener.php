<?php
/**
*
* @package Errorpages
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\errorpages\event;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $config;
	protected $user;
	protected $template;
	protected $log;

	public function __construct(\phpbb\config\config $config, \phpbb\user $user, \phpbb\template\template $template, \phpbb\log\log $log)
	{
		$this->config = $config;
		$this->user = $user;
		$this->template = $template;
		$this->log = $log;
	}

	public function onKernelException(GetResponseForExceptionEvent $event)
	{
		$this->user->add_lang_ext('forumhulp/errorpages', 'info_acp_errorpages');

		// Get the exception object from the received event
		$exception = $event->getException();
		$request = $event->getRequest();

		// error process
		$error_messages_list = [
		    '400' => 'ERROR_BAD_REQUEST',
		    '401' => 'ERROR_AUTH_REQUIRED',
		    '403' => 'ERROR_FORBIDDEN',
		    '404' => 'ERROR_NOT_FOUND',
		    '405' => 'METHOD_NOT_ALLOWED',
		    '406' => 'NOT_ACCEPTABLE',
		    '407' => 'PROXY_AUTHENTICATION_REQUIRED',
		    '408' => 'REQUEST_TIMED_OUT',
		    '409' => 'CONFLICTING_REQUEST',
		    '410' => 'GONE',
		    '411' => 'CONTENT_LENGTH_REQUIRED',
		    '412' => 'PRECONDITION_FAILED',
		    '413' => 'REQUEST_ENTITY_TOO_LONG',
		    '414' => 'REQUEST_URI_TOO_LONG',
		    '415' => 'UNSUPPORTED_MEDIA_TYPE',
		    '418' => 'TEAPOT',
		    '500' => 'INTERNAL_SERVER_ERROR',
		    '501' => 'NOT_IMPLEMENTED',
		    '502' => 'BAD_GATEWAY',
		    '503' => 'SERVICE_UNAVAILABLE',
		    '504' => 'GATEWAY_TIMOUT',
		    '505' => 'HTTP_VERSION_NOT_SUPPORTED',
		];
		$msg = (isset($error_messages_list[ $exception->getStatusCode() ]) ? $error_messages_list[ $status_code ] : 'ERROR_UNKNOWN');

		($this->config['error_pages_log']) ? $this->log->add('critical', $this->user->data['user_id'], $this->user->data['session_ip'], 'LOG_GENERAL_ERROR', false, array($exception->getStatusCode() . ': ' . $this->user->lang[$msg], $request->getPathInfo())) : null;

		page_header($this->user->lang('INFORMATION'));
		$this->template->assign_vars(array(
			'MESSAGE_TITLE'		=> $this->user->lang('INFORMATION'),
			'MESSAGE_TEXT'		=> $this->user->lang[$msg] . '<br />' . (($this->config['error_pages_explain']) ? $this->user->lang[$msg.'EXPA'] : '') . '<br /><br />' . sprintf($this->user->lang['RETURN_INDEX'], '<a href="' . generate_board_url() .'">', '</a>'),
		));

		$this->template->set_filenames(array(
			'body'	=> 'message_body.html',
		));
		page_footer(true, false, false);

		$status_code = $exception instanceof HttpException ? $exception->getStatusCode() : 500;
		$response = new Response($this->template->assign_display('body'), $status_code);
		$event->setResponse($response);
	}

	public static function getSubscribedEvents()
	{
		return array (
			KernelEvents::EXCEPTION => array('onKernelException', 2000));
	}
}
