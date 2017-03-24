<?php

namespace Spatie\Snapshots;

interface Driver
{
    /**
     * Serialize a snapshot's data to a string that can be written to a
     * generated snapshot file.
     *
     * @param mixed $data
     *
     * @return string
     */
    public function serialize($data): string;

    /**
     * The extension that should be used to save the snapshot file.
     *
     * @return string
     */
    public function extension(): string;

    /**
     * Load the contents of a snapshot at a path.
     *
     * @param string $path
     *
     * @return mixed
     */
    public function load(string $path);

    /**
     * Match an expectation with a snapshot's actual contents. Should throw an
     * `ExpectationFailedException` if it doesn't match. This happens by
     * default if you're using PHPUnit's `Assert` class for the match.
     *
     * @param \Spatie\Snapshots\Snapshot $snapshot
     * @param mixed $actual
     *
     * @throws \PHPUnit\Framework\ExpectationFailedException
     */
    public function match($expected, $actual);
}
