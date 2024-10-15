<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Contact
{
    public function __construct(
        public ?string $name,
        public ?string $url,
        public ?string $email,
    ) {}
}