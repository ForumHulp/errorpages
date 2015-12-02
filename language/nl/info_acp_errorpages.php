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
	'ERRORPAGESERROR'					=> 'Error Pages',
	'ERRORPAGES_LOG'					=> 'Log Error Pages',
	'ERRORPAGES_LOG_EXPLAIN'			=> 'Sla alle Error Pages op in Error Log onder Maintenance Tab',
	'ERRORPAGES_EXPLAIN'				=> 'Uitleg Error Pages',
	'ERRORPAGES_EXPLAIN_EXPLAIN'		=> 'Leg de foutmelding uit in het berichtenvenster',
	'ERRORPAGE_NOTICE'					=> '<div class="phpinfo"><p class="entry">Config settings are in %1$s » %2$s » %3$s.</p></div>',
	'ERROR_BAD_REQUEST' 				=> 'Foute aanvraag',
	'ERROR_BAD_REQUESTEXPA' 			=> 'De aanvraag had een slechte syntax of kon onmogelijk worden uitgevoerd.',
	'ERROR_AUTH_REQUIRED' 				=> 'Niet geautoriseerd',
	'ERROR_AUTH_REQUIREDEXPA' 			=> 'Dit betekent dat de pagina vereist dat de bezoekers zich authenticeren met hun gebruikersnaam en wachtwoord. Als zij dit niet doen, retourneert de server deze foutmelding.',
	'ERROR_FORBIDDEN' 					=> 'Verboden toegang',
	'ERROR_FORBIDDENEXPA' 				=> 'Dit betekent dat de toegang tot de pagina die de bezoeker vraagt ​​niet is toegestaan. Dit kan door een bijzondere regel in de configuratie van de webserver of de specifieke bestandssysteem permissies van het bestand.',
	'ERROR_NOT_FOUND' 					=> 'Niet gevonden',
	'ERROR_NOT_FOUNDEXPA'		 		=> 'Het gevraagde bestand bestaat niet op de server.',
	'PRECONDITION_FAILED'				=> 'Niet voldaan aan vooraf gestelde voorwaarde',
	'PRECONDITION_FAILEDEXPA'			=> 'De fout betekent dat het verzoek leidde tot een mod_security bescherming aan de serverkant.',
	'METHOD_NOT_ALLOWED'				=> 'Methode niet toegestaan',
	'METHOD_NOT_ALLOWEDEXPA'			=> 'Een verzoek werd gemaakt van een bron met behulp van een verzoek methode die niet wordt ondersteund door die bron. Bijvoorbeeld met behulp van GET op een formulier dat de gegevens nodig heeft om via POST worden voorgelegd',
	'NOT_ACCEPTABLE'					=> 'Niet aanvaardbaar',
	'NOT_ACCEPTABLEEXPA'				=> 'De opgevraagde bron is alleen geschikt voor het genereren van content niet aanvaardbaar volgens de Accept headers verzonden in het verzoek.',
	'PROXY_AUTHENTICATION_REQUIRED'		=> 'Authenticatie op de proxyserver verplicht',
	'PROXY_AUTHENTICATION_REQUIREDexpa'	=> 'De gebruiker moet zich eerst verifiëren bij de proxyserver.',
	'REQUEST_TIMED_OUT'					=> 'Aanvraagtijd verstreken',
	'REQUEST_TIMED_OUTEXPA'				=> 'De server is gestopt met de aanvraag. Volgens HTTP specificaties: "De gebruiker deed geen aanvraag binnen de gestelde tijd van de server."',
	'CONFLICTING_REQUEST'				=> 'Conflict',
	'CONFLICTING_REQUESTEXPA'			=> 'Geeft aan dat het verzoek niet kon worden verwerkt, vanwege het conflict in het verzoek, zoals een bewerkingsconflict in het geval van meerdere updates',
	'GONE'								=> 'Verdwenen',
	'GONEEXPA'							=> 'Geeft aan dat de aangevraagde bron niet meer beschikbaar is. Na ontvangst van een 410 -status code , de klant moet niet de bron opnieuw op te vragen in de toekomst. Klanten zoals zoekmachines moet de bron te verwijderen uit hun indices. [ nodig citaat ] De meeste use cases hebben geen klanten en zoekmachines nodig om de bron te zuiveren , en een " 404 Not Found " kunnen in plaats daarvan worden gebruikt .',
	'CONTENT_LENGTH_REQUIRED'			=> 'Lengte benodigd',
	'CONTENT_LENGTH_REQUIREDexpa'		=> 'The request did not specify the length of its content, which is required by the requested resource',
	'REQUEST_ENTITY_TOO_LONG'			=> 'Aanvraag te groot',
	'REQUEST_ENTITY_TOO_LONGEXPA'		=> 'The request is larger than the server is willing or able to process.',
	'REQUEST_URI_TOO_LONG'				=> 'Aanvraag-URL te lang',
	'REQUEST_URI_TOO_LONGEXPA'			=> 'The URI provided was too long for the server to process. Often the result of too much data being encoded as a query-string of a GET request, in which case it should be converted to a POST request.',
	'UNSUPPORTED_MEDIA_TYPE'			=> 'Media-type niet ondersteund',
	'UNSUPPORTED_MEDIA_TYPEEXPA'		=> 'The request entity has a media type which the server or resource does not support. For example, the client uploads an image as image/svg+xml, but the server requires that images use a different format.',
	'TEAPOT'							=> 'I’m a teapot (RFC 2324)',
	'TEAPOTEXPA'						=> 'This code was defined in 1998 as one of the traditional IETF April Fools’ jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers.',
	'INTERNAL_SERVER_ERROR'				=> 'Interne serverfout',
	'INTERNAL_SERVER_ERROREXPA' 		=> 'The server encountered an unexpected condition which prevented it from fulfilling the request.',
	'NOT_IMPLEMENTED' 					=> 'Niet geïmplementeerd',
	'NOT_IMPLEMENTEDEXPA' 				=> 'The server doesn’t support the facility required.',
	'BAD_GATEWAY' 						=> 'Bad Gateway',
	'BAD_GATEWAYEXPA' 					=> 'The server was acting as a gateway or proxy and received an invalid response from the upstream server.',
	'SERVICE_UNAVAILABLE' 				=> 'Dienst niet beschikbaar',
	'SERVICE_UNAVAILABLEEXPA' 			=> 'The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later.',
	'GATEWAY_TIMOUT' 					=> 'Gateway Timeout',
	'GATEWAY_TIMOUTEXPA' 				=> 'The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.',
	'HTTP_VERSION_NOT_SUPPORTED' 		=> 'HTTP-versie wordt niet ondersteund',
	'HTTP_VERSION_NOT_SUPPORTEDEXPA' 	=> 'The server does not support the HTTP protocol version used in the request.',
	'ERROR_UNKNOWN'     	  		 	=> 'Unbekende Server Fout',
	'ERROR_UNKNOWNEXPA'      		 	=> '',
	'FH_HELPER_NOTICE'		=> 'Forumhulp helper application does not exist!<br />Download <a href="https://github.com/ForumHulp/helper" target="_blank">forumhulp/helper</a> and copy the helper folder to your forumhulp extension folder.',
));
