<?php

namespace molio\Validation;

use Laracasts\Validation\FormValidator;

class FavoriteForm extends FormValidator
{
    protected $rules = [

        'name'    => 'required|min:2',
        'address' => 'required|min:5',
        'lat'     => 'required',
        'lng'     => 'required',

    ];
}
