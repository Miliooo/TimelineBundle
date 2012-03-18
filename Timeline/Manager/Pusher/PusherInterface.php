<?php

namespace Highco\TimelineBundle\Timeline\Manager\Pusher;

use Highco\TimelineBundle\Model\TimelineAction;

/**
 * How to make a pusher
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
interface PusherInterface
{
    /**
     * @param TimelineAction $timelineAction
     *
     * @return boolean
     */
    function push(TimelineAction $timelineAction);
}
