<?php declare(strict_types=1);

namespace Kata\Jack;

class House
{
    function __construct(
        private bool $echo = false,
        private bool $random = false,
    )
    {
    }

    //test
    private array $parts = [
        'the house that Jack built',
        'the malt that lay in',
        'the rat that ate',
        'the cat that killed',
        'the dog that worried',
        'the cow with the crumpled horn that tossed',
        'the maiden all forlorn that milked',
        'the man all tattered and torn that kissed',
        'the priest all shaven and shorn that married',
        'the rooster that crowed in the morn that woke',
        'the farmer sowing his corn that kept',
        'the horse and the hound and the horn that belonged to',
    ];

    public function recite(): string
    {
        if ($this->random) {
            shuffle($this->parts);
        }

        $poem = '';
        for ($i = 0; $i < count($this->parts); $i++) {
            $poem .= $this->buildVerse($i) . PHP_EOL . PHP_EOL;
        }
        return $poem;
    }

    private function buildVerse(int $index): string
    {
        $verse = 'This is ';
        for ($j = $index; $j >= 0; $j--) {

            $verse .= $this->parts[$j];

            if ($this->echo) {
                $verse .= ' ' . $this->parts[$j];
            }

            if ($j > 0) {
                $verse .= ' ';
            } else {
                $verse .= '.';
            }
        }

        return $verse;
    }
}
