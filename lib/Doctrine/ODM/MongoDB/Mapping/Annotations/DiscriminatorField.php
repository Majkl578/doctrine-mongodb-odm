<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Mapping\Annotations;

/**
 * Specify a field name to store a discriminator value
 *
 * @Annotation
 */
final class DiscriminatorField
{
    /** @var array|string|null */
    public $value;
}
