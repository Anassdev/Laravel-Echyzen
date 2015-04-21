<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

    /**
     * Préparation avant les tests
     */
    public function setUp()
    {
        parent::setUp();

        Artisan::call('migrate');
        $this->seed();
        Mail::pretend(true);
    }

	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}

}
