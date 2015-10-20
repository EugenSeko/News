<?php
require __DIR__.'/Sin_mysqli.php';
/**
 * Created by PhpStorm.
 * User: y
 * Date: 19.10.2015
 * Time: 18:12
 */
class Query
{
    private static $base;
    private static $tab;

    public function queryUpd(){

    }
    public function do_query($query,$name='0',$path='0',$date='0000-00-00',$text='0',$author='0'){
        switch ($query){
            case'INR':$query = 'INSERT INTO '.self::$tab.'(name,path,date,text,author) VALUES ("'.$name.'","'.$path.'","'.$date.'","'.$text.'","'.$author.'")';
                if(self::$tab=='imgList') $query = 'INSERT INTO '.self::$tab.'(name,path) VALUES ("'.$name.'","'.$path.'")';
                $res = self::$base->query($query); if(!$res)echo 'no query';
                return self::$base->insert_id;
            case'DLA': $query = 'DELETE FROM  '.self::$tab;
                self::$base->query($query);
                break;
            case'DLR': if($name!='0') {$query = 'DELETE FROM '.self::$tab.' WHERE name='.'"'.$name.'"';
                self::$base->query($query);}
                if($path!='0') {$query = 'DELETE FROM '.self::$tab.' WHERE path='.'"'.$path.'"';
                    self::$base->query($query);}
                if($date!='0000-00-00') {$query = 'DELETE FROM '.self::$tab.' WHERE date='.'"'.$date.'"';
                    self::$base->query($query);}
                if($text!='0') {$query = 'DELETE FROM '.self::$tab.' WHERE text='.'"'.$text.'"';
                    self::$base->query($query);}
                if($author!='0') {$query = 'DELETE FROM '.self::$tab.' WHERE author='.'"'.$author.'"';
                    self::$base->query($query);}
                break;
            case'SLA': $query = 'SELECT * FROM '.self::$tab;
                $res = self::$base->query($query);
                $array = [];
                if($res){
                    while(($row = mysqli_fetch_array($res))!==null){
                        $array[] = $row;
                    }
                    return $array; break;
                }
                else var_dump($res); break;
        }

    }
    public  function __construct($tab){
        self::$base = Sin_mysqli::get_instance();
        self::$tab = $tab;
    }
}