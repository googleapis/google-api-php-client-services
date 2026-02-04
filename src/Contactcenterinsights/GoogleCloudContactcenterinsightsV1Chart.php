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

class GoogleCloudContactcenterinsightsV1Chart extends \Google\Model
{
  /**
   * Unspecified chart type.
   */
  public const CHART_TYPE_CHART_TYPE_UNSPECIFIED = 'CHART_TYPE_UNSPECIFIED';
  /**
   * Pre-defined chart type.
   */
  public const CHART_TYPE_SYSTEM_DEFINED = 'SYSTEM_DEFINED';
  /**
   * Configurable chart type.
   */
  public const CHART_TYPE_USER_DEFINED = 'USER_DEFINED';
  /**
   * Unspecified chart visualization type.
   */
  public const CHART_VISUALIZATION_TYPE_CHART_VISUALIZATION_TYPE_UNSPECIFIED = 'CHART_VISUALIZATION_TYPE_UNSPECIFIED';
  /**
   * Bar chart.
   */
  public const CHART_VISUALIZATION_TYPE_BAR = 'BAR';
  /**
   * Line chart.
   */
  public const CHART_VISUALIZATION_TYPE_LINE = 'LINE';
  /**
   * Area chart.
   */
  public const CHART_VISUALIZATION_TYPE_AREA = 'AREA';
  /**
   * Pie chart.
   */
  public const CHART_VISUALIZATION_TYPE_PIE = 'PIE';
  /**
   * Scatter chart.
   */
  public const CHART_VISUALIZATION_TYPE_SCATTER = 'SCATTER';
  /**
   * Table chart.
   */
  public const CHART_VISUALIZATION_TYPE_TABLE = 'TABLE';
  /**
   * Score card chart.
   */
  public const CHART_VISUALIZATION_TYPE_SCORE_CARD = 'SCORE_CARD';
  /**
   * Sunburst chart.
   */
  public const CHART_VISUALIZATION_TYPE_SUNBURST = 'SUNBURST';
  /**
   * Gauge chart.
   */
  public const CHART_VISUALIZATION_TYPE_GAUGE = 'GAUGE';
  /**
   * Sankey chart.
   */
  public const CHART_VISUALIZATION_TYPE_SANKEY = 'SANKEY';
  /**
   * Output only. Chart type.
   *
   * @var string
   */
  public $chartType;
  /**
   * Chart visualization type.
   *
   * @var string
   */
  public $chartVisualizationType;
  /**
   * Output only. Chart create time.
   *
   * @var string
   */
  public $createTime;
  protected $dataSourceType = GoogleCloudContactcenterinsightsV1ChartDataSource::class;
  protected $dataSourceDataType = '';
  protected $dateRangeConfigType = GoogleCloudContactcenterinsightsV1DateRangeConfig::class;
  protected $dateRangeConfigDataType = '';
  /**
   * Chart description
   *
   * @var string
   */
  public $description;
  /**
   * User provided display name of the chart.
   *
   * @var string
   */
  public $displayName;
  /**
   * Filter applied to all charts in the container. Should support scope later.
   *
   * @var string
   */
  public $filter;
  /**
   * The height of the chart in grid units.
   *
   * @var int
   */
  public $height;
  /**
   * Identifier. Chart resource name. Format: projects/{project}/locations/{loca
   * tion}/dashboards/{dashboard}/charts/{chart}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Chart last update time.
   *
   * @var string
   */
  public $updateTime;
  /**
   * The width of the chart in grid units.
   *
   * @var int
   */
  public $width;

  /**
   * Output only. Chart type.
   *
   * Accepted values: CHART_TYPE_UNSPECIFIED, SYSTEM_DEFINED, USER_DEFINED
   *
   * @param self::CHART_TYPE_* $chartType
   */
  public function setChartType($chartType)
  {
    $this->chartType = $chartType;
  }
  /**
   * @return self::CHART_TYPE_*
   */
  public function getChartType()
  {
    return $this->chartType;
  }
  /**
   * Chart visualization type.
   *
   * Accepted values: CHART_VISUALIZATION_TYPE_UNSPECIFIED, BAR, LINE, AREA,
   * PIE, SCATTER, TABLE, SCORE_CARD, SUNBURST, GAUGE, SANKEY
   *
   * @param self::CHART_VISUALIZATION_TYPE_* $chartVisualizationType
   */
  public function setChartVisualizationType($chartVisualizationType)
  {
    $this->chartVisualizationType = $chartVisualizationType;
  }
  /**
   * @return self::CHART_VISUALIZATION_TYPE_*
   */
  public function getChartVisualizationType()
  {
    return $this->chartVisualizationType;
  }
  /**
   * Output only. Chart create time.
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
   * @param GoogleCloudContactcenterinsightsV1ChartDataSource $dataSource
   */
  public function setDataSource(GoogleCloudContactcenterinsightsV1ChartDataSource $dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1ChartDataSource
   */
  public function getDataSource()
  {
    return $this->dataSource;
  }
  /**
   * Date range config applied to the chart.
   *
   * @param GoogleCloudContactcenterinsightsV1DateRangeConfig $dateRangeConfig
   */
  public function setDateRangeConfig(GoogleCloudContactcenterinsightsV1DateRangeConfig $dateRangeConfig)
  {
    $this->dateRangeConfig = $dateRangeConfig;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1DateRangeConfig
   */
  public function getDateRangeConfig()
  {
    return $this->dateRangeConfig;
  }
  /**
   * Chart description
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
   * User provided display name of the chart.
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
  /**
   * The height of the chart in grid units.
   *
   * @param int $height
   */
  public function setHeight($height)
  {
    $this->height = $height;
  }
  /**
   * @return int
   */
  public function getHeight()
  {
    return $this->height;
  }
  /**
   * Identifier. Chart resource name. Format: projects/{project}/locations/{loca
   * tion}/dashboards/{dashboard}/charts/{chart}
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
   * Output only. Chart last update time.
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
  /**
   * The width of the chart in grid units.
   *
   * @param int $width
   */
  public function setWidth($width)
  {
    $this->width = $width;
  }
  /**
   * @return int
   */
  public function getWidth()
  {
    return $this->width;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1Chart::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1Chart');
