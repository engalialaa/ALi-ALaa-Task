<?php

namespace Modules\TaskModule\Http\Requests;

use App\Rules\ValidEmail;
use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        if($this->method() == 'POST')
        {
            return [
                'title'=>'required|string|min:3',
                'desc'=>'required|string|min:3',
            ];
        }

        return [
            'title'=>'required|string|min:3',
            'desc'=>'required|string|min:3',
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
