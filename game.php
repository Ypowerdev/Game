<?php

class Game
{
    public function __construct(array $tiles = [])
    {
        $this->tiles = $tiles;
    }

    public function render()
    {
        $result = "<pre>";
        // echo htmlspecialchars($result),'<hr>';
        foreach ($this->tiles as $tile) {
            for ($i = 0; $i < count($tile); $i++) {
                $result .=  $tile[$i];
                // echo htmlspecialchars($result),'<hr>';
            }
            $result .=  "\n";
        }
        $result .=  "</pre>";
        // echo htmlspecialchars($result),'<hr>';
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
