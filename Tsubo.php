<?php
class Tsubo
{
    // Numberクラスを作ると読みやすくなる
    // $inputをクラス変数にしてしまうよりは安全かつ簡潔に読める
    function answer($input)
    {
        if (!is_int($input)) throw new InvalidArgumentException;
        $number = new Number($input);
        if ($number->isMultipleOf(105)) return 'FizzBuzzHoge';
        if ($number->isMultipleOf(15)) return 'FizzBuzz';
        if ($number->isMultipleOf(21)) return 'FizzHoge';
        if ($number->isMultipleOf(35)) return 'BuzzHoge';
        if ($number->isMultipleOf(3)) return 'Fizz';
        if ($number->isMultipleOf(5)) return 'Buzz';
        if ($number->isMultipleOf(7)) return 'Hoge';
        return $input;
    }

    /*
    function answer($input)
    {
        if (!is_int($input)) throw new InvalidArgumentException;
        if ($this->isMultipleOf(105, $input)) return 'FizzBuzzHoge';
        if ($this->isMultipleOf(15, $input)) return 'FizzBuzz';
        if ($this->isMultipleOf(21, $input)) return 'FizzHoge';
        if ($this->isMultipleOf(35, $input)) return 'BuzzHoge';
        if ($this->isMultipleOf(3, $input)) return 'Fizz';
        if ($this->isMultipleOf(5, $input)) return 'Buzz';
        if ($this->isMultipleOf(7, $input)) return 'Hoge';
        return $input;
    }

    protected function isMultipleOf($base, $input)
    {
        if ($input % $base === 0) return true;
        return false;
    }
    */
}

class Number
{
    protected $number;

    function __construct($intNumber)
    {
        $this->number = $intNumber;
    }

    function isMultipleOf($base)
    {
        if ($this->number % $base === 0) return true;
        return false;
    }
}
