<?php


namespace Torian257x\RubixAi\Tests\Unit;


use Orchestra\Testbench\TestCase;
use Torian257x\RubixAi\RubixAiService;
use Torian257x\RubixAi\RubixAiServiceProvider;

class LConfigTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [RubixAiServiceProvider::class];
    }

    public function testConfigAccessWorks()
    {
        $c = config('rubixai');

        self::assertNotEmpty($c['csv_path_output']);


        $c = RubixAiService::getConfig();

        self::assertNotEmpty($c['csv_path_output']);

        self::assertNull($c['shouldNotExist'] ?? null);
    }



}
