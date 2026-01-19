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

namespace Google\Service\AnalyticsHub;

class AIInference extends \Google\Model
{
  /**
   * Required. An endpoint to a Vertex AI model of the form
   * `projects/{project}/locations/{location}/endpoints/{endpoint}` or `projects
   * /{project}/locations/{location}/publishers/{publisher}/models/{model}`.
   * Vertex AI API requests will be sent to this endpoint.
   *
   * @var string
   */
  public $endpoint;
  /**
   * Optional. The service account to use to make prediction requests against
   * endpoints. The resource creator or updater that specifies this field must
   * have `iam.serviceAccounts.actAs` permission on the service account. If not
   * specified, the Pub/Sub [service
   * agent]({$universe.dns_names.final_documentation_domain}/iam/docs/service-
   * agents), service-{project_number}@gcp-sa-pubsub.iam.gserviceaccount.com, is
   * used.
   *
   * @var string
   */
  public $serviceAccountEmail;
  protected $unstructuredInferenceType = UnstructuredInference::class;
  protected $unstructuredInferenceDataType = '';

  /**
   * Required. An endpoint to a Vertex AI model of the form
   * `projects/{project}/locations/{location}/endpoints/{endpoint}` or `projects
   * /{project}/locations/{location}/publishers/{publisher}/models/{model}`.
   * Vertex AI API requests will be sent to this endpoint.
   *
   * @param string $endpoint
   */
  public function setEndpoint($endpoint)
  {
    $this->endpoint = $endpoint;
  }
  /**
   * @return string
   */
  public function getEndpoint()
  {
    return $this->endpoint;
  }
  /**
   * Optional. The service account to use to make prediction requests against
   * endpoints. The resource creator or updater that specifies this field must
   * have `iam.serviceAccounts.actAs` permission on the service account. If not
   * specified, the Pub/Sub [service
   * agent]({$universe.dns_names.final_documentation_domain}/iam/docs/service-
   * agents), service-{project_number}@gcp-sa-pubsub.iam.gserviceaccount.com, is
   * used.
   *
   * @param string $serviceAccountEmail
   */
  public function setServiceAccountEmail($serviceAccountEmail)
  {
    $this->serviceAccountEmail = $serviceAccountEmail;
  }
  /**
   * @return string
   */
  public function getServiceAccountEmail()
  {
    return $this->serviceAccountEmail;
  }
  /**
   * Optional. Requests and responses can be any arbitrary JSON object.
   *
   * @param UnstructuredInference $unstructuredInference
   */
  public function setUnstructuredInference(UnstructuredInference $unstructuredInference)
  {
    $this->unstructuredInference = $unstructuredInference;
  }
  /**
   * @return UnstructuredInference
   */
  public function getUnstructuredInference()
  {
    return $this->unstructuredInference;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AIInference::class, 'Google_Service_AnalyticsHub_AIInference');
