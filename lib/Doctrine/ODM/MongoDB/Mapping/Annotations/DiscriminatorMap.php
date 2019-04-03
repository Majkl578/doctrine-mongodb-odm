<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Mapping\Annotations;

/**
 * Specify a map of discriminator values and classes
 *
 * @Annotation
 */
final class DiscriminatorMap
{
    /** @var string[] */
    public $value;
}
