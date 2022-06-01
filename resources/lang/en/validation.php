<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => "Il campo deve essere accettato.",
    'active_url'           => "Il campo non contiene un indirizzo email valido.",
    'after'                => "Il campo deve essere successivo a :date.",
    'after_or_equal'       => "Il campo deve essere successivo o uguale a :date.",
    'alpha'                => "Il campo può contenere solamente lettere.",
    'alpha_dash'           => "Il campo può contenere solamente lettere, numeri e trattini.",
    'alpha_num'            => "Il campo può contenere solamente lettere e numeri.",
    'array'                => "Il campo deve essere un array.",
    'before'               => "Il campo deve essere una data antecedente a :date.",
    'before_or_equal'      => "Il campo deve essere una data antecedente o uguale a :date.",
    'between'              => [
        'numeric' => "Il campo deve essere compreso tra :min e :max.",
        'file'    => "Il campo deve essere compreso tra :min e :max kilobytes.",
        'string'  => "Il campo deve essere compreso tra :min and :max caratteri.",
        'array'   => "Il campo deve essere compreso tra :min and :max elementi.",
    ],
    'boolean'              => "Il campo deve essere vero o falso.",
    'confirmed'            => "Il campo non corrisponde.",
    'date'                 => "Il campo non è una data valida.",
    'date_equals'          => "Il campo deve essere uguale a :date.",
    'date_format'          => "Il campo non corrisponde al formato :format.",
    'different'            => "Il campo e :other devono essere diversi.",
    'digits'               => "Il campo deve essere lungo :digits caratteri.",
    'digits_between'       => "Il campo deve essere compreso tra :min e :max caratteri.",
    'dimensions'           => "Le dimensioni immagine di Il campo non sono valide",
    'distinct'             => "Il campo contiene dei valori duplicati",
    'email'                => "Il campo deve essere un indirizzo email valido.",
    'exists'               => "L'elemento Il campo selezionato non è valido.",
    'file'                 => "Il campo deve essere un file.",
    'filled'               => "Il campo deve essere valorizzato.",
    'gt'                   => [
        'numeric' => "Il campo deve essere maggiore di :value.",
        'file'    => "Il campo deve essere più grande di :value kilobytes.",
        'string'  => "Il campo deve contenere più di :value caratteri.",
        'array'   => "Il campo deve contenere più di :value elementi.",
    ],
    'gte'                  => [
        'numeric' => "Il campo deve essere maggiore o uguale di :value.",
        'file'    => "Il campo deve essere maggiore o uguale a :value kilobytes.",
        'string'  => "Il campo deve contenere almeno :value caratteri.",
        'array'   => "Il campo deve contenere almeno :value elementi.",
    ],
    'image'                => "Il campo deve essere un'immagine.",
    'in'                   => "Il campo selezionato non è valido.",
    'in_array'             => "Il campo non esiste in :other.",
    'integer'              => "Il campo deve essere un intero.",
    'ip'                   => "Il campo deve essere un indirizzo IP valido.",
    'ipv4'                 => "Il campo deve essere un indirizzo IPv4 valido.",
    'ipv6'                 => "Il campo deve essere un indirizzo IPv6 valido.",
    'json'                 => "Il campo deve contenere una stringa JSON valida.",
    'lt'                   => [
        'numeric' => "Il campo deve essere inferiore a :value.",
        'file'    => "Il campo deve essere più piccolo di :value kilobytes.",
        'string'  => "Il campo deve contenere meno di :value caratteri.",
        'array'   => "Il campo deve contenere meno di :value elementi.",
    ],
    'lte'                  => [
        'numeric' => "Il campo deve essere inferiore o uguale a :value.",
        'file'    => "Il campo deve essere minore o uguale a :value kilobytes.",
        'string'  => "Il campo deve contenere non più di :value caratteri.",
        'array'   => "Il campo deve contenere non più di :value elementi.",
    ],
    'max'                  => [
        'numeric' => "Il campo non può essere superiore a :max.",
        'file'    => "Il campo non può essere più grande di :max kilobytes.",
        'string'  => "Il campo non può essere più lungo di :max caratteri.",
        'array'   => "Il campo non può contenere più di :max elementi.",
    ],
    'mimes'                => "Il campo deve contenere un file di tipo: :values.",
    'mimetypes'            => "Il campo deve contenere un file di tipo: :values.",
    'min'                  => [
        'numeric' => "Il campo deve essere almeno :min.",
        'file'    => "Il campo deve essere almeno :min kilobyte.",
        'string'  => "Il campo deve avere almeno :min caratteri.",
        'array'   => "Il campo deve avere almeno :min elementi.",
    ],
    'not_in'               => "Il campo selezionato non è valido.",
    'not_regex'            => "Il formato di Il campo non è valido.",
    'numeric'              => "Il campo deve essere un numero.",
    'present'              => "Il campo deve essere presente.",
    'regex'                => "Il formato di Il campo non è valido.",
    'required'             => "Il campo è richiesto.",
    'required_if'          => "Il campo è richiesto quando :other è :value.",
    'required_unless'      => "Il campo è richiesto salvo che :other sia in :values.",
    'required_with'        => "Il campo è richiesto quando :values è presente.",
    'required_with_all'    => "Il campo è richiesto quando sono presenti :values.",
    'required_without'     => "Il campo è richiesto quando :values non è presente.",
    'required_without_all' => "Il campo è richiesto quanto nessuno di :values è presente.",
    'same'                 => "Il campo e :other devono corrispondere.",
    'size'                 => [
        'numeric' => "Il campo deve essere :size.",
        'file'    => "Il campo deve essere :size kilobytes.",
        'string'  => "Il campo deve essere di :size caratteri.",
        'array'   => "Il campo deve contenere :size elementi.",
    ],
    'starts_with'          => "Il campo deve cominciare con uno dei seguenti valori: :values",
    'string'               => "Il campo deve essere una stringa.",
    'timezone'             => "Il campo deve essere una zona valida.",
    'unique'               => "Il campo è già in uso.",
    'uploaded'             => "L'upload di Il campo è fallito",
    'url'                  => "Il formato di Il campo non è valido.",
    'uuid'                 => "Il campo deve essere un UUID valido.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => "custom-message",
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

