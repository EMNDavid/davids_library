<?php

$Predefined_Constants = [
    'CRYPT_SALT_LENGTH'     => CRYPT_SALT_LENGTH,
    'CRYPT_STD_DES'         => CRYPT_STD_DES,
    'CRYPT_EXT_DES'         => CRYPT_EXT_DES,
    'CRYPT_MD5'             => CRYPT_MD5,
    'CRYPT_BLOWFISH'        => CRYPT_BLOWFISH,
    'HTML_SPECIALCHARS'     => HTML_SPECIALCHARS,
    'HTML_ENTITIES'         => HTML_ENTITIES,
    'ENT_COMPAT'            => ENT_COMPAT,
    'ENT_QUOTES'            => ENT_QUOTES,
    'ENT_NOQUOTES'          => ENT_NOQUOTES,
    'ENT_IGNORE'            => ENT_IGNORE,
    'ENT_SUBSTITUTE'        => ENT_SUBSTITUTE,
    'ENT_DISALLOWED'        => ENT_DISALLOWED,
    'ENT_HTML401'           => ENT_HTML401,
    'ENT_XML1'              => ENT_XML1,
    'ENT_XHTML'             => ENT_XHTML,
    'ENT_HTML5'             => ENT_HTML5,
    'CHAR_MAX'              => CHAR_MAX,
    'LC_CTYPE'              => LC_CTYPE,
    'LC_NUMERIC'            => LC_NUMERIC,
    'LC_TIME'               => LC_TIME,
    'LC_COLLATE'            => LC_COLLATE,
    'LC_MONETARY'           => LC_MONETARY,
    'LC_ALL'                => LC_ALL,
    'LC_MESSAGES'           => LC_MESSAGES,
    'STR_PAD_LEFT'          => STR_PAD_LEFT,
    'STR_PAD_RIGHT'         => STR_PAD_RIGHT,
    'STR_PAD_BOTH'          => STR_PAD_BOTH
];


foreach($Predefined_Constants as $key => $value)
{
    echo $key . ': ' . $value . PHP_EOL;
}

// OUTPUTS

// CRYPT_SALT_LENGTH: 123
// CRYPT_STD_DES: 1
// CRYPT_EXT_DES: 1
// CRYPT_MD5: 1
// CRYPT_BLOWFISH: 1
// HTML_SPECIALCHARS: 0
// HTML_ENTITIES: 1
// ENT_COMPAT: 2
// ENT_QUOTES: 3
// ENT_NOQUOTES: 0
// ENT_IGNORE: 4
// ENT_SUBSTITUTE: 8
// ENT_DISALLOWED: 128
// ENT_HTML401: 0
// ENT_XML1: 16
// ENT_XHTML: 32
// ENT_HTML5: 48
// CHAR_MAX: 127
// LC_CTYPE: 2
// LC_NUMERIC: 4
// LC_TIME: 5
// LC_COLLATE: 1
// LC_MONETARY: 3
// LC_ALL: 0
// LC_MESSAGES: LC_MESSAGES
// STR_PAD_LEFT: 0
// STR_PAD_RIGHT: 1
// STR_PAD_BOTH: 2