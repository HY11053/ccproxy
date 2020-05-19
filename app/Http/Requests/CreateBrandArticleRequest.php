<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrandArticleRequest extends FormRequest
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
            'title'=>'required|max:100|min:5',
            'shorttitle'=>'max:20',
            'typeid'=>'required',
            //'tags'=>'required|max:20',
            'ismake'=>'required|numeric',
            //'published_at'=>'date',
            'mid'=>'numeric',
            'decorationpay'=>'numeric',
            'quartersrent'=>'numeric',
            'equipmentcost'=>'numeric',
            'workingcapital'=>'numeric',
            'laborquarter'=>'numeric',
            'miscellaneous'=>'numeric',
            'dailyvolume'=>'numeric',
            'unitprice'=>'numeric',
            'watercoal'=>'numeric',
            'body'=>'required',
            'image'=> 'mimes:jpeg,jpg,gif,bmp,png|image'
        ];
    }
}
