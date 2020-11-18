<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Discovery_RestMethod extends Google_Collection
{
  protected $collection_key = 'scopes';
  public $description;
  public $etagRequired;
  public $httpMethod;
  public $id;
  protected $mediaUploadType = 'Google_Service_Discovery_RestMethodMediaUpload';
  protected $mediaUploadDataType = '';
  public $parameterOrder;
  protected $parametersType = 'Google_Service_Discovery_JsonSchema';
  protected $parametersDataType = 'map';
  public $path;
  protected $requestType = 'Google_Service_Discovery_RestMethodRequest';
  protected $requestDataType = '';
  protected $responseType = 'Google_Service_Discovery_RestMethodResponse';
  protected $responseDataType = '';
  public $scopes;
  public $supportsMediaDownload;
  public $supportsMediaUpload;
  public $supportsSubscription;
  public $useMediaDownloadService;

  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setEtagRequired($etagRequired)
  {
    $this->etagRequired = $etagRequired;
  }
  public function getEtagRequired()
  {
    return $this->etagRequired;
  }
  public function setHttpMethod($httpMethod)
  {
    $this->httpMethod = $httpMethod;
  }
  public function getHttpMethod()
  {
    return $this->httpMethod;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param Google_Service_Discovery_RestMethodMediaUpload
   */
  public function setMediaUpload(Google_Service_Discovery_RestMethodMediaUpload $mediaUpload)
  {
    $this->mediaUpload = $mediaUpload;
  }
  /**
   * @return Google_Service_Discovery_RestMethodMediaUpload
   */
  public function getMediaUpload()
  {
    return $this->mediaUpload;
  }
  public function setParameterOrder($parameterOrder)
  {
    $this->parameterOrder = $parameterOrder;
  }
  public function getParameterOrder()
  {
    return $this->parameterOrder;
  }
  /**
   * @param Google_Service_Discovery_JsonSchema
   */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return Google_Service_Discovery_JsonSchema
   */
  public function getParameters()
  {
    return $this->parameters;
  }
  public function setPath($path)
  {
    $this->path = $path;
  }
  public function getPath()
  {
    return $this->path;
  }
  /**
   * @param Google_Service_Discovery_RestMethodRequest
   */
  public function setRequest(Google_Service_Discovery_RestMethodRequest $request)
  {
    $this->request = $request;
  }
  /**
   * @return Google_Service_Discovery_RestMethodRequest
   */
  public function getRequest()
  {
    return $this->request;
  }
  /**
   * @param Google_Service_Discovery_RestMethodResponse
   */
  public function setResponse(Google_Service_Discovery_RestMethodResponse $response)
  {
    $this->response = $response;
  }
  /**
   * @return Google_Service_Discovery_RestMethodResponse
   */
  public function getResponse()
  {
    return $this->response;
  }
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  public function getScopes()
  {
    return $this->scopes;
  }
  public function setSupportsMediaDownload($supportsMediaDownload)
  {
    $this->supportsMediaDownload = $supportsMediaDownload;
  }
  public function getSupportsMediaDownload()
  {
    return $this->supportsMediaDownload;
  }
  public function setSupportsMediaUpload($supportsMediaUpload)
  {
    $this->supportsMediaUpload = $supportsMediaUpload;
  }
  public function getSupportsMediaUpload()
  {
    return $this->supportsMediaUpload;
  }
  public function setSupportsSubscription($supportsSubscription)
  {
    $this->supportsSubscription = $supportsSubscription;
  }
  public function getSupportsSubscription()
  {
    return $this->supportsSubscription;
  }
  public function setUseMediaDownloadService($useMediaDownloadService)
  {
    $this->useMediaDownloadService = $useMediaDownloadService;
  }
  public function getUseMediaDownloadService()
  {
    return $this->useMediaDownloadService;
  }
}
