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

namespace Google\Service\Datastream;

class SalesforceMarketingCloudProfile extends \Google\Model
{
  protected $oauthClientCredentialsType = OauthClientCredentials::class;
  protected $oauthClientCredentialsDataType = '';
  /**
   * Required. Subdomain for the Salesforce Marketing Cloud connection. Example:
   * if your specific endpoint is `https://{your-specific-
   * subdomain}.rest.marketingcloudapis.com/`, the subdomain is `{your-specific-
   * subdomain}`. Must be 1-63 characters, start and end with an alphanumeric
   * character, and contain only lowercase letters, numbers, and hyphens (-).
   *
   * @var string
   */
  public $subdomain;

  /**
   * Required. Input only. Credentials for authenticating with the Salesforce
   * Marketing Cloud API.
   *
   * @param OauthClientCredentials $oauthClientCredentials
   */
  public function setOauthClientCredentials(OauthClientCredentials $oauthClientCredentials)
  {
    $this->oauthClientCredentials = $oauthClientCredentials;
  }
  /**
   * @return OauthClientCredentials
   */
  public function getOauthClientCredentials()
  {
    return $this->oauthClientCredentials;
  }
  /**
   * Required. Subdomain for the Salesforce Marketing Cloud connection. Example:
   * if your specific endpoint is `https://{your-specific-
   * subdomain}.rest.marketingcloudapis.com/`, the subdomain is `{your-specific-
   * subdomain}`. Must be 1-63 characters, start and end with an alphanumeric
   * character, and contain only lowercase letters, numbers, and hyphens (-).
   *
   * @param string $subdomain
   */
  public function setSubdomain($subdomain)
  {
    $this->subdomain = $subdomain;
  }
  /**
   * @return string
   */
  public function getSubdomain()
  {
    return $this->subdomain;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SalesforceMarketingCloudProfile::class, 'Google_Service_Datastream_SalesforceMarketingCloudProfile');
