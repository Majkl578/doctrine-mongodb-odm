<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Mapping\Annotations;

/**
 * Use the specified discriminator for this class
 *
 * @Annotation
 */
final class DiscriminatorValue
{
    /** @var string */
    public $value;
}
