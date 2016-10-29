<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2016-10-15
 * Time: 7:48 AM
 */
namespace Album\Model;

class Album
{
    public $id;
    public $artist;
    public $title;

    public function exchangeArray(array $data)
    {
        $this->id = !empty($data['id']) ? $data['id'] : null;
        $this->artist = !empty($data['artist']) ? $data['artist'] : null;
        $this->title = !empty($data['title']) ? $data['title'] : null;
    }
}