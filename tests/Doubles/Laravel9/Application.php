<?php

namespace Tests\Doubles\Laravel9;

use Illuminate\Foundation\Application as IlluminateApplication;

/**
 * Application
 *
 * This is a dummy application for testing purposes.
 * It allows to test against a custom semantic version of the application.
 */
class Application extends IlluminateApplication
{
    /**
     * @var string
     */
    private string $customVersion = IlluminateApplication::VERSION;

    /**
     * @const string The original laravel version installed by orchestra
     */
    public const ORIGINAL_VERSION = IlluminateApplication::VERSION;

    /**
     * @inheritDoc
     */
    public function version(): string
    {
        return $this->customVersion;
    }

    /**
     * Sets the custom version of the application
     *
     * @param string $customVersion
     *
     * @return Application
     */
    public function setCustomVersion(string $customVersion): Application
    {
        $this->customVersion = $customVersion;

        return $this;
    }
}
