<?php

use Vo\BaseComponent;

class HomePage extends BaseComponent
{
    public string $title = 'Wellcome to my awesome application\'s';
    public int $count = 0;
    public $messages = [];
    protected $any = 'Any\\\' var\\';
    private string $priv = 'Secret';
    public $json = ['Name' => 'My App'];
    public $fruits  = ["orange"];
    public $fruits2  =    ["orange", "banana", "apple"];
    function __construct()
    {
    }

    function Increment($event)
    {
        $this->count++;
        $this->json['Name'] = 'New name';
        // $this->count++;
        $this->priv .= "Code";
        // echo $this->count;
        // echo $event;
    }

    public function Test($argument): string
    {
        return 'Test ' . $argument;
    }

    public function GetCount(): int
    {
        return $this->count;
    }
}

$test = 'Test';
