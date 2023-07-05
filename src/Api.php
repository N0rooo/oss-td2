<?php

declare(strict_types=1);

namespace Thomasaubert\OssTd2;

class Api 
{
    public function getRandomNumber(): int
    {
        return random_int(0, 100);
        
    }

}