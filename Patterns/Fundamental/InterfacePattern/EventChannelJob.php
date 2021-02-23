<?php

declare(strict_types=1);

namespace Patterns\Fundamental\InterfacePattern;

/**
 * Class EventChannelJob
 *
 * @package Patterns\Fundamental\InterfacePattern
 */
class EventChannelJob
{
	public function run()
	{
		$newsChannel = new EventChannel();

		$firstPublisher = new Publisher('first-publisher', $newsChannel);
		$secondPublisher = new Publisher('second-publisher', $newsChannel);
		$thirdPublisher = new Publisher('third-publisher', $newsChannel);

		$firstSubscriber = new Subscriber('First Subscriber');
		$secondSubscriber = new Subscriber('Second Subscriber');
		$thirdSubscriber = new Subscriber('Third Subscriber');
		$fourthSubscriber = new Subscriber('Fourth Subscriber');

		$newsChannel->subscribe('first-publisher', $firstSubscriber);
        $newsChannel->subscribe('second-publisher', $secondSubscriber);
		$newsChannel->subscribe('third-publisher', $thirdSubscriber);
		$newsChannel->subscribe('third-publisher', $fourthSubscriber);

		$firstPublisher->publish('New post on first-publisher');
		$secondPublisher->publish('New post on second-publisher');
		$thirdPublisher->publish('New post on third-publisher');
	}
}
