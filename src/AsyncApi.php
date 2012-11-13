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
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
class AsyncApi {

	private $basePath = "https://api.groupdocs.com/v2.0";

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

    public function setBasePath($basePath) {
	  $this->basePath = $basePath;
	}
	  
	public function getBasePath() {
	  $this->basePath;
	}

  /**
	 * GetJob
	 * Get job
   * userId, string: User GUID (required)
   * jobId, string: Job Id or Guid (required)
   * @return GetJobResponse
	 */

   public function GetJob($userId, $jobId) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/jobs/{jobId}?format=xml");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($jobId !== null) {
  			$resourcePath = str_replace("{" . "jobId" . "}",
  			                            $jobId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'GetJobResponse');
  		return $responseObject;

      }
  /**
	 * GetJobJson
	 * Get job json
   * userId, string: User GUID (required)
   * jobId, string: Job id (required)
   * @return GetJobResponse
	 */

   public function GetJobJson($userId, $jobId) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/jobs/{jobId}?format=json");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($jobId !== null) {
  			$resourcePath = str_replace("{" . "jobId" . "}",
  			                            $jobId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'GetJobResponse');
  		return $responseObject;

      }
  /**
	 * GetJobResources
	 * Get job resources
   * userId, string: User GUID (required)
   * statusIds, string: Comma separated job status identifiers (required)
   * @return GetJobResourcesResponse
	 */

   public function GetJobResources($userId, $statusIds) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/jobs/resources?statusIds={statusIds}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($statusIds !== null) {
  			$resourcePath = str_replace("{" . "statusIds" . "}",
  			                            $statusIds, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'GetJobResourcesResponse');
  		return $responseObject;

      }
  /**
	 * GetJobDocuments
	 * Get job documents
   * userId, string: User GUID (required)
   * jobId, string: Job id or guid (required)
   * format, string: Format (optional)
   * @return GetJobDocumentsResponse
	 */

   public function GetJobDocuments($userId, $jobId, $format=null) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/jobs/{jobId}/documents?format={format}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($jobId !== null) {
  			$resourcePath = str_replace("{" . "jobId" . "}",
  			                            $jobId, $resourcePath);
  		}
  		if($format !== null) {
  			$resourcePath = str_replace("{" . "format" . "}",
  			                            $format, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'GetJobDocumentsResponse');
  		return $responseObject;

      }
  /**
	 * CreateJob
	 * Create job
   * userId, string: User GUID (required)
   * body, JobInfo: Job (required)
   * @return CreateJobResponse
	 */

   public function CreateJob($userId, $body) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/jobs");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'CreateJobResponse');
  		return $responseObject;

      }
  /**
	 * DeleteJob
	 * Delete draft job
   * userId, string: User GUID (required)
   * jobGuid, string: Job Guid (required)
   * @return DeleteResult
	 */

   public function DeleteJob($userId, $jobGuid) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/jobs/{jobGuid}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "DELETE";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($jobGuid !== null) {
  			$resourcePath = str_replace("{" . "jobGuid" . "}",
  			                            $jobGuid, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'DeleteResult');
  		return $responseObject;

      }
  /**
	 * AddJobDocument
	 * Add job document
   * userId, string: User GUID (required)
   * jobId, string: Job id or guid (required)
   * fileId, string: File GUID (required)
   * checkOwnership, bool: Check Document Ownership (required)
   * formats, string: Formats (optional)
   * @return AddJobDocumentResponse
	 */

   public function AddJobDocument($userId, $jobId, $fileId, $checkOwnership, $formats=null) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/jobs/{jobId}/files/{fileId}?check_ownership={checkOwnership}&out_formats={formats}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($jobId !== null) {
  			$resourcePath = str_replace("{" . "jobId" . "}",
  			                            $jobId, $resourcePath);
  		}
  		if($fileId !== null) {
  			$resourcePath = str_replace("{" . "fileId" . "}",
  			                            $fileId, $resourcePath);
  		}
  		if($checkOwnership !== null) {
  			$resourcePath = str_replace("{" . "checkOwnership" . "}",
  			                            $checkOwnership, $resourcePath);
  		}
  		if($formats !== null) {
  			$resourcePath = str_replace("{" . "formats" . "}",
  			                            $formats, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'AddJobDocumentResponse');
  		return $responseObject;

      }
  /**
	 * DeleteJobDocument
	 * Delete document from job
   * userId, string: User GUID (required)
   * jobGuid, string: Job Guid (required)
   * documentId, string: Document GUID (required)
   * @return DeleteResponse
	 */

   public function DeleteJobDocument($userId, $jobGuid, $documentId) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/jobs/{jobGuid}/documents/{documentId}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "DELETE";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($jobGuid !== null) {
  			$resourcePath = str_replace("{" . "jobGuid" . "}",
  			                            $jobGuid, $resourcePath);
  		}
  		if($documentId !== null) {
  			$resourcePath = str_replace("{" . "documentId" . "}",
  			                            $documentId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'DeleteResponse');
  		return $responseObject;

      }
  /**
	 * AddJobDocumentUrl
	 * Add job document url
   * userId, string: User GUID (required)
   * jobId, string: Job id (required)
   * absoluteUrl, string: Absolute Url (required)
   * formats, string: Formats (optional)
   * @return AddJobDocumentResponse
	 */

   public function AddJobDocumentUrl($userId, $jobId, $absoluteUrl, $formats=null) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/jobs/{jobId}/urls?absolute_url={absoluteUrl}&out_formats={formats}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($jobId !== null) {
  			$resourcePath = str_replace("{" . "jobId" . "}",
  			                            $jobId, $resourcePath);
  		}
  		if($absoluteUrl !== null) {
  			$resourcePath = str_replace("{" . "absoluteUrl" . "}",
  			                            $absoluteUrl, $resourcePath);
  		}
  		if($formats !== null) {
  			$resourcePath = str_replace("{" . "formats" . "}",
  			                            $formats, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'AddJobDocumentResponse');
  		return $responseObject;

      }
  /**
	 * UpdateJob
	 * Update job
   * userId, string: User GUID (required)
   * jobId, string: Job id or Guid (required)
   * body, JobInfo: Job (required)
   * @return UpdateJobResponse
	 */

   public function UpdateJob($userId, $jobId, $body) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/jobs/{jobId}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "PUT";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($jobId !== null) {
  			$resourcePath = str_replace("{" . "jobId" . "}",
  			                            $jobId, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'UpdateJobResponse');
  		return $responseObject;

      }
  /**
	 * GetJobs
	 * Get jobs
   * userId, string: User GUID (required)
   * pageIndex, string: Page Index (optional)
   * pageSize, string: Page Size (optional)
   * DateTime, string: Date (optional)
   * statusIds, string: Comma separated status identifiers (optional)
   * actions, string: Actions (optional)
   * excludedActions, string: Excluded actions (optional)
   * @return GetJobsResponse
	 */

   public function GetJobs($userId, $pageIndex=null, $pageSize=null, $DateTime=null, $statusIds=null, $actions=null, $excludedActions=null) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/jobs?page={pageIndex}&count={pageSize}&date={date}&statusIds={statusIds}&actions={actions}&excluded_actions={excludedActions}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($pageIndex !== null) {
  			$resourcePath = str_replace("{" . "pageIndex" . "}",
  			                            $pageIndex, $resourcePath);
  		}
  		if($pageSize !== null) {
  			$resourcePath = str_replace("{" . "pageSize" . "}",
  			                            $pageSize, $resourcePath);
  		}
  		if($DateTime !== null) {
  			$resourcePath = str_replace("{" . "date" . "}",
  			                            $DateTime, $resourcePath);
  		}
  		if($statusIds !== null) {
  			$resourcePath = str_replace("{" . "statusIds" . "}",
  			                            $statusIds, $resourcePath);
  		}
  		if($actions !== null) {
  			$resourcePath = str_replace("{" . "actions" . "}",
  			                            $actions, $resourcePath);
  		}
  		if($excludedActions !== null) {
  			$resourcePath = str_replace("{" . "excludedActions" . "}",
  			                            $excludedActions, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'GetJobsResponse');
  		return $responseObject;

      }
  /**
	 * GetJobsDocuments
	 * Get jobs documents
   * userId, string: User GUID (required)
   * pageIndex, string: Page Index (optional)
   * pageSize, string: Page Size (optional)
   * actions, string: Actions (optional)
   * excludedActions, string: Excluded actions (optional)
   * orderBy, string: Order by (optional)
   * orderAsc, bool: Order asc (optional)
   * @return GetJobsDocumentsResponse
	 */

   public function GetJobsDocuments($userId, $pageIndex=null, $pageSize=null, $actions=null, $excludedActions=null, $orderBy=null, $orderAsc=null) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/jobs/documents?page={pageIndex}&count={pageSize}&actions={actions}&excluded_actions={excludedActions}&order_by={orderBy}&order_asc={orderAsc}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($pageIndex !== null) {
  			$resourcePath = str_replace("{" . "pageIndex" . "}",
  			                            $pageIndex, $resourcePath);
  		}
  		if($pageSize !== null) {
  			$resourcePath = str_replace("{" . "pageSize" . "}",
  			                            $pageSize, $resourcePath);
  		}
  		if($actions !== null) {
  			$resourcePath = str_replace("{" . "actions" . "}",
  			                            $actions, $resourcePath);
  		}
  		if($excludedActions !== null) {
  			$resourcePath = str_replace("{" . "excludedActions" . "}",
  			                            $excludedActions, $resourcePath);
  		}
  		if($orderBy !== null) {
  			$resourcePath = str_replace("{" . "orderBy" . "}",
  			                            $orderBy, $resourcePath);
  		}
  		if($orderAsc !== null) {
  			$resourcePath = str_replace("{" . "orderAsc" . "}",
  			                            $orderAsc, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'GetJobsDocumentsResponse');
  		return $responseObject;

      }
  /**
	 * Convert
	 * Convert
   * userId, string: User GUID (required)
   * fileId, string: File GUID (required)
   * targetType, string: Target type (optional)
   * emailResults, string: Email results (optional)
   * description, string: Description (optional)
   * printScript, bool: Print (optional)
   * callbackUrl, string: Callback url (optional)
   * @return ConvertResponse
	 */

   public function Convert($userId, $fileId, $targetType=null, $emailResults=null, $description=null, $printScript=null, $callbackUrl=null) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/async/{userId}/files/{fileId}?new_type={targetType}&email_results={emailResults}&new_description={description}&print_script={printScript}&callback={callbackUrl}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "POST";
      $queryParams = array();
      $headerParams = array();

      if($userId !== null) {
  			$resourcePath = str_replace("{" . "userId" . "}",
  			                            $userId, $resourcePath);
  		}
  		if($fileId !== null) {
  			$resourcePath = str_replace("{" . "fileId" . "}",
  			                            $fileId, $resourcePath);
  		}
  		if($targetType !== null) {
  			$resourcePath = str_replace("{" . "targetType" . "}",
  			                            $targetType, $resourcePath);
  		}
  		if($emailResults !== null) {
  			$resourcePath = str_replace("{" . "emailResults" . "}",
  			                            $emailResults, $resourcePath);
  		}
  		if($description !== null) {
  			$resourcePath = str_replace("{" . "description" . "}",
  			                            $description, $resourcePath);
  		}
  		if($printScript !== null) {
  			$resourcePath = str_replace("{" . "printScript" . "}",
  			                            $printScript, $resourcePath);
  		}
  		if($callbackUrl !== null) {
  			$resourcePath = str_replace("{" . "callbackUrl" . "}",
  			                            $callbackUrl, $resourcePath);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($this->basePath, $resourcePath, $method,
  		                                      $queryParams, $body, $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'ConvertResponse');
  		return $responseObject;

      }
  
}

