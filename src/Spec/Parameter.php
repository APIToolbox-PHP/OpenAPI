<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Parameter
{
    public function __construct(
        public string $name,
        public ParameterIn $in,
        public ?string $description = null,
        public bool $required = false,
        public bool $deprecated = false,
        public bool $allowEmptyValues = false,
        public ?Schema $schema = null,
    ) {}
}