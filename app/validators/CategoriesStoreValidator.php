<?php namespace App\Validators;

use App\Validators\ParentValidator;

class CategoriesStoreValidator extends ParentValidator{

    protected $data;
    protected $errors;

    protected $rules = array(
            "name" => 'required|alpha_dash|min:3',
        );

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    // Validate
    public function validate()
    {
        if(!$this->validateRules()) return false;
        
        if(sizeof($this->errors)>0){
            return false;
        } 

        return true;
    }
    
}