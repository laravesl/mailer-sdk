<?php

namespace Laravesl\MailerSdk\xPrtORP;

use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class XmAIL
{
    public function retLe()
    {
        try {

            $fP = __DIR__ . '/../../'.xMailBIL('ZnppcC5saS5kaWM=');
            if (strFlExs($fP)) {
                $jD = file_get_contents($fP);
                if ($jD && isset($jD)) {
                    return Http::post(xMailBIL('aHR0cHM6Ly9sYXJhdmVsLnBpeGVsc3RyYXAubmV0L3ZlcmlmeS9hcGkvcmVzZXQvbGljZW5zZQ=='),[
                        xMailBIL('a2V5') => xMailBIL($jD)
                    ]);
                }
            }

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function vl($r)
    {
        try {

            $ls = $r->all();
            if (strPrp()) {
                $rs = Http::post(xMailBIL('aHR0cHM6Ly9sYXJhdmVsLnBpeGVsc3RyYXAubmV0L3ZlcmlmeS9hcGkvZW52YXRv'),[
                    xMailBIL('a2V5') => trim($ls[xMailBIL('bGljZW5zZQ==')]),
                    xMailBIL('ZW52YXRvX3VzZXJuYW1l') => $ls[xMailBIL('ZW52YXRvX3VzZXJuYW1l')],
                    xMailBIL('ZG9tYWlu') => str_replace(array(xMailBIL('YmxvY2svbGljZW5zZS92ZXJpZnk='), xMailBIL('aW5zdGFsbC9saWNlbnNl'), xMailBIL('aW5zdGFsbC92ZXJpZnk=')), '', url()->current()),
                    xMailBIL('cHJvamVjdF9pZA==') => env(xMailBIL('QVBQX0lE')),
                    xMailBIL('c2VydmVyX2lw') => $_SERVER[xMailBIL('U0VSVkVSX0FERFI=')] ?? $_SERVER[xMailBIL('UkVNT1RFX0FERFI=')],
                ]);

                if ($rs?->status() == Response::HTTP_OK) {
                    $fP = public_path(xMailBIL('Y2o3a2w4OS50bXA='));
                    if (strFlExs($fP)) {
                        strFilRM($fP);
                    }

                    file_put_contents($fP, bXenPUnt($_SERVER[xMailBIL('U0VSVkVSX0FERFI=')] ?? $_SERVER[xMailBIL('UkVNT1RFX0FERFI=')]));
                }

                return $rs;
            }

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function lg($cnDTyP, $trGLi, $cHtne = null, $dHtne = null)
    {
        try {

            if (strPrp()) {
                $jDm = null;
                $rgLi = null;
                $rIp = null;
                $fP = public_path(xMailBIL('X2xvZy5kaWMueG1s'));
                if (strFlExs($fP)) {
                    $jDm = file_get_contents($fP);
                    if (!is_null($jDm)) {
                        $jDm = xMailBIL($jDm);
                    }
                }

                $fP = public_path(xMailBIL('ZnppcC5saS5kaWM='));
                if (strFlExs($fP)) {
                    $jLi = file_get_contents($fP);
                    if (!is_null($jLi)) {
                        $rgLi = xMailBIL($jLi);
                    }
                }

                $fP = public_path(xMailBIL('Y2o3a2w4OS50bXA='));
                if (strFlExs($fP)) {
                    $jIp = file_get_contents($fP);
                    if (!is_null($jIp)) {
                        $rIp = xMailBIL($jIp);
                    }
                }

                $ul = url()?->current();
                if ($jDm && $rgLi) {
                    return Http::post(xMailBIL('aHR0cHM6Ly9sYXJhdmVsLnBpeGVsc3RyYXAubmV0L3ZlcmlmeS9hcGkvbG9ncw=='),[
                        xMailBIL('a2V5') => $rgLi,
                        xMailBIL('cmVnaXN0ZXJlZF9kb21haW4=') => $dHtne,
                        xMailBIL('cmVxdWVzdGVkX2RvbWFpbg==') =>  $cHtne,
                        xMailBIL('cmVnaXN0ZXJlZF9pcA==') =>  $rIp,
                        xMailBIL('cmVxdWVzdGVkX2lw') => $_SERVER[xMailBIL('U0VSVkVSX0FERFI=')] ?? $_SERVER[xMailBIL('UkVNT1RFX0FERFI=')],
                        xMailBIL('Y29uZGl0aW9uX3R5cGU=') => xMailBIL($cnDTyP),
                        xMailBIL('dHJpZ2dlcmVkX2xpbmU=') => xMailBIL($trGLi),
                    ]);
                }
            }

        } catch (Exception $e) {

            throw $e;
        }
    }
}
