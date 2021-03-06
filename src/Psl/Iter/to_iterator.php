<?php

declare(strict_types=1);

namespace Psl\Iter;

/**
 * Copy the iterable into an Iterator.
 *
 * @psalm-template Tk
 * @psalm-template Tv
 *
 * @psalm-param    iterable<Tk, Tv> $iterable
 *
 * @psalm-return   Iterator<Tk, Tv>
 *
 * @see            Iterator
 */
function to_iterator(iterable $iterable): Iterator
{
    return Iterator::create($iterable);
}
