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

class GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchema extends \Google\Model
{
  /**
   * Output only. The resource name of the schema.
   * CustomerSkAdNetworkConversionValueSchema resource names have the form: cust
   * omers/{customer_id}/customerSkAdNetworkConversionValueSchemas/{account_link
   * _id}
   *
   * @var string
   */
  public $resourceName;
  protected $schemaType = GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchema::class;
  protected $schemaDataType = '';

  /**
   * Output only. The resource name of the schema.
   * CustomerSkAdNetworkConversionValueSchema resource names have the form: cust
   * omers/{customer_id}/customerSkAdNetworkConversionValueSchemas/{account_link
   * _id}
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
   * Output only. The schema for the specified resource.
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchema $schema
   */
  public function setSchema(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchema $schema)
  {
    $this->schema = $schema;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchema
   */
  public function getSchema()
  {
    return $this->schema;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchema::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchema');
