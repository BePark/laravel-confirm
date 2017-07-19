# Laravel Confirm

Add tools to help you plaing with confirmation inside your controller

## Usage
```php
// inside a controller

	public function getDoSomething(ConfirmService $confirmService)
	{
		$message = ConfirmMessage::createBasic('my.pefix');

		return $confirmService->confirmByForm($message, 'my.title.confirmation');
	}

	public function postDoSomething(ConfirmRequest $request)
	{
		// do something because it's confirmed
	}


```

## Installation using composer

```bash
composer require bepark/laravel-confirm
```

That's all

## Todo

* Automated tests
* Add more docs than a simple readme
* Add configuration to let people play with custom view
* Add example of view with blade
* Beeing compatible with publish command for view ;)

## License

The MIT License (MIT). See the [license](LICENSE) file for more information.
