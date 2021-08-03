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

namespace Google\Service\Document\Resource;

use Google\Service\Document\GoogleCloudDocumentaiV1BatchProcessRequest;
use Google\Service\Document\GoogleCloudDocumentaiV1ProcessRequest;
use Google\Service\Document\GoogleCloudDocumentaiV1ProcessResponse;
use Google\Service\Document\GoogleLongrunningOperation;

/**
 * The "processorVersions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $documentaiService = new Google\Service\Document(...);
 *   $processorVersions = $documentaiService->processorVersions;
 *  </code>
 */
class ProjectsLocationsProcessorsProcessorVersions extends \Google\Service\Resource
{
  /**
   * LRO endpoint to batch process many documents. The output is written to Cloud
   * Storage as JSON in the [Document] format. (processorVersions.batchProcess)
   *
   * @param string $name Required. The resource name of Processor or
   * ProcessorVersion. Format:
   * projects/{project}/locations/{location}/processors/{processor}, or projects/{
   * project}/locations/{location}/processors/{processor}/processorVersions/{proce
   * ssorVersion}
   * @param GoogleCloudDocumentaiV1BatchProcessRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   */
  public function batchProcess($name, GoogleCloudDocumentaiV1BatchProcessRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('batchProcess', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Processes a single document. (processorVersions.process)
   *
   * @param string $name Required. The resource name of the Processor or
   * ProcessorVersion to use for processing. If a Processor is specified, the
   * server will use its default version. Format:
   * projects/{project}/locations/{location}/processors/{processor}, or projects/{
   * project}/locations/{location}/processors/{processor}/processorVersions/{proce
   * ssorVersion}
   * @param GoogleCloudDocumentaiV1ProcessRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDocumentaiV1ProcessResponse
   */
  public function process($name, GoogleCloudDocumentaiV1ProcessRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('process', [$params], GoogleCloudDocumentaiV1ProcessResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsProcessorsProcessorVersions::class, 'Google_Service_Document_Resource_ProjectsLocationsProcessorsProcessorVersions');
