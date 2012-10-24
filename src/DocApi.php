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
class DocApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * ViewDocument
	 * View Document
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * pageNumber, string: Page Number (optional)
   * pageCount, string: Page Count (optional)
   * width, string: Width (optional)
   * quality, string: Quality (optional)
   * usePdf, string: Use Pdf (optional)
   * @return ViewDocumentResponse
	 */

   public function ViewDocument($userId, $fileId, $pageNumber=null, $pageCount=null, $width=null, $quality=null, $usePdf=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/thumbnails?page_number={pageNumber}&amp;page_count={pageCount}&amp;width={width}&amp;quality={quality}&amp;use_pdf={usePdf}");
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
  		if($pageNumber != null) {
  			$resourcePath = str_replace("{" . "pageNumber" . "}",
  			                            $pageNumber, $resourcePath);
  		}
  		if($pageCount != null) {
  			$resourcePath = str_replace("{" . "pageCount" . "}",
  			                            $pageCount, $resourcePath);
  		}
  		if($width != null) {
  			$resourcePath = str_replace("{" . "width" . "}",
  			                            $width, $resourcePath);
  		}
  		if($quality != null) {
  			$resourcePath = str_replace("{" . "quality" . "}",
  			                            $quality, $resourcePath);
  		}
  		if($usePdf != null) {
  			$resourcePath = str_replace("{" . "usePdf" . "}",
  			                            $usePdf, $resourcePath);
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
  		                                                'ViewDocumentResponse');
  		return $responseObject;

      }
  /**
	 * GetDocumentViews
	 * Get Document Views
   * userId, string: User GUID (required)
   * startIndex, string: A historical view entry to start from. Historical entries are sorted from the recent to old ones (optional)
   * pageSize, string: The total number of requested entries. If pageSize is equal to -1, all available entries will be returned (optional)
   * @return DocumentViewsResponse
	 */

   public function GetDocumentViews($userId, $startIndex=null, $pageSize=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/views?page_index={startIndex}&amp;page_size={pageSize}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($startIndex != null) {
  			$resourcePath = str_replace("{" . "startIndex" . "}",
  			                            $startIndex, $resourcePath);
  		}
  		if($pageSize != null) {
  			$resourcePath = str_replace("{" . "pageSize" . "}",
  			                            $pageSize, $resourcePath);
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
  		                                                'DocumentViewsResponse');
  		return $responseObject;

      }
  /**
	 * ShareDocument
	 * Share document
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * body, List[string]: Sharers (required)
   * @return SharedUsersResponse
	 */

   public function ShareDocument($userId, $fileId, $body) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/sharers");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
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
  		                                                'SharedUsersResponse');
  		return $responseObject;

      }
  /**
	 * UnshareDocument
	 * Unshare document
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * @return SharedUsersResponse
	 */

   public function UnshareDocument($userId, $fileId) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/sharers");
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
  		                                                'SharedUsersResponse');
  		return $responseObject;

      }
  /**
	 * GetFolderSharers
	 * Get folder sharers
   * userId, string: User GUID (required)
   * folderId, string: Folder Id (required)
   * @return SharedUsersResponse
	 */

   public function GetFolderSharers($userId, $folderId) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/folders/{folderId}/sharers");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($folderId != null) {
  			$resourcePath = str_replace("{" . "folderId" . "}",
  			                            $folderId, $resourcePath);
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
  		                                                'SharedUsersResponse');
  		return $responseObject;

      }
  /**
	 * ShareFolder
	 * Share folder
   * userId, string: User GUID (required)
   * folderId, string: Folder Id (required)
   * body, List[string]: Sharers (required)
   * @return SharedUsersResponse
	 */

   public function ShareFolder($userId, $folderId, $body) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/folders/{folderId}/sharers");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($folderId != null) {
  			$resourcePath = str_replace("{" . "folderId" . "}",
  			                            $folderId, $resourcePath);
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
  		                                                'SharedUsersResponse');
  		return $responseObject;

      }
  /**
	 * UnshareFolder
	 * Unshare folder
   * userId, string: User GUID (required)
   * folderId, string: Folder Id (required)
   * @return SharedUsersResponse
	 */

   public function UnshareFolder($userId, $folderId) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/folders/{folderId}/sharers");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($folderId != null) {
  			$resourcePath = str_replace("{" . "folderId" . "}",
  			                            $folderId, $resourcePath);
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
  		                                                'SharedUsersResponse');
  		return $responseObject;

      }
  /**
	 * SetDocumentAccessMode
	 * Set document access mode
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * mode, string: Mode (optional)
   * @return DocumentAccessInfoResponse
	 */

   public function SetDocumentAccessMode($userId, $fileId, $mode=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/accessinfo?mode={mode}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
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
  		                                                'DocumentAccessInfoResponse');
  		return $responseObject;

      }
  /**
	 * GetDocumentAccessInfo
	 * Get document access info
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * @return DocumentAccessInfoResponse
	 */

   public function GetDocumentAccessInfo($userId, $fileId) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/accessinfo");
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
  		                                                'DocumentAccessInfoResponse');
  		return $responseObject;

      }
  /**
	 * GetDocumentMetadata
	 * Get document metadata
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * @return GetDocumentInfoResponse
	 */

   public function GetDocumentMetadata($userId, $fileId) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/metadata");
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
  		                                                'GetDocumentInfoResponse');
  		return $responseObject;

      }
  /**
	 * GetDocumentMetadataByPath
	 * Returns document metadata
   * userId, string: User GUID (required)
   * path, string: File path to return metadata for (required)
   * @return GetDocumentInfoResponse
	 */

   public function GetDocumentMetadataByPath($userId, $path) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{*path}");
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
  		                                                'GetDocumentInfoResponse');
  		return $responseObject;

      }
  /**
	 * SetDocumentUserStatus
	 * Set document user status
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * status, string: Status (required)
   * @return DocumentUserStatusResponse
	 */

   public function SetDocumentUserStatus($userId, $fileId, $status) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/sharer");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "PUT";
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
  		if($status != null) {
  			$resourcePath = str_replace("{" . "status" . "}",
  			                            $status, $resourcePath);
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
  		                                                'DocumentUserStatusResponse');
  		return $responseObject;

      }
  /**
	 * GetSharedDocuments
	 * Get shared documents
   * userId, string: User GUID (required)
   * sharesTypes, string: Shares types (optional)
   * pageIndex, string: Page index (optional)
   * pageSize, string: Page size (optional)
   * orderBy, string: Order by (optional)
   * orderAsc, bool: Order asc (optional)
   * @return SharedDocumentsResponse
	 */

   public function GetSharedDocuments($userId, $sharesTypes=null, $pageIndex=null, $pageSize=null, $orderBy=null, $orderAsc=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/shares/{sharesTypes}?page_index={pageIndex}&amp;page_size={pageSize}&amp;order_by={orderBy}&amp;order_asc={orderAsc}");
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId != null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($sharesTypes != null) {
  			$resourcePath = str_replace("{" . "sharesTypes" . "}",
  			                            $sharesTypes, $resourcePath);
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
  		                                                'SharedDocumentsResponse');
  		return $responseObject;

      }
  /**
	 * GetTemplateFields
	 * Get template fields
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * includeGeometry, bool: Include geometry (optional)
   * @return TemplateFieldsResponse
	 */

   public function GetTemplateFields($userId, $fileId, $includeGeometry=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/fields?include_geometry={includeGeometry}");
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
  		if($includeGeometry != null) {
  			$resourcePath = str_replace("{" . "includeGeometry" . "}",
  			                            $includeGeometry, $resourcePath);
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
  		                                                'TemplateFieldsResponse');
  		return $responseObject;

      }
  /**
	 * GetDocumentFormats
	 * Get document formats
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * @return GetDocumentForeignTypesResponse
	 */

   public function GetDocumentFormats($userId, $fileId) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/formats");
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
  		                                                'GetDocumentForeignTypesResponse');
  		return $responseObject;

      }
  /**
	 * GetDocumentPageImage
	 * Returns a stream of bytes representing a particular document page image.
   * userId, string: GroupDocs user global unique identifier. (required)
   * fileId, string: Document global unique identifier. (required)
   * pageNumber, int: Document page number to get image for. (required)
   * dimension, string: Image dimension in format '&lt;width&gt;x&lt;height&gt;' (one or both values can be omitted). (required)
   * quality, int: Image qualiry in range 1-100. (optional)
   * usePdf, bool: A flag indicating whether a document should be converted to PDF format before generating the image. (optional)
   * expiresOn, bool: The date and time in milliseconds since epoch the URL expires. (optional)
   * @return stream
	 */

   public function GetDocumentPageImage($userId, $fileId, $pageNumber, $dimension, $quality=null, $usePdf=null, $expiresOn=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/pages/{pageNumber}/images/{dimension}?quality={quality}&amp;use_pdf={usePdf}&amp;expires={expiresOn}");
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
  		if($pageNumber != null) {
  			$resourcePath = str_replace("{" . "pageNumber" . "}",
  			                            $pageNumber, $resourcePath);
  		}
  		if($dimension != null) {
  			$resourcePath = str_replace("{" . "dimension" . "}",
  			                            $dimension, $resourcePath);
  		}
  		if($quality != null) {
  			$resourcePath = str_replace("{" . "quality" . "}",
  			                            $quality, $resourcePath);
  		}
  		if($usePdf != null) {
  			$resourcePath = str_replace("{" . "usePdf" . "}",
  			                            $usePdf, $resourcePath);
  		}
  		if($expiresOn != null) {
  			$resourcePath = str_replace("{" . "expiresOn" . "}",
  			                            $expiresOn, $resourcePath);
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
  		                                                'stream');
  		return $responseObject;

      }
  /**
	 * GetDocumentPagesImageUrls
	 * Returns a list of URLs pointing to document page images.
   * userId, string: GroupDocs user global unique identifier. (required)
   * fileId, string: Document global unique identifier. (required)
   * firstPage, int: Document page number to start from. (optional)
   * pageCount, int: Page count to return URLs for. (optional)
   * dimension, string: Image dimension in format '&lt;width&gt;x&lt;height&gt;' (one or both values can be omitted). (required)
   * quality, int: Image qualiry in range 1-100. (optional)
   * usePdf, bool: A flag indicating whether a document should be converted to PDF format before generating the image. (optional)
   * token, string: A document viewer session token returned by the View Document request. (optional)
   * @return GetImageUrlsResponse
	 */

   public function GetDocumentPagesImageUrls($userId, $fileId, $firstPage=null, $pageCount=null, $dimension, $quality=null, $usePdf=null, $token=null) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/pages/images/{dimension}/urls?first_page={firstPage}&amp;page_count={pageCount}&amp;quality={quality}&amp;use_pdf={usePdf}&amp;token={token}");
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
  		if($firstPage != null) {
  			$resourcePath = str_replace("{" . "firstPage" . "}",
  			                            $firstPage, $resourcePath);
  		}
  		if($pageCount != null) {
  			$resourcePath = str_replace("{" . "pageCount" . "}",
  			                            $pageCount, $resourcePath);
  		}
  		if($dimension != null) {
  			$resourcePath = str_replace("{" . "dimension" . "}",
  			                            $dimension, $resourcePath);
  		}
  		if($quality != null) {
  			$resourcePath = str_replace("{" . "quality" . "}",
  			                            $quality, $resourcePath);
  		}
  		if($usePdf != null) {
  			$resourcePath = str_replace("{" . "usePdf" . "}",
  			                            $usePdf, $resourcePath);
  		}
  		if($token != null) {
  			$resourcePath = str_replace("{" . "token" . "}",
  			                            $token, $resourcePath);
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
  		                                                'GetImageUrlsResponse');
  		return $responseObject;

      }
  /**
	 * GetEditLock
	 * Locks a document for editing and returns editing metadata.
   * userId, string: GroupDocs user global unique identifier. (required)
   * fileId, string: Document global unique identifier. (required)
   * @return GetEditLockResponse
	 */

   public function GetEditLock($userId, $fileId) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/editlock");
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
  		                                                'GetEditLockResponse');
  		return $responseObject;

      }
  /**
	 * RemoveEditLock
	 * Removes edit lock for a document and replaces the document with its edited copy.
   * userId, string: GroupDocs user global unique identifier. (required)
   * fileId, string: Document global unique identifier. (required)
   * @return RemoveEditLockResponse
	 */

   public function RemoveEditLock($userId, $fileId) {

  		//parse inputs
  		$resourcePath = str_replace("*", "", "/doc/{userId}/files/{fileId}/editlock");
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
  		                                                'RemoveEditLockResponse');
  		return $responseObject;

      }
  
}

