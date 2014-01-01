<?php namespace Fid\Help\Entity;

trait GetSet {

    public function __get($key)
    {
        if( property_exists($this, $key) )
        {
            return $this->$key;
        }
    }

    public function __set($key, $value)
    {
        if( property_exists($this, $key) )
        {
            return $this->$key = $value;
        }

        return null;
    }
}