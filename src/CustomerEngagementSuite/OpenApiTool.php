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

class OpenApiTool extends \Google\Model
{
  protected $apiAuthenticationType = ApiAuthentication::class;
  protected $apiAuthenticationDataType = '';
  /**
   * Optional. The description of the tool. If not provided, the description of
   * the tool will be derived from the OpenAPI schema, from
   * `operation.description` or `operation.summary`.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. If true, the agent will ignore unknown fields in the API
   * response.
   *
   * @var bool
   */
  public $ignoreUnknownFields;
  /**
   * Optional. The name of the tool. If not provided, the name of the tool will
   * be derived from the OpenAPI schema, from `operation.operationId`.
   *
   * @var string
   */
  public $name;
  /**
   * Required. The OpenAPI schema in JSON or YAML format.
   *
   * @var string
   */
  public $openApiSchema;
  protected $serviceDirectoryConfigType = ServiceDirectoryConfig::class;
  protected $serviceDirectoryConfigDataType = '';
  protected $tlsConfigType = TlsConfig::class;
  protected $tlsConfigDataType = '';
  /**
   * Optional. The server URL of the Open API schema. This field is only set in
   * tools in the environment dependencies during the export process if the
   * schema contains a server url. During the import process, if this url is
   * present in the environment dependencies and the schema has the $env_var
   * placeholder, it will replace the placeholder in the schema.
   *
   * @var string
   */
  public $url;

  /**
   * Optional. Authentication information required by the API.
   *
   * @param ApiAuthentication $apiAuthentication
   */
  public function setApiAuthentication(ApiAuthentication $apiAuthentication)
  {
    $this->apiAuthentication = $apiAuthentication;
  }
  /**
   * @return ApiAuthentication
   */
  public function getApiAuthentication()
  {
    return $this->apiAuthentication;
  }
  /**
   * Optional. The description of the tool. If not provided, the description of
   * the tool will be derived from the OpenAPI schema, from
   * `operation.description` or `operation.summary`.
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
   * Optional. If true, the agent will ignore unknown fields in the API
   * response.
   *
   * @param bool $ignoreUnknownFields
   */
  public function setIgnoreUnknownFields($ignoreUnknownFields)
  {
    $this->ignoreUnknownFields = $ignoreUnknownFields;
  }
  /**
   * @return bool
   */
  public function getIgnoreUnknownFields()
  {
    return $this->ignoreUnknownFields;
  }
  /**
   * Optional. The name of the tool. If not provided, the name of the tool will
   * be derived from the OpenAPI schema, from `operation.operationId`.
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
   * Required. The OpenAPI schema in JSON or YAML format.
   *
   * @param string $openApiSchema
   */
  public function setOpenApiSchema($openApiSchema)
  {
    $this->openApiSchema = $openApiSchema;
  }
  /**
   * @return string
   */
  public function getOpenApiSchema()
  {
    return $this->openApiSchema;
  }
  /**
   * Optional. Service Directory configuration.
   *
   * @param ServiceDirectoryConfig $serviceDirectoryConfig
   */
  public function setServiceDirectoryConfig(ServiceDirectoryConfig $serviceDirectoryConfig)
  {
    $this->serviceDirectoryConfig = $serviceDirectoryConfig;
  }
  /**
   * @return ServiceDirectoryConfig
   */
  public function getServiceDirectoryConfig()
  {
    return $this->serviceDirectoryConfig;
  }
  /**
   * Optional. The TLS configuration. Includes the custom server certificates
   * that the client will trust.
   *
   * @param TlsConfig $tlsConfig
   */
  public function setTlsConfig(TlsConfig $tlsConfig)
  {
    $this->tlsConfig = $tlsConfig;
  }
  /**
   * @return TlsConfig
   */
  public function getTlsConfig()
  {
    return $this->tlsConfig;
  }
  /**
   * Optional. The server URL of the Open API schema. This field is only set in
   * tools in the environment dependencies during the export process if the
   * schema contains a server url. During the import process, if this url is
   * present in the environment dependencies and the schema has the $env_var
   * placeholder, it will replace the placeholder in the schema.
   *
   * @param string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OpenApiTool::class, 'Google_Service_CustomerEngagementSuite_OpenApiTool');
