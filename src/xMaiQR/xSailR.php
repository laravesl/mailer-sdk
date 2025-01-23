<?php

namespace Laravesl\MailerSdk\xMaiQR;

use Illuminate\Foundation\Http\FormRequest;

class xSailR extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            xMailBIL('ZW52YXRvX3VzZXJuYW1l') => 'required',
            xMailBIL('bGljZW5zZQ==') => 'required|regex:/^([a-f0-9]{8})-(([a-f0-9]{4})-){3}([a-f0-9]{12})$/i',
        ];
    }

    public function attributes()
    {
        return [
            xMailBIL('ZW52YXRvX3VzZXJuYW1l') => xMailBIL('RW52YXRvIFVzZXJuYW1l'),
            xMailBIL('bGljZW5zZQ==') => xMailBIL('TGljZW5zZQ=='),
        ];
    }

    public function messages()
    {
        return [
            xMailBIL('bGljZW5zZS5yZWdleA==') => xMailBIL('SW52YWxpZCBwdXJjaGFzZSBjb2Rl'),
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
