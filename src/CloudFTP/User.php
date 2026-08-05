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

namespace Google\Service\CloudFTP;

class User extends \Google\Collection
{
  /**
   * State unspecified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * User is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * User is ready to be used.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * User creation failed.
   */
  public const STATE_ERROR = 'ERROR';
  /**
   * The resource is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * The resource is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  protected $collection_key = 'userCredentials';
  /**
   * Output only. [Output only] Create time stamp
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. Service account in customer project attached to this SFTP User.
   *
   * @var string
   */
  public $customerServiceAccount;
  /**
   * Optional. Labels as key value pairs
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. User-friendly name via which User will be identified.
   * projects/{project}/locations/{location}/servers/{server}/users/{user}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Tracks user creation.
   *
   * @var string
   */
  public $state;
  protected $storageDirectoryMappingsType = StorageDirectoryMapping::class;
  protected $storageDirectoryMappingsDataType = 'array';
  /**
   * Output only. [Output only] Update time stamp
   *
   * @var string
   */
  public $updateTime;
  protected $userCredentialsType = UserCredential::class;
  protected $userCredentialsDataType = 'array';
  /**
   * Output only. [Output only] The username of the user.
   *
   * @var string
   */
  public $username;

  /**
   * Output only. [Output only] Create time stamp
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
   * Required. Service account in customer project attached to this SFTP User.
   *
   * @param string $customerServiceAccount
   */
  public function setCustomerServiceAccount($customerServiceAccount)
  {
    $this->customerServiceAccount = $customerServiceAccount;
  }
  /**
   * @return string
   */
  public function getCustomerServiceAccount()
  {
    return $this->customerServiceAccount;
  }
  /**
   * Optional. Labels as key value pairs
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
   * Identifier. User-friendly name via which User will be identified.
   * projects/{project}/locations/{location}/servers/{server}/users/{user}
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
   * Output only. Tracks user creation.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, ERROR, UPDATING,
   * DELETING
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Required. Mapping of Cloud Storage buckets to directories where the user
   * will land in the SFTP server.
   *
   * @param StorageDirectoryMapping[] $storageDirectoryMappings
   */
  public function setStorageDirectoryMappings($storageDirectoryMappings)
  {
    $this->storageDirectoryMappings = $storageDirectoryMappings;
  }
  /**
   * @return StorageDirectoryMapping[]
   */
  public function getStorageDirectoryMappings()
  {
    return $this->storageDirectoryMappings;
  }
  /**
   * Output only. [Output only] Update time stamp
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
  /**
   * Required. User credential for the user. The maximum number of user
   * credentials is 10.
   *
   * @param UserCredential[] $userCredentials
   */
  public function setUserCredentials($userCredentials)
  {
    $this->userCredentials = $userCredentials;
  }
  /**
   * @return UserCredential[]
   */
  public function getUserCredentials()
  {
    return $this->userCredentials;
  }
  /**
   * Output only. [Output only] The username of the user.
   *
   * @param string $username
   */
  public function setUsername($username)
  {
    $this->username = $username;
  }
  /**
   * @return string
   */
  public function getUsername()
  {
    return $this->username;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(User::class, 'Google_Service_CloudFTP_User');
