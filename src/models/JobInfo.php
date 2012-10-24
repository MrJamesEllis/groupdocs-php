<?php
/**
 *  Copyright 2011 Wordnik, Inc.
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
 * $model.description$
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class JobInfo {

  static $swaggerTypes = array(
      'status' => 'string',
      'documents' => 'JobDocumentsEntry',
      'out_formats' => 'array[string]',
      'email_results' => 'bool',
      'url_only' => 'bool',
      'requested_time' => 'int',
      'id' => 'float',
      'guid' => 'string',
      'scheduled_time' => 'int',
      'priority' => 'float',
      'name' => 'string',
      'callback_url' => 'string',
      'actions' => 'string'

    );

  public $status; // string
  public $documents; // JobDocumentsEntry
  public $out_formats; // array[string]
  public $email_results; // bool
  public $url_only; // bool
  public $requested_time; // int
  public $id; // float
  public $guid; // string
  public $scheduled_time; // int
  public $priority; // float
  public $name; // string
  public $callback_url; // string
  public $actions; // string
  }

