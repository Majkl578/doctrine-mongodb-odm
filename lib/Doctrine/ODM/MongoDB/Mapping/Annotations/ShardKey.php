<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Mapping\Annotations;

/** @Annotation */
final class ShardKey
{
    /** @var string[] */
    public $keys = [];

    /** @var bool|null */
    public $unique;

    /** @var int|null */
    public $numInitialChunks;
}
