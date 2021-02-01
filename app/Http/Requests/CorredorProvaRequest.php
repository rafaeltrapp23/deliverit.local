<?php

namespace App\Http\Requests;

use App\Models\CorredorProva;
use App\Traits\ResponseTrait;
use App\Traits\UtilsTrait;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class CorredorProvaRequest extends FormRequest
{
    use UtilsTrait;
    use ResponseTrait;

    /**
     * personaliza a saida da mensagem de erro caso a validação falhe
     * @param \Illuminate\Contracts\Validation\Validator $validator
     */
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors  = $validator->errors();
        $invalid = $errors->all();
        $invalid = implode(', ',$invalid);
        throw new HttpResponseException($this->errorResponse($invalid,422,$errors));
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $method = $this->getMethod();
        if ($method == 'PATCH') {
            $id = $this->route('id');
            return CorredorProva::where('id', $id)->exists();
        }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules['corredor_id'] = 'required|exists:corredores,id';
        $rules['prova_id']    = 'required|exists:provas,id';

        return $rules;
    }

    public function treatsData($keys = null)
    {
        $data = parent::all();
        return $data;
    }
}
