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

class GoogleCloudDiscoveryengineV1WidgetConfigNode extends \Google\Model
{
  /**
   * Unspecified type.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * Trigger type.
   */
  public const TYPE_TRIGGER = 'TRIGGER';
  /**
   * Flow type.
   */
  public const TYPE_FLOW = 'FLOW';
  /**
   * Connector type.
   */
  public const TYPE_CONNECTOR = 'CONNECTOR';
  /**
   * Output only. A detailed description of what the node does.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. A human readable name for the node.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. An identifier or URL pointing to an icon representing this
   * node type.
   *
   * @var string
   */
  public $iconUrl;
  /**
   * Output only. The output schema of the tool. This schema is expected to
   * conform to the OpenAPI Schema standard (see
   * https://spec.openapis.org/oas/v3.0.3.html/ and AIP-146). It describes the
   * structure of the output produced by this node.
   *
   * @var array[]
   */
  public $outputSchema;
  /**
   * Output only. The parameter schema of the tool. This schema is expected to
   * conform to the OpenAPI Schema standard (see
   * https://spec.openapis.org/oas/v3.0.3.html and AIP-146). It describes the
   * expected structure of the parameters that this node accepts.
   *
   * @var array[]
   */
  public $parameterSchema;
  /**
   * Output only. The type of the node.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. A detailed description of what the node does.
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
   * Output only. A human readable name for the node.
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
   * Output only. An identifier or URL pointing to an icon representing this
   * node type.
   *
   * @param string $iconUrl
   */
  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }
  /**
   * @return string
   */
  public function getIconUrl()
  {
    return $this->iconUrl;
  }
  /**
   * Output only. The output schema of the tool. This schema is expected to
   * conform to the OpenAPI Schema standard (see
   * https://spec.openapis.org/oas/v3.0.3.html/ and AIP-146). It describes the
   * structure of the output produced by this node.
   *
   * @param array[] $outputSchema
   */
  public function setOutputSchema($outputSchema)
  {
    $this->outputSchema = $outputSchema;
  }
  /**
   * @return array[]
   */
  public function getOutputSchema()
  {
    return $this->outputSchema;
  }
  /**
   * Output only. The parameter schema of the tool. This schema is expected to
   * conform to the OpenAPI Schema standard (see
   * https://spec.openapis.org/oas/v3.0.3.html and AIP-146). It describes the
   * expected structure of the parameters that this node accepts.
   *
   * @param array[] $parameterSchema
   */
  public function setParameterSchema($parameterSchema)
  {
    $this->parameterSchema = $parameterSchema;
  }
  /**
   * @return array[]
   */
  public function getParameterSchema()
  {
    return $this->parameterSchema;
  }
  /**
   * Output only. The type of the node.
   *
   * Accepted values: TYPE_UNSPECIFIED, TRIGGER, FLOW, CONNECTOR
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigNode::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigNode');
