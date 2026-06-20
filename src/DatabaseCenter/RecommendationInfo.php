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

namespace Google\Service\DatabaseCenter;

class RecommendationInfo extends \Google\Model
{
  /**
   * Name of recommendation. Examples: organizations/1234/locations/us-central1/
   * recommenders/google.cloudsql.instance.PerformanceRecommender/recommendation
   * s/9876
   *
   * @var string
   */
  public $recommender;
  /**
   * ID of recommender. Examples:
   * "google.cloudsql.instance.PerformanceRecommender"
   *
   * @var string
   */
  public $recommenderId;
  /**
   * Contains an identifier for a subtype of recommendations produced for the
   * same recommender. Subtype is a function of content and impact, meaning a
   * new subtype might be added when significant changes to `content` or
   * `primary_impact.category` are introduced. See the Recommenders section to
   * see a list of subtypes for a given Recommender. Examples: For recommender =
   * "google.cloudsql.instance.PerformanceRecommender", recommender_subtype can
   * be "MYSQL_HIGH_NUMBER_OF_OPEN_TABLES_BEST_PRACTICE"/"POSTGRES_HIGH_TRANSACT
   * ION_ID_UTILIZATION_BEST_PRACTICE"
   *
   * @var string
   */
  public $recommenderSubtype;

  /**
   * Name of recommendation. Examples: organizations/1234/locations/us-central1/
   * recommenders/google.cloudsql.instance.PerformanceRecommender/recommendation
   * s/9876
   *
   * @param string $recommender
   */
  public function setRecommender($recommender)
  {
    $this->recommender = $recommender;
  }
  /**
   * @return string
   */
  public function getRecommender()
  {
    return $this->recommender;
  }
  /**
   * ID of recommender. Examples:
   * "google.cloudsql.instance.PerformanceRecommender"
   *
   * @param string $recommenderId
   */
  public function setRecommenderId($recommenderId)
  {
    $this->recommenderId = $recommenderId;
  }
  /**
   * @return string
   */
  public function getRecommenderId()
  {
    return $this->recommenderId;
  }
  /**
   * Contains an identifier for a subtype of recommendations produced for the
   * same recommender. Subtype is a function of content and impact, meaning a
   * new subtype might be added when significant changes to `content` or
   * `primary_impact.category` are introduced. See the Recommenders section to
   * see a list of subtypes for a given Recommender. Examples: For recommender =
   * "google.cloudsql.instance.PerformanceRecommender", recommender_subtype can
   * be "MYSQL_HIGH_NUMBER_OF_OPEN_TABLES_BEST_PRACTICE"/"POSTGRES_HIGH_TRANSACT
   * ION_ID_UTILIZATION_BEST_PRACTICE"
   *
   * @param string $recommenderSubtype
   */
  public function setRecommenderSubtype($recommenderSubtype)
  {
    $this->recommenderSubtype = $recommenderSubtype;
  }
  /**
   * @return string
   */
  public function getRecommenderSubtype()
  {
    return $this->recommenderSubtype;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RecommendationInfo::class, 'Google_Service_DatabaseCenter_RecommendationInfo');
