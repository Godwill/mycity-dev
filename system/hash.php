<?php

class Hash {
  /**
   *
   * @param string $algo The algorithm (md5, sha1)
   * @param string data The data to encode
   * @param string $salt the salt to be used thru out the system
   * @return string
   */
  public static function create($algo, $data, $salt){
    $context = hash_init($algo, HASH_HMAC, $salt);
    hash_update($context, $data);
    
    return hash_final($context);
  }
}
?>
