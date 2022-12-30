<?php

namespace App\Http\Requests;

use App\Models\SubSubCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSubSubCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sub_sub_category_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'min:3',
                'required',
            ],
            'sub_category_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
