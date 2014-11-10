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
	'ERRORPAGESERROR'					=> 'Páginas de Error',

	'ERROR_BAD_REQUEST' 				=> 'Solicitud Incorrecta',
	'ERROR_BAD_REQUESTEXPA' 			=> 'La solicitud tiene mala sintaxis o era intrínsecamente imposible que esté terminado.',
	'ERROR_AUTH_REQUIRED' 				=> 'Autorización Requerida',
	'ERROR_AUTH_REQUIREDEXPA' 			=> 'Esto significa que la página requiere que los visitantes se identifiquen con su nombre de usuario y contraseña. Si no pueden hacerlo, el servidor devuelve este mensaje de error.',
	'ERROR_FORBIDDEN' 					=> 'Prohibido',
	'ERROR_FORBIDDENEXPA' 				=> 'Esto significa que el acceso a la página solicitada por el visitante no está permitido. Esto puede ser debido a una regla especial en la configuración del servidor web, o de los permisos específicos del sistema de archivos, sobre dicho archivo.',
	'ERROR_NOT_FOUND' 					=> 'No Encontrada',
	'ERROR_NOT_FOUNDEXPA'		 		=> 'Esto simplemente significa que el archivo solicitado no está allí.',
	'PRECONDITION_FAILED'				=> 'Condición previa Fracasado',
	'PRECONDITION_FAILEDEXPA'			=> 'El error significa que la solicitud desencadenó una protección mod_security por nuestra parte.',
	'METHOD_NOT_ALLOWED'				=> 'Método no Permitido',
	'METHOD_NOT_ALLOWEDEXPA'			=> '',
	'NOT_ACCEPTABLE'					=> 'No Aceptable (codificación)',
	'NOT_ACCEPTABLEEXPA'				=> '',
	'PROXY_AUTHENTICATION_REQUIRED'		=> 'Proxy requiere Autenticación',
	'PROXY_AUTHENTICATION_REQUIREDexpa'	=> '',
	'REQUEST_TIMED_OUT'					=> 'Tiempo de espera agotado',
	'REQUEST_TIMED_OUTEXPA'				=> 'Tiempo de espera agotado',
	'CONFLICTING_REQUEST'				=> 'Solicitud en conflicto',
	'CONFLICTING_REQUESTEXPA'			=> '',
	'GONE'								=> 'Pasado',
	'GONEEXPA'							=> '',
	'CONTENT_LENGTH_REQUIRED'			=> 'Longitud de Contenido Requerida',
	'CONTENT_LENGTH_REQUIREDexpa'		=> '',
	'REQUEST_ENTITY_TOO_LONG'			=> 'Solicitud de Entidad Demasiado Largo',
	'REQUEST_ENTITY_TOO_LONGEXPA'		=> '',
	'REQUEST_URI_TOO_LONG'				=> 'Solicitud de URI demasiado larga',
	'REQUEST_URI_TOO_LONGEXPA'			=> '',
	'UNSUPPORTED_MEDIA_TYPE'			=> 'Tipo de Media no soportado',
	'UNSUPPORTED_MEDIA_TYPEEXPA'		=> '',
	'INTERNAL_SERVER_ERROR'				=> 'Error interno del servidor',
	'INTERNAL_SERVER_ERROREXPA' 		=> 'El servidor encontró una condición inesperada que le impidió cumplir con la solicitud.',
	'NOT_IMPLEMENTED' 					=> 'No implementado',
	'NOT_IMPLEMENTEDEXPA' 				=> 'El servidor no admite la instalación requerida.',
	'BAD_GATEWAY' 						=> 'Puerta de enlace mala',
	'BAD_GATEWAYEXPA' 					=> 'El servidor encontró un error temporal y no pudo completar su solicitud.',
	'SERVICE_UNAVAILABLE' 				=> 'Servicio no disponible',
	'SERVICE_UNAVAILABLEEXPA' 			=> 'El servidor en este momento es incapaz de atender su solicitud debido a tiempo de inactividad, mantenimiento o problemas de capacidad. Por favor, inténtelo de nuevo más tarde.',
	'GATEWAY_TIMOUT' 					=> 'Tiempo de espera de puerta de enlace',
	'GATEWAY_TIMOUTEXPA' 				=> '',
	'HTTP_VERSION_NOT_SUPPORTED' 		=> 'Versión HTTP no soportado',
	'HTTP_VERSION_NOT_SUPPORTEDEXPA' 	=> '',
	'ERROR_UNKNOWN'     	  		 	=> 'Error del servidor desconocido',
	'ERROR_UNKNOWNEXPA'      		 	=> ''
));
