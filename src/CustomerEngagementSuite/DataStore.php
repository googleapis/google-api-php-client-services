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

class DataStore extends \Google\Model
{
  /**
   * Not specified.
   */
  public const DOCUMENT_PROCESSING_MODE_DOCUMENT_PROCESSING_MODE_UNSPECIFIED = 'DOCUMENT_PROCESSING_MODE_UNSPECIFIED';
  /**
   * Documents are processed as documents.
   */
  public const DOCUMENT_PROCESSING_MODE_DOCUMENTS = 'DOCUMENTS';
  /**
   * Documents are converted to chunks.
   */
  public const DOCUMENT_PROCESSING_MODE_CHUNKS = 'CHUNKS';
  /**
   * Not specified. This value indicates that the data store type is not
   * specified, so it will not be used during search.
   */
  public const TYPE_DATA_STORE_TYPE_UNSPECIFIED = 'DATA_STORE_TYPE_UNSPECIFIED';
  /**
   * A data store that contains public web content.
   */
  public const TYPE_PUBLIC_WEB = 'PUBLIC_WEB';
  /**
   * A data store that contains unstructured private data.
   */
  public const TYPE_UNSTRUCTURED = 'UNSTRUCTURED';
  /**
   * A data store that contains structured data used as FAQ.
   */
  public const TYPE_FAQ = 'FAQ';
  /**
   * A data store that is a connector to a first-party or a third-party service.
   */
  public const TYPE_CONNECTOR = 'CONNECTOR';
  protected $connectorConfigType = DataStoreConnectorConfig::class;
  protected $connectorConfigDataType = '';
  /**
   * Output only. Timestamp when the data store was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The display name of the data store.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The document processing mode for the data store connection.
   * Only set for PUBLIC_WEB and UNSTRUCTURED data stores.
   *
   * @var string
   */
  public $documentProcessingMode;
  /**
   * Required. Full resource name of the DataStore. Format: `projects/{project}/
   * locations/{location}/collections/{collection}/dataStores/{dataStore}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The type of the data store. This field is readonly and
   * populated by the server.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. The connector config for the data store connection.
   *
   * @param DataStoreConnectorConfig $connectorConfig
   */
  public function setConnectorConfig(DataStoreConnectorConfig $connectorConfig)
  {
    $this->connectorConfig = $connectorConfig;
  }
  /**
   * @return DataStoreConnectorConfig
   */
  public function getConnectorConfig()
  {
    return $this->connectorConfig;
  }
  /**
   * Output only. Timestamp when the data store was created.
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
   * Output only. The display name of the data store.
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
   * Output only. The document processing mode for the data store connection.
   * Only set for PUBLIC_WEB and UNSTRUCTURED data stores.
   *
   * Accepted values: DOCUMENT_PROCESSING_MODE_UNSPECIFIED, DOCUMENTS, CHUNKS
   *
   * @param self::DOCUMENT_PROCESSING_MODE_* $documentProcessingMode
   */
  public function setDocumentProcessingMode($documentProcessingMode)
  {
    $this->documentProcessingMode = $documentProcessingMode;
  }
  /**
   * @return self::DOCUMENT_PROCESSING_MODE_*
   */
  public function getDocumentProcessingMode()
  {
    return $this->documentProcessingMode;
  }
  /**
   * Required. Full resource name of the DataStore. Format: `projects/{project}/
   * locations/{location}/collections/{collection}/dataStores/{dataStore}`
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
   * Output only. The type of the data store. This field is readonly and
   * populated by the server.
   *
   * Accepted values: DATA_STORE_TYPE_UNSPECIFIED, PUBLIC_WEB, UNSTRUCTURED,
   * FAQ, CONNECTOR
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
class_alias(DataStore::class, 'Google_Service_CustomerEngagementSuite_DataStore');
