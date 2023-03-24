<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require "src/solution.php";

final class StackTest extends TestCase
{
    /**
     * @dataProvider validNumbersProvider
     */    
    public function testRightOutput(array $input, array $output): void
    {
        $result = findSingle($input);

        $this->assertSame($result, $output);
    }

    public static function validNumbersProvider(): array
    {
        return [
            [
                [1, 2, 3, 4, 1, 2, 3],
                [4]
            ],
            [
                [11, 21, 33.4, 18, 21, 33.39999, 33.4],
                [11, 18, 33.39999]
            ],
            [
                [11, 21, 33.4, 18, 21, 33.39999, 33.4, 'string'],
                [11, 18, 33.39999]
            ],
        ];
    }
}