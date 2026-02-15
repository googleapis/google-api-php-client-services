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

class WidgetTool extends \Google\Model
{
  /**
   * Unspecified widget type.
   */
  public const WIDGET_TYPE_WIDGET_TYPE_UNSPECIFIED = 'WIDGET_TYPE_UNSPECIFIED';
  /**
   * Custom widget type.
   */
  public const WIDGET_TYPE_CUSTOM = 'CUSTOM';
  /**
   * Product carousel widget.
   */
  public const WIDGET_TYPE_PRODUCT_CAROUSEL = 'PRODUCT_CAROUSEL';
  /**
   * Product details widget.
   */
  public const WIDGET_TYPE_PRODUCT_DETAILS = 'PRODUCT_DETAILS';
  /**
   * Quick actions widget.
   */
  public const WIDGET_TYPE_QUICK_ACTIONS = 'QUICK_ACTIONS';
  /**
   * Product comparison widget.
   */
  public const WIDGET_TYPE_PRODUCT_COMPARISON = 'PRODUCT_COMPARISON';
  /**
   * Advanced product details widget.
   */
  public const WIDGET_TYPE_ADVANCED_PRODUCT_DETAILS = 'ADVANCED_PRODUCT_DETAILS';
  /**
   * Short form widget.
   */
  public const WIDGET_TYPE_SHORT_FORM = 'SHORT_FORM';
  /**
   * Overall satisfaction widget.
   */
  public const WIDGET_TYPE_OVERALL_SATISFACTION = 'OVERALL_SATISFACTION';
  /**
   * Order summary widget.
   */
  public const WIDGET_TYPE_ORDER_SUMMARY = 'ORDER_SUMMARY';
  /**
   * Appointment details widget.
   */
  public const WIDGET_TYPE_APPOINTMENT_DETAILS = 'APPOINTMENT_DETAILS';
  /**
   * Optional. The description of the widget tool.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The display name of the widget tool.
   *
   * @var string
   */
  public $name;
  protected $parametersType = Schema::class;
  protected $parametersDataType = '';
  /**
   * Optional. The type of the widget tool. If not specified, the default type
   * will be CUSTOMIZED.
   *
   * @var string
   */
  public $widgetType;

  /**
   * Optional. The description of the widget tool.
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
   * Required. The display name of the widget tool.
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
   * Optional. The input parameters of the widget tool.
   *
   * @param Schema $parameters
   */
  public function setParameters(Schema $parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return Schema
   */
  public function getParameters()
  {
    return $this->parameters;
  }
  /**
   * Optional. The type of the widget tool. If not specified, the default type
   * will be CUSTOMIZED.
   *
   * Accepted values: WIDGET_TYPE_UNSPECIFIED, CUSTOM, PRODUCT_CAROUSEL,
   * PRODUCT_DETAILS, QUICK_ACTIONS, PRODUCT_COMPARISON,
   * ADVANCED_PRODUCT_DETAILS, SHORT_FORM, OVERALL_SATISFACTION, ORDER_SUMMARY,
   * APPOINTMENT_DETAILS
   *
   * @param self::WIDGET_TYPE_* $widgetType
   */
  public function setWidgetType($widgetType)
  {
    $this->widgetType = $widgetType;
  }
  /**
   * @return self::WIDGET_TYPE_*
   */
  public function getWidgetType()
  {
    return $this->widgetType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WidgetTool::class, 'Google_Service_CustomerEngagementSuite_WidgetTool');
