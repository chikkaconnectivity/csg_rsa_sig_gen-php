<?php
class RSATest extends PHPUnit_Framework_TestCase
{
    public function testSignAndVerify()
    {
        require_once("src/ChikkaRSALib.php");
        // generate a signature for string "test data" using file myprivkey.pem
        $signature = generate_signature("test data", file_get_contents("keys/myprivkey.pem"));
        
        // verify given signature using the data "test data" and file mypubkey.pem
        $verified = verify_signature("test data", file_get_contents("keys/mypubkey.pem"), $signature);

        $this->assertEquals(1, $verified);

        // verify given signature using the data "not the data" and file mypubkey.pem
        $verified = verify_signature("not the data", file_get_contents("keys/mypubkey.pem"), $signature);

        $this->assertEquals(0, $verified);
    }
}
?>
