<?php

namespace Juzaweb\ContactForm\Actions;

use Juzaweb\CMS\Abstracts\Action;
use Juzaweb\ContactForm\Http\Controllers\Frontend\ContactController;

class AjaxAction extends Action
{
    public function handle(): void
    {
        $this->addAction(Action::FRONTEND_INIT, [$this, 'registerPostContact']);
    }

    public function registerPostContact(): void
    {
        $this->registerFrontendAjax(
            'contact',
            [
                'method' => 'POST',
                'callback' => [ContactController::class, 'store'],
            ]
        );
    }
}
