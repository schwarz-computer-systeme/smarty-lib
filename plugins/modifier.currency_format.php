<?php
/**
 * by Robert Schwandner, Alpha-Webservice GmbH
 *
 *
 */


/**
 * Smarty lower modifier plugin
 *
 * Type:     modifier<br>
 * Name:     lower<br>
 * Purpose:  convert string to currency format
 * @link http://smarty.php.net/manual/en/language.modifier.lower.php
 *          lower (Smarty online manual)
 * @param string
 * @return string
 */
function smarty_modifier_currency_format($string)
{
    return number_format($string, 2, ",", ".");
}

?>
