<?php
/**
 *  Copyright 2012 GroupDocs.
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
class FileSystemFolder {

  static $swaggerTypes = array(
      'folder_count' => 'int',
      'file_count' => 'int',
      'id' => 'float',
      'guid' => 'string',
      'name' => 'string',
      'access' => 'string',
      'owner' => 'UserInfo',
      'sharers' => 'array[Some(UserInfo)]',
      'dir' => 'bool',
      'modified_on' => 'string',
      'created_on' => 'string'

    );

  public $folder_count; // int
  public $file_count; // int
  public $id; // float
  public $guid; // string
  public $name; // string
  public $access; // string
  public $owner; // UserInfo
  public $sharers; // array[Some(UserInfo)]
  public $dir; // bool
  public $modified_on; // string
  public $created_on; // string
  }

