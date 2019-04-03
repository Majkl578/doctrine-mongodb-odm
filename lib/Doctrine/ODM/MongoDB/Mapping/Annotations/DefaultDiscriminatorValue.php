<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Mapping\Annotations;

/**
 * Specifies a default discriminator value to be used when the discriminator
 * field is not set in a document
 *
 * @Annotation
 */
final class DefaultDiscriminatorValue
{
    /** @var string|null */
    public $value;
}
