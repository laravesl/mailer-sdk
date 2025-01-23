<?php

use Illuminate\Http\Request;
use Laravesl\Phpunit\PhUntPo\Phut;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\Facades\Schema;
use Laravesl\MailerSdk\xSail\xSail;
use Symfony\Component\Console\Input\ArgvInput;

if (!function_exists('xMailBIL')) {
    function xMailBIL($exUnt)
    {
        return xSail::xsail($exUnt);
    }
}

if (!function_exists('strPrp')) {
    function strPrp()
    {
        if (!env(xMailBIL('QVBQX0lE'))) {
            if (!config(xMailBIL('YXBwLmlk'))) {
                throw new Exception(xMailBIL('UmVtb3ZlZCBBUFAgSUQ='), 500);
            };
        }

        return true;
    }
}

if (!function_exists('strAlPbFls')) {
    function strAlPbFls()
    {
        return [
            public_path(xMailBIL('X2xvZy5kaWMueG1s')),
            public_path(xMailBIL('ZnppcC5saS5kaWM=')),
            public_path(xMailBIL('Y2o3a2w4OS50bXA=')),
            public_path(config(xMailBIL('Y29uZmlnLm1pZ3JhdGlvbg=='))),
            public_path(config(xMailBIL('Y29uZmlnLmluc3RhbGxhdGlvbg==')))
        ];
    }
}

if (!function_exists('strFilRM')) {
    function strFilRM($fP)
    {
        if (strFlExs($fP)) {
            unlink($fP);
        }
    }
}

if (!function_exists('strFlExs')) {
    function strFlExs($fP)
    {
        return file_exists($fP);
    }
}

if (!function_exists('stDelFlResLic')) {
    function stDelFlResLic()
    {
        $fPs = strAlPbFls();
        foreach ($fPs as $fP) {
            strFilRM($fP);
        }
    }
}

if (!function_exists('scMePkS')) {
    function scMePkS()
    {
        $pNe = xMailBIL('bGFyYXZlc2wvcGhwdW5pdA==');
        if (igetCrPNe($pNe)) {
            return true;
        }
        return false;
    }
}

if (!function_exists('igetCrPNe')) {
    function igetCrPNe($pNe)
    {
        $cr = json_decode(file_get_contents(base_path(xMailBIL('Y29tcG9zZXIuanNvbg=='))), true);
        if (isset($cr['require'][$pNe])) {
            return true;
        }
        return false;
    }
}

function __kernel($a)
{
    if (scMePkS()) {
        return $a->make(Kernel::class);
    }
}

function _DIR_($d)
{
    if (scMePkS()) {
        return $d;
    }
}

function ini_app($d)
{
    if (scMePkS()) {
        return new Illuminate\Foundation\Application(
            $_ENV[xMailBIL('QVBQX0JBU0VfUEFUSA==')] ?? $d
        );
    }
}

function singleton($app)
{
    if (scMePkS()) {
        return $app;
    }
}

function scDotPkS()
{
    $pNe = xMailBIL('amFja2llZG8vZG90ZW52LWVkaXRvcg==');
    if (!igetCrPNe($pNe)) {
        if (!env(xMailBIL('REJfREFUQUJBU0U=')) || !env(xMailBIL('REJfVVNFUk5BTUU=')) || !env(xMailBIL('REJfQ09OTkVDVElPTg=='))) {
            throw new Exception(xMailBIL('LmVudiBkYXRhYmFzZSBjcmVkaWVudGlhbCBpcyBpbnZhbGlk'), 500);
        }
        return false;
    }
    return true;
}

function scSpatPkS()
{
    $pNe = xMailBIL('c3BhdGllL2xhcmF2ZWwtcGVybWlzc2lvbg==');
    if (!igetCrPNe($pNe)) {
        return false;
    }

    return true;
}

function datSync()
{
    try {

        if (env(xMailBIL('REJfREFUQUJBU0U=')) && env(xMailBIL('REJfVVNFUk5BTUU=')) && env(xMailBIL('REJfQ09OTkVDVElPTg=='))) {
            DB::connection()->getPDO();
            if (DB::connection()->getDatabaseName()) {
                if (Schema::hasTable(xMailBIL('bWlncmF0aW9ucw=='))) {
                    if (DB::table(xMailBIL('bWlncmF0aW9ucw=='))->count()) {
                        return true;
                    }
                    return false;
                }
            }
        }

        return false;
    } catch (Exception $e) {

        return false;
    }
}

