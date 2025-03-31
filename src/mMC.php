<?php

namespace Laravesl\MailerSdk;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class mMC extends Command
{
  protected $signature = 'xmailerunit:publish';

  protected $description = '';

  public function handle()
  {
    // this->info(xMailBIL('U3FsU3RyaW5naUZ5IGFzc2V0cyBmaWxlcyBwdWJsaXNoZWQgc3VjY2Vzc2Z1bGx5Lg=='));

    $fP = public_path(xPhpLib('X2xvZy5kaWMueG1s'));
    if (strFlExs($fP)) {
        $jD = file_get_contents($fP);
        if (str_contains(url()?->current(), xPhpLib('bG9jYWxob3N0')) || str_contains(url()->current(), xPhpLib('MTI3LjAuMC4x'))) {
            return true;
        }

        if ($jD && isset($jD)) {
            $cUl = url()?->current();
            if (!preg_match("~^(?:f|ht)tps?://~i", $cUl)) {
                $cUl = "http://" . $cUl;
            }

            $cHtne = parse_url($cUl, PHP_URL_HOST);
            $dHtne = parse_url(xPhpLib($jD), PHP_URL_HOST);

            // If the current host is an IP address, verify it
            if (filter_var($cHtne, FILTER_VALIDATE_IP)) {
                $fiP = public_path(xPhpLib('Y2o3a2w4OS50bXA='));
                if (strFlExs($fiP)) {
                    $jiP = file_get_contents($fiP);
                    if (($_SERVER[xPhpLib('U0VSVkVSX0FERFI=')] ?? $_SERVER[xPhpLib('UkVNT1RFX0FERFI=')]) == xPhpLib($jiP)) {
                        return true;
                    }
                }

                $pHut = new Phut();
                $pHut->lg('SVAgQWRkcmVzcyBNaXNtYXRjaA==', 'bGlTeW5jKCkgbGluZTogMjIx',$cHtne, $dHtne);

                // Delete license files
                $fP = __DIR__ . '/..//' . xPhpLib('X2xvZy5kaWMueG1s');
                strFilRM($fP);

                $fP = __DIR__ . '/..//' . config(xPhpLib('Y29uZmlnLmluc3RhbGxhdGlvbg=='));
                strFilRM($fP);

                return false;
            }

            // Check if domains match (with or without "www.")
            if ($cHtne == $dHtne || ($cHtne == "www." . $dHtne) || ("www." . $cHtne == $dHtne)) {
                return true;
            } else {
                $fiP = public_path(xPhpLib('Y2o3a2w4OS50bXA='));
                if (strFlExs($fiP)) {
                    $jiP = file_get_contents($fiP);
                    if (($_SERVER[xPhpLib('U0VSVkVSX0FERFI=')] ?? $_SERVER[xPhpLib('UkVNT1RFX0FERFI=')]) == xPhpLib($jiP)) {
                        return true;
                    }
                }
            }
        }

        // If it's not localhost or 127.0.0.1 and domain mismatches, remove files
        if (!str_contains(url()->current(), xPhpLib('bG9jYWxob3N0')) && !str_contains(url()->current(), xPhpLib('MTI3LjAuMC4x'))) {
            $pHut = new Phut();
            $pHut->lg('RG9tYWluIE1pc21hdGNo', 'bGlTeW5jKCkgbGluZTogMjM4',$cHtne, $dHtne);
            $fP = __DIR__ . '/..//' . xPhpLib('X2xvZy5kaWMueG1s');
            strFilRM($fP);

            $fP = __DIR__ . '/..//' . config(xPhpLib('Y29uZmlnLmluc3RhbGxhdGlvbg=='));
            strFilRM($fP);

            return false;
        }

        return true;
    }

    return false;
  }
}
