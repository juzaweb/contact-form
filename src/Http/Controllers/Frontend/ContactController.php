<?php
/**
 * JUZAWEB CMS - Laravel CMS for Your Project
 *
 * @package    juzaweb/cms
 * @author     The Anh Dang
 * @link       https://juzaweb.com
 * @license    GNU V2
 */

namespace Juzaweb\ContactForm\Http\Controllers\Frontend;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Juzaweb\CMS\Http\Controllers\FrontendController;
use Juzaweb\ContactForm\Http\Requests\StoreContactRequest;
use Juzaweb\ContactForm\Repositories\ContactRepository;

class ContactController extends FrontendController
{
    public function __construct(protected ContactRepository $contactRepository)
    {
    }

    public function store(StoreContactRequest $request): JsonResponse|RedirectResponse
    {
        $this->contactRepository->create($request->safe()->all());

        return $this->success(
            __('Contact form submitted successfully!'),
        );
    }
}
