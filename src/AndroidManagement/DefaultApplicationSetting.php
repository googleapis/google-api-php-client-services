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

namespace Google\Service\AndroidManagement;

class DefaultApplicationSetting extends \Google\Collection
{
  protected $collection_key = 'defaultApplications';
  /**
   * @var string[]
   */
  public $defaultApplicationScopes;
  /**
   * @var string
   */
  public $defaultApplicationType;
  protected $defaultApplicationsType = DefaultApplication::class;
  protected $defaultApplicationsDataType = 'array';

  /**
   * @param string[]
   */
  public function setDefaultApplicationScopes($defaultApplicationScopes)
  {
    $this->defaultApplicationScopes = $defaultApplicationScopes;
  }
  /**
   * @return string[]
   */
  public function getDefaultApplicationScopes()
  {
    return $this->defaultApplicationScopes;
  }
  /**
   * @param string
   */
  public function setDefaultApplicationType($defaultApplicationType)
  {
    $this->defaultApplicationType = $defaultApplicationType;
  }
  /**
   * @return string
   */
  public function getDefaultApplicationType()
  {
    return $this->defaultApplicationType;
  }
  /**
   * @param DefaultApplication[]
   */
  public function setDefaultApplications($defaultApplications)
  {
    $this->defaultApplications = $defaultApplications;
  }
  /**
   * @return DefaultApplication[]
   */
  public function getDefaultApplications()
  {
    return $this->defaultApplications;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DefaultApplicationSetting::class, 'Google_Service_AndroidManagement_DefaultApplicationSetting');
