<?php
namespace app\TodoModule\FormPrototype;


use framework\core\Forms\FormBuilder;
use framework\core\Forms\FormBuilderInterface;

class TaskForm implements FormBuilderInterface
{

    public function buildFormPrototype(FormBuilder $builder)
    {
        $builder
            ->addInput('description', 'text', 'Description', array(
                'required' => true,
            ))
        ;
        
        return $builder;
    }
}
        