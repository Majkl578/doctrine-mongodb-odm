<?php

declare(strict_types=1);

namespace Doctrine\ODM\MongoDB\Mapping\Annotations;

/**
 * Loads data from a different field if the original field is not set
 *
 * @Annotation
 */
final class AlsoLoad
{
    /** @var string */
    public $name;
}
