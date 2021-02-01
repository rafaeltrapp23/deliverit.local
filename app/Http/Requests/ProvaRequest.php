<?php

namespace App\Http\Requests;

use App\Models\Prova;
use App\Traits\ResponseTrait;
use App\Traits\UtilsTrait;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class ProvaRequest extends FormRequest
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
            return Prova::where('id', $id)->exists();
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
        $tipo_prova_id = $this->tipo_prova_id;
        $data_prova = $this->data_prova;

        $rules['data_prova']    = 'required|dateformat:d/m/Y';
        $rules['tipo_prova_id'] = ['required', 'exists:tipo_provas,id',
            Rule::unique('provas')->where(function ($query) use ($tipo_prova_id, $data_prova) {
                return $query->where('tipo_prova_id', $tipo_prova_id)
                    ->where('data_prova',  Carbon::createFromFormat('d/m/Y', $data_prova)->toDateString());
            })];
        return $rules;
    }

    public function messages()
    {
        return [
            '*.unique'  => 'O campo :attribute já foi cadastrado para essa data.',
        ];
    }

    public function treatsData($keys = null)
    {
        $data = parent::all();
        $data['data_prova'] = Carbon::createFromFormat('d/m/Y', $data['data_prova'])->toDateTimeString();

        return $data;
    }
}
