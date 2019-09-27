<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Kakuei
 * Date: 9/26/2019
 * Time: 8:32 PM
 */

abstract class onlinegateway {


    protected $options;

    public function __construct()
    {
        $this->options = array(
            'mellat' => array(
                'merchant' => '12323',
                'user' => 'ali',
                'password' => '123'

            ),
            'saman' => array (
                'api_key' => '123213234324325rdsfsdf'
            )

        );

    }

    abstract function verify();
    abstract function sendrequest();


}

class Mellat extends onlinegateway{


    private $gatewayname = "mellat";
    private $mellatoptions;

    public function __construct()
    {
        parent::__construct();
        $this->mellatoptions = $this->options[$this->gatewayname];
    }

    public function verify()
    {
        // TODO: Implement verify() method.
        var_dump($this->mellatoptions);

    }

    function sendrequest()
    {
        // TODO: Implement sendrequest() method.
    }
}


$test = Factory::make("mellat");
$testclass = new $test;
$testclass->verify();

class Factory {

    public static function make($class){

        $classname= ucfirst($class);

        if(!class_exists($classname)){
            return false;
        }
        return $classname;
}

}