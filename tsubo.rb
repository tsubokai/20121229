class Tsubo
  def answer(input)
    raise ArgumentError unless input.is_a? Fixnum
    return "FizzBuzzHoge" if input % 105 == 0
    return "FizzBuzz" if input % 15 == 0
    return "FizzHoge" if input % 21 == 0
    return "BuzzHoge" if input % 35 == 0
    return "Fizz" if input % 3 == 0
    return "Buzz" if input % 5 == 0
    return "Hoge" if input % 7 == 0
    input
  end
end
