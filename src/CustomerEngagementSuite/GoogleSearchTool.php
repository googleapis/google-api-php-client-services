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

namespace Google\Service\CustomerEngagementSuite;

class GoogleSearchTool extends \Google\Collection
{
  protected $collection_key = 'preferredDomains';
  /**
   * Optional. Content will be fetched directly from these URLs for context and
   * grounding. Example: "https://example.com/path.html". A maximum of 20 URLs
   * are allowed.
   *
   * @var string[]
   */
  public $contextUrls;
  /**
   * Optional. Description of the tool's purpose.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. List of domains to be excluded from the search results. Example:
   * "example.com". A maximum of 2000 domains can be excluded.
   *
   * @var string[]
   */
  public $excludeDomains;
  /**
   * Required. The name of the tool.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Specifies domains to restrict search results to. Example:
   * "example.com", "another.site". A maximum of 20 domains can be specified.
   *
   * @var string[]
   */
  public $preferredDomains;
  protected $promptConfigType = GoogleSearchToolPromptConfig::class;
  protected $promptConfigDataType = '';

  /**
   * Optional. Content will be fetched directly from these URLs for context and
   * grounding. Example: "https://example.com/path.html". A maximum of 20 URLs
   * are allowed.
   *
   * @param string[] $contextUrls
   */
  public function setContextUrls($contextUrls)
  {
    $this->contextUrls = $contextUrls;
  }
  /**
   * @return string[]
   */
  public function getContextUrls()
  {
    return $this->contextUrls;
  }
  /**
   * Optional. Description of the tool's purpose.
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
   * Optional. List of domains to be excluded from the search results. Example:
   * "example.com". A maximum of 2000 domains can be excluded.
   *
   * @param string[] $excludeDomains
   */
  public function setExcludeDomains($excludeDomains)
  {
    $this->excludeDomains = $excludeDomains;
  }
  /**
   * @return string[]
   */
  public function getExcludeDomains()
  {
    return $this->excludeDomains;
  }
  /**
   * Required. The name of the tool.
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
   * Optional. Specifies domains to restrict search results to. Example:
   * "example.com", "another.site". A maximum of 20 domains can be specified.
   *
   * @param string[] $preferredDomains
   */
  public function setPreferredDomains($preferredDomains)
  {
    $this->preferredDomains = $preferredDomains;
  }
  /**
   * @return string[]
   */
  public function getPreferredDomains()
  {
    return $this->preferredDomains;
  }
  /**
   * Optional. Prompt instructions passed to planner on how the search results
   * should be processed for text and voice.
   *
   * @param GoogleSearchToolPromptConfig $promptConfig
   */
  public function setPromptConfig(GoogleSearchToolPromptConfig $promptConfig)
  {
    $this->promptConfig = $promptConfig;
  }
  /**
   * @return GoogleSearchToolPromptConfig
   */
  public function getPromptConfig()
  {
    return $this->promptConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleSearchTool::class, 'Google_Service_CustomerEngagementSuite_GoogleSearchTool');
