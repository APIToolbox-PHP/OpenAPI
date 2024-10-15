<?php

namespace APIToolbox\OpenAPI\Spec;

enum ParameterIn: string
{
    case QUERY = 'query';
    case HEADER = 'header';
    case PATH = 'path';
    case COOKIE = 'cookie';
}