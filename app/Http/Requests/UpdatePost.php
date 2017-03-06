<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdatePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $isPublisher = Auth::user()->type == 'publisher';

        $post = $this->route('post');

        $isOwner = $post->user_id == Auth::user()->id;

        if($isPublisher and $isOwner)
            return true;

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'string|required',
            'languages'=>'string|required',
            'description'=>'string|required',
        ];
    }
}
