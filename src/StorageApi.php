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
class StorageApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * GetStorageInfo
	 * Get storage info
   * userId, string: User GUID (required)
   * @return StorageInfoResponse
	 */

   public function GetStorageInfo($userId) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
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
  		                                                'StorageInfoResponse');
  		return $responseObject;

      }
  /**
	 * ListEntities
	 * List entities
   * userId, string: User GUID (required)
   * path, string: Path (optional)
   * pageIndex, int: Page Index (optional)
   * pageSize, int: Page Size (optional)
   * orderBy, string: Order By (optional)
   * orderAsc, bool: Order Asc (optional)
   * filter, string: Filter (optional)
   * fileTypes, string: File Types (optional)
   * extended, bool: Indicates whether an extended information should be returned (optional)
   * @return ListEntitiesResponse
	 */

   public function ListEntities($userId, $path=null, $pageIndex=null, $pageSize=null, $orderBy=null, $orderAsc=null, $filter=null, $fileTypes=null, $extended=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/folders/{*path}?page={pageIndex}&amp;count={pageSize}&amp;order_by={orderBy}&amp;order_asc={orderAsc}&amp;filter={filter}&amp;file_types={fileTypes}&amp;extended={extended}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
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
  		if($pageIndex != null) {
  			$resourcePath = str_replace("{" . "pageIndex" . "}",
  			                            $pageIndex, $resourcePath);
  		}
  		if($pageSize != null) {
  			$resourcePath = str_replace("{" . "pageSize" . "}",
  			                            $pageSize, $resourcePath);
  		}
  		if($orderBy != null) {
  			$resourcePath = str_replace("{" . "orderBy" . "}",
  			                            $orderBy, $resourcePath);
  		}
  		if($orderAsc != null) {
  			$resourcePath = str_replace("{" . "orderAsc" . "}",
  			                            $orderAsc, $resourcePath);
  		}
  		if($filter != null) {
  			$resourcePath = str_replace("{" . "filter" . "}",
  			                            $filter, $resourcePath);
  		}
  		if($fileTypes != null) {
  			$resourcePath = str_replace("{" . "fileTypes" . "}",
  			                            $fileTypes, $resourcePath);
  		}
  		if($extended != null) {
  			$resourcePath = str_replace("{" . "extended" . "}",
  			                            $extended, $resourcePath);
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
  		                                                'ListEntitiesResponse');
  		return $responseObject;

      }
  /**
	 * GetFile
	 * Get file
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * @return string
	 */

   public function GetFile($userId, $fileId) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/files/{fileId}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
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
  		                                                'string');
  		return $responseObject;

      }
  /**
	 * GetSharedFile
	 * Get shared file
   * userEmail, string: User Email (required)
   * filePath, string: File path (required)
   * @return string
	 */

   public function GetSharedFile($userEmail, $filePath) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/shared/{userEmail}/{*filePath}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userEmail != null) {
  			$resourcePath = str_replace("{" . "userEmail" . "}",
  			                            $userEmail, $resourcePath);
  		}
  		if($filePath != null) {
  			$resourcePath = str_replace("{" . "filePath" . "}",
  			                            $filePath, $resourcePath);
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
  		                                                'string');
  		return $responseObject;

      }
  /**
	 * Upload
	 * Upload
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * description, string: Description (optional)
   * body, stream: Stream (required)
   * @return UploadResponse
	 */

   public function Upload($userId, $path, $description=null, $body) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/folders/{*path}?description={description}");
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
  		if($description != null) {
  			$resourcePath = str_replace("{" . "description" . "}",
  			                            $description, $resourcePath);
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
  		                                                'UploadResponse');
  		return $responseObject;

      }
  /**
	 * UploadWeb
	 * Upload Web
   * userId, string: User GUID (required)
   * url, string: Url (required)
   * @return UploadResponse
	 */

   public function UploadWeb($userId, $url) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/urls?url={url}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($url != null) {
  			$resourcePath = str_replace("{" . "url" . "}",
  			                            $url, $resourcePath);
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
  		                                                'UploadResponse');
  		return $responseObject;

      }
  /**
	 * UploadGoogle
	 * Upload Google
   * userId, string: User GUID (required)
   * path, string: File path (required)
   * fileId, string: File unique identifier (optional)
   * @return UploadResponse
	 */

   public function UploadGoogle($userId, $path, $fileId=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/google/files/{*path}?file_id={fileId}");
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
  		                                                'UploadResponse');
  		return $responseObject;

      }
  /**
	 * Delete
	 * Delete
   * userId, string: User GUID (required)
   * fileId, string: File ID (required)
   * @return DeleteResponse
	 */

   public function Delete($userId, $fileId) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/files/{fileId}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
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
	 * DeleteFromFolder
	 * Delete from folder
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * @return DeleteResponse
	 */

   public function DeleteFromFolder($userId, $path) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/folders/{*path}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
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
	 * MoveFile
	 * Move file
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * mode, string: Mode (optional)
   * Groupdocs_Move, string: File ID (move) (optional)
   * Groupdocs_Copy, string: File ID (copy) (optional)
   * @return FileMoveResponse
	 */

   public function MoveFile($userId, $path, $mode=null, $Groupdocs_Move=null, $Groupdocs_Copy=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/files/{*path}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($Groupdocs_Move != null) {
  		 	$headerParams['Groupdocs-Move'] = $this->apiClient->toPathValue($Groupdocs_Move);
  		}
      if($Groupdocs_Copy != null) {
  		 	$headerParams['Groupdocs-Copy'] = $this->apiClient->toPathValue($Groupdocs_Copy);
  		}
      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path != null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		if($mode != null) {
  			$resourcePath = str_replace("{" . "mode" . "}",
  			                            $mode, $resourcePath);
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
  		                                                'FileMoveResponse');
  		return $responseObject;

      }
  /**
	 * MoveFolder
	 * Move folder
   * userId, string: User GUID (required)
   * path, string: Destination Path (required)
   * mode, string: Mode (optional)
   * Groupdocs_Copy, string: Source path (copy) (optional)
   * Groupdocs_Move, string: Source path (move) (optional)
   * @return FolderMoveResponse
	 */

   public function MoveFolder($userId, $path, $mode=null, $Groupdocs_Copy=null, $Groupdocs_Move=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/folders/{*path}?override_mode={mode}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($Groupdocs_Copy != null) {
  		 	$headerParams['Groupdocs-Copy'] = $this->apiClient->toPathValue($Groupdocs_Copy);
  		}
      if($Groupdocs_Move != null) {
  		 	$headerParams['Groupdocs-Move'] = $this->apiClient->toPathValue($Groupdocs_Move);
  		}
      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($path != null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
  		}
  		if($mode != null) {
  			$resourcePath = str_replace("{" . "mode" . "}",
  			                            $mode, $resourcePath);
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
  		                                                'FolderMoveResponse');
  		return $responseObject;

      }
  /**
	 * Create
	 * Create
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * @return CreateFolderResponse
	 */

   public function Create($userId, $path) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/paths/{*path}");
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
  		                                                'CreateFolderResponse');
  		return $responseObject;

      }
  /**
	 * Compress
	 * Compress
   * userId, string: User GUID (required)
   * fileId, string: File ID (required)
   * archiveType, string: Archive type (optional)
   * @return CompressResponse
	 */

   public function Compress($userId, $fileId, $archiveType=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/files/{fileId}/archive/{archiveType}");
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
  /**
	 * CreatePackage
	 * Create Package
   * userId, string: User GUID (required)
   * packageName, string: Package Name (required)
   * storeRelativePath, bool: Store files using relative paths (optional)
   * body, List[string]: Paths (optional)
   * @return CreatePackageResponse
	 */

   public function CreatePackage($userId, $packageName, $storeRelativePath=null, $body=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/packages/{packageName}?storeRelativePath={storeRelativePath}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($packageName != null) {
  			$resourcePath = str_replace("{" . "packageName" . "}",
  			                            $packageName, $resourcePath);
  		}
  		if($storeRelativePath != null) {
  			$resourcePath = str_replace("{" . "storeRelativePath" . "}",
  			                            $storeRelativePath, $resourcePath);
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
  		                                                'CreatePackageResponse');
  		return $responseObject;

      }
  /**
	 * MoveToTrash
	 * Move to trash
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * @return FolderMoveResponse
	 */

   public function MoveToTrash($userId, $path) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/trash/{*path}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
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
  		                                                'FolderMoveResponse');
  		return $responseObject;

      }
  /**
	 * RestoreFromTrash
	 * Restore from trash
   * userId, string: User GUID (required)
   * path, string: Path (required)
   * @return DeleteResponse
	 */

   public function RestoreFromTrash($userId, $path) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/storage/{userId}/trash/{*path}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
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
  
}

