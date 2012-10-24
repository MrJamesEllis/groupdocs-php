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
class SignatureFormFieldInfo {

  static $swaggerTypes = array(
      'id' => 'string',
      'acceptableValues' => 'string',
      'participantGuid' => 'string',
      'regularExpression' => 'string',
      'locations' => 'array[SignatureFormFieldLocationInfo]',
      'fieldType' => 'int',
      'mandatory' => 'bool',
      'name' => 'string',
      'data' => 'array[int]',
      'fillTimeStamp' => 'string',
      'defaultValue' => 'string',
      'formGuid' => 'string'

    );

  public $id; // string
  public $acceptableValues; // string
  public $participantGuid; // string
  public $regularExpression; // string
  public $locations; // array[SignatureFormFieldLocationInfo]
  public $fieldType; // int
  public $mandatory; // bool
  public $name; // string
  public $data; // array[int]
  public $fillTimeStamp; // string
  public $defaultValue; // string
  public $formGuid; // string
  }

