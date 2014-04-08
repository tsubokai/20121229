<?php
// testXXXXというメソッドを実行する
class TsuboTest extends PHPUnit_Framework_TestCase
{
    protected $obj;

    // 各テスト実行前に必ず呼ばれるメソッド
    // テストの準備的な処理をここに書く
    function setUp()
    {
        $this->obj = new Tsubo();
    }

    // 各テスト実行後に必ず呼ばれるメソッド
    // テストの終了処理をここに書く
    function tearDown()
    {
        $this->obj = null;
    }

    protected function assertAnswer($expected, $input)
    {
        $this->assertSame($expected, $this->obj->answer($input));
    }

    function testFizz()
    {
        $this->assertAnswer('Fizz', 3);
    }

    function testOther()
    {
        $this->assertAnswer(2, 2);
    }

    function testBuzz()
    {
        $this->assertAnswer('Buzz', 5);
    }

    function testFizzBuzz()
    {
        $this->assertAnswer('FizzBuzz', 3 * 5);
    }

    function testHoge()
    {
        $this->assertAnswer('Hoge', 7);
    }

    function testFizzHoge()
    {
        $this->assertAnswer('FizzHoge', 3 * 7);
    }

    function testBuzzHoge()
    {
        $this->assertAnswer('BuzzHoge', 5 * 7);
    }

    function testFizzBuzzHoge()
    {
        $this->assertAnswer('FizzBuzzHoge', 3 * 5 * 7);
    }

    // 例外のテストは期待する例外をキャッチしたらreturnするようにしておく
    // それ以外はfail()
    function testInvalidArgumentException()
    {
        try {
            $this->obj->answer("2");
        } catch (InvalidArgumentException $e) {
            $this->assertTrue(true);
            return;
        } catch (Exception $e) {
        }
        $this->fail();
    }
}
