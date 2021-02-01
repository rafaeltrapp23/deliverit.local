<?php

namespace App\Http\Requests;

use App\Models\Corredor;
use App\Traits\ResponseTrait;
use App\Traits\UtilsTrait;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Factory as ValidationFactory;

class CorredorRequest extends FormRequest
{
    use UtilsTrait;
    use ResponseTrait;

    public function __construct(ValidationFactory $validationFactory)
    {
        $validationFactory->extend('maiorIdade', function ($attribute, $value, $parameters) {
            $value = Carbon::createFromFormat('d/m/Y', $value)->toDateTimeString();
            $minAge = (!empty($parameters)) ? (int)$parameters[0] : 18;
            return Carbon::now()->diff($value)->y >= $minAge;
        });
    }

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
            return Corredor::where('id', $id)->exists();
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
        $method = $this->getMethod();
        if ($method == 'POST') {
            $rules['cpf']         = 'required|cpf|unique:corredores,cpf,NULL,id';
        }
        if ($method == 'PATCH') {
            $rules['cpf']         = 'required|cpf|unique:corredores,cpf,' . $this->id . ',id';
        }
        $rules['nome']            = 'required|min:3';
        $rules['data_nascimento'] = 'required|dateformat:d/m/Y|maiorIdade:18';
        return $rules;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'cpf' => $this->onlyNumbers($this->cpf),
        ]);
    }

    public function messages()
    {
        return [
            '*.maior_idade' => 'A idade do corredor deve ser maior ou igual a 18 anos.',
            '*.dateformat'  => 'O campo :attribute não esta em um formato válido.',
        ];
    }

    public function treatsData($keys = null)
    {
        $data = parent::all();
        $data['cpf'] = $this->onlyNumbers($data['cpf']);
        $data['data_nascimento'] = Carbon::createFromFormat('d/m/Y', $data['data_nascimento'])->toDateTimeString();

        return $data;
    }
}
