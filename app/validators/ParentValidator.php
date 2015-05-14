<?php namespace App\Validators;

use Validator;

abstract class ParentValidator extends \Eloquent{

	protected $data;
	protected $rules;

	protected $errors = array();

    public function errors(){
        return array($this->errors);
    }

    public function validateRules(){
        // Make a new validator object
        $validatior = Validator::make($this->data, $this->rules);

        if ($validatior->fails()) {

            $this->errors = $validatior->messages();
            return false;
        }
        return true;
    }

    public abstract function validate();
} 