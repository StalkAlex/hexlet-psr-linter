<?php
/**
 * Created by PhpStorm.
 * User: AlexandrAboimov
 * Date: 04.08.2016
 * Time: 11:02
 */

namespace HexletPsrLinterTest;


use HexletPsrLinter\Reader;
use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamDirectory;
use PHPUnit\Framework\TestCase;
use HexletPsrLinter\Exceptions\FileNotFoundException;

class FileTest extends TestCase
{
    /** @var  vfsStreamDirectory */
    private $root;
    private $content = '<?php echo "test"';

    public function setUp()
    {
        $this->root = vfsStream::create([
            'code.php' => $this->content
        ]);
    }

    public function testReadExistingFile()
    {
        $existingString = Reader::readFile('vfs://root/code.php');
        static::assertTrue($existingString, $this->content);
    }

    /**
     * @expectedException FileNotFoundException
     */
    public function testNonExistingFile()
    {
        Reader::readFile('vfs://root/test.php');
    }
}