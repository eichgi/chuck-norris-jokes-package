<?php


namespace Eichgi\ChuckNorrisJokes\Tests;


use Eichgi\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{

    public function test_it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    public function test_it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'Chuck Norris counted to infinity... Twice.',
            'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
