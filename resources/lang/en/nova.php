<?php

return [
    'available_actions' => 'Available Actions',
    'failed_calls' => 'Failed Calls',
    'available_actions_help' => 'The events and/or actions that this webhook will queue it\'s payload to the desired endpoint.' ,
    'name' => 'Name',
    'name_help' => 'Provide a helpful name/label for the webhook you are about to create; like the site and/or application that will consume it.',
    'name_placeholder' => 'A helpful title',
    'last_modified_by' => 'Last Modified By',
    'no_actions_available' => 'You currently do not have any actions available. Please add the necessary traits to your application\'s models to select actions for this webhook.',
    'no_models_available' => 'You do not have any records available to test the requested ":model" model. Please either select a different test or add a record.',
    'resource_validation_error' => 'Please provide either a valid array or an instance of a JsonResource.',
    'secret' => 'Secret',
    'secret_help' => 'If necessary provide a secret that will be used to validate this hook. If not, one will be generated for you during creation.',
    'select_hook_to_test' => 'Select a webhook to test',
    'settings' => 'Settings',
    'successful_calls' => 'Successful Calls',
    'test' => 'Test',
    'test_webhook' => 'Send a Test',
    'url' => 'Url',
    'url_help' => 'The url or "recipient" of the webhook when it is dispatched by this application.',
    'webhook_to_test' => 'Webhook to test',
];
