<?php

namespace App\Http\Requests;

use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => ['required', 'max:255'],
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,svg'],
            'period_id' => ['required', 'integer'],
            'position_id' => ['required', 'integer'],
            'division_id' => ['required', 'integer'],
        ];

        if ($this->isMethod('PUT')) {
            $rules['image'] = ['nullable', 'image', 'mimes:jpeg,png,jpg,svg'];
        }

        return $rules;
    }

    // protected function withValidator(Validator $validator)
    // {
    //     $validator->after(function ($validator) {
    //         $positionId = $this->input('position_id');
    //         $divisionId = $this->input('division_id');

    //         if ($positionId >= 1 && $positionId <= 9 && $divisionId != 8) {
    //             $validator->errors()->add('division_id', 'Pilihan divisi tidak valid. Jika jabatan adalah presidium maka harus memilih divisi Non Deputi');
    //         } else if ($positionId >= 10 && $positionId <= 12  && $divisionId == 8) {
    //             $validator->errors()->add('division_id', 'Pilihan divisi tidak valid. Jika jabatan adalah Koordinator, Staf, atau Anggota maka harus memilih divisi Deputi');
    //         }
    //     });
    // }
}
