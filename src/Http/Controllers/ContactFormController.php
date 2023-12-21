<?php

namespace Juzaweb\ContactForm\Http\Controllers;

use Juzaweb\CMS\Http\Controllers\BackendController;

class ContactFormController extends BackendController
{
    public function index()
    {
        //

        return view(
            'juco::index',
            [
                'title' => 'Title Page',
            ]
        );
    }
}
