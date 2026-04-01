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

class GoogleCloudDataplexV1DataDocumentationResultDatasetResult extends \Google\Collection
{
  protected $collection_key = 'tableResults';
  /**
   * Output only. Generated Dataset description.
   *
   * @var string
   */
  public $overview;
  protected $queriesType = GoogleCloudDataplexV1DataDocumentationResultQuery::class;
  protected $queriesDataType = 'array';
  protected $schemaRelationshipsType = GoogleCloudDataplexV1DataDocumentationResultSchemaRelationship::class;
  protected $schemaRelationshipsDataType = 'array';
  protected $tableResultsType = GoogleCloudDataplexV1DataDocumentationResultTableResult::class;
  protected $tableResultsDataType = 'array';

  /**
   * Output only. Generated Dataset description.
   *
   * @param string $overview
   */
  public function setOverview($overview)
  {
    $this->overview = $overview;
  }
  /**
   * @return string
   */
  public function getOverview()
  {
    return $this->overview;
  }
  /**
   * Output only. Sample SQL queries for the dataset.
   *
   * @param GoogleCloudDataplexV1DataDocumentationResultQuery[] $queries
   */
  public function setQueries($queries)
  {
    $this->queries = $queries;
  }
  /**
   * @return GoogleCloudDataplexV1DataDocumentationResultQuery[]
   */
  public function getQueries()
  {
    return $this->queries;
  }
  /**
   * Output only. Relationships suggesting how tables in the dataset are related
   * to each other, based on their schema.
   *
   * @param GoogleCloudDataplexV1DataDocumentationResultSchemaRelationship[] $schemaRelationships
   */
  public function setSchemaRelationships($schemaRelationships)
  {
    $this->schemaRelationships = $schemaRelationships;
  }
  /**
   * @return GoogleCloudDataplexV1DataDocumentationResultSchemaRelationship[]
   */
  public function getSchemaRelationships()
  {
    return $this->schemaRelationships;
  }
  /**
   * Output only. Generated table and column descriptions for each table in the
   * dataset.
   *
   * @param GoogleCloudDataplexV1DataDocumentationResultTableResult[] $tableResults
   */
  public function setTableResults($tableResults)
  {
    $this->tableResults = $tableResults;
  }
  /**
   * @return GoogleCloudDataplexV1DataDocumentationResultTableResult[]
   */
  public function getTableResults()
  {
    return $this->tableResults;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1DataDocumentationResultDatasetResult::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1DataDocumentationResultDatasetResult');
