<?php

namespace HexletPsrLinter;

class AppTest extends \PHPUnit_Framework_TestCase
{
    public function testValidate()
    {
        $data = '<?php echo "hello";';
        $app = new App($data);

        $this->assertEquals('Is valid', $app->validate());
    }
}
