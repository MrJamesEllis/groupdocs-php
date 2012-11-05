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
class SharedApi {

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
	 * Download
	 * Download
   * guid, string: GUID (required)
   * fileName, string: File name (required)
   * render, bool: Render (optional)
   * @return string
	 */

   public function Download($guid, $fileName, $render=null) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/shared/files/{guid}?filename={fileName}&amp;render={render}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($guid != null) {
  			$resourcePath = str_replace("{" . "guid" . "}",
  			                            $guid, $resourcePath);
  		}
  		if($fileName != null) {
  			$resourcePath = str_replace("{" . "fileName" . "}",
  			                            $fileName, $resourcePath);
  		}
  		if($render != null) {
  			$resourcePath = str_replace("{" . "render" . "}",
  			                            $render, $resourcePath);
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
  		                                                'string');
  		return $responseObject;

      }
  /**
	 * GetXml
	 * Get xml
   * guid, string: GUID (required)
   * @return string
	 */

   public function GetXml($guid) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/shared/files/{guid}/xml");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($guid != null) {
  			$resourcePath = str_replace("{" . "guid" . "}",
  			                            $guid, $resourcePath);
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
  		                                                'string');
  		return $responseObject;

      }
  /**
	 * GetPackage
	 * Get package
   * path, string: Path (required)
   * @return string
	 */

   public function GetPackage($path) {
  	  //parse inputs
  	  $resourcePath = str_replace("*", "", "/shared/packages/{*path}");
  	  $resourcePath = str_replace("{format}", "json", $resourcePath);
  	  $method = "GET";
      $queryParams = array();
      $headerParams = array();

      if($path != null) {
  			$resourcePath = str_replace("{" . "path" . "}",
  			                            $path, $resourcePath);
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
  		                                                'string');
  		return $responseObject;

      }
  
}

