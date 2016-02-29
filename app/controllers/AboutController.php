<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 2/27/2016
 * Time: 2:18 PM
 */

class AboutController extends BaseController {

    public function showAbout()
    {
        return 'ABOUT content';
    }

    /**
     * @param $Subject
     * @return string
     */
    public function showSubject($Subject)
    {
        return "$Subject content";
    }

    /**
     * @return string
     */
    public function showDirections()
    {
        $theUrl = URL::route('directions');
        return 'DIRECTIONS go to this url : '. $theUrl;
    }
}