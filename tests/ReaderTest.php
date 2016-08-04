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

class FileTest extends TestCase
{
    private $content = '<?php echo "test"';
    /** @var  vfsStreamDirectory */
    private $root;

    public function setUp()
    {
        vfsStream::setup();
        $struct = [
            'src' => [
                'code.php' => $this->content
            ]
        ];
        $this->root = vfsStream::create($struct);
    }

    public function testReadExistingFile()
    {
        $existingString = Reader::readFile('vfs://root/src/code.php');
        static::assertEquals($existingString, $this->content);
    }

    /**
     * @expectedException \HexletPsrLinter\Exceptions\FileNotFoundException
     */
    public function testNonExistingFile()
    {
        Reader::readFile('_data/test.php');
    }
}