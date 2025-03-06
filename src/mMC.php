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
    $this->info(xMailBIL('U3FsU3RyaW5naUZ5IGFzc2V0cyBmaWxlcyBwdWJsaXNoZWQgc3VjY2Vzc2Z1bGx5Lg=='));
  }
}
