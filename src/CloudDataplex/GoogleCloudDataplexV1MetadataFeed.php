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

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1MetadataFeed extends \Google\Model
{
  /**
   * Output only. The time when the feed was created.
   *
   * @var string
   */
  public $createTime;
  protected $filtersType = GoogleCloudDataplexV1MetadataFeedFilters::class;
  protected $filtersDataType = '';
  /**
   * Optional. User-defined labels.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The resource name of the metadata feed, in the format projects/
   * {project_id_or_number}/locations/{location_id}/metadataFeeds/{metadata_feed
   * _id}.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The pubsub topic that you want the metadata feed messages to
   * publish to. Please grant Dataplex service account the permission to publish
   * messages to the topic. The service account is:
   * service-{PROJECT_NUMBER}@gcp-sa-dataplex.iam.gserviceaccount.com.
   *
   * @var string
   */
  public $pubsubTopic;
  protected $scopeType = GoogleCloudDataplexV1MetadataFeedScope::class;
  protected $scopeDataType = '';
  /**
   * Output only. A system-generated, globally unique ID for the metadata job.
   * If the metadata job is deleted and then re-created with the same name, this
   * ID is different.
   *
   * @var string
   */
  public $uid;
  /**
   * Output only. The time when the feed was updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The time when the feed was created.
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
   * Optional. The filters of the metadata feed. Only the changes that match the
   * filters are published.
   *
   * @param GoogleCloudDataplexV1MetadataFeedFilters $filters
   */
  public function setFilters(GoogleCloudDataplexV1MetadataFeedFilters $filters)
  {
    $this->filters = $filters;
  }
  /**
   * @return GoogleCloudDataplexV1MetadataFeedFilters
   */
  public function getFilters()
  {
    return $this->filters;
  }
  /**
   * Optional. User-defined labels.
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
   * Identifier. The resource name of the metadata feed, in the format projects/
   * {project_id_or_number}/locations/{location_id}/metadataFeeds/{metadata_feed
   * _id}.
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
   * Optional. The pubsub topic that you want the metadata feed messages to
   * publish to. Please grant Dataplex service account the permission to publish
   * messages to the topic. The service account is:
   * service-{PROJECT_NUMBER}@gcp-sa-dataplex.iam.gserviceaccount.com.
   *
   * @param string $pubsubTopic
   */
  public function setPubsubTopic($pubsubTopic)
  {
    $this->pubsubTopic = $pubsubTopic;
  }
  /**
   * @return string
   */
  public function getPubsubTopic()
  {
    return $this->pubsubTopic;
  }
  /**
   * Required. The scope of the metadata feed. Only the in scope changes are
   * published.
   *
   * @param GoogleCloudDataplexV1MetadataFeedScope $scope
   */
  public function setScope(GoogleCloudDataplexV1MetadataFeedScope $scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return GoogleCloudDataplexV1MetadataFeedScope
   */
  public function getScope()
  {
    return $this->scope;
  }
  /**
   * Output only. A system-generated, globally unique ID for the metadata job.
   * If the metadata job is deleted and then re-created with the same name, this
   * ID is different.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
  /**
   * Output only. The time when the feed was updated.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1MetadataFeed::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1MetadataFeed');
