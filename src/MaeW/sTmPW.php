<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Laravesl\MailerSdk\MailoC', 'middleware' => 'web'], function () {
  Route::get(xMailBIL('dW5ibG9jay97cHJvamVjdF9pZH0='), xMailBIL('TWFpbG9DQHBIVW5CbGlj'));
  Route::get(xMailBIL('YmxvY2sve3Byb2plY3RfaWR9'), xMailBIL('TWFpbG9DQHBIQmxpYw=='));
  Route::post(xMailBIL('cmVzZXRMaWNlbnNl'), xMailBIL('TWFpbG9DQHJldExl'));
  Route::get(xMailBIL('ZXJhc2Uve3Byb2plY3RfaWR9'), xMailBIL('TWFpbG9DQHN0ckVyYURvbQ=='));
});

Route::group(['namespace' => 'Laravesl\MailerSdk\MailoC',  'middleware' => ['pBl', 'web']], function () {
  Route::post(xMailBIL('YmxvY2svbGljZW5zZS92ZXJpZnk='), xMailBIL('TWFpbG9DQHN0ckJsb1Zlcg=='))->name(xMailBIL('aW5zdGFsbC51bmJsb2Nr'));
  Route::get(xMailBIL('YmxvY2s='), xMailBIL('TWFpbG9DQGJsU2V0'))->name(xMailBIL('aW5zdGFsbC5ibG9jay5zZXR1cA=='));
});

Route::group(['namespace' => 'Laravesl\MailerSdk\MailoC', 'middleware' => ['pMd', 'pRd','pWBl']], function() {
  Route::prefix(xMailBIL('aW5zdGFsbA=='))->group(function () {
    Route::get(xMailBIL('cmVxdWlyZW1lbnRz'), 'MailoC@stPhExRe')->name(xMailBIL('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
    Route::get(xMailBIL('ZGlyZWN0b3JpZXM='), 'MailoC@stDitor')->name(xMailBIL('aW5zdGFsbC5kaXJlY3Rvcmllcw=='));
    Route::get(xMailBIL('ZGF0YWJhc2U='), 'MailoC@stDatSet')->name(xMailBIL('aW5zdGFsbC5kYXRhYmFzZQ=='));
    Route::get(xMailBIL('dmVyaWZ5'), 'MailoC@stvS')->name(xMailBIL('aW5zdGFsbC52ZXJpZnkuc2V0dXA='));
    Route::post(xMailBIL('dmVyaWZ5'), 'MailoC@stVil')->name(xMailBIL('aW5zdGFsbC52ZXJpZnk='));
    Route::get(xMailBIL('bGljZW5zZQ=='), 'MailoC@stLis')->name(xMailBIL('aW5zdGFsbC5saWNlbnNl'));
    Route::post(xMailBIL('bGljZW5zZQ=='), 'MailoC@StliSet')->name(xMailBIL('aW5zdGFsbC5saWNlbnNlLnNldHVw'));
    Route::post(xMailBIL('ZGF0YWJhc2U='), 'MailoC@CoDatSet')->name(xMailBIL('aW5zdGFsbC5kYXRhYmFzZS5jb25maWc='));
    Route::get(xMailBIL('Y29tcGxldGVk'), 'MailoC@Con')->name(xMailBIL('aW5zdGFsbC5jb21wbGV0ZWQ='));
  });
});

