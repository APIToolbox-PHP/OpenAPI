<?php

namespace APIToolbox\OpenAPI\Spec;

final readonly class Info
{
    public function __construct(
        public string $title,
        public string $version,
        public ?string $description = null,
        public ?string $termsOfService = null,
        public ?Contact $contact = null,
        public ?License $license = null,
    ) {}
}