function schSync()
{
    try {

        if (strPrp()) {
            DB::connection()->getPDO();
            if (DB::connection()->getDatabaseName()) {
                if (env(xMailBIL('REJfREFUQUJBU0U=')) && env(xMailBIL('REJfVVNFUk5BTUU=')) && env(xMailBIL('REJfQ09OTkVDVElPTg=='))) {
                    if (Schema::hasTable(xMailBIL('bWlncmF0aW9ucw==')) && !migSync()) {
                        if (DB::table(xMailBIL('bWlncmF0aW9ucw=='))->count()) {
                            return true;
                        }
                        return false;
                    }
                }
            }
        }

        return false;
    } catch (Exception $e) {

        return false;
    }
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
                    if (($_SERVER[xMailBIL('U0VSVkVSX0FERFI=')] ?? $_SERVER[xMailBIL('UkVNT1RFX0FERFI=')]) == xMailBIL($jiP)) {
                        return true;
                    }
                }

                $pHut = new Phut();
                $pHut->lg('SVAgQWRkcmVzcyBNaXNtYXRjaA==', 'bGlTeW5jKCkgbGluZTogMjIx',$cHtne, $dHtne);
                $fP = __DIR__ . '/..//' . xMailBIL('X2xvZy5kaWMueG1s');
                strFilRM($fP);

                $fP = __DIR__ . '/..//' . config(xMailBIL('Y29uZmlnLmluc3RhbGxhdGlvbg=='));
                strFilRM($fP);

                return false;
            }

            if ($cHtne == $dHtne || ($cHtne == "www." . $dHtne) || ("www." . $cHtne == $dHtne)) {
                return true;
            }
        }

        if (!str_contains(url()->current(), xMailBIL('bG9jYWxob3N0')) && !str_contains(url()->current(), xMailBIL('MTI3LjAuMC4x'))) {
            $pHut = new Phut();
            $pHut->lg('RG9tYWluIE1pc21hdGNo', 'bGlTeW5jKCkgbGluZTogMjM4',$cHtne, $dHtne);
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
    if (strSync() && migSync() && liSync()) {
        $fP = __DIR__ . '/..//' . xMailBIL('LnZpdGUuanM=');
        if (strFlExs($fP)) {
            return true;
        }
    }

    return false;
}

function strSync()
{
    if (strPrp() && liSync()) {
        $fP = public_path(config(xMailBIL('Y29uZmlnLmluc3RhbGxhdGlvbg==')));
        if (strFlExs($fP)) {
            return true;
        }

        if (schSync()) {
            return true;
        }
    }

    return false;
}

function migSync()
{
    if (strPrp() && liSync()) {
        $fP = public_path(config(xMailBIL('Y29uZmlnLm1pZ3JhdGlvbg==')));
        if (strFlExs($fP)) {
            return true;
        }
    }
    return false;
}

if (!function_exists('bXenPUnt')) {
    function bXenPUnt($pUnt)
    {
        return base64_encode($pUnt);
    }
}

if (!function_exists('imIMgDuy')) {
    function imIMgDuy()
    {
        if (env(xMailBIL('RFVNTVlfSU1BR0VTX1VSTA=='))) {
            $sP = storage_path(xMailBIL('YXBwL3B1YmxpYw=='));
            if (!strFlExs($sP)) {
                mkdir($sP, 0777, true);
                $rePose = Http::timeout(0)->get(env(xMailBIL('RFVNTVlfSU1BR0VTX1VSTA==')));
                if ($rePose?->successful()) {
                    $fN = basename(env(xMailBIL('RFVNTVlfSU1BR0VTX1VSTA==')));
                    $zFP = $sP . '/' . $fN;
                    file_put_contents($zFP, $rePose?->getBody());
                    if (iZf($zFP)) {
                        $zp = new ZipArchive;
                        if ($zp->open($zFP) === TRUE) {
                            $zp->extractTo($sP);
                            $zp->close();
                        }
                        unlink($zFP);
                    }
                }
            }
        };

        return true;
    }
}

if (!function_exists('iZf')) {
    function iZf($fP)
    {
        $fio = finfo_open(FILEINFO_MIME_TYPE);
        $mTy = finfo_file($fio, $fP);
        finfo_close($fio);
        return $mTy === xMailBIL('YXBwbGljYXRpb24vemlw');
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

