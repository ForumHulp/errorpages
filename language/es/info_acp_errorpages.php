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
	'ERRORPAGESERROR'					=> 'Páginas de Error',
	'ERRORPAGES_LOG'					=> 'Registro de Páginas de Error',
	'ERRORPAGES_LOG_EXPLAIN'			=> 'Registrar todos los errores de páginas en el registro de Error en la pestaña Mantenimiento',
	'ERRORPAGES_EXPLAIN'				=> 'Describir errores de páginas',
	'ERRORPAGES_EXPLAIN_EXPLAIN'		=> 'Describir error en un mensaje en pantalla',
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
	'METHOD_NOT_ALLOWEDEXPA'			=> 'Se realizó una solicitud de un recurso mediante un método de solicitud no soportado por ese recurso; por ejemplo, el uso de GET en un formulario que requiere datos que se presentará a través de POST, o el uso de poner en un recurso de sólo lectura.',
	'NOT_ACCEPTABLE'					=> 'No Aceptable (codificación)',
	'NOT_ACCEPTABLEEXPA'				=> 'El recurso solicitado sólo es capaz de generar contenido no aceptable de acuerdo con las cabeceras de aceptación enviadas en la petición.',
	'PROXY_AUTHENTICATION_REQUIRED'		=> 'Proxy requiere Autenticación',
	'PROXY_AUTHENTICATION_REQUIREDexpa'	=> 'El cliente primero debe autenticarse con el proxy.',
	'REQUEST_TIMED_OUT'					=> 'Tiempo de espera agotado',
	'REQUEST_TIMED_OUTEXPA'				=> 'El servidor ha agotado el tiempo de espera para la solicitud. De acuerdo con las especificaciones de HTTP: "El cliente no produjo una solicitud dentro del plazo que el servidor estaba dispuesto a esperar el cliente puede repetir la solicitud sin modificaciones en cualquier momento posterior."',
	'CONFLICTING_REQUEST'				=> 'Solicitud en conflicto',
	'CONFLICTING_REQUESTEXPA'			=> 'Indica que la solicitud no pudo ser procesada debido a los conflictos en la solicitud, tal como un conflicto de edición en el caso de varias actualizaciones',
	'GONE'								=> 'Pasado',
	'GONEEXPA'							=> 'Indica que el recurso solicitado ya no está disponible y no volverá a estar disponible. Esto se debe utilizar cuando un recurso se ha eliminado intencionalmente y el recurso debe ser purgado. Al recibir un código de estado 410, el cliente no debe solicitar el recurso de nuevo en el futuro. Clientes tales como motores de búsqueda deben eliminar el recurso de sus índices. [cita requerida] La mayoría de los casos de uso no requieren los clientes y los motores de búsqueda para purgar el recurso, y un "404 No Encontrado" se puede utilizar en su lugar.',
	'CONTENT_LENGTH_REQUIRED'			=> 'Longitud de Contenido Requerida',
	'CONTENT_LENGTH_REQUIREDexpa'		=> 'La solicitud no especificó la duración de su contenido, que es requerido por el recurso solicitado',
	'REQUEST_ENTITY_TOO_LONG'			=> 'Solicitud de Entidad Demasiado Largo',
	'REQUEST_ENTITY_TOO_LONGEXPA'		=> 'La solicitud es mayor que lo del servidor está dispuesto o es capaz de procesar.',
	'REQUEST_URI_TOO_LONG'				=> 'Solicitud de URI demasiado larga',
	'REQUEST_URI_TOO_LONGEXPA'			=> 'La URI proporcionada era demasiado larga para procesarlo el servidor. A menudo el resultado de demasiados datos se codifica como una cadena de consulta de una solicitud GET, en cuyo caso debe ser convertido a una solicitud POST.',
	'UNSUPPORTED_MEDIA_TYPE'			=> 'Tipo de Media no soportado',
	'UNSUPPORTED_MEDIA_TYPEEXPA'		=> 'La petición de entidad tiene un tipo de medio que el servidor o el recurso no es compatible. el cliente carga una imagen como imagen/svg+xml, pero el servidor requiere que las imágenes utilicen un formato diferente.',
	'TEAPOT'							=> 'Soy una tetera (RFC 2324)',
	'TEAPOTEXPA'						=> 'Se definió este código en 1998 como uno de los chistes tradicionales de Día de los Inocentes (IETF April Fools\' Jokes), en el RFC 2324, y no se espera que el Protocolo de Hyper Texto Cafetera de control para ser implementados por los servidores HTTP reales.',
	'INTERNAL_SERVER_ERROR'				=> 'Error interno del servidor',
	'INTERNAL_SERVER_ERROREXPA' 		=> 'El servidor encontró una condición inesperada que le impidió cumplir con la solicitud.',
	'NOT_IMPLEMENTED' 					=> 'No implementado',
	'NOT_IMPLEMENTEDEXPA' 				=> 'El servidor no admite la instalación requerida.',
	'BAD_GATEWAY' 						=> 'Puerta de enlace mala',
	'BAD_GATEWAYEXPA' 					=> 'El servidor encontró un error temporal y no pudo completar su solicitud.',
	'SERVICE_UNAVAILABLE' 				=> 'Servicio no disponible',
	'SERVICE_UNAVAILABLEEXPA' 			=> 'El servidor en este momento es incapaz de atender su solicitud debido a tiempo de inactividad, mantenimiento o problemas de capacidad. Por favor, inténtelo de nuevo más tarde.',
	'GATEWAY_TIMOUT' 					=> 'Tiempo de espera de puerta de enlace',
	'GATEWAY_TIMOUTEXPA' 				=> 'El servidor estaba actuando como una puerta de enlace o proxy y no recibió una respuesta a tiempo del servidor en sentido ascendente.',
	'HTTP_VERSION_NOT_SUPPORTED' 		=> 'Versión HTTP no soportado',
	'HTTP_VERSION_NOT_SUPPORTEDEXPA' 	=> 'El servidor no soporta la versión del protocolo HTTP utilizada en la solicitud.',
	'ERROR_UNKNOWN'     	  		 	=> 'Error del servidor desconocido',
	'ERROR_UNKNOWNEXPA'      		 	=> ''
));
