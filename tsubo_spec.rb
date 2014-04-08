# coding: utf-8
require './tsubo.rb'

describe Tsubo do
  describe "#answer" do
    subject { Tsubo.new.answer(input) }

    context "3の倍数の時" do
      let(:input) { 3 }
      it { should eq "Fizz" }
    end

    context "5の倍数の時" do
      let(:input) { 5 }
      it { should eq "Buzz" }
    end

    context "3と5の倍数の時" do
      let(:input) { 3 * 5 }
      it { should eq "FizzBuzz" }
    end

    context "7の倍数の時" do
      let(:input) { 7 }
      it { should eq "Hoge" }
    end

    context "3と7の倍数の時" do
      let(:input) { 3 * 7 }
      it { should eq "FizzHoge" }
    end

    context "5と7の倍数の時" do
      let(:input) { 5 * 7 }
      it { should eq "BuzzHoge" }
    end

    context "3と5と7の倍数の時" do
      let(:input) { 3 * 5 * 7 }
      it { should eq "FizzBuzzHoge" }
    end

    context "それ以外の数値の時" do
      let(:input) { 2 }
      it { should eq input }
    end

    context "数値以外の時" do
      let(:input) { "3" }
      it { ->{subject}.should raise_error ArgumentError }
    end
  end
end
