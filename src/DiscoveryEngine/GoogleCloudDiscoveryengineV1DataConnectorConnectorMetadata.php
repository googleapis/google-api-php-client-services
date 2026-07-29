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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1DataConnectorConnectorMetadata extends \Google\Model
{
  /**
   * Optional. The end user's account as authenticated to the connector, so the
   * end user can see which account is connected. May be an email, a username,
   * or any identifier the connector/third party provides.
   *
   * @var string
   */
  public $authenticatedAccount;
  /**
   * Optional. The party that authored the connector, e.g. "Google" or a third-
   * party provider name. Lets end users see who authored a connector (future:
   * third-party-authored connectors).
   *
   * @var string
   */
  public $author;
  /**
   * Optional. Human-readable description of the connector, shown on the
   * connector detail page. One connector has a single description.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Free-form, multi-line note about the connector's capabilities or
   * a custom note that can be set for the connector.
   *
   * @var string
   */
  public $note;
  /**
   * Optional. Short, subtitle-length description of the connector (e.g. shown
   * beneath the connector name in list and detail views).
   *
   * @var string
   */
  public $shortDescription;
  /**
   * Optional. Display title of the connector.
   *
   * @var string
   */
  public $title;

  /**
   * Optional. The end user's account as authenticated to the connector, so the
   * end user can see which account is connected. May be an email, a username,
   * or any identifier the connector/third party provides.
   *
   * @param string $authenticatedAccount
   */
  public function setAuthenticatedAccount($authenticatedAccount)
  {
    $this->authenticatedAccount = $authenticatedAccount;
  }
  /**
   * @return string
   */
  public function getAuthenticatedAccount()
  {
    return $this->authenticatedAccount;
  }
  /**
   * Optional. The party that authored the connector, e.g. "Google" or a third-
   * party provider name. Lets end users see who authored a connector (future:
   * third-party-authored connectors).
   *
   * @param string $author
   */
  public function setAuthor($author)
  {
    $this->author = $author;
  }
  /**
   * @return string
   */
  public function getAuthor()
  {
    return $this->author;
  }
  /**
   * Optional. Human-readable description of the connector, shown on the
   * connector detail page. One connector has a single description.
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
   * Optional. Free-form, multi-line note about the connector's capabilities or
   * a custom note that can be set for the connector.
   *
   * @param string $note
   */
  public function setNote($note)
  {
    $this->note = $note;
  }
  /**
   * @return string
   */
  public function getNote()
  {
    return $this->note;
  }
  /**
   * Optional. Short, subtitle-length description of the connector (e.g. shown
   * beneath the connector name in list and detail views).
   *
   * @param string $shortDescription
   */
  public function setShortDescription($shortDescription)
  {
    $this->shortDescription = $shortDescription;
  }
  /**
   * @return string
   */
  public function getShortDescription()
  {
    return $this->shortDescription;
  }
  /**
   * Optional. Display title of the connector.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1DataConnectorConnectorMetadata::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1DataConnectorConnectorMetadata');
