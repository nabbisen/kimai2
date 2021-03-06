<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Event;

use App\Entity\Activity;
use Symfony\Component\EventDispatcher\Event;

/**
 * This event can be used, to dynamically add meta fields to activities
 */
final class ActivityMetaDefinitionEvent extends Event
{
    /**
     * @var Activity
     */
    protected $entity;

    public function __construct(Activity $entity)
    {
        $this->entity = $entity;
    }

    public function getEntity(): Activity
    {
        return $this->entity;
    }
}
