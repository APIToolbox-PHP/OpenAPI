<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Schema
{
    // TODO: Confirm defaults.
    public function __construct(
        public ?string $title = null,

        public ?string $type = null,

        public ?int $multipleOf = null,

        public ?int $maximum = null,

        // TODO: This should be false.
        public bool $exclusiveMaximum = false,

        public ?int $minimum = null,

        public ?bool $exclusiveMinimum = false,

        public ?int $maxLength = null,

        public ?int $minLength = null,

        public ?string $pattern = null,

        public ?int $maxItems = null,

        public ?int $minItems = null,

        public ?bool $uniqueItems = false,

        public ?int $maxProperties = null,

        public ?int $minProperties = null,

        /** @var array<int,string> $required */
        public array $required = [],

        /** @var array<int,mixed> $enum */
        public array $enum = [],

        /** @var array<string,Schema> $properties */
        public array $properties = [],

        public bool $nullable = false,

        public ?bool $readOnly = false,

        public ?bool $writeOnly = false,

        public ?bool $deprecated = false,
    ) {}
}