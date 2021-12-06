<?php
namespace GifTube\forms;

class BaseForm {

    protected $name;
    protected $isValid = null;
    protected $errors  = [];

    protected $tableName;

    protected $fields = [];
    protected $rules  = [];

    protected $formData = [];

    public function __construct($data = false) {
        $this->fillFormData();
    }

    public function __get($name) {
        $result = null;

        if (isset($this->formData[$name])) {
            $result = $this->formData[$name];
        }

        return $result;
    }

    public function validate() {
        foreach ($this->rules as $rule) {
            list($rulename, $fields) = $rule;

            switch ($rulename) {
                case 'required':
                    $this->runRequiredValidator($fields);
                    break;
                case 'email':
                    $this->runEmailValidator($fields);
                    break;
            }
        }
    }

    public function isSubmitted() {
        return isset($_POST[$this->name]);
    }

    public function isValid() {
        return count($this->errors) == 0;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function getData() {
        return $this->formData;
    }

    protected function runRequiredValidator($fields) {
        $result = true;

        foreach ($fields as $key => $value) {
            if (!$this->formData[$value]) {
                $result = false;

                $this->errors[] = [$value => "Это поле должно быть заполнено"];
            }
        }

        return $result;
    }

    protected function runEmailValidator($fields) {
        $result = true;

        foreach ($fields as $value) {
            $field = $this->formData[$value];

            if (!filter_var($field, FILTER_VALIDATE_EMAIL)) {
                $result = false;

                $this->errors[] = [$value => "Введите корректный email"];
            }
        }

        return $result;
    }

    private function fillFormData($data = false) {
        if (!$this->isSubmitted()) {
            return;
        }

        $fillData = $data ?: $_POST[$this->name];

        foreach ($this->fields as $field) {
            $this->formData[$field] = array_key_exists($field, $fillData) ? $fillData[$field] : null;
        }
    }
}