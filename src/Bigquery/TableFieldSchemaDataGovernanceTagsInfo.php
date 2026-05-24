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

namespace Google\Service\Bigquery;

class TableFieldSchemaDataGovernanceTagsInfo extends \Google\Model
{
  /**
   * Optional. The data governance tags added to this field are used for field-
   * level access control. Only one data governance tag is currently supported
   * on a field. Tag keys are globally unique. Tag key is expected to be in the
   * namespaced format, for example "123456789012/pii" where 123456789012 is the
   * ID of the parent organization or project resource for this tag key. Tag
   * value is expected to be the short name, for example "sensitive". See [Tag
   * definitions](https://cloud.google.com/iam/docs/tags-access-
   * control#definitions) for more details. For example: "123456789012/pii":
   * "sensitive", "myProject/cost_center": "sales"
   *
   * @var string[]
   */
  public $dataGovernanceTags;

  /**
   * Optional. The data governance tags added to this field are used for field-
   * level access control. Only one data governance tag is currently supported
   * on a field. Tag keys are globally unique. Tag key is expected to be in the
   * namespaced format, for example "123456789012/pii" where 123456789012 is the
   * ID of the parent organization or project resource for this tag key. Tag
   * value is expected to be the short name, for example "sensitive". See [Tag
   * definitions](https://cloud.google.com/iam/docs/tags-access-
   * control#definitions) for more details. For example: "123456789012/pii":
   * "sensitive", "myProject/cost_center": "sales"
   *
   * @param string[] $dataGovernanceTags
   */
  public function setDataGovernanceTags($dataGovernanceTags)
  {
    $this->dataGovernanceTags = $dataGovernanceTags;
  }
  /**
   * @return string[]
   */
  public function getDataGovernanceTags()
  {
    return $this->dataGovernanceTags;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TableFieldSchemaDataGovernanceTagsInfo::class, 'Google_Service_Bigquery_TableFieldSchemaDataGovernanceTagsInfo');
