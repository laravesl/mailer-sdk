<?php

namespace Laravesl\MailerSdk\xPrtORP;

use mysqli;
use Exception;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Permission;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;

/**
 * Database configuration
 */
class SailBD
{
    public function xPhdTbStp($phDb)
    {
        $this->xPhpDtbComf($phDb[xMailBIL('ZGF0YWJhc2U=')]);
        try {

            $this->xPhdSXqLtp($phDb[xMailBIL('ZGF0YWJhc2U=')]);
            Artisan::call(xMailBIL('bWlncmF0ZTpmcmVzaA=='));

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function xPhdSXqLtp($phDb)
    {
        new mysqli($phDb[xMailBIL('REJfSE9TVA==')], $phDb[xMailBIL('REJfVVNFUk5BTUU=')],
                $phDb[xMailBIL('REJfUEFTU1dPUkQ=')], $phDb[xMailBIL('REJfREFUQUJBU0U=')],
                $phDb[xMailBIL('REJfUE9SVA==')]);
    }

    public function xPhpDtbComf($phDb)
    {
        config([
            xMailBIL('ZGF0YWJhc2UuZGVmYXVsdA==') => xMailBIL('bXlzcWw='),
            xMailBIL('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwuaG9zdA==') => $phDb[xMailBIL('REJfSE9TVA==')],
            xMailBIL('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwucG9ydA==') => $phDb[xMailBIL('REJfUE9SVA==')],
            xMailBIL('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwuZGF0YWJhc2U=') => $phDb[xMailBIL('REJfREFUQUJBU0U=')],
            xMailBIL('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwudXNlcm5hbWU=') => $phDb[xMailBIL('REJfVVNFUk5BTUU=')],
            xMailBIL('ZGF0YWJhc2UuY29ubmVjdGlvbnMubXlzcWwucGFzc3dvcmQ=') => $phDb[xMailBIL('REJfUEFTU1dPUkQ=')],
        ]);

        DB::purge(xMailBIL('bXlzcWw='));
        Artisan::call(xMailBIL('Y29uZmlnOmNsZWFy'));
    }

    public function admStp($a, $phDb = null)
    {
        $rlE = Role::where(xMailBIL('bmFtZQ=='), xMailBIL('QWRtaW4='))->first();
        if (!$rlE) {
            $rlE = Role::create([xMailBIL('bmFtZQ==') => xMailBIL('QWRtaW4=')]);
            $rlE->givePermissionTo(Permission::all());
        }

        $xPuSeX = User::whereHas('roles', function($q) {
            $q->where(xMailBIL('bmFtZQ=='), xMailBIL('QWRtaW4='));
        })?->first();

        if (!$xPuSeX) {
            $xPuSeX = User::factory()->create([
                xMailBIL('bmFtZQ==') => $a[xMailBIL('Zmlyc3RfbmFtZQ==')].' '.$a['last_name'],
                xMailBIL('ZW1haWw=') => $a[xMailBIL('ZW1haWw=')],
                xMailBIL('ZW1haWxfdmVyaWZpZWRfYXQ=') => now(),
                xMailBIL('cGFzc3dvcmQ=') => Hash::make($a[xMailBIL('cGFzc3dvcmQ=')]),
                xMailBIL(xMailBIL('c3lzdGVtX3Jlc2VydmU=')) => true,
            ]);
            $xPuSeX->assignRole($rlE);
        }
    }

    public function env($phDb)
    {
        DotenvEditor::setKeys([
            xMailBIL('REJfSE9TVA==') => $phDb[xMailBIL('REJfSE9TVA==')],
            xMailBIL('REJfUE9SVA==') => $phDb[xMailBIL('REJfUE9SVA==')],
            xMailBIL('REJfREFUQUJBU0U=') => $phDb[xMailBIL('REJfREFUQUJBU0U=')],
            xMailBIL('REJfVVNFUk5BTUU=') => $phDb[xMailBIL('REJfVVNFUk5BTUU=') ],
            xMailBIL('REJfUEFTU1dPUkQ=') => $phDb[xMailBIL('REJfUEFTU1dPUkQ=')],
        ]);

        DotenvEditor::save();
    }
}
