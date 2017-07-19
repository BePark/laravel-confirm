<?php

namespace BePark\Libs\Confirm\ValueObjects;

/**
 * Confirmation message data container
 *
 * @package BePark\Admin\ValueObjects
 */
class ConfirmMessage
{
	protected $_title;
	protected $_subtitle;
	protected $_backUrl;
	protected $_button;
	protected $_icon;
	protected $_oldInputs;

	/**
	 * Create a confirm message in a simple form, back return to the previous url
	 *
	 * @param string $labelPrefix
	 * @param string $button
	 * @param array $oldInputs
	 * @return ConfirmMessage
	 */
	public static function createBasic(string $labelPrefix, string $button = 'checkmark', array $oldInputs = array()): self
	{
		return new self(
			$labelPrefix . '.title',
			$labelPrefix . '.subtitle',
			$labelPrefix . '.explain',
			$labelPrefix . '.button',
			$button,
			url()->previous(),
			$oldInputs
		);
	}

	public function __construct(string $title, string $subtitle, string $explain, string $button, string $icon, string $backUrl, array $oldInputs = array())
	{
		$this->_title = $title;
		$this->_subtitle = $subtitle;
		$this->_explain = $explain;
		$this->_button = $button;
		$this->_backUrl = $backUrl;
		$this->_oldInputs = $oldInputs;
		$this->_icon = $icon;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->_title;
	}

	/**
	 * @return string
	 */
	public function getSubtitle(): string
	{
		return $this->_subtitle;
	}

	/**
	 * @return string
	 */
	public function getBackUrl(): string
	{
		return $this->_backUrl;
	}

	/**
	 * @return string
	 */
	public function getButton(): string
	{
		return $this->_button;
	}

	/**
	 * @return string
	 */
	public function getExplain(): string
	{
		return $this->_explain;
	}

	/**
	 * @return string
	 */
	public function getIcon(): string
	{
		return $this->_icon;
	}

	/**
	 * @return array
	 */
	public function getOldInputs(): array
	{
		return $this->_oldInputs;
	}
}
