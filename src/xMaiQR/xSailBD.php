<?php

namespace Laravesl\MailerSdk\xMaiQR;

use Illuminate\Foundation\Http\FormRequest;

class xSailBD extends FormRequest
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
        $stConDb = [];
        $scDot = [
            xMailBIL('ZGF0YWJhc2UuREJfSE9TVA==') => 'required', 'max:255', 'regex:/^\S*$/u',
            xMailBIL('ZGF0YWJhc2UuREJfUE9SVA==') => 'required', 'regex:/^\S*$/u', 'max:10',
            xMailBIL('ZGF0YWJhc2UuREJfVVNFUk5BTUU=') => 'required', 'regex:/^\S*$/u', 'max:255',
            xMailBIL('ZGF0YWJhc2UuREJfREFUQUJBU0U=') => 'required', 'regex:/^\S*$/u', 'max:255',
        ];

        $scSpat = [
            xMailBIL('YWRtaW4uZmlyc3RfbmFtZQ==') => 'required', 'max:255',
            xMailBIL('YWRtaW4ubGFzdF9uYW1l') => 'required', 'max:255',
            xMailBIL('YWRtaW4uZW1haWw=') => 'required', 'email', 'max:255',
            xMailBIL('YWRtaW4ucGFzc3dvcmQ=') => 'required', 'min:8',
            xMailBIL('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u') => 'required', 'confirmed', 'min:8',
        ];

        if (scDotPkS()) {
            $stConDb = array_merge($stConDb, $scDot);
        }

        if (scSpatPkS() && !$this->has(xMailBIL('aXNfaW1wb3J0X2RhdGE='))) {
            $stConDb = array_merge($stConDb, $scSpat);
        }

        return $stConDb;
    }

    public function attributes()
    {
        return [
            xMailBIL('ZGF0YWJhc2UuREJfSE9TVA==') => xMailBIL('aG9zdA=='),
            xMailBIL('ZGF0YWJhc2UuREJfUE9SVA==') => xMailBIL('cG9ydA=='),
            xMailBIL('ZGF0YWJhc2UuREJfVVNFUk5BTUU=') => xMailBIL('ZGF0YWJhc2UgdXNlcm5hbWU='),
            xMailBIL('ZGF0YWJhc2UuREJfUEFTU1dPUkQ=') => xMailBIL('ZGF0YWJhc2UgcGFzc3dvcmQ='),
            xMailBIL('ZGF0YWJhc2UuREJfREFUQUJBU0U=') => xMailBIL('ZGF0YWJhc2UgbmFtZQ=='),
            xMailBIL('YWRtaW4uZmlyc3RfbmFtZQ==') => xMailBIL('Zmlyc3QgbmFtZQ=='),
            xMailBIL('YWRtaW4ubGFzdF9uYW1l') => xMailBIL('bGFzdCBuYW1l'),
            xMailBIL('YWRtaW4uZW1haWw=') => xMailBIL('ZW1haWw='),
            xMailBIL('YWRtaW4ucGFzc3dvcmQ=') => xMailBIL('cGFzc3dvcmQ='),
            xMailBIL('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u') =>  xMailBIL('cGFzc3dvcmQgY29uZmlybWF0aW9uIA==')
        ];
    }

    public function messages()
    {
        return [
            xMailBIL('ZGF0YWJhc2UuREJfSE9TVC5yZWdleA==') => xMailBIL('VGhlcmUgc2hvdWxkIGJlIG5vIHdoaXRlc3BhY2UgaW4gaG9zdCBuYW1l'),
            xMailBIL('ZGF0YWJhc2UuREJfUE9SVC5yZWdleA==') => xMailBIL('VGhlcmUgc2hvdWxkIGJlIG5vIHdoaXRlc3BhY2UgaW4gcG9ydCBudW1iZXI='),
            xMailBIL('ZGF0YWJhc2UuREJfVVNFUk5BTUUucmVnZXg=') => xMailBIL('VGhlcmUgc2hvdWxkIGJlIG5vIHdoaXRlc3BhY2UgaW4gdXNlcm5hbWU='),
            xMailBIL('ZGF0YWJhc2UuREJfREFUQUJBU0UucmVnZXg=') => xMailBIL('VGhlcmUgc2hvdWxkIGJlIG5vIHdoaXRlc3BhY2UgaW4gZGF0YWJhc2UgbmFtZQ=='),
        ];
    }
}
