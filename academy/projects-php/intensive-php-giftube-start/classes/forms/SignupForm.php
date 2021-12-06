<?php
namespace GifTube\forms;

class SignupForm extends BaseForm {

    protected $fields = ['email', 'password', 'name', 'avatar'];
    protected $rules = [
        ['required', ['email', 'password', 'name']],
        ['email', ['email']],
        ['unique', ['email']]
    ];

    public function __construct($data = false) {
        $this->name = 'signup';

        parent::__construct($data);
    }
}