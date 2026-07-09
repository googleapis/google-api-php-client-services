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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1DataDomain extends \Google\Model
{
  protected $contactsType = GoogleCloudDataplexV1Contacts::class;
  protected $contactsDataType = '';
  /**
   * Output only. The time at which the DataDomain was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. User-provided description of the DataDomain.
   *
   * @var string
   */
  public $description;
  /**
   * Required. User-friendly display name.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. User-defined labels for the DataDomain.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The relative resource name of the DataDomain, of the form: proj
   * ects/{project_id_or_number}/locations/{location_id}/dataDomains/{data_domai
   * n_id}
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Immutable. The resource name of the parent DataDomain. Empty if
   * this is a top-level DataDomain. Format: projects/{project_id_or_number}/loc
   * ations/{location}/dataDomains/{parent_data_domain_id} This field is
   * immutable after creation.
   *
   * @var string
   */
  public $parentDataDomain;
  protected $policyMemberType = GoogleIamV1ResourcePolicyMember::class;
  protected $policyMemberDataType = '';
  /**
   * Output only. System-generated globally unique ID for the DataDomain.
   *
   * @var string
   */
  public $uid;
  /**
   * Output only. The time at which the DataDomain was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. Contact info for the Data Domains.
   *
   * @param GoogleCloudDataplexV1Contacts $contacts
   */
  public function setContacts(GoogleCloudDataplexV1Contacts $contacts)
  {
    $this->contacts = $contacts;
  }
  /**
   * @return GoogleCloudDataplexV1Contacts
   */
  public function getContacts()
  {
    return $this->contacts;
  }
  /**
   * Output only. The time at which the DataDomain was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. User-provided description of the DataDomain.
   *
   * @param string $description
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
   * Required. User-friendly display name.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. User-defined labels for the DataDomain.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Identifier. The relative resource name of the DataDomain, of the form: proj
   * ects/{project_id_or_number}/locations/{location_id}/dataDomains/{data_domai
   * n_id}
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. Immutable. The resource name of the parent DataDomain. Empty if
   * this is a top-level DataDomain. Format: projects/{project_id_or_number}/loc
   * ations/{location}/dataDomains/{parent_data_domain_id} This field is
   * immutable after creation.
   *
   * @param string $parentDataDomain
   */
  public function setParentDataDomain($parentDataDomain)
  {
    $this->parentDataDomain = $parentDataDomain;
  }
  /**
   * @return string
   */
  public function getParentDataDomain()
  {
    return $this->parentDataDomain;
  }
  /**
   * Output only. Output-only policy member strings of this resource.
   *
   * @param GoogleIamV1ResourcePolicyMember $policyMember
   */
  public function setPolicyMember(GoogleIamV1ResourcePolicyMember $policyMember)
  {
    $this->policyMember = $policyMember;
  }
  /**
   * @return GoogleIamV1ResourcePolicyMember
   */
  public function getPolicyMember()
  {
    return $this->policyMember;
  }
  /**
   * Output only. System-generated globally unique ID for the DataDomain.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
  /**
   * Output only. The time at which the DataDomain was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1DataDomain::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataDomain');
