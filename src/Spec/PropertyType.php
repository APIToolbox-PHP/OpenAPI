<?php

namespace APIToolbox\OpenAPI\Spec;

enum PropertyType: string
{
    case ARRAY = 'array';
    case BOOLEAN = 'boolean';
    case INTEGER = 'integer';
    case NUMBER = 'number';
    case OBJECT = 'object';
    case STRING = 'string';
}