// INGLESE ------------------------
// <?php

// return [

//     /*
//     |--------------------------------------------------------------------------
//     | Validation Language Lines
//     |--------------------------------------------------------------------------
//     |
//     | The following language lines contain the default error messages used by
//     | the validator class. Some of these rules have multiple versions such
//     | as the size rules. Feel free to tweak each of these messages here.
//     |
//     */

//     'accepted' => 'The :attribute must be accepted.',
//     'active_url' => 'The :attribute is not a valid URL.',
//     'after' => 'The :attribute must be a date after :date.',
//     'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
//     'alpha' => 'The :attribute may only contain letters.',
//     'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
//     'alpha_num' => 'The :attribute may only contain letters and numbers.',
//     'array' => 'The :attribute must be an array.',
//     'before' => 'The :attribute must be a date before :date.',
//     'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
//     'between' => [
//         'numeric' => 'The :attribute must be between :min and :max.',
//         'file' => 'The :attribute must be between :min and :max kilobytes.',
//         'string' => 'The :attribute must be between :min and :max characters.',
//         'array' => 'The :attribute must have between :min and :max items.',
//     ],
//     'boolean' => 'The :attribute field must be true or false.',
//     'confirmed' => 'The :attribute confirmation does not match.',
//     'date' => 'The :attribute is not a valid date.',
//     'date_equals' => 'The :attribute must be a date equal to :date.',
//     'date_format' => 'The :attribute does not match the format :format.',
//     'different' => 'The :attribute and :other must be different.',
//     'digits' => 'The :attribute must be :digits digits.',
//     'digits_between' => 'The :attribute must be between :min and :max digits.',
//     'dimensions' => 'The :attribute has invalid image dimensions.',
//     'distinct' => 'The :attribute field has a duplicate value.',
//     'email' => 'The :attribute must be a valid email address.',
//     'ends_with' => 'The :attribute must end with one of the following: :values.',
//     'exists' => 'The selected :attribute is invalid.',
//     'file' => 'The :attribute must be a file.',
//     'filled' => 'The :attribute field must have a value.',
//     'gt' => [
//         'numeric' => 'The :attribute must be greater than :value.',
//         'file' => 'The :attribute must be greater than :value kilobytes.',
//         'string' => 'The :attribute must be greater than :value characters.',
//         'array' => 'The :attribute must have more than :value items.',
//     ],
//     'gte' => [
//         'numeric' => 'The :attribute must be greater than or equal :value.',
//         'file' => 'The :attribute must be greater than or equal :value kilobytes.',
//         'string' => 'The :attribute must be greater than or equal :value characters.',
//         'array' => 'The :attribute must have :value items or more.',
//     ],
//     'image' => 'The :attribute must be an image.',
//     'in' => 'The selected :attribute is invalid.',
//     'in_array' => 'The :attribute field does not exist in :other.',
//     'integer' => 'The :attribute must be an integer.',
//     'ip' => 'The :attribute must be a valid IP address.',
//     'ipv4' => 'The :attribute must be a valid IPv4 address.',
//     'ipv6' => 'The :attribute must be a valid IPv6 address.',
//     'json' => 'The :attribute must be a valid JSON string.',
//     'lt' => [
//         'numeric' => 'The :attribute must be less than :value.',
//         'file' => 'The :attribute must be less than :value kilobytes.',
//         'string' => 'The :attribute must be less than :value characters.',
//         'array' => 'The :attribute must have less than :value items.',
//     ],
//     'lte' => [
//         'numeric' => 'The :attribute must be less than or equal :value.',
//         'file' => 'The :attribute must be less than or equal :value kilobytes.',
//         'string' => 'The :attribute must be less than or equal :value characters.',
//         'array' => 'The :attribute must not have more than :value items.',
//     ],
//     'max' => [
//         'numeric' => 'The :attribute may not be greater than :max.',
//         'file' => 'The :attribute may not be greater than :max kilobytes.',
//         'string' => 'The :attribute may not be greater than :max characters.',
//         'array' => 'The :attribute may not have more than :max items.',
//     ],
//     'mimes' => 'The :attribute must be a file of type: :values.',
//     'mimetypes' => 'The :attribute must be a file of type: :values.',
//     'min' => [
//         'numeric' => 'The :attribute must be at least :min.',
//         'file' => 'The :attribute must be at least :min kilobytes.',
//         'string' => 'The :attribute must be at least :min characters.',
//         'array' => 'The :attribute must have at least :min items.',
//     ],
//     'not_in' => 'The selected :attribute is invalid.',
//     'not_regex' => 'The :attribute format is invalid.',
//     'numeric' => 'The :attribute must be a number.',
//     'password' => 'The password is incorrect.',
//     'present' => 'The :attribute field must be present.',
//     'regex' => 'The :attribute format is invalid.',
//     'required' => 'The :attribute field is required.',
//     'required_if' => 'The :attribute field is required when :other is :value.',
//     'required_unless' => 'The :attribute field is required unless :other is in :values.',
//     'required_with' => 'The :attribute field is required when :values is present.',
//     'required_with_all' => 'The :attribute field is required when :values are present.',
//     'required_without' => 'The :attribute field is required when :values is not present.',
//     'required_without_all' => 'The :attribute field is required when none of :values are present.',
//     'same' => 'The :attribute and :other must match.',
//     'size' => [
//         'numeric' => 'The :attribute must be :size.',
//         'file' => 'The :attribute must be :size kilobytes.',
//         'string' => 'The :attribute must be :size characters.',
//         'array' => 'The :attribute must contain :size items.',
//     ],
//     'starts_with' => 'The :attribute must start with one of the following: :values.',
//     'string' => 'The :attribute must be a string.',
//     'timezone' => 'The :attribute must be a valid zone.',
//     'unique' => 'The :attribute has already been taken.',
//     'uploaded' => 'The :attribute failed to upload.',
//     'url' => 'The :attribute format is invalid.',
//     'uuid' => 'The :attribute must be a valid UUID.',

//     /*
//     |--------------------------------------------------------------------------
//     | Custom Validation Language Lines
//     |--------------------------------------------------------------------------
//     |
//     | Here you may specify custom validation messages for attributes using the
//     | convention "attribute.rule" to name the lines. This makes it quick to
//     | specify a specific custom language line for a given attribute rule.
//     |
//     */

//     'custom' => [
//         'attribute-name' => [
//             'rule-name' => 'custom-message',
//         ],
//     ],

//     /*
//     |--------------------------------------------------------------------------
//     | Custom Validation Attributes
//     |--------------------------------------------------------------------------
//     |
//     | The following language lines are used to swap our attribute placeholder
//     | with something more reader friendly such as "E-Mail Address" instead
//     | of "email". This simply helps us make our message more expressive.
//     |
//     */

//     'attributes' => [],

// ];