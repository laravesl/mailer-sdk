<?php

namespace Laravesl\MailerSdk\xMaiQR;

use Illuminate\Foundation\Http\FormRequest;

class xSailRV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $scSpat = [
            xMailBIL('YWRtaW4uZmlyc3RfbmFtZQ==') => 'required|max:255',
            xMailBIL('YWRtaW4ubGFzdF9uYW1l') => 'required', 'max:255',
            xMailBIL('YWRtaW4uZW1haWw=') => 'required', 'email', 'max:255',
            xMailBIL('YWRtaW4ucGFzc3dvcmQ=') => 'required', 'confirmed', 'min:8',
            xMailBIL('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u') => 'required',
        ];

        $strVeR = [
            xMailBIL('bGljZW5zZQ==') => 'required', 'regex:/^([a-f0-9]{8})-(([a-f0-9]{4})-){3}([a-f0-9]{12})$/i',
            xMailBIL('ZW52YXRvX3VzZXJuYW1l') => 'required'
        ];

        if (scSpatPkS()) {
            $strVeR = array_merge($strVeR, $scSpat);
        }

        return $strVeR;
    }

    public function attributes()
    {
        return [
            xMailBIL('YWRtaW4uZmlyc3RfbmFtZQ==') => xMailBIL('Zmlyc3QgbmFtZQ=='),
            xMailBIL('YWRtaW4ubGFzdF9uYW1l') => xMailBIL('bGFzdCBuYW1l'),
            xMailBIL('YWRtaW4uZW1haWw=') => xMailBIL('ZW1haWw='),
            xMailBIL('YWRtaW4ucGFzc3dvcmQ=') => xMailBIL('cGFzc3dvcmQ='),
            xMailBIL('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u') => xMailBIL('Y29uZmlybWF0aW9uIHBhc3N3b3Jk'),
            xMailBIL('bGljZW5zZQ==') => xMailBIL('bGljZW5zZQ=='),
            xMailBIL('ZW52YXRvX3VzZXJuYW1l') => xMailBIL('ZW52YXRvIHVzZXJuYW1l'),
        ];
    }

    public function messages()
    {
        return [
            xMailBIL('bGljZW5zZS5yZWdleA==') => xMailBIL('SW52YWxpZCBwdXJjaGFzZSBjb2Rl'),
        ];
    }
}
