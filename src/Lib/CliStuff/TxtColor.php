<?php

/**
 * Created by Thiago Mallon.
 */

/**
 * @subpackage App\Lib\CliStuff
 */
namespace App\Lib\CliStuff;

/**
 * Class TxtColor
 *
 * @author Thiago Mallon <thiagomallon@gmail.com>
 */
class TxtColor
{
    /**
     * Property stores possible foreground colors
     * @var array $fgColor
     */
    protected static $fgColor = [
    'black' => '0;30',
    'darkgray' => '1;30',
    'blue' => '0;34',
    'lightblue' => '1;34',
    'green' => '0;32',
    'lightgreen' => '1;32',
    'cyan' => '0;36',
    'lightcyan' => '1;36',
    'red' => '0;31',
    'lightred' => '1;31',
    'purple' => '0;35',
    'lightpurple' => '1;35',
    'brown' => '0;33',
    'yellow' => '1;33',
    'lightgray' => '0;37',
    'white' => '1;37',
    ];

    /**
     * Property stores possible background colors
     * @var array $bgColor
     */
    protected static $bgColor = [
    'black' => '40',
    'red' => '41',
    'green' => '42',
    'yellow' => '43',
    'blue' => '44',
    'magenta' => '45',
    'cyan' => '46',
    'lightgray' => '47',
    ];

    /**
     * Property stores message to be decorated
     * @var type $decoratedTxt
     */
    protected static $decoratedTxt;

    /**
     * Method returns decorated text
     * @param string $msg Text to be decorated
     * @param string $fgrColor Foreground color
     * @param string $bfrColor Background color
     * @return string $decoratedTxt
     */
    public static function decorate($txt = null, $fgrColor = null, $bgrColor = null)
    {
        if (!empty($txt) && ($fgrColor || $bgrColor)) {
            // check and try to apply fg. color
            self::$decoratedTxt .= ((array_key_exists($fgrColor, self::$fgColor))?
            "\033[".self::$fgColor[$fgrColor].'m': // if !null set
            null); // set null

            // check and try to apply bg. color
            self::$decoratedTxt .= ((array_key_exists($bgrColor, self::$bgColor))?
            "\033[".self::$bgColor[$bgrColor].'m': // if !null set
            null); // set null
            return self::$decoratedTxt . "$txt\033[0m";
        }
        return $txt;
    }
}

// FROM WITHIN A PHP SCRIPT, YOU CAN CALL: TxtColor::decorate([string $txt[, string $fgColor[, string $bgColor]]])
// FROM COMMAND LINE YOU CAN CALL: TxtColor.php [string $txt] [string $fgColor] [string $bgColor]

if (isset($argc)) { // checks if there is some command line argument
    if (isset($argv[1])) { // checks if the first expected param was setted
        print TxtColor::decorate($argv[1], ((isset($argv[2]))? $argv[2] : null), ((isset($argv[3]))? $argv[3] : null))."\n";
    } else {
        print "\n\n";
        print TxtColor::decorate('FROM WITHIN A PHP SCRIPT (CLASS, FUNCTION AND GLOBAL SCOPE, YOU CAN CALL: ', 'blue', 'black');
        print "\n";
        print TxtColor::decorate('TxtColor::decorate([string $txt[, string $fgColor[, string $bgColor]]])', 'lightgray', 'black');
        print "\n\n";
        print TxtColor::decorate('FROM COMMAND LINE YOU CAN CALL: ', 'blue', 'black');
        print "\n";
        print TxtColor::decorate('TxtColor.php [string $txt] [string $fgColor] [string $bgColor]', 'lightgray', 'black');
        print "\n\n\n";
    }
}
