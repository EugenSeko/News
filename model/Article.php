<?php
require __DIR__.'/Query.php';
/**
 * Created by PhpStorm.
 * User: y
 * Date: 19.10.2015
 * Time: 18:12
 */
abstract class Article
{
    protected $title;
    protected $text;
    protected $date;
    protected $author;
    protected $photo;
    protected $id;
    public  function get_id(){
        return $this->id;
    }
    public function __construct($title,$photo,$date,$text,$author){
        $this->title = $title;
        $this->date = $date;
        $this->text = $text;
        $this->author = $author;
        $this->photo = $photo;
        $query = new Query('articles');
        $this->id = $query->do_query('INR',$title,$photo,$date,$text,$author);
    }

}