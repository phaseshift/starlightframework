<?php
/*
 * This file is part of the Starlight framework.
 *
 * (c) Matthew Vince <matthew.vince@phaseshiftllc.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Starlight\Component\Http;


/**
 * Wrapper class request parameters
 * @see Request
 */
class ParameterBucket implements \ArrayAccess, \IteratorAggregate
{
   /**
    * Parameters
    * @var array
    */
   protected $parameters;
   
   
   /**
    * Constructor
    * @param array $parameters Parameters
    */
   public function __construct(array $parameters = array())
   {
      $this->replace($parameters);
   }
   
   /**
    * Returns the parameters
    * @return array Parameters
    */
   public function all()
   {
      return $this->parameters;
   }
   
   /**
    * Returns the parameter keys
    * @return array Parameter keys
    */
   public function keys()
   {
      return array_keys($this->parameters);
   }
   
   /**
    * Replaces the current parameters by a new set
    * @param array $parameters parameters
    * @return HeaderBucket this instance
    */
   public function replace(array $parameters = array())
   {
      $this->parameters = $parameters;
      
      return $this;
   }
   
   /**
    * Adds parameters
    * @param array $parameters parameters
    * @return HeaderBucket this instance
    */
   public function add(array $parameters = array())
   {
      $this->parameters = array_replace($this->parameters, $parameters);
      
      return $this;
   }
   
   /**
    * Returns a parameter by name
    * @param string $key The key
    * @param mixed $default default value
    * @return mixed value
    */
   public function get($key, $default = null)
   {
      return array_key_exists($key, $this->parameters) ? $this->parameters[$key] : $default;
   }
   
   /**
    * Sets a parameter by name
    * @param string $key The key
    * @param mixed $value value
    * @return HeaderBucket this instance
    */
   public function set($key, $value)
   {
      $this->parameters[$key] = $value;
      
      return $this;
   }
   
   /**
    * Returns true if the parameter is defined
    * @param string $key The key
    * @return boolean true if the parameter exists, false otherwise
    */
   public function has($key)
   {
      return array_key_exists($key, $this->parameters);
   }
   
   /**
    * Deletes a parameter
    * @param string $key key
    * @return HeaderBucket this instance
    */
   public function delete($key)
   {
      if ($this->has($key)) {
         unset($this->parameters[$key]);
      }
      
      return $this;
   }
   
   //
   // ArrayAccess
   //
   
   public function offsetExists($offset)
   {
      return $this->has($offset);
   }
   
   public function offsetGet($offset)
   {
      return $this->get($offset);
   }
   
   public function offsetSet($offset, $value)
   {
      return $this->set($offset, $value);
   }
   
   public function offsetUnset($offset)
   {
      return $this->delete($offset);
   }
   
   //
   // IteratorAggregate
   //
   
   public function getIterator()
   {
      return new \ArrayIterator($this->all());
   }
};
