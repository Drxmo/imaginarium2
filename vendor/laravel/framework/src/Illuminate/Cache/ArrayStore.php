<?php

namespace Illuminate\Cache;

use Illuminate\Contracts\Cache\Store;

class ArrayStore extends TaggableStore implements Store {

  use RetrievesMultipleKeys;

  /**
   * The array of stored values.
   *
   * @var array
   */
  protected $storage = [];

  /**
   * Retrieve an item from the cache by key.
   *
   * @param  string|array  $key
   * @return mixed
   */
  public function get($key) {
    if (array_key_exists($key, $this->storage)) {
      return $this->storage[$key];
    }
  }

  /**
   * Store an item in the cache for a given number of minutes.
   *
   * @param  string  $key
   * @param  mixed   $value
   * @param  int     $minutes
   * @return void
   */
  public function put($key, $value, $minutes) {
    $this->storage[$key] = $value;
  }

  /**
   * Store multiple items in the cache for a given number of minutes.
   *
   * @param  array  $values
   * @param  int  $minutes
   * @return void
   */
  public function putMultiple(array $values, $minutes) {
    $this->storage += $values;
  }

  /**
   * Increment the value of an item in the cache.
   *
   * @param  string  $key
   * @param  mixed   $value
   * @return int
   */
  public function increment($key, $value = 1) {
    $this->storage[$key] = $this->storage[$key] + $value;

    return $this->storage[$key];
  }

  /**
   * Increment the value of an item in the cache.
   *
   * @param  string  $key
   * @param  mixed   $value
   * @return int
   */
  public function decrement($key, $value = 1) {
    return $this->increment($key, $value * -1);
  }

  /**
   * Store an item in the cache indefinitely.
   *
   * @param  string  $key
   * @param  mixed   $value
   * @return void
   */
  public function forever($key, $value) {
    $this->put($key, $value, 0);
  }

  /**
   * Remove an item from the cache.
   *
   * @param  string  $key
   * @return bool
   */
  public function forget($key) {
    unset($this->storage[$key]);

    return true;
  }

  /**
   * Remove all items from the cache.
   *
   * @return void
   */
  public function flush() {
    $this->storage = [];
  }

  /**
   * Get the cache key prefix.
   *
   * @return string
   */
  public function getPrefix() {
    return '';
  }

}
