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
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
    protected $log;

    public function __construct(\phpbb\log\log $log)
    {
        $this->log = $log;
    }

	public function onKernelException(GetResponseForExceptionEvent $event)
	{
        global $user;
		$user->add_lang_ext('forumhulp/errorpages', 'errorpages');

		// Get the exception object from the received event
        $exception = $event->getException();
		
		switch ($exception->getStatusCode())
		{
			case '400':
				$msg = 'ERROR_BAD_REQUEST';
			break;
			case '401':
				$msg = 'ERROR_AUTH_REQUIRED';
			break;
			case '403':
				$msg = 'ERROR_FORBIDDEN';
			break;
			case '404':
				$msg = 'ERROR_NOT_FOUND';
			break;
			case '405':
				$msg = 'METHOD_NOT_ALLOWED';
			break;
			case '406':
				$msg = 'NOT_ACCEPTABLE';
			break;
			case '407':
				$msg = 'PROXY_AUTHENTICATION_REQUIRED';
			break;
			case '408':
				$msg = 'REQUEST_TIMED_OUT';
			break;
			case '409':
				$msg = 'CONFLICTING_REQUEST';
			break;
			case '410':
				$msg = 'GONE';
			break;
			case '411':
				$msg = 'CONTENT_LENGTH_REQUIRED';
			break;
			case '412':
				$msg = 'PRECONDITION_FAILED';
			break;
			case '413':
				$msg = 'REQUEST_ENTITY_TOO_LONG';
			break;
			case '414':
				$msg = 'REQUEST_URI_TOO_LONG';
			break;
			case '415':
				$msg = 'UNSUPPORTED_MEDIA_TYPE';
			break;

			case '500':
				$msg = 'INTERNAL_SERVER_ERROR';
			break;
			case '501':
				$msg = 'NOT_IMPLEMENTED';
			break;
			case '502':
				$msg = 'BAD_GATEWAY';
			break;
			case '503':
				$msg = 'SERVICE_UNAVAILABLE';
			break;
			case '504':
				$msg = 'GATEWAY_TIMOUT';
			break;
			case '505':
				$msg = 'HTTP_VERSION_NOT_SUPPORTED';
			break;
			default:
				$msg = 'ERROR_UNKNOWN';
			break;
		}

		$this->log->add('critical', $user->data['user_id'], $user->data['session_ip'], 'LOG_GENERAL_ERROR', false, array($user->lang[$msg], $exception->getMessage()));
		
		trigger_error($user->lang[$msg] . '<br />' . $user->lang[$msg.'EXPA'] . '<br /><br />' . sprintf($user->lang['RETURN_INDEX'], '<a href="/">', '</a>'));
	}

	public static function getSubscribedEvents()
	{
		return array_merge(array (
			'core.common' => array('onKernelException', 2000),
		));
	}
}
