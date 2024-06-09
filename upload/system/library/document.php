<?php
/**
 * @package		OpenCart
 *
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 *
 * @see		https://www.opencart.com
 */
namespace Opencart\System\Library;
/**
 * Class Document
 */
class Document {
	/**
	 * @var string $title
	 */
	private string $title = '';
	/**
	 * @var string $description
	 */
	private string $description = '';
	/**
	 * @var string $keywords
	 */
	private string $keywords = '';
	/**
	 * @var array<string, array<string, string>> $links
	 */
	private array $links = [];
	/**
	 * @var array<string, array<string, string>> $styles
	 */
	private array $styles = [];
	/**
	 * @var array<string, array<string, array<string, string>>> $scripts
	 */
	private array $scripts = [];

	/**
	 * setTitle
	 *
	 * @param string $title
	 *
	 * @return void
	 */
	public function setTitle(string $title): void {
		$this->title = $title;
	}

	/**
	 * getTitle
	 *
	 * @return string
	 */
	public function getTitle(): string {
		return $this->title;
	}

	/**
	 * setDescription
	 *
	 * @param string $description
	 *
	 * @return void
	 */
	public function setDescription(string $description): void {
		$this->description = $description;
	}

	/**
	 * Get Description
	 *
	 * @return string
	 */
	public function getDescription(): string {
		return $this->description;
	}

	/**
	 * Set Keywords
	 *
	 * @param string $keywords
	 */
	public function setKeywords(string $keywords): void {
		$this->keywords = $keywords;
	}

	/**
	 * Get Keywords
	 *
	 * @return string
	 */
	public function getKeywords(): string {
		return $this->keywords;
	}

	/**
	 * Add Link
	 *
	 * @param string $href
	 * @param string $rel
	 *
	 * @return void
	 */
	public function addLink(string $href, string $rel): void {
		$this->links[$href] = [
			'href' => $href,
			'rel'  => $rel
		];
	}

	/**
	 * Get Links
	 *
	 * @return array<string, array<string, string>>
	 */
	public function getLinks(): array {
		return $this->links;
	}

	/**
	 * Add Style
	 *
	 * @param string $href
	 * @param string $rel
	 * @param string $media
	 *
	 * @return void
	 */
	public function addStyle(string $href, string $rel = 'stylesheet', string $media = 'screen'): void {
		$this->styles[$href] = [
			'href'  => $href,
			'rel'   => $rel,
			'media' => $media
		];
	}

	/**
	 * Get Styles
	 *
	 * @return array<string, array<string, string>>
	 */
	public function getStyles(): array {
		return $this->styles;
	}

	/**
	 * Add Script
	 *
	 * @param string $href
	 * @param string $position
	 *
	 * @return void
	 */
	public function addScript(string $href, string $position = 'header'): void {
		$this->scripts[$position][$href] = ['href' => $href];
	}

	/**
	 * Get Scripts
	 *
	 * @param string $position
	 *
	 * @return array<string, array<string, string>>
	 */
	public function getScripts(string $position = 'header'): array {
		if (isset($this->scripts[$position])) {
			return $this->scripts[$position];
		} else {
			return [];
		}
	}
}
