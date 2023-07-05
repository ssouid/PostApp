<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */

     public function rules(): array
     { 
         $isPaidEum=['1','0','true','false','on','off'];
 
         return [
 
             'title'        =>  ['required', 'string', 'min:5', 'max:240'],
             'cover image'  =>  ['nullable', 'file', 'mimes:png,jpg,gif', 'max:1000'],
             'description'  =>  ['required', 'string', 'min:10'],
             'is paid'      =>  ['nullable', 'in:'.implode(',',$isPaidEum)],
             'price'        =>  ['nullable', 'required_if:is_paid,1,on.true', 'numeric', 'min:0'],
             'start_at'     =>  ['required', 'date', 'after_or_equal:today'],
             'end_at'       =>  ['required', 'date', 'after:start_at'],
             'category_id'  =>  ['required', 'exists:categories,id'],
             'status'       =>  ['required', 'in:approved,pending,rejected'],
             'user_id'  =>  ['required', 'exists:user_id,id'],
 
         ];
     }
 
}
