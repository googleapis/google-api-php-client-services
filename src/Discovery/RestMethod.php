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

namespace Google\Service\Discovery;

class RestMethod extends \Google\Collection
{
  protected $collection_key = 'scopes';
  /**
   * @var string
   */
  public $description;
  /**
   * @var bool
   */
  public $etagRequired;
  /**
   * @var string
   */
  public $flatPath;
  /**
   * @var string
   */
  public $httpMethod;
  /**
   * @var string
   */
  public $id;
  protected $mediaUploadType = RestMethodMediaUpload::class;
  protected $mediaUploadDataType = '';
  /**
   * @var string[]
   */
  public $parameterOrder;
  protected $parametersType = JsonSchema::class;
  protected $parametersDataType = 'map';
  /**
   * @var string
   */
  public $path;
  protected $requestType = RestMethodRequest::class;
  protected $requestDataType = '';
  protected $responseType = RestMethodResponse::class;
  protected $responseDataType = '';
  /**
   * @var string[]
   */
  public $scopes;
  /**
   * @var bool
   */
  public $supportsMediaDownload;
  /**
   * @var bool
   */
  public $supportsMediaUpload;
  /**
   * @var bool
   */
  public $supportsSubscription;
  /**
   * @var bool
   */
  public $useMediaDownloadService;

  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param bool
   */
  public function setEtagRequired($etagRequired)
  {
    $this->etagRequired = $etagRequired;
  }
  /**
   * @return bool
   */
  public function getEtagRequired()
  {
    return $this->etagRequired;
  }
  /**
   * @param string
   */
  public function setFlatPath($flatPath)
  {
    $this->flatPath = $flatPath;
  }
  /**
   * @return string
   */
  public function getFlatPath()
  {
    return $this->flatPath;
  }
  /**
   * @param string
   */
  public function setHttpMethod($httpMethod)
  {
    $this->httpMethod = $httpMethod;
  }
  /**
   * @return string
   */
  public function getHttpMethod()
  {
    return $this->httpMethod;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param RestMethodMediaUpload
   */
  public function setMediaUpload(RestMethodMediaUpload $mediaUpload)
  {
    $this->mediaUpload = $mediaUpload;
  }
  /**
   * @return RestMethodMediaUpload
   */
  public function getMediaUpload()
  {
    return $this->mediaUpload;
  }
  /**
   * @param string[]
   */
  public function setParameterOrder($parameterOrder)
  {
    $this->parameterOrder = $parameterOrder;
  }
  /**
   * @return string[]
   */
  public function getParameterOrder()
  {
    return $this->parameterOrder;
  }
  /**
   * @param JsonSchema[]
   */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return JsonSchema[]
   */
  public function getParameters()
  {
    return $this->parameters;
  }
  /**
   * @param string
   */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /**
   * @return string
   */
  public function getPath()
  {
    return $this->path;
  }
  /**
   * @param RestMethodRequest
   */
  public function setRequest(RestMethodRequest $request)
  {
    $this->request = $request;
  }
  /**
   * @return RestMethodRequest
   */
  public function getRequest()
  {
    return $this->request;
  }
  /**
   * @param RestMethodResponse
   */
  public function setResponse(RestMethodResponse $response)
  {
    $this->response = $response;
  }
  /**
   * @return RestMethodResponse
   */
  public function getResponse()
  {
    return $this->response;
  }
  /**
   * @param string[]
   */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /**
   * @return string[]
   */
  public function getScopes()
  {
    return $this->scopes;
  }
  /**
   * @param bool
   */
  public function setSupportsMediaDownload($supportsMediaDownload)
  {
    $this->supportsMediaDownload = $supportsMediaDownload;
  }
  /**
   * @return bool
   */
  public function getSupportsMediaDownload()
  {
    return $this->supportsMediaDownload;
  }
  /**
   * @param bool
   */
  public function setSupportsMediaUpload($supportsMediaUpload)
  {
    $this->supportsMediaUpload = $supportsMediaUpload;
  }
  /**
   * @return bool
   */
  public function getSupportsMediaUpload()
  {
    return $this->supportsMediaUpload;
  }
  /**
   * @param bool
   */
  public function setSupportsSubscription($supportsSubscription)
  {
    $this->supportsSubscription = $supportsSubscription;
  }
  /**
   * @return bool
   */
  public function getSupportsSubscription()
  {
    return $this->supportsSubscription;
  }
  /**
   * @param bool
   */
  public function setUseMediaDownloadService($useMediaDownloadService)
  {
    $this->useMediaDownloadService = $useMediaDownloadService;
  }
  /**
   * @return bool
   */
  public function getUseMediaDownloadService()
  {
    return $this->useMediaDownloadService;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestMethod::class, 'Google_Service_Discovery_RestMethod');
