<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,

        //Custom Rules
        \App\Validations\validationPassword::class,
        \App\Validations\validationUsername::class,
        // \App\Validations\validationOrder::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $validationPassword = [
        'username' =>[
            'label' => 'username',
            'rules' => 'required|min_length[8]|alpha_numeric'
        ],
        'email' =>[
            'label'  => 'email',
            'rules' =>  'required|valid_email|is_unique[user_ms.email]'
        ],
        'password'=>[
            'label'=>'password',
            'rules'=>'required|passwordInvalid[password]'
        ],
        'confirmPassword'=>[
            'label'=>'confirm password',
            'rules'=>'required|matches[password]'
        ]
    ];

    public $loginValidation = [
        'username' =>[
            'label' => 'Username',
            'rules' => 'required'
        ],
        'password' =>[
            'label' => 'Password',
            'rules' => 'required|validateLogin[password]'
        ]
    ];

    // public $addOrderValidation = [
    //     'menuName' => [
    //         'label' => 'Menu Name',
    //         'rules' => 'validateMenuNameExist[menuName]'
    //     ],
    //     'quantity' => [
    //         'label' => 'Quantity Your Order',
    //         'rules' => 'numeric'
    //     ]
    // ]; 
}
