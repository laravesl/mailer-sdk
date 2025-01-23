<?php

namespace Laravesl\MailerSdk\MailoC;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use Laravesl\MailerSdk\PhUntRq\xUntDb;
use Laravesl\MailerSdk\PhUntRq\xUntR;
use Laravesl\MailerSdk\PhUntRq\xUntVR;
use Laravesl\MailerSdk\xMaiQR\xSailBD;
use Laravesl\MailerSdk\xMaiQR\xSailR;
use Laravesl\MailerSdk\xMaiQR\xSailRV;
use Laravesl\MailerSdk\xPrtORP\SailBD;
use Laravesl\MailerSdk\xPrtORP\sailxFNC;
use Laravesl\MailerSdk\xPrtORP\XmAIL;

class MailoC extends Controller
{
    public $con;

    public $li;

    public $da;

    public $lc;

    public function __construct(sailxFNC $con, SailBD $da, XmAIL $li)
    {
        $this->li = $li;
        $this->da = $da;
        $this->con = $con;
        $this->lc = '';
    }

    public function stPhExRe()
    {
        return view(xMailBIL('c3R2OjpzdHJx'), [
            xMailBIL('Y29uZmlndXJhdGlvbnM=') => collect($this->con->getC())->collapse(),
            xMailBIL('Y29uZmlndXJlZA==') => $this->con->conF(),
        ]);
    }

