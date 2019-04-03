<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Mapping\Annotations;

/**
 * Specifies which inheritance type to use for a document
 *
 * @Annotation
 */
final class InheritanceType
{
    /** @var string */
    public $value;
}
