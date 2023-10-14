<?php

namespace LaravelLiberu\Select\Exceptions;

use LaravelLiberu\Helpers\Exceptions\LiberuException;

class Query extends LiberuException
{
    public static function unknownSearchMode()
    {
        return new static(__('Unknown search mode provided in request'));
    }
}