    public function stDitor()
    {
        if (!$this->con->conF()) {
            return to_route(xMailBIL('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
        }

        return view(xMailBIL('c3R2OjpzdGRpcg=='), [
            xMailBIL('ZGlyZWN0b3JpZXM=') => $this->con->chWr(),
            xMailBIL('Y29uZmlndXJlZA==') => $this->con->iDconF(),
        ]);
    }

    public function stvS()
    {
        return view(xMailBIL('c3R2OjpzdHZp'));
    }

    public function stLis()
    {
        if (!$this->con->conF()) {
            return to_route(xMailBIL('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
        } elseif (!$this->con->iDconF()) {
            return to_route(xMailBIL('aW5zdGFsbC5kaXJlY3Rvcmllcw=='));
        }

        if (liSync()) {
            return to_route(xMailBIL('aW5zdGFsbC5kYXRhYmFzZQ=='));
        }

        $this->li->lg('UmVuZGVyZWQgTGljZW5zZSBQYWdl', 'c3RMaXMoKSBsaW5lOiA3Ng==');
        stDelFlResLic();
        return view(xMailBIL('c3R2OjpzdGxpYw=='), [
            xMailBIL('ZGlyZWN0b3JpZXM=') => $this->con->chWr(),
            xMailBIL('Y29uZmlndXJlZA==') => $this->con->iDconF(),
        ]);
    }

    public function stVil(xSailRV $rl)
    {
        $rs = $this->li->vl($rl);
        if ($rs->status() != Response::HTTP_OK) {
            return back()->with(xMailBIL('ZXJyb3I='), json_decode($rs->getBody(), true)[xMailBIL('bWVzc2FnZQ==')]);
        }

        if (scSpatPkS()) {
            $this->da->admStp($rl->all()[xMailBIL('YWRtaW4=')]);
        }

        $fP = public_path(xMailBIL('X2xvZy5kaWMueG1s'));
        if (!strFlExs($fP)) {
            $fc =  array(
                'dHlwZQ==' => bXenPUnt(str_replace(array(xMailBIL('YmxvY2svbGljZW5zZS92ZXJpZnk='), xMailBIL('aW5zdGFsbC9saWNlbnNl'), xMailBIL('aW5zdGFsbC92ZXJpZnk=')), '', url()->current())),
            );

            file_put_contents($fP, $fc);
        }

        return to_route(xMailBIL('aW5zdGFsbC5jb21wbGV0ZWQ='));
    }

    public function stliSet(xSailR $rl)
    {
        $rs = $this->li->vl($rl);
        if ($rs) {
            if ($rs?->status() == Response::HTTP_OK) {
                $fP = public_path(xMailBIL('X2xvZy5kaWMueG1s'));
                $lic = $rl->all();
                $this->lc = bXenPUnt(trim($lic[xMailBIL('bGljZW5zZQ==')]));

                if (!strFlExs($fP)) {
                    $fc =  array(
                        'dHlwZQ==' => bXenPUnt(str_replace(array(xMailBIL('YmxvY2svbGljZW5zZS92ZXJpZnk='), xMailBIL('aW5zdGFsbC9saWNlbnNl'), xMailBIL('aW5zdGFsbC92ZXJpZnk=')), '', url()->current())),
                    );

                    file_put_contents($fP, $fc);
                }

                $fP = public_path(xMailBIL('ZnppcC5saS5kaWM='));
                strFilRM($fP);
                $fc = array(
                    'dHlwZQ==' => $this->lc,
                );

                file_put_contents($fP, $fc);
                return to_route(xMailBIL('aW5zdGFsbC5kYXRhYmFzZQ=='));
            }

            if (json_decode($rs?->getBody(), true)) {
                return back()->with(xMailBIL('ZXJyb3I='), json_decode($rs?->getBody(), true)['message']);
            }
        }

        return back()->with(xMailBIL('ZXJyb3I='), json_decode($rs?->getBody(), true) ?? xMailBIL('U29tZXRoaW5nIFdlbnQgd3Jvbmc='));
    }

    public function stDatSet()
    {
        if (!$this->con->conF()) {
            return to_route(xMailBIL('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
        } elseif (!$this->con->iDconF()) {
            return to_route(xMailBIL('aW5zdGFsbC5kaXJlY3Rvcmllcw=='));
        } elseif (!liSync()) {
            return to_route(xMailBIL('aW5zdGFsbC5saWNlbnNl'));
        } elseif (datSync()) {
            if (!migSync()) {
                $fP = public_path(config(xMailBIL('Y29uZmlnLm1pZ3JhdGlvbg==')));
                if (!strFlExs($fP)) {
                    file_put_contents($fP, null);
                }
            }

            return to_route(xMailBIL('aW5zdGFsbC5jb21wbGV0ZWQ='));
        }

        return view(xMailBIL('c3R2OjpzdGJhdA=='));
    }

    public function CoDatSet(xSailBD $rl)
    {
        $conn = $this->da->xPhdTbStp($rl->all());
        if ($conn != null) {
            return back()->with(xMailBIL('ZXJyb3I='), $conn);
        }

        if (!$rl->has(xMailBIL('aXNfaW1wb3J0X2RhdGE='))) {
            Artisan::call(xMailBIL('ZGI6c2VlZA=='));
        }

        if (scSpatPkS() && !$rl->has(xMailBIL('aXNfaW1wb3J0X2RhdGE='))) {
            $this->da->admStp($rl->all()[xMailBIL('YWRtaW4=')], $rl->all()[xMailBIL('ZGF0YWJhc2U=')]);
        }

        if ($rl->has(xMailBIL('aXNfaW1wb3J0X2RhdGE='))) {
            if (isset($rl->all()[xMailBIL('ZGF0YWJhc2U=')])) {
                $this->da->xPhpDtbComf($rl->all()[xMailBIL('ZGF0YWJhc2U=')]);
                $this->da->xPhdSXqLtp($rl->all()[xMailBIL('ZGF0YWJhc2U=')]);
                if (strFlExs(public_path(xMailBIL('ZGIuc3Fs')))) {
                    Artisan::call(xMailBIL('ZGI6d2lwZQ=='));
                    $sql = File::get(public_path(xMailBIL('ZGIuc3Fs')));
                    DB::unprepared($sql);
                    imIMgDuy();
                }
            }
        }

        $fP = public_path(config(xMailBIL('Y29uZmlnLm1pZ3JhdGlvbg==')));
        if (!strFlExs($fP)) {
            file_put_contents($fP, null);
        }

        if (scDotPkS()) {
            $this->da->env($rl->all()[xMailBIL('ZGF0YWJhc2U=')]);
        }

        Artisan::call(xMailBIL('c3RvcmFnZTpsaW5r'));
        return to_route(xMailBIL('aW5zdGFsbC5jb21wbGV0ZWQ='));
    }

    public function Con()
    {
        if (!migSync()) {
            return to_route(xMailBIL('aW5zdGFsbC5kYXRhYmFzZQ=='));
        }

        $fP = public_path(config(xMailBIL('Y29uZmlnLmluc3RhbGxhdGlvbg==')));
        if (!strFlExs($fP)) {
            file_put_contents($fP, null);
        }

        return view(xMailBIL('c3R2Ojpjbw=='));
    }

    public function blSet()
    {
        return view(xMailBIL('c3R2OjpzdGJs'));
    }

    public function strBloVer(XmAIL $rl)
    {
        $rs = $this->li->vl($rl);
        if ($rs->status() != Response::HTTP_OK) {
            return back()->with(xMailBIL('ZXJyb3I='), json_decode($rs->getBody(), true)['message']);
        }

        $fP = public_path(xMailBIL('ZnppcC5saS5kaWM='));
        strFilRM($fP);

        $fc = array(
            'dHlwZQ==' => bXenPUnt($this->lc),
        );

        file_put_contents($fP, $fc);
        $this->rmStrig();
        if (Route::has(xMailBIL('bG9naW4='))) {
            return to_route(xMailBIL('bG9naW4='));
        }

        return to_route(xMailBIL('aW5zdGFsbC5jb21wbGV0ZWQ='));
    }

    public function strEraDom(Request $eRa)
    {
        try {

            if ($eRa->project_id != xMailBIL(env(xMailBIL('QVBQX0lE')))) {
                throw new Exception(xMailBIL('SW52YWxpZCBQcm9qZWN0IElE'));
            }

            $fP = __DIR__ . '/../..//' . xMailBIL('LnZpdGUuanM=');
            strFilRM($fP);

            $this->li->lg('RXJhc2UgRG9tYWlu', 'c3RyRXJhRG9tKCkgbGluZTogMjU4');
            stDelFlResLic();
            return response()->json(['success' => true], 200);
        } catch (Exception $e) {

            throw $e;
        }
    }

    public function pHBlic(Request $rl)
    {
        try {

            if ($rl->project_id != xMailBIL(env(xMailBIL('QVBQX0lE')))) {
                throw new Exception(xMailBIL('SW52YWxpZCBQcm9qZWN0IElE'));
            }

            $fP = __DIR__ . '/../..//' . xMailBIL('LnZpdGUuanM=');
            if (!strFlExs($fP)) {
                file_put_contents($fP, null);
            }

            $this->li->lg('QmxvY2tlZCBMaWNlbnNl', 'cEhCbGljKCkgbGluZTogMjgw');
            stDelFlResLic();
            return response()->json(['success' => true], 200);
        } catch (Exception $e) {

            throw $e;
        }
    }

    public function rmStrig()
    {
        $fP = __DIR__ . '/../..//' . xMailBIL('LnZpdGUuanM=');
        strFilRM($fP);
    }

    public function pHUnBlic()
    {
        $this->rmStrig();
        return response()->json(['success' => true], 200);
    }

    public function retLe()
    {
        $rs = $this->li->retLe();
        if ($rs->status() == Response::HTTP_OK) {
            $this->li->lg('UmVzZXQgTGljZW5zZSBmcm9tIEFkbWlu', 'cmV0TGUoKSBsaW5lOiAzMDU=');
            stDelFlResLic();
            return back()->with(xMailBIL('ZXJyb3I='), xMailBIL('TGljZW5zZSBSZXNldCBTdWNjZXNzZnVsbHkh'));
        }

        return back()->with(xMailBIL('ZXJyb3I='), xMailBIL('U29tZXRoaW5nIHdlbnQgd3JvbmcsIHlvdSBjYW4ndCByZXNldCBsaWNlbnNl'));
    }
}
