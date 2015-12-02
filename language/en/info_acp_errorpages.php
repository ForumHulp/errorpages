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

// Custom error pages
$lang = array_merge($lang, array(
	'ERRORPAGESERROR'					=> 'Error pages',
	'ERRORPAGES_LOG'					=> 'Log Error Pages',
	'ERRORPAGES_LOG_EXPLAIN'			=> 'Log all Error Pages in Error Log in Maintenance Tab',
	'ERRORPAGES_EXPLAIN'				=> 'Explain Error Pages',
	'ERRORPAGES_EXPLAIN_EXPLAIN'		=> 'Explain error in message display',
	'ERRORPAGE_NOTICE'					=> '<div class="phpinfo"><p class="entry">Config settings are in %1$s » %2$s » %3$s.</p></div>',
	'ERROR_BAD_REQUEST' 				=> 'Bad Request',
	'ERROR_BAD_REQUESTEXPA' 			=> 'The request had bad syntax or was inherently impossible to be completed.',
	'ERROR_AUTH_REQUIRED' 				=> 'Authorization Required',
	'ERROR_AUTH_REQUIREDEXPA' 			=> 'This means that the page requires that the visitors authenticate with their username and password. If they fail to do that, the server returns this error message.',
	'ERROR_FORBIDDEN' 					=> 'Forbidden',
	'ERROR_FORBIDDENEXPA' 				=> 'This means that access to the page the visitor is requesting is not allowed. This can be due to a special rule in the configuration of the web server, or to the specific file system permissions of the file.',
	'ERROR_NOT_FOUND' 					=> 'Not Found',
	'ERROR_NOT_FOUNDEXPA'		 		=> 'This simply means that the requested file is not there.',
	'PRECONDITION_FAILED'				=> 'Precondition Failed',
	'PRECONDITION_FAILEDEXPA'			=> 'The error means that the request triggered a mod_security protection on our end.',
	'METHOD_NOT_ALLOWED'				=> 'Method Not Allowed',
	'METHOD_NOT_ALLOWEDEXPA'			=> 'A request was made of a resource using a request method not supported by that resource; for example, using GET on a form which requires data to be presented via POST, or using PUT on a read-only resource.',
	'NOT_ACCEPTABLE'					=> 'Not Acceptable (encoding)',
	'NOT_ACCEPTABLEEXPA'				=> 'The requested resource is only capable of generating content not acceptable according to the Accept headers sent in the request.',
	'PROXY_AUTHENTICATION_REQUIRED'		=> 'Proxy Authentication Required',
	'PROXY_AUTHENTICATION_REQUIREDexpa'	=> 'The client must first authenticate itself with the proxy.',
	'REQUEST_TIMED_OUT'					=> 'Request Timed Out',
	'REQUEST_TIMED_OUTEXPA'				=> 'The server timed out waiting for the request. According to HTTP specifications: "The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time."',
	'CONFLICTING_REQUEST'				=> 'Conflicting Request',
	'CONFLICTING_REQUESTEXPA'			=> 'Indicates that the request could not be processed because of conflict in the request, such as an edit conflict in the case of multiple updates',
	'GONE'								=> 'Gone',
	'GONEEXPA'							=> 'Indicates that the resource requested is no longer available and will not be available again. This should be used when a resource has been intentionally removed and the resource should be purged. Upon receiving a 410 status code, the client should not request the resource again in the future. Clients such as search engines should remove the resource from their indices. [citation needed] Most use cases do not require clients and search engines to purge the resource, and a "404 Not Found" may be used instead.',
	'CONTENT_LENGTH_REQUIRED'			=> 'Content Length Required',
	'CONTENT_LENGTH_REQUIREDexpa'		=> 'The request did not specify the length of its content, which is required by the requested resource',
	'REQUEST_ENTITY_TOO_LONG'			=> 'Request Entity Too Long',
	'REQUEST_ENTITY_TOO_LONGEXPA'		=> 'The request is larger than the server is willing or able to process.',
	'REQUEST_URI_TOO_LONG'				=> 'Request URI Too Long',
	'REQUEST_URI_TOO_LONGEXPA'			=> 'The URI provided was too long for the server to process. Often the result of too much data being encoded as a query-string of a GET request, in which case it should be converted to a POST request.',
	'UNSUPPORTED_MEDIA_TYPE'			=> 'Unsupported Media Type',
	'UNSUPPORTED_MEDIA_TYPEEXPA'		=> 'The request entity has a media type which the server or resource does not support. For example, the client uploads an image as image/svg+xml, but the server requires that images use a different format.',
	'TEAPOT'							=> 'I’m a teapot (RFC 2324)',
	'TEAPOTEXPA'						=> 'This code was defined in 1998 as one of the traditional IETF April Fools’ jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers.',
	'INTERNAL_SERVER_ERROR'				=> 'Internal Server Error',
	'INTERNAL_SERVER_ERROREXPA' 		=> 'The server encountered an unexpected condition which prevented it from fulfilling the request.',
	'NOT_IMPLEMENTED' 					=> 'Not implemented',
	'NOT_IMPLEMENTEDEXPA' 				=> 'The server doesn’t support the facility required.',
	'BAD_GATEWAY' 						=> 'Bad Gateway',
	'BAD_GATEWAYEXPA' 					=> 'The server was acting as a gateway or proxy and received an invalid response from the upstream server.',
	'SERVICE_UNAVAILABLE' 				=> 'Service Unavailable',
	'SERVICE_UNAVAILABLEEXPA' 			=> 'The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later.',
	'GATEWAY_TIMOUT' 					=> 'Gateway Timeout',
	'GATEWAY_TIMOUTEXPA' 				=> 'The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.',
	'HTTP_VERSION_NOT_SUPPORTED' 		=> 'HTTP Version Not Supported',
	'HTTP_VERSION_NOT_SUPPORTEDEXPA' 	=> 'The server does not support the HTTP protocol version used in the request.',
	'ERROR_UNKNOWN'     	  		 	=> 'Unknown Server Error',
	'ERROR_UNKNOWNEXPA'      		 	=> '',
	'FH_HELPER_NOTICE'		=> 'Forumhulp helper application does not exist!<br />Download <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> and copy the helper folder to your forumhulp extension folder.',
));
