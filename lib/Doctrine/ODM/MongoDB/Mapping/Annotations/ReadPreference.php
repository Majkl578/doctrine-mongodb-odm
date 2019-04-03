<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Mapping\Annotations;

/**
 * @Annotation
 */
final class ReadPreference
{
    /** @var string|null */
    public $value;

    /** @var string[][]|null */
    public $tags;
}
