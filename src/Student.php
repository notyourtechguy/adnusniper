<?php
/**
 * Created by PhpStorm.
 * User: arki
 * Date: 9/2/17
 * Time: 9:15 PM
 */

namespace Notyourtechguy\Sniper;


class Student
{
    protected $sniper;

    public function __construct($username, $password)
    {
        $this->sniper = new Snipe($username, $password);
    }

    public function getClassmates($subject_code)
    {
        $this->sniper->browse('mySubjectsCMates2/classList/' . $subject_code);
        $response = $this->sniper->getData(1);
        return $response['logged_in']['CLASSLIST'];
    }

    public function getUserInfo()
    {
        $user = $this->sniper->getData(0)['logged_in'];
        return $user;
    }
}