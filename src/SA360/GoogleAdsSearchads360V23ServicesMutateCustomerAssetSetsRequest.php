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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesMutateCustomerAssetSetsRequest extends \Google\Collection
{
  /**
   * Not specified. Will return the resource name only in the response.
   */
  public const RESPONSE_CONTENT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The mutate response will be the resource name.
   */
  public const RESPONSE_CONTENT_TYPE_RESOURCE_NAME_ONLY = 'RESOURCE_NAME_ONLY';
  /**
   * The mutate response will contain the resource name and the resource with
   * mutable fields if possible. Otherwise, only the resource name will be
   * returned.
   */
  public const RESPONSE_CONTENT_TYPE_MUTABLE_RESOURCE = 'MUTABLE_RESOURCE';
  protected $collection_key = 'operations';
  protected $operationsType = GoogleAdsSearchads360V23ServicesCustomerAssetSetOperation::class;
  protected $operationsDataType = 'array';
  /**
   * If true, successful operations will be carried out and invalid operations
   * will return errors. If false, all operations will be carried out in one
   * transaction if and only if they are all valid. Default is false.
   *
   * @var bool
   */
  public $partialFailure;
  /**
   * The response content type setting. Determines whether the mutable resource
   * or just the resource name should be returned post mutation.
   *
   * @var string
   */
  public $responseContentType;
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Required. The list of operations to perform on individual customer asset
   * sets.
   *
   * @param GoogleAdsSearchads360V23ServicesCustomerAssetSetOperation[] $operations
   */
  public function setOperations($operations)
  {
    $this->operations = $operations;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesCustomerAssetSetOperation[]
   */
  public function getOperations()
  {
    return $this->operations;
  }
  /**
   * If true, successful operations will be carried out and invalid operations
   * will return errors. If false, all operations will be carried out in one
   * transaction if and only if they are all valid. Default is false.
   *
   * @param bool $partialFailure
   */
  public function setPartialFailure($partialFailure)
  {
    $this->partialFailure = $partialFailure;
  }
  /**
   * @return bool
   */
  public function getPartialFailure()
  {
    return $this->partialFailure;
  }
  /**
   * The response content type setting. Determines whether the mutable resource
   * or just the resource name should be returned post mutation.
   *
   * Accepted values: UNSPECIFIED, RESOURCE_NAME_ONLY, MUTABLE_RESOURCE
   *
   * @param self::RESPONSE_CONTENT_TYPE_* $responseContentType
   */
  public function setResponseContentType($responseContentType)
  {
    $this->responseContentType = $responseContentType;
  }
  /**
   * @return self::RESPONSE_CONTENT_TYPE_*
   */
  public function getResponseContentType()
  {
    return $this->responseContentType;
  }
  /**
   * If true, the request is validated but not executed. Only errors are
   * returned, not results.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesMutateCustomerAssetSetsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesMutateCustomerAssetSetsRequest');
