<?php


namespace Eichgi\ChuckNorrisJokes;


class JokeFactory
{

    protected $jokes = [
        'Chuck Norris counted to infinity... Twice.',
        'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
    ];

    /**
     * JokeFactory constructor.
     * @param array $jokes
     */
    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
