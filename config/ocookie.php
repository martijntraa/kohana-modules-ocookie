<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The array below contains cookie configuration. Array keys are the cookie
 * names.
 */
return array(
    /**
     * The following options are available:
     *
     * integer  lifetime    cookie lifetime in seconds
     * string   path        cookie path
     * string   domain      cookie domain
     * boolean  secure      whether the cookie is to be served only over HTTPS
     * boolean  httponly    whether the cookie is to be available to JS or not
     * boolean  encrypted   whether to encrypt session data
     */
    'default' => array(
        'lifetime'      => Cookie::$expiration,
        'path'          => Cookie::$path,
        'domain'        => Cookie::$domain,
        'secure'        => Cookie::$secure,
        'httponly'      => Cookie::$httponly,
        'encrypted'     => FALSE,   // or encryption setting name
    ),
);
