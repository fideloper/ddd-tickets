<?php namespace Fid\Help\Entity;

trait GetSet {

    public function __get($key)
    {
        if( isset($this->$key) )
        {
            return $this->key;
        }
    }

    public function __set($key, $value)
    {
        if( isset($this->$key) )
        {
            return $this->key = $value;
        }

        return null;
    }
}