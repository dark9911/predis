<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predis\Command;

/**
 * @link https://oss.redislabs.com/redisearch/Commands/#ftsynupdate
 *
 * @author Paul Livorsi <paullivorsi@gmail.com>
 */
class FtSynonymUpdate extends Command {
	/**
	 * {@inheritdoc}
	 */
	public function getId()
	{
		return 'FT.SYNUPDATE';
	}

	/**
	 * {@inheritdoc}
	 */
	protected function filterArguments(array $arguments)
	{
		if (count($arguments) === 3 && is_array($arguments[2]))
		{
			$options = array_pop($arguments);
			$arguments = array_merge($arguments, $options);
		}

		return $arguments;
	}
}
