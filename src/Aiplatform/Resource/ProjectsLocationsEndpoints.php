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

namespace Google\Service\Aiplatform\Resource;

use Google\Service\Aiplatform\GoogleApiHttpBody;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1DeployModelRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1Endpoint;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ExplainRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ExplainResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListEndpointsResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1MutateDeployedModelRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1PredictRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1PredictResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1RawPredictRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1StreamingPredictRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1StreamingPredictResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1UndeployModelRequest;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "endpoints" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $endpoints = $aiplatformService->projects_locations_endpoints;
 *  </code>
 */
class ProjectsLocationsEndpoints extends \Google\Service\Resource
{
  /**
   * Creates an Endpoint. (endpoints.create)
   *
   * @param string $parent Required. The resource name of the Location to create
   * the Endpoint in. Format: `projects/{project}/locations/{location}`
   * @param GoogleCloudAiplatformV1Endpoint $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string endpointId Immutable. The ID to use for endpoint, which
   * will become the final component of the endpoint resource name. If not
   * provided, Vertex AI will generate a value for this ID. If the first character
   * is a letter, this value may be up to 63 characters, and valid characters are
   * `[a-z0-9-]`. The last character must be a letter or number. If the first
   * character is a number, this value may be up to 9 characters, and valid
   * characters are `[0-9]` with no leading zeros. When using HTTP/JSON, this
   * field is populated based on a query string argument, such as
   * `?endpoint_id=12345`. This is the fallback for fields that are not included
   * in either the URI or the body.
   * @return GoogleLongrunningOperation
   */
  public function create($parent, GoogleCloudAiplatformV1Endpoint $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes an Endpoint. (endpoints.delete)
   *
   * @param string $name Required. The name of the Endpoint resource to be
   * deleted. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deploys a Model into this Endpoint, creating a DeployedModel within it.
   * (endpoints.deployModel)
   *
   * @param string $endpoint Required. The name of the Endpoint resource into
   * which to deploy a Model. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   * @param GoogleCloudAiplatformV1DeployModelRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   */
  public function deployModel($endpoint, GoogleCloudAiplatformV1DeployModelRequest $postBody, $optParams = [])
  {
    $params = ['endpoint' => $endpoint, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('deployModel', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Perform an online explanation. If deployed_model_id is specified, the
   * corresponding DeployModel must have explanation_spec populated. If
   * deployed_model_id is not specified, all DeployedModels must have
   * explanation_spec populated. (endpoints.explain)
   *
   * @param string $endpoint Required. The name of the Endpoint requested to serve
   * the explanation. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   * @param GoogleCloudAiplatformV1ExplainRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1ExplainResponse
   */
  public function explain($endpoint, GoogleCloudAiplatformV1ExplainRequest $postBody, $optParams = [])
  {
    $params = ['endpoint' => $endpoint, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('explain', [$params], GoogleCloudAiplatformV1ExplainResponse::class);
  }
  /**
   * Gets an Endpoint. (endpoints.get)
   *
   * @param string $name Required. The name of the Endpoint resource. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1Endpoint
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1Endpoint::class);
  }
  /**
   * Lists Endpoints in a Location. (endpoints.listProjectsLocationsEndpoints)
   *
   * @param string $parent Required. The resource name of the Location from which
   * to list the Endpoints. Format: `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. An expression for filtering the results of
   * the request. For field names both snake_case and camelCase are supported. *
   * `endpoint` supports = and !=. `endpoint` represents the Endpoint ID, i.e. the
   * last segment of the Endpoint's resource name. * `display_name` supports =
   * and, != * `labels` supports general map functions that is: *
   * `labels.key=value` - key:value equality * `labels.key:* or labels:key - key
   * existence * A key including a space must be quoted. `labels."a key"`. Some
   * examples: * `endpoint=1` * `displayName="myDisplayName"` *
   * `labels.myKey="myValue"`
   * @opt_param string orderBy A comma-separated list of fields to order by,
   * sorted in ascending order. Use "desc" after a field name for descending.
   * Supported fields: * `display_name` * `create_time` * `update_time` Example:
   * `display_name, create_time desc`.
   * @opt_param int pageSize Optional. The standard list page size.
   * @opt_param string pageToken Optional. The standard list page token. Typically
   * obtained via ListEndpointsResponse.next_page_token of the previous
   * EndpointService.ListEndpoints call.
   * @opt_param string readMask Optional. Mask specifying which fields to read.
   * @return GoogleCloudAiplatformV1ListEndpointsResponse
   */
  public function listProjectsLocationsEndpoints($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListEndpointsResponse::class);
  }
  /**
   * Updates an existing deployed model. Updatable fields include
   * `min_replica_count`, `max_replica_count`, `autoscaling_metric_specs`,
   * `disable_container_logging` (v1 only), and `enable_container_logging`
   * (v1beta1 only). (endpoints.mutateDeployedModel)
   *
   * @param string $endpoint Required. The name of the Endpoint resource into
   * which to mutate a DeployedModel. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   * @param GoogleCloudAiplatformV1MutateDeployedModelRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   */
  public function mutateDeployedModel($endpoint, GoogleCloudAiplatformV1MutateDeployedModelRequest $postBody, $optParams = [])
  {
    $params = ['endpoint' => $endpoint, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutateDeployedModel', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Updates an Endpoint. (endpoints.patch)
   *
   * @param string $name Output only. The resource name of the Endpoint.
   * @param GoogleCloudAiplatformV1Endpoint $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The update mask applies to the
   * resource. See google.protobuf.FieldMask.
   * @return GoogleCloudAiplatformV1Endpoint
   */
  public function patch($name, GoogleCloudAiplatformV1Endpoint $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudAiplatformV1Endpoint::class);
  }
  /**
   * Perform an online prediction. (endpoints.predict)
   *
   * @param string $endpoint Required. The name of the Endpoint requested to serve
   * the prediction. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   * @param GoogleCloudAiplatformV1PredictRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1PredictResponse
   */
  public function predict($endpoint, GoogleCloudAiplatformV1PredictRequest $postBody, $optParams = [])
  {
    $params = ['endpoint' => $endpoint, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('predict', [$params], GoogleCloudAiplatformV1PredictResponse::class);
  }
  /**
   * Perform an online prediction with an arbitrary HTTP payload. The response
   * includes the following HTTP headers: * `X-Vertex-AI-Endpoint-Id`: ID of the
   * Endpoint that served this prediction. * `X-Vertex-AI-Deployed-Model-Id`: ID
   * of the Endpoint's DeployedModel that served this prediction.
   * (endpoints.rawPredict)
   *
   * @param string $endpoint Required. The name of the Endpoint requested to serve
   * the prediction. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   * @param GoogleCloudAiplatformV1RawPredictRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleApiHttpBody
   */
  public function rawPredict($endpoint, GoogleCloudAiplatformV1RawPredictRequest $postBody, $optParams = [])
  {
    $params = ['endpoint' => $endpoint, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('rawPredict', [$params], GoogleApiHttpBody::class);
  }
  /**
   * Perform a server-side streaming online prediction request for Vertex LLM
   * streaming. (endpoints.serverStreamingPredict)
   *
   * @param string $endpoint Required. The name of the Endpoint requested to serve
   * the prediction. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   * @param GoogleCloudAiplatformV1StreamingPredictRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1StreamingPredictResponse
   */
  public function serverStreamingPredict($endpoint, GoogleCloudAiplatformV1StreamingPredictRequest $postBody, $optParams = [])
  {
    $params = ['endpoint' => $endpoint, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('serverStreamingPredict', [$params], GoogleCloudAiplatformV1StreamingPredictResponse::class);
  }
  /**
   * Undeploys a Model from an Endpoint, removing a DeployedModel from it, and
   * freeing all resources it's using. (endpoints.undeployModel)
   *
   * @param string $endpoint Required. The name of the Endpoint resource from
   * which to undeploy a Model. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   * @param GoogleCloudAiplatformV1UndeployModelRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   */
  public function undeployModel($endpoint, GoogleCloudAiplatformV1UndeployModelRequest $postBody, $optParams = [])
  {
    $params = ['endpoint' => $endpoint, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('undeployModel', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsEndpoints::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsEndpoints');
