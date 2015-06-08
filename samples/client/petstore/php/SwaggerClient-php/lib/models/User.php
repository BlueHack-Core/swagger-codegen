<?php
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

    
/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

namespace SwaggerClient\models;

use \ArrayAccess;

class User implements ArrayAccess {
  static $swaggerTypes = array(
      'id' => 'int',
    'username' => 'string',
    'first_name' => 'string',
    'last_name' => 'string',
    'email' => 'string',
    'password' => 'string',
    'phone' => 'string',
    'user_status' => 'int'
    );

    static $attributeMap = array(
    'id' => 'id',
    'username' => 'username',
    'first_name' => 'firstName',
    'last_name' => 'lastName',
    'email' => 'email',
    'password' => 'password',
    'phone' => 'phone',
    'user_status' => 'userStatus'
    );

    
    public $id; /* int */
    public $username; /* string */
    public $first_name; /* string */
    public $last_name; /* string */
    public $email; /* string */
    public $password; /* string */
    public $phone; /* string */
        /**
        * User Status
        */
    public $user_status; /* int */

    public function __construct(array $data = null) {
    $this->id = $data["id"];
    $this->username = $data["username"];
    $this->first_name = $data["first_name"];
    $this->last_name = $data["last_name"];
    $this->email = $data["email"];
    $this->password = $data["password"];
    $this->phone = $data["phone"];
    $this->user_status = $data["user_status"];
    }

    public function offsetExists($offset) {
    return isset($this->$offset);
    }

    public function offsetGet($offset) {
    return $this->$offset;
    }

    public function offsetSet($offset, $value) {
    $this->$offset = $value;
    }

    public function offsetUnset($offset) {
    unset($this->$offset);
    }
    }
    