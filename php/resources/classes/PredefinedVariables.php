<?php

// Examples

// $predef_vars = new PredefinedVariables;

// # get_all()
//     $var = $predef_vars->get_all();
//     print_r($var);

// # get()
//     $server = $predef_vars->get('_SERVER');
//     print_r($server);

/**
 * Returns an array of all Predefined Variables being used
 * Returns an array of a specific Super Global 
 */
class PredefinedVariables
{
    /**
     * Returns an array of all Predefined Variables being used
     *
     * @return void
     */
    public function get_all()
    {
        return
            [
                '_SERVER'               => $_SERVER             ?? null,
                '_POST'                 => $_GET                ?? null,
                '_POST'                 => $_POST               ?? null,
                '_FILES'                => $_FILES              ?? null,
                '_REQUEST'              => $_REQUEST            ?? null,
                '_SESSION'              => $_SESSION            ?? null,
                '_ENV'                  => $_ENV                ?? null,
                '_COOKIE'               => $_COOKIE             ?? null,
                'php_errormsg'          => $php_errormsg        ?? null,
                'HTTP_RAW_POST_DATA'    => $HTTP_RAW_POST_DATA  ?? null,
                'http_response_header'  => $http_response_header?? null,
                'argc'                  => $argc                ?? null,
                'argv'                  => $argv                ?? null
            ];
    }

    /**
     * Returns an array of a specific Super Global.
     *
     * @param [string] $var Exact Super Global Name example _SERVER
     * @return void
     */
    public function get(String $var)
    {
        $predefined_variables = $this->get_all();

        return $predefined_variables[$var] ?? 'Not a PHP predfined variable being used.';
    }

}