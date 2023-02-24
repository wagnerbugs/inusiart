<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $product = $this->product ?? '';

        return [
            'category_id' => 'required',
            'product' => "required|max:255|min:5|unique:products,product,{$product},product",
            'image' => 'nullable|image|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'É necessário escolher uma categoria.',
            'product.required' => 'O campo Nome do produto é requerido.',
            'product.max' => 'O campo Nome do produto pode conter até 255 caracteres.',
            'product.min' => 'O campo Nome do produto pode conter no mínimo 5 caracteres.',
            'product.unique' => 'O campo Nome do produto deve ser único.',
            'image.image' => 'O arquivo deve ter um formato de imagem válido (jpg, jpeg, png, bmp, gif, svg, ou webp).',
            'image.max' => 'O arquivo deve ter tamanho de máximo 2 MB.',
        ];
    }
}
