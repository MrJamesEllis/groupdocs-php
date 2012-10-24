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
class SignatureEnvelopeInfo {

  static $swaggerTypes = array(
      'creationDateTime' => 'string',
      'ownerShouldSign' => 'bool',
      'recipients' => 'array[SignatureEnvelopeRecipientInfo]',
      'status' => 'int',
      'envelopeExpireTime' => 'float',
      'ownerId' => 'float',
      'reminderTime' => 'float',
      'emailSubject' => 'string',
      'statusDateTime' => 'string',
      'id' => 'string',
      'stepExpireTime' => 'float',
      'emailBody' => 'string',
      'documentsCount' => 'float',
      'orderedSignature' => 'bool',
      'documentsPages' => 'float',
      'ownerGuid' => 'string',
      'name' => 'string'

    );

  public $creationDateTime; // string
  public $ownerShouldSign; // bool
  public $recipients; // array[SignatureEnvelopeRecipientInfo]
  public $status; // int
  public $envelopeExpireTime; // float
  public $ownerId; // float
  public $reminderTime; // float
  public $emailSubject; // string
  public $statusDateTime; // string
  public $id; // string
  public $stepExpireTime; // float
  public $emailBody; // string
  public $documentsCount; // float
  public $orderedSignature; // bool
  public $documentsPages; // float
  public $ownerGuid; // string
  public $name; // string
  }

