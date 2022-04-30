<?php


namespace App\Forms;

use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class TodoForm extends Form
{
    public function buildForm()
    {
       
        $this->add('name', Field::TEXT, [
            'rules' => 'required|string|max:255',
            'label' => 'Название',
        ])->add('description', Field::TEXT, [
            'rules' => 'required|string|max:255',
            'label' => 'Описание',
        ])->add('time', Field::NUMBER, [
            'rules' => 'required|numeric|between:0,99999999',
            'label' => 'Время',
        ])->add('submit', 'submit', ['label' => 'Сохранить']);
    }
}
