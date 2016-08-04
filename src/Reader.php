<?php
/**
 * Created by PhpStorm.
 * User: AlexandrAboimov
 * Date: 04.08.2016
 * Time: 11:02
 */

namespace HexletPsrLinter;

use HexletPsrLinter\Exceptions\FileNotFoundException;

class Reader
{
    public static function readFile($filePath)
    {
        if (!file_exists($filePath)) {
            throw new FileNotFoundException();
        }
        return file_get_contents($filePath);
    }

    public static function readDirectory($dirPath)
    {

    }

    private static function read()
    {

    }
}