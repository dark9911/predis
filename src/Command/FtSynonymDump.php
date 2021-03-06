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
 * @link https://oss.redislabs.com/redisearch/Commands/#ftsyndump
 *
 * @author Paul Livorsi <paullivorsi@gmail.com>
 */
class FtSynonymDump extends Command {
	/**
	 * {@inheritdoc}
	 */
	public function getId()
	{
		return 'FT.SYNDUMP';
	}
}
