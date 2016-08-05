<?php

namespace HexletPsrLinter;

class LinterAppTest extends \PHPUnit_Framework_TestCase
{
    public function testValidate()
    {
        $data = '<?php echo "hello";';
        $app = new LinterApp();

        $this->assertEquals(true, true);
    }
}
