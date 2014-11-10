<?php
/**
*
* @package Errorpages
* @copyright (c) 2014 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE!
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Custom error pages by stoker
$lang = array_merge($lang, array(
	'ERRORPAGESERROR'					=> 'Error pages',

	'ERROR_BAD_REQUEST' 				=> 'Bad Request',
	'ERROR_BAD_REQUESTEXPA' 			=> 'The request has bad syntax or was inherently impossible to be completed.',
	'ERROR_AUTH_REQUIRED' 				=> 'Authorization Required',
	'ERROR_AUTH_REQUIREDEXPA' 			=> 'This means that the page requires that the visitors authenticate with their username and password. If they fail to do that, the server returns this error message.',
	'ERROR_FORBIDDEN' 					=> 'Forbidden',
	'ERROR_FORBIDDENEXPA' 				=> 'This means that access to the page the visitor is requesting is not allowed. This can be due to a special rule in the configuration of the web server, or to the specific file system permissions of the file.',
	'ERROR_NOT_FOUND' 					=> 'Not Found',
	'ERROR_NOT_FOUNDEXPA'		 		=> 'This simply means that the requested file is not there.',
	'PRECONDITION_FAILED'				=> 'Precondition Failed',
	'PRECONDITION_FAILEDEXPA'			=> 'The error means that the request triggered a mod_security protection on our end.',
	'METHOD_NOT_ALLOWED'				=> 'Method Not Allowed',
	'METHOD_NOT_ALLOWEDEXPA'			=> '',
	'NOT_ACCEPTABLE'					=> 'Not Acceptable (encoding)',
	'NOT_ACCEPTABLEEXPA'				=> '',
	'PROXY_AUTHENTICATION_REQUIRED'		=> 'Proxy Authentication Required',
	'PROXY_AUTHENTICATION_REQUIREDexpa'	=> '',
	'REQUEST_TIMED_OUT'					=> 'Request Timed Out',
	'REQUEST_TIMED_OUTEXPA'				=> 'Request Timed Out',
	'CONFLICTING_REQUEST'				=> 'Conflicting Request',
	'CONFLICTING_REQUESTEXPA'			=> '',
	'GONE'								=> 'Gone',
	'GONEEXPA'							=> '',
	'CONTENT_LENGTH_REQUIRED'			=> 'Content Length Required',
	'CONTENT_LENGTH_REQUIREDexpa'		=> '',
	'REQUEST_ENTITY_TOO_LONG'			=> 'Request Entity Too Long',
	'REQUEST_ENTITY_TOO_LONGEXPA'		=> '',
	'REQUEST_URI_TOO_LONG'				=> 'Request URI Too Long',
	'REQUEST_URI_TOO_LONGEXPA'			=> '',
	'UNSUPPORTED_MEDIA_TYPE'			=> 'Unsupported Media Type',
	'UNSUPPORTED_MEDIA_TYPEEXPA'		=> '',
	'INTERNAL_SERVER_ERROR'				=> 'Internal Server Error',
	'INTERNAL_SERVER_ERROREXPA' 		=> 'The server encountered an unexpected condition which prevented it from fulfilling the request.',
	'NOT_IMPLEMENTED' 					=> 'Not implemented',
	'NOT_IMPLEMENTEDEXPA' 				=> 'The server doesn\'t support the facility required.',
	'BAD_GATEWAY' 						=> 'Bad Gateway',
	'BAD_GATEWAYEXPA' 					=> 'The server encountered a temporary error and could not complete your request.',
	'SERVICE_UNAVAILABLE' 				=> 'Service Unavailable',
	'SERVICE_UNAVAILABLEEXPA' 			=> 'The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later.',
	'GATEWAY_TIMOUT' 					=> 'Gateway Timeout',
	'GATEWAY_TIMOUTEXPA' 				=> '',
	'HTTP_VERSION_NOT_SUPPORTED' 		=> 'HTTP Version Not Supported',
	'HTTP_VERSION_NOT_SUPPORTEDEXPA' 	=> '',
	'ERROR_UNKNOWN'     	  		 	=> 'Unknown Server Error',
	'ERROR_UNKNOWNEXPA'      		 	=> ''
));
