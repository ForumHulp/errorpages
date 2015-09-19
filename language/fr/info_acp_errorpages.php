<?php
/**
*
* Error pages extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 phpBB ForumHulp <http://www.forumhulp.com>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ERRORPAGESERROR'					=> 'Pages d’erreurs',
	'ERRORPAGES_LOG'					=> 'Journal des pages d’erreurs',
	'ERRORPAGES_LOG_EXPLAIN'			=> 'Archive toutes les pages d’erreurs rencontrées par les utilisateurs dans le journal des pages d’erreurs accessible depuis l’onglet « MAINTENANCE ».',
	'ERRORPAGES_EXPLAIN'				=> 'Explications des pages d’erreurs',
	'ERRORPAGES_EXPLAIN_EXPLAIN'		=> 'Permet de fournir une explication dans le message affiché sur la page d’erreur.',
	'ERROR_BAD_REQUEST' 				=> 'Erreur 400 - Mauvaise requête',
	'ERROR_BAD_REQUESTEXPA' 			=> 'La requête HTTP n’a pas pu être comprise par le serveur en raison d’une syntaxe erronée. Le problème peut provenir d’un navigateur web trop récent ou d’un serveur HTTP trop ancien.',
	'ERROR_AUTH_REQUIRED' 				=> 'Erreur 401 - Non autorisé',
	'ERROR_AUTH_REQUIREDEXPA' 			=> 'La requête nécessite une identification de l’utilisateur. Concrètement, cela signifie que tout ou partie du serveur contacté est protégé par des identifiants, qu’il faut indiquer au serveur pour pouvoir accéder à son contenu.',
	'ERROR_FORBIDDEN' 					=> 'Erreur 403 - Interdit',
	'ERROR_FORBIDDENEXPA' 				=> 'La ressource demandée vous est interdite d’accès. Soit parce que le serveur a été configuré de cette manière, soit parce que dans une phase d’authentification vous n’avez pas fourni d’identifiants valides. La raison peut être aussi plus large : votre adresse IP a été bannie, vous utilisez un client HTTP (navigateur) interdit (repéré par les en-têtes accompagnant la requête et l’identifiant), etc..',
	'ERROR_NOT_FOUND' 					=> 'Erreur 404 - Non trouvé',
	'ERROR_NOT_FOUNDEXPA'		 		=> 'Le serveur n’a rien trouvé qui corresponde à l’adresse (URI) demandée. Cela signifie que l’adresse URL que vous avez tapée ou cliquée est mauvaise ou obsolète et ne correspond à aucun document existant sur le serveur (vous pouvez essayez de supprimer progressivement les composants de l’adresse URL en partant de la fin pour éventuellement retrouver un chemin d’accès existant).',
	'PRECONDITION_FAILED'				=> 'Erreur 412 - Précondition échouée',
	'PRECONDITION_FAILEDEXPA'			=> 'Les conditions spécifiées dans la requête ne sont pas remplies.',
	'METHOD_NOT_ALLOWED'				=> 'Erreur 405 - Méthode non admise',
	'METHOD_NOT_ALLOWEDEXPA'			=> 'Ce code indique que la méthode utilisée par le client n’est pas supportée pour cet URI. Un client qui utilise une méthode non supportée sur un serveur ou pour une ressource précise verra une réponse 405. Celle-ci devra être accompagnée d’une liste de méthodes acceptées, spécifiées grâce à l’en-tête Allow.',
	'NOT_ACCEPTABLE'					=> 'Erreur 406 - Encodage pas acceptable',
	'NOT_ACCEPTABLEEXPA'				=> 'L’adresse (URI) spécifiée existe, mais pas dans le format préféré du client. Si le client demande une ressource dans un format que le serveur n’est pas en mesure de fournir, un code 406 sera retourné. Le serveur indique en retour le langage et les types d’encodages disponibles pour cette adresse.',
	'PROXY_AUTHENTICATION_REQUIRED'		=> 'Erreur 407 - Authentification proxy exigée',
	'PROXY_AUTHENTICATION_REQUIREDexpa'	=> 'Le serveur proxy exige une authentification du client avant de transmettre la requête. Le client contacte un proxy et lui envoie une requête, mais sans informations d’authentification alors que celui-ci en a besoin (absence de l’en-tête Proxy-Authorization).',
	'REQUEST_TIMED_OUT'					=> 'Erreur 408 - Délai écoulé pour la requête',
	'REQUEST_TIMED_OUTEXPA'				=> 'Le serveur met trop de temps à attendre la requête du client et finit par clore la conversation en répondant 408 (la connexion sera ensuite fermée). Le client n’a pas produit assez vite la requête attendue par le serveur, mais peut la produire plus tard.',
	'CONFLICTING_REQUEST'				=> 'Erreur 409 - Conflit',
	'CONFLICTING_REQUESTEXPA'			=> 'La requête entre en conflit avec une autre requête ou avec la configuration du serveur. Des informations sur les raisons de ce conflit doivent être indiquée en retour.',
	'GONE'								=> 'Erreur 410 - Page indisponible définitivement',
	'GONEEXPA'							=> 'L’adresse (URI) demandée n’existe plus et a été définitivement supprimée du serveur. La ressource est indisponible et aucune adresse de redirection n’est connue',
	'CONTENT_LENGTH_REQUIRED'			=> 'Erreur 411 - Longueur exigée',
	'CONTENT_LENGTH_REQUIREDexpa'		=> 'Le serveur a besoin de connaitre la taille de cette requête pour pouvoir y répondre. La longueur de la requête n’a pas été précisée.',
	'REQUEST_ENTITY_TOO_LONG'			=> 'Erreur 413 - Corps de la requête trop grand',
	'REQUEST_ENTITY_TOO_LONGEXPA'		=> 'Le serveur ne peut traiter la requête car la taille de son contenu est trop importante. Le traitement est abandonné dû à une requête trop importante.',
	'REQUEST_URI_TOO_LONG'				=> 'Erreur 414 - URI trop long',
	'REQUEST_URI_TOO_LONGEXPA'			=> 'Le serveur ne peut traiter la requête car la taille de l’objet (URI) a retourner est trop importante. L’adresse (URI) demandée par le client dépasse le nombre de caractères autorisés.',
	'UNSUPPORTED_MEDIA_TYPE'			=> 'Erreur 415 - Format non supporté',
	'UNSUPPORTED_MEDIA_TYPEEXPA'		=> 'Le serveur ne peut traiter la requête car son contenu est écrit dans un format non supporté. Le client envoie un contenu dont le type n’est pas reconnu par le serveur.',
	'TEAPOT'							=> '« Je suis une cafetière » (RFC 2324)',
	'TEAPOTEXPA'						=> 'L’Hyper Text Coffee Pot Control Protocol ou HTCPCP — de l’anglais signifiant littéralement « protocole hypertexte de gestion de cafetière » — est décrit dans la RFC 2324 publié le 1er avril 1998 et bien que cette RFC soit un poisson d’avril. C’est une proposition humoristique de protocole de communication client-serveur permettant le contrôle, la surveillance et le diagnostic de cafetière.',
	'INTERNAL_SERVER_ERROR'				=> 'Erreur 500 - Erreur interne du serveur',
	'INTERNAL_SERVER_ERROREXPA' 		=> 'Le serveur a rencontré un problème inattendu qui l’a empêché de traiter la requête avec succès. Cette erreur peut par exemple être le résultat d’une mauvaise configuration du serveur, ou d’une ressource épuisée ou refusée au serveur sur la machine hôte.',
	'NOT_IMPLEMENTED' 					=> 'Erreur 501 - Non mis en oeuvre',
	'NOT_IMPLEMENTEDEXPA' 				=> 'Le serveur ne supporte pas la fonctionnalité requise pour traiter avec succès la requête (ou ne reconnait pas la requête). C’est la réponse émise lorsque le serveur ne reconnait pas la méthode indiquée dans la requête et n’est capable de la mettre en oeuvre pour aucune ressource (soit le navigateur web est trop récent, soit le serveur HTTP est trop ancien).',
	'BAD_GATEWAY' 						=> 'Erreur 502 - Mauvaise passerelle',
	'BAD_GATEWAYEXPA' 					=> 'Le serveur agissait comme un intermédiaire (passerelle ou proxy) et une mauvaise réponse lui a été envoyée par un autre serveur.',
	'SERVICE_UNAVAILABLE' 				=> 'Erreur 503 - Service indisponible',
	'SERVICE_UNAVAILABLEEXPA' 			=> 'Le serveur est en ligne, mais il ne peut répondre pour le moment, repassez plus tard. Cela peut aussi indiquer que le serveur subit une maintenance ou est surchargé de requêtes et n’arrive pas à traiter correctement la votre.',
	'GATEWAY_TIMOUT' 					=> 'Erreur 504 - Expiration de la passerelle',
	'GATEWAY_TIMOUTEXPA' 				=> 'Le serveur agissait comme un intermédiaire (passerelle ou proxy) et il n’a pas eu de réponse d’un autre serveur dans les temps. Similaire à 408, cette fois-ci le serveur coupera alors la communication et répondra à son client par un 504.',
	'HTTP_VERSION_NOT_SUPPORTED' 		=> 'Erreur 505 - Version HTTP non supportée',
	'HTTP_VERSION_NOT_SUPPORTEDEXPA' 	=> 'La version du protocole HTTP utilisée dans cette requête n’est pas (ou plus) supportée par le serveur.',
	'ERROR_UNKNOWN'     	  		 	=> 'Erreur 520 - Erreur inconnue du serveur',
	'ERROR_UNKNOWNEXPA'      		 	=> 'Le serveur renvoie une erreur inconnue.'
));
