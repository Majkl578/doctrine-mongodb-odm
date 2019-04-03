<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Mapping\Annotations;

/**
 * Specifies the change tracking policy for a document
 *
 * @Annotation
 */
final class ChangeTrackingPolicy
{
    /** @var string */
    public $value;
}
