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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1Widget extends \Google\Model
{
  protected $chartType = GoogleCloudContactcenterinsightsV1Chart::class;
  protected $chartDataType = '';
  /**
   * A reference to a chart widget. Format: projects/{project}/locations/{locati
   * on}/dashboards/{dashboard}/charts/{chart}
   *
   * @var string
   */
  public $chartReference;
  protected $containerType = GoogleCloudContactcenterinsightsV1Container::class;
  protected $containerDataType = '';
  /**
   * Filter applied to all charts in the container. Should support scope later.
   *
   * @var string
   */
  public $filter;

  /**
   * A chart widget.
   *
   * @param GoogleCloudContactcenterinsightsV1Chart $chart
   */
  public function setChart(GoogleCloudContactcenterinsightsV1Chart $chart)
  {
    $this->chart = $chart;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1Chart
   */
  public function getChart()
  {
    return $this->chart;
  }
  /**
   * A reference to a chart widget. Format: projects/{project}/locations/{locati
   * on}/dashboards/{dashboard}/charts/{chart}
   *
   * @param string $chartReference
   */
  public function setChartReference($chartReference)
  {
    $this->chartReference = $chartReference;
  }
  /**
   * @return string
   */
  public function getChartReference()
  {
    return $this->chartReference;
  }
  /**
   * A container widget.
   *
   * @param GoogleCloudContactcenterinsightsV1Container $container
   */
  public function setContainer(GoogleCloudContactcenterinsightsV1Container $container)
  {
    $this->container = $container;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1Container
   */
  public function getContainer()
  {
    return $this->container;
  }
  /**
   * Filter applied to all charts in the container. Should support scope later.
   *
   * @param string $filter
   */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /**
   * @return string
   */
  public function getFilter()
  {
    return $this->filter;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1Widget::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1Widget');
