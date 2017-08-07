<?php

namespace BePark\Libs\Confirm\Services;

use BePark\Libs\Confirm\ValueObjects\ConfirmMessage;
use Illuminate\Http\Request;

/**
 * Allow to play in an easier way with confirmation
 */
class ConfirmService
{
	/**
	 * Ask people to confirm their choice, using url (and get) instead of form (and post)
	 * @param ConfirmMessage $message
	 * @param null|string $title
	 * @return \Illuminate\Contracts\View\Factory
	 */
	public function confirmByUrl(ConfirmMessage $message, string $title = null)
	{
		return view('common.confirm_url', [
			'_page' => ['title' => trans($title ?? $message->getTitle())],
			'confirm' => $message,
		]);
	}

	/**
	 * Validate that the confirmation is well done.
	 *
	 * @param Request $request
	 * @param callable|null $callback the callback to call if it's valid
	 * @return bool
	 */
	public function isConfirmedByUrl(Request $request, callable $callback = null): bool
	{
		if ($request->get('confirm', false))
		{
			if ($callback)
			{
				$callback($request);
			}
			return true;
		}

		return false;
	}

	/**
	 * Ask people to confirm their choice, using form (and post) instead of url (and get)
	 * @param ConfirmMessage $message
	 * @param null|string $title
	 * @return \Illuminate\Contracts\View\Factory
	 */
	public function confirmByForm(ConfirmMessage $message, string $title = null)
	{
		return view('common.confirm_form', [
			'_page' => ['title' => trans($title ?? $message->getTitle())],
			'confirm' => $message,
		]);
	}
}
