<?php

require_once  'functions.php';

use PHPUnit\Framework\Testcase;

class FunctionTest extends Testcase
{
    public function testAddParagraphsSuccess(){
        $expected = '<p>Hello World</p>';
        $input = [['paragraph'=>'Hello World']];
        $case = addParagraphs($input);
        $this->assertEquals($expected, $case);
    }

    public function testAddParagraphsFailure(){
        $expected = '<p></p>';
        $input = [['paragraph' => '']];
        $case = addParagraphs($input);
        $this->assertEquals($expected,$case);
    }

    public function testAddParagraphsFailure2(){
        $expected = '';
        $input = [['paragraph' => []]];
        $case = addParagraphs($input);
        $this->assertEquals($expected, $case);
    }

    public function testAddParagraphsFailure3(){
        $expected = '';
        $input = [['awesome' => []]];
        $case = addParagraphs($input);
        $this->assertEquals($expected, $case);
    }


    public function testAddParagraphsMalformed(){
        $input = 3;
        $this->expectException(TypeError::class);
        addParagraphs($input);
    }

}
