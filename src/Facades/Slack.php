<?php

namespace SlackMessage\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;
use SlackMessage\Models\BaseMessage as Slacker;
/**
 * @method static Slacker to(string $to)
 * @method static Collection send(string $to)
 */
class Slack extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Slacker::class;
    }
}
