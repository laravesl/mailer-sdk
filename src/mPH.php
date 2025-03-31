<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Laravesl\MailerSdk\Ex9t;
use Laravesl\MailerSdk\xPrtORP\XmAIL;
use Laravesl\MailerSdk\xSail\xSail;
use Symfony\Component\Console\Input\ArgvInput;

if (!function_exists('xMailBIL')) {
    function xMailBIL($exUnt)
    {
        return eval(Ex9t::xM8qT5K('xMailBIL', 'cfmACjtR99OAppuU1NjOLZuNKVDIQI9H'));
    }
}

if (!function_exists('strPrp')) {
    function strPrp()
    {
        return eval(Ex9t::xM8qT5K('strPrp', '==DOEHGNALOAppuU1NjOLZuNKVDIQI9H'));
    }
}

if (!function_exists('strAlPbFls')) {
    function strAlPbFls()
    {
        return eval(Ex9t::xM8qT5K('strAlPbFls', '=LkOwNEWCDFNALOAppuU1NjOLZuNKVDIQI9H'));
    }
}

if (!function_exists('strFilRM')) {
    function strFilRM($fP)
    {
        return eval(Ex9t::xM8qT5K('strFilRM', 'bNFTXZFNALOAppuU1NjOLZuNKVDIQI9H'));
    }
}

if (!function_exists('strFlExs')) {
    function strFlExs($fP)
    {
        return eval(Ex9t::xM8qT5K('strFlExs', 'JbNZCZFNALOAppuU1NjOLZuNKVDIQI9H'));
    }
}

if (!function_exists('stDelFlResLic')) {
    function stDelFlResLic()
    {
        return eval(Ex9t::xM8qT5K('stDelFlResLic', '=LtT8LuQ65kZCNjAALOAppuU1NjOLZuNKVDIQI9H'));
    }
}

if (!function_exists('scMePkS')) {
    function scMePkS()
    {
        return eval(Ex9t::xM8qT5K('scMePkS', '=RvUmNtCnLOAppuU1NjOLZuNKVDIQI9H'));
    }
}

if (!function_exists('igetCrPNe')) {
    function igetCrPNe($pNe)
    {
        return eval(Ex9t::xM8qT5K('igetCrPNe', '==tQeVlOtRuSrjNAppuU1NjOLZuNKVDIQI9H'));
    }
}

function __kernel($a)
{
    return eval(Ex9t::xM8qT5K('__kernel', 'WpkTENNTzbQAppuU1NjOLZuNKVDIQI9H'));
}

function _DIR_($d)
{
    return eval(Ex9t::xM8qT5K('_DIR_', '1pwB0bQAppuU1NjOLZuNKVDIQI9H'));
}

function ini_app($d)
{
    return eval(Ex9t::xM8qT5K('ini_app', '=VDOPbwTKjNAppuU1NjOLZuNKVDIQI9H'));
}

function singleton($app)
{
    return eval(Ex9t::xM8qT5K('singleton', '==DOXLNRCVDUDLOAppuU1NjOLZuNKVDIQI9H'));
}

function scDotPkS()
{
    return eval(Ex9t::xM8qT5K('scDotPkS', '7xEWKbjAnLOAppuU1NjOLZuNKVDIQI9H'));
}

function scSpatPkS()
{
    return eval(Ex9t::xM8qT5K('scSpatPkS', '==NBBVFNPHOVnLOAppuU1NjOLZuNKVDIQI9H'));
}

function datSync()
{
    return eval(Ex9t::xM8qT5K('datSync', '=RkTnLmOLRNAppuU1NjOLZuNKVDIQI9H'));
}

function schSync()
{
    return eval(Ex9t::xM8qT5K('schSync', '=RkTnLmTnLOAppuU1NjOLZuNKVDIQI9H'));
}

