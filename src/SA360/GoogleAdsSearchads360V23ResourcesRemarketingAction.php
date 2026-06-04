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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesRemarketingAction extends \Google\Collection
{
  protected $collection_key = 'tagSnippets';
  /**
   * Output only. Id of the remarketing action.
   *
   * @var string
   */
  public $id;
  /**
   * The name of the remarketing action. This field is required and should not
   * be empty when creating new remarketing actions.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the remarketing action. Remarketing action
   * resource names have the form:
   * `customers/{customer_id}/remarketingActions/{remarketing_action_id}`
   *
   * @var string
   */
  public $resourceName;
  protected $tagSnippetsType = GoogleAdsSearchads360V23CommonTagSnippet::class;
  protected $tagSnippetsDataType = 'array';

  /**
   * Output only. Id of the remarketing action.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * The name of the remarketing action. This field is required and should not
   * be empty when creating new remarketing actions.
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
   * Immutable. The resource name of the remarketing action. Remarketing action
   * resource names have the form:
   * `customers/{customer_id}/remarketingActions/{remarketing_action_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. The snippets used for tracking remarketing actions.
   *
   * @param GoogleAdsSearchads360V23CommonTagSnippet[] $tagSnippets
   */
  public function setTagSnippets($tagSnippets)
  {
    $this->tagSnippets = $tagSnippets;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTagSnippet[]
   */
  public function getTagSnippets()
  {
    return $this->tagSnippets;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRemarketingAction::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRemarketingAction');
