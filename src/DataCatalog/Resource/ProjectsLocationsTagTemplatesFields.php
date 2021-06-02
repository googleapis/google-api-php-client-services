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

namespace Google\Service\DataCatalog\Resource;

use Google\Service\DataCatalog\DatacatalogEmpty;
use Google\Service\DataCatalog\GoogleCloudDatacatalogV1beta1RenameTagTemplateFieldRequest;
use Google\Service\DataCatalog\GoogleCloudDatacatalogV1beta1TagTemplateField;

/**
 * The "fields" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datacatalogService = new Google\Service\DataCatalog(...);
 *   $fields = $datacatalogService->fields;
 *  </code>
 */
class ProjectsLocationsTagTemplatesFields extends \Google\Service\Resource
{
  /**
   * Creates a field in a tag template. The user should enable the Data Catalog
   * API in the project identified by the `parent` parameter (see [Data Catalog
   * Resource Project](https://cloud.google.com/data-catalog/docs/concepts
   * /resource-project) for more information). (fields.create)
   *
   * @param string $parent Required. The name of the project and the template
   * location [region](https://cloud.google.com/data-
   * catalog/docs/concepts/regions). Example: * projects/{project_id}/locations
   * /us-central1/tagTemplates/{tag_template_id}
   * @param GoogleCloudDatacatalogV1beta1TagTemplateField $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string tagTemplateFieldId Required. The ID of the tag template
   * field to create. Field ids can contain letters (both uppercase and
   * lowercase), numbers (0-9), underscores (_) and dashes (-). Field IDs must be
   * at least 1 character long and at most 128 characters long. Field IDs must
   * also be unique within their template.
   * @return GoogleCloudDatacatalogV1beta1TagTemplateField
   */
  public function create($parent, GoogleCloudDatacatalogV1beta1TagTemplateField $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudDatacatalogV1beta1TagTemplateField::class);
  }
  /**
   * Deletes a field in a tag template and all uses of that field. Users should
   * enable the Data Catalog API in the project identified by the `name` parameter
   * (see [Data Catalog Resource Project] (https://cloud.google.com/data-
   * catalog/docs/concepts/resource-project) for more information).
   * (fields.delete)
   *
   * @param string $name Required. The name of the tag template field to delete.
   * Example: * projects/{project_id}/locations/{location}/tagTemplates/{tag_templ
   * ate_id}/fields/{tag_template_field_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Required. Currently, this field must always be set to
   * `true`. This confirms the deletion of this field from any tags using this
   * field. `force = false` will be supported in the future.
   * @return DatacatalogEmpty
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DatacatalogEmpty::class);
  }
  /**
   * Updates a field in a tag template. This method cannot be used to update the
   * field type. Users should enable the Data Catalog API in the project
   * identified by the `name` parameter (see [Data Catalog Resource Project]
   * (https://cloud.google.com/data-catalog/docs/concepts/resource-project) for
   * more information). (fields.patch)
   *
   * @param string $name Required. The name of the tag template field. Example: *
   * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}/fie
   * lds/{tag_template_field_id}
   * @param GoogleCloudDatacatalogV1beta1TagTemplateField $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Names of fields whose values to
   * overwrite on an individual field of a tag template. The following fields are
   * modifiable: * `display_name` * `type.enum_type` * `is_required` If this
   * parameter is absent or empty, all modifiable fields are overwritten. If such
   * fields are non-required and omitted in the request body, their values are
   * emptied with one exception: when updating an enum type, the provided values
   * are merged with the existing values. Therefore, enum values can only be
   * added, existing enum values cannot be deleted or renamed. Additionally,
   * updating a template field from optional to required is *not* allowed.
   * @return GoogleCloudDatacatalogV1beta1TagTemplateField
   */
  public function patch($name, GoogleCloudDatacatalogV1beta1TagTemplateField $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudDatacatalogV1beta1TagTemplateField::class);
  }
  /**
   * Renames a field in a tag template. The user should enable the Data Catalog
   * API in the project identified by the `name` parameter (see [Data Catalog
   * Resource Project](https://cloud.google.com/data-catalog/docs/concepts
   * /resource-project) for more information). (fields.rename)
   *
   * @param string $name Required. The name of the tag template. Example: * projec
   * ts/{project_id}/locations/{location}/tagTemplates/{tag_template_id}/fields/{t
   * ag_template_field_id}
   * @param GoogleCloudDatacatalogV1beta1RenameTagTemplateFieldRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDatacatalogV1beta1TagTemplateField
   */
  public function rename($name, GoogleCloudDatacatalogV1beta1RenameTagTemplateFieldRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('rename', [$params], GoogleCloudDatacatalogV1beta1TagTemplateField::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsTagTemplatesFields::class, 'Google_Service_DataCatalog_Resource_ProjectsLocationsTagTemplatesFields');
