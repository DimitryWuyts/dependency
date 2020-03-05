<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TransformRepository")
 */
class Capitalize implements Transform
{
    public function transform($string): string
    {
        // TODO: Implement transform() method.
        $lowerCaseString = strtolower($string);
        $lowerCaseString = preg_replace_callback('/\w.?/', function ($m) {return ucfirst($m[0]); }, $lowerCaseString);
        return $lowerCaseString;
    }
}