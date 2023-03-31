<?php

namespace Database\Factories;

class FactoryHelper
{

    /**
     * This Function Will generate a random model id from the database according to the model name
     * @param string $modelName
     * @return int
     */
    public static function  getRandomModelId (string $modelName)
    {
        $count = $modelName::query()->count();
        if ($count == 0)
        {
            return $modelName::factory()->create()->id;
        }else {
            return rand(1, $count);
        }
    }
}
