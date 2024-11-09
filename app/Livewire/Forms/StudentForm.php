<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class StudentForm extends Form
{
    #[Validate]
    public $name;

    #[Validate]
    public $email;

    #[Validate]
    public $class_id;

    #[Validate]
    public $section_id;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'class_id' => 'required|integer',
            'section_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'class_id.required' => 'The class field is required',
            'section_id.required' => 'A section field is required',
        ];
    }

}