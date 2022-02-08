<?php

namespace Dniccum\NovaWebhooks\Contracts;

use Dniccum\NovaWebhooks\Enums\ModelEvents;

class WebhookModel
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $actions = [];

    /**
     * @param string $name
     * @param string[] $actions
     */
    public function __construct(string $name, $actions = [])
    {
        $this->name = $name;
        $this->actions = $actions;
    }

    /**
     * @param string $action
     * @return void
     */
    public function addAction(string $action) : void
    {
        if (ModelEvents::hasValue($action) && !in_array($action, $this->actions)) {
            array_push($this->actions, $action);
        }
    }
}