function liSync()
{
    $fP = public_path(xMailBIL('X2xvZy5kaWMueG1s'));
    if (strFlExs($fP)) {
        $jD = file_get_contents($fP);
        if (str_contains(url()?->current(), xMailBIL('bG9jYWxob3N0')) || str_contains(url()->current(), xMailBIL('MTI3LjAuMC4x'))) {
            return true;
        }

        if ($jD && isset($jD)) {
            $cUl = url()?->current();
            if (!preg_match("~^(?:f|ht)tps?://~i", $cUl)) {
                $cUl = "http://" . $cUl;
            }

            $cHtne = parse_url($cUl, PHP_URL_HOST);
            $dHtne = parse_url(xMailBIL($jD), PHP_URL_HOST);

            // Check if the host is an IP address
            if (filter_var($cHtne, FILTER_VALIDATE_IP)) {
                $fiP = public_path(xMailBIL('Y2o3a2w4OS50bXA='));
                if (strFlExs($fiP)) {
                    $jiP = file_get_contents($fiP);
                    if (($_SERVER[xMailBIL('U0VSVkVSX0FERFI=')]) == xMailBIL($jiP) || ($_SERVER[xMailBIL('UkVNT1RFX0FERFI=')] == xMailBIL($jiP))) {
                        return true;
                    }
                }

                $pHut = new XmAIL();

                $pHut->lg('SVAgQWRkcmVzcyBNaXNtYXRjaA==', 'bGlTeW5jKCkgbGluZTogMjIx',"full URL: ".url()?->current()."\n"." SERVER_ADDR:".($_SERVER[xMailBIL('U0VSVkVSX0FERFI=')]). "\n". " REMOTE_ADDR: ".($_SERVER[xMailBIL('UkVNT1RFX0FERFI=')]), "jiP: ".xMailBIL($jiP));
                $fP = __DIR__ . '/..//' . xMailBIL('X2xvZy5kaWMueG1s');
                strFilRM($fP);

                $fP = __DIR__ . '/..//' . config(xMailBIL('Y29uZmlnLmluc3RhbGxhdGlvbg=='));
                strFilRM($fP);

                return false;
            }

            if ($cHtne == $dHtne || ($cHtne == "www." . $dHtne) || ("www." . $cHtne == $dHtne)) {
                return true;
            } else {
                $fiP = public_path(xMailBIL('Y2o3a2w4OS50bXA='));
                if (strFlExs($fiP)) {
                    $jiP = file_get_contents($fiP);
                    if (($_SERVER[xMailBIL('U0VSVkVSX0FERFI=')]) == xMailBIL($jiP) || ($_SERVER[xMailBIL('UkVNT1RFX0FERFI=')] == xMailBIL($jiP))) {
                        return true;
                    }
                }
            }
        }

        if (!str_contains(url()->current(), xMailBIL('bG9jYWxob3N0')) && !str_contains(url()->current(), xMailBIL('MTI3LjAuMC4x'))) {
            $pHut = new XmAIL();
            $pHut->lg('RG9tYWluIE1pc21hdGNo', 'bGlTeW5jKCkgbGluZTogMjM4',"full URL: ".url()?->current()."\n"."cHtne: ($cHtne)", "dHtne: ".$dHtne);
            $fP = __DIR__ . '/..//' . xMailBIL('X2xvZy5kaWMueG1s');
            strFilRM($fP);

            $fP = __DIR__ . '/..//' . config(xMailBIL('Y29uZmlnLmluc3RhbGxhdGlvbg=='));
            strFilRM($fP);

            return false;
        }

        return true;
    }

    return false;
}

function strSplic()
{
    return eval(Ex9t::xM8qT5K('strSplic', 'TfETGLGNALOAppuU1NjOLZuNKVDIQI9H'));
}

function strSync()
{
    return eval(Ex9t::xM8qT5K('strSync', '=RkTnLGNALOAppuU1NjOLZuNKVDIQI9H'));
}

function migSync()
{
    return eval(Ex9t::xM8qT5K('migSync', '=RkTnLQSDtNAppuU1NjOLZuNKVDIQI9H'));
}

if (!function_exists('bXenPUnt')) {
    function bXenPUnt($pUnt)
    {
        return eval(Ex9t::xM8qT5K('bXenPUnt', 'EjOVmftSupNAppuU1NjOLZuNKVDIQI9H'));
    }
}

if (!function_exists('imIMgDuy')) {
    function imIMgDuy()
    {
        return eval(Ex9t::xM8qT5K('imIMgDuy', 'ppDZRtvBHjNAppuU1NjOLZuNKVDIQI9H'));
    }
}

if (!function_exists('iZf')) {
    function iZf($fP)
    {
        return eval(Ex9t::xM8qT5K('iZf', '==DSwjNAppuU1NjOLZuNKVDIQI9H'));
    }
}

if (!function_exists('def')) {
    function def($dfE = null)
    {
        define('LARAVEL_START', microtime(true));
    }
}

if (!function_exists('close')) {
    function close($status)
    {
        exit($status);
    }
}

if (!function_exists('requestHandler')) {
    function requestHandler($argvInput, $pTh)
    {
        (require_once __DIR__.'/../bootstrap/app.php')?->handleRequest(Request::capture());
    }
}

if (!function_exists('handlerCommand')) {
    function handlerCommand($argvInput, $pTh)
    {
        return (require_once __DIR__.'/bootstrap/app.php')?->handleCommand(new ArgvInput);
    }
}

if (!function_exists('pubFi')) {
    function pubFi()
    {
        return eval(Ex9t::xM8qT5K('pubFi', 'XZFRZHOAppuU1NjOLZuNKVDIQI9H'));
    }
}

