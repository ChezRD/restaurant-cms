<?php

namespace Restaurant\Http\Requests;

use Restaurant\Http\Requests\Request;

class InfoRequest extends Request
{
    // @var array
    protected $rules = [
        'name' => 'required|between:2,200|basicText',
        'street' => 'required|between:5,300|basicText',
        'city' => 'required|between:2,100|basicText',
        'state' => 'required|between:2,100|basicText',
        'zip' => 'required|between:2,15|basicText',
        'phoneOne' => 'required|between:7,50|basicText',
        'phoneTwo' => 'between:7,50|basicText',
    ];
}
