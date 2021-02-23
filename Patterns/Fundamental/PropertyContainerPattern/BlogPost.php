<?php

declare(strict_types=1);

namespace Patterns\Fundamental\PropertyContainerPattern;

/**
 * Class BlogPost
 *
 * @package Patterns\Fundamental\PropertyContainerPattern
 */
class BlogPost extends PropertyContainer
{
	/**
	 * @var string
	 */
	private string $title;

	/**
	 * @var int
	 */
	private int $category_id;

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 *
	 * @return void
	 */
	public function setTitle(string $title): void
	{
		$this->title = $title;
	}

	/**
	 * @return int
	 */
	public function getCategory(): int
	{
		return $this->category_id;
	}

	/**
	 * @param int $id
	 */
	public function setCategory(int $id): void
	{
		$this->category_id = $id;
	}
}
