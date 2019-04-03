<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Mapping\Annotations;

/**
 * Specifies a list of indexes for a document
 *
 * @Annotation
 */
final class Indexes
{
    /** @var mixed */
    public $value;
}
