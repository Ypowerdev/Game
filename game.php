<?php

class Game
{
    public function __construct(array $tilesImage = [])
    {
        $this->tilesImage = $tilesImage;
    }

    public function render(): string
    {
        $gameResult = "<pre>";
        
        foreach ($this->tilesImage as $tileImage) {
            for ($i = 0; $i < count($tileImage); $i++) {
                $result .=  $tileImage[$i];                
            }
            $result .=  "\n";
        }
        $result .=  "</pre>";
        return $result;
    }
}

$imageArray = [
    ['🏠', '🌳', '🌳', '🌼'],
    ['🌿'],
    ['🌿'],
    ['🌿', '🌼'],
];

$game = new Game($imageArray);
echo $game->render();
