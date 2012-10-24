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
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
class PostApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * RenameByPost
	 * Rename by post
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * newName, string: New name (required)
   * @return RenameResponse
	 */

   public function RenameByPost($userId, $fileId, $newName) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/post/file.rename?user_id={userId}&amp;file_id={fileId}&amp;new_name={newName}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($fileId != null) {
  			$resourcePath = str_replace("{" . "fileId" . "}",
  			                            $fileId, $resourcePath);
  		}
  		if($newName != null) {
  			$resourcePath = str_replace("{" . "newName" . "}",
  			                            $newName, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'RenameResponse');
  		return $responseObject;

      }
  /**
	 * DeleteByPost
	 * Delete by post
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * @return DeleteResponse
	 */

   public function DeleteByPost($userId, $fileId) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/post/file.delete?user_id={userId}&amp;file_id={fileId}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($fileId != null) {
  			$resourcePath = str_replace("{" . "fileId" . "}",
  			                            $fileId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'DeleteResponse');
  		return $responseObject;

      }
  /**
	 * DeleteFromFolderByPost
	 * Delete from folder by post
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * @return DeleteResponse
	 */

   public function DeleteFromFolderByPost($userId, $path) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/post/file.delete.in?user_id={userId}&amp;path={path}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path != null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'DeleteResponse');
  		return $responseObject;

      }
  /**
	 * CompressByPost
	 * Compress by post
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * archiveType, string: Archive Type (required)
   * @return CompressResponse
	 */

   public function CompressByPost($userId, $fileId, $archiveType) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/post/file.compress?user_id={userId}&amp;file_id={fileId}&amp;archive_type={archiveType}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($fileId != null) {
  			$resourcePath = str_replace("{" . "fileId" . "}",
  			                            $fileId, $resourcePath);
  		}
  		if($archiveType != null) {
  			$resourcePath = str_replace("{" . "archiveType" . "}",
  			                            $archiveType, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'CompressResponse');
  		return $responseObject;

      }
  
}

