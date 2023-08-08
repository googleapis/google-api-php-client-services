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

use Google\Service\Aiplatform\GoogleCloudAiplatformV1CopyModelRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ExportModelRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListModelVersionsResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListModelsResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1MergeVersionAliasesRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1Model;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1UpdateExplanationDatasetRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1UploadModelRequest;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "models" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $models = $aiplatformService->projects_locations_models;
 *  </code>
 */
class ProjectsLocationsModels extends \Google\Service\Resource
{
  /**
   * Copies an already existing Vertex AI Model into the specified Location. The
   * source Model must exist in the same Project. When copying custom Models, the
   * users themselves are responsible for Model.metadata content to be region-
   * agnostic, as well as making sure that any resources (e.g. files) it depends
   * on remain accessible. (models.copy)
   *
   * @param string $parent Required. The resource name of the Location into which
   * to copy the Model. Format: `projects/{project}/locations/{location}`
   * @param GoogleCloudAiplatformV1CopyModelRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   */
  public function copy($parent, GoogleCloudAiplatformV1CopyModelRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('copy', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes a Model. A model cannot be deleted if any Endpoint resource has a
   * DeployedModel based on the model in its deployed_models field.
   * (models.delete)
   *
   * @param string $name Required. The name of the Model resource to be deleted.
   * Format: `projects/{project}/locations/{location}/models/{model}`
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
   * Deletes a Model version. Model version can only be deleted if there are no
   * DeployedModels created from it. Deleting the only version in the Model is not
   * allowed. Use DeleteModel for deleting the Model instead.
   * (models.deleteVersion)
   *
   * @param string $name Required. The name of the model version to be deleted,
   * with a version ID explicitly included. Example:
   * `projects/{project}/locations/{location}/models/{model}@1234`
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   */
  public function deleteVersion($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('deleteVersion', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Exports a trained, exportable Model to a location specified by the user. A
   * Model is considered to be exportable if it has at least one supported export
   * format. (models.export)
   *
   * @param string $name Required. The resource name of the Model to export. The
   * resource name may contain version id or version alias to specify the version,
   * if no version is specified, the default version will be exported.
   * @param GoogleCloudAiplatformV1ExportModelRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   */
  public function export($name, GoogleCloudAiplatformV1ExportModelRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('export', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Gets a Model. (models.get)
   *
   * @param string $name Required. The name of the Model resource. Format:
   * `projects/{project}/locations/{location}/models/{model}` In order to retrieve
   * a specific version of the model, also provide the version ID or version
   * alias. Example: `projects/{project}/locations/{location}/models/{model}@2` or
   * `projects/{project}/locations/{location}/models/{model}@golden` If no version
   * ID or alias is specified, the "default" version will be returned. The
   * "default" version alias is created for the first version of the model, and
   * can be moved to other versions later on. There will be exactly one default
   * version.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1Model
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1Model::class);
  }
  /**
   * Lists Models in a Location. (models.listProjectsLocationsModels)
   *
   * @param string $parent Required. The resource name of the Location to list the
   * Models from. Format: `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter An expression for filtering the results of the
   * request. For field names both snake_case and camelCase are supported. *
   * `model` supports = and !=. `model` represents the Model ID, i.e. the last
   * segment of the Model's resource name. * `display_name` supports = and != *
   * `labels` supports general map functions that is: * `labels.key=value` -
   * key:value equality * `labels.key:* or labels:key - key existence * A key
   * including a space must be quoted. `labels."a key"`. Some examples: *
   * `model=1234` * `displayName="myDisplayName"` * `labels.myKey="myValue"`
   * @opt_param string orderBy A comma-separated list of fields to order by,
   * sorted in ascending order. Use "desc" after a field name for descending.
   * Supported fields: * `display_name` * `create_time` * `update_time` Example:
   * `display_name, create_time desc`.
   * @opt_param int pageSize The standard list page size.
   * @opt_param string pageToken The standard list page token. Typically obtained
   * via ListModelsResponse.next_page_token of the previous
   * ModelService.ListModels call.
   * @opt_param string readMask Mask specifying which fields to read.
   * @return GoogleCloudAiplatformV1ListModelsResponse
   */
  public function listProjectsLocationsModels($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListModelsResponse::class);
  }
  /**
   * Lists versions of the specified model. (models.listVersions)
   *
   * @param string $name Required. The name of the model to list versions for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter An expression for filtering the results of the
   * request. For field names both snake_case and camelCase are supported. *
   * `labels` supports general map functions that is: * `labels.key=value` -
   * key:value equality * `labels.key:* or labels:key - key existence * A key
   * including a space must be quoted. `labels."a key"`. Some examples: *
   * `labels.myKey="myValue"`
   * @opt_param string orderBy A comma-separated list of fields to order by,
   * sorted in ascending order. Use "desc" after a field name for descending.
   * Supported fields: * `create_time` * `update_time` Example: `update_time asc,
   * create_time desc`.
   * @opt_param int pageSize The standard list page size.
   * @opt_param string pageToken The standard list page token. Typically obtained
   * via next_page_token of the previous ListModelVersions call.
   * @opt_param string readMask Mask specifying which fields to read.
   * @return GoogleCloudAiplatformV1ListModelVersionsResponse
   */
  public function listVersions($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('listVersions', [$params], GoogleCloudAiplatformV1ListModelVersionsResponse::class);
  }
  /**
   * Merges a set of aliases for a Model version. (models.mergeVersionAliases)
   *
   * @param string $name Required. The name of the model version to merge aliases,
   * with a version ID explicitly included. Example:
   * `projects/{project}/locations/{location}/models/{model}@1234`
   * @param GoogleCloudAiplatformV1MergeVersionAliasesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1Model
   */
  public function mergeVersionAliases($name, GoogleCloudAiplatformV1MergeVersionAliasesRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mergeVersionAliases', [$params], GoogleCloudAiplatformV1Model::class);
  }
  /**
   * Updates a Model. (models.patch)
   *
   * @param string $name The resource name of the Model.
   * @param GoogleCloudAiplatformV1Model $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The update mask applies to the
   * resource. For the `FieldMask` definition, see google.protobuf.FieldMask.
   * @return GoogleCloudAiplatformV1Model
   */
  public function patch($name, GoogleCloudAiplatformV1Model $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudAiplatformV1Model::class);
  }
  /**
   * Incrementally update the dataset used for an examples model.
   * (models.updateExplanationDataset)
   *
   * @param string $model Required. The resource name of the Model to update.
   * Format: `projects/{project}/locations/{location}/models/{model}`
   * @param GoogleCloudAiplatformV1UpdateExplanationDatasetRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   */
  public function updateExplanationDataset($model, GoogleCloudAiplatformV1UpdateExplanationDatasetRequest $postBody, $optParams = [])
  {
    $params = ['model' => $model, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('updateExplanationDataset', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Uploads a Model artifact into Vertex AI. (models.upload)
   *
   * @param string $parent Required. The resource name of the Location into which
   * to upload the Model. Format: `projects/{project}/locations/{location}`
   * @param GoogleCloudAiplatformV1UploadModelRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   */
  public function upload($parent, GoogleCloudAiplatformV1UploadModelRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('upload', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsModels::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsModels');
