<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return [
            "prefixname" => "sometimes|in:Mr,Mrs,Ms",
            "firstname" => "required",
            "lastname" => "required",
            "username" => "required|unique:users,username",
            "email" => "required|unique:users,email",
            "password" => "required|min:4",
            "confirm_password" => "required|same:password",
            "photo" => "nullable|mimes:jpeg,png,jpg,gif,svg"
        ];
    }
}