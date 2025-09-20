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

namespace Google\Service\HangoutsChat;

class GoogleAppsCardV1DecoratedText extends \Google\Model
{
  /**
   * @var string
   */
  public $bottomLabel;
  protected $bottomLabelTextType = GoogleAppsCardV1TextParagraph::class;
  protected $bottomLabelTextDataType = '';
  protected $buttonType = GoogleAppsCardV1Button::class;
  protected $buttonDataType = '';
  protected $contentTextType = GoogleAppsCardV1TextParagraph::class;
  protected $contentTextDataType = '';
  protected $endIconType = GoogleAppsCardV1Icon::class;
  protected $endIconDataType = '';
  protected $iconType = GoogleAppsCardV1Icon::class;
  protected $iconDataType = '';
  protected $onClickType = GoogleAppsCardV1OnClick::class;
  protected $onClickDataType = '';
  protected $startIconType = GoogleAppsCardV1Icon::class;
  protected $startIconDataType = '';
  /**
   * @var string
   */
  public $startIconVerticalAlignment;
  protected $switchControlType = GoogleAppsCardV1SwitchControl::class;
  protected $switchControlDataType = '';
  /**
   * @var string
   */
  public $text;
  /**
   * @var string
   */
  public $topLabel;
  protected $topLabelTextType = GoogleAppsCardV1TextParagraph::class;
  protected $topLabelTextDataType = '';
  /**
   * @var bool
   */
  public $wrapText;

  /**
   * @param string
   */
  public function setBottomLabel($bottomLabel)
  {
    $this->bottomLabel = $bottomLabel;
  }
  /**
   * @return string
   */
  public function getBottomLabel()
  {
    return $this->bottomLabel;
  }
  /**
   * @param GoogleAppsCardV1TextParagraph
   */
  public function setBottomLabelText(GoogleAppsCardV1TextParagraph $bottomLabelText)
  {
    $this->bottomLabelText = $bottomLabelText;
  }
  /**
   * @return GoogleAppsCardV1TextParagraph
   */
  public function getBottomLabelText()
  {
    return $this->bottomLabelText;
  }
  /**
   * @param GoogleAppsCardV1Button
   */
  public function setButton(GoogleAppsCardV1Button $button)
  {
    $this->button = $button;
  }
  /**
   * @return GoogleAppsCardV1Button
   */
  public function getButton()
  {
    return $this->button;
  }
  /**
   * @param GoogleAppsCardV1TextParagraph
   */
  public function setContentText(GoogleAppsCardV1TextParagraph $contentText)
  {
    $this->contentText = $contentText;
  }
  /**
   * @return GoogleAppsCardV1TextParagraph
   */
  public function getContentText()
  {
    return $this->contentText;
  }
  /**
   * @param GoogleAppsCardV1Icon
   */
  public function setEndIcon(GoogleAppsCardV1Icon $endIcon)
  {
    $this->endIcon = $endIcon;
  }
  /**
   * @return GoogleAppsCardV1Icon
   */
  public function getEndIcon()
  {
    return $this->endIcon;
  }
  /**
   * @param GoogleAppsCardV1Icon
   */
  public function setIcon(GoogleAppsCardV1Icon $icon)
  {
    $this->icon = $icon;
  }
  /**
   * @return GoogleAppsCardV1Icon
   */
  public function getIcon()
  {
    return $this->icon;
  }
  /**
   * @param GoogleAppsCardV1OnClick
   */
  public function setOnClick(GoogleAppsCardV1OnClick $onClick)
  {
    $this->onClick = $onClick;
  }
  /**
   * @return GoogleAppsCardV1OnClick
   */
  public function getOnClick()
  {
    return $this->onClick;
  }
  /**
   * @param GoogleAppsCardV1Icon
   */
  public function setStartIcon(GoogleAppsCardV1Icon $startIcon)
  {
    $this->startIcon = $startIcon;
  }
  /**
   * @return GoogleAppsCardV1Icon
   */
  public function getStartIcon()
  {
    return $this->startIcon;
  }
  /**
   * @param string
   */
  public function setStartIconVerticalAlignment($startIconVerticalAlignment)
  {
    $this->startIconVerticalAlignment = $startIconVerticalAlignment;
  }
  /**
   * @return string
   */
  public function getStartIconVerticalAlignment()
  {
    return $this->startIconVerticalAlignment;
  }
  /**
   * @param GoogleAppsCardV1SwitchControl
   */
  public function setSwitchControl(GoogleAppsCardV1SwitchControl $switchControl)
  {
    $this->switchControl = $switchControl;
  }
  /**
   * @return GoogleAppsCardV1SwitchControl
   */
  public function getSwitchControl()
  {
    return $this->switchControl;
  }
  /**
   * @param string
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * @param string
   */
  public function setTopLabel($topLabel)
  {
    $this->topLabel = $topLabel;
  }
  /**
   * @return string
   */
  public function getTopLabel()
  {
    return $this->topLabel;
  }
  /**
   * @param GoogleAppsCardV1TextParagraph
   */
  public function setTopLabelText(GoogleAppsCardV1TextParagraph $topLabelText)
  {
    $this->topLabelText = $topLabelText;
  }
  /**
   * @return GoogleAppsCardV1TextParagraph
   */
  public function getTopLabelText()
  {
    return $this->topLabelText;
  }
  /**
   * @param bool
   */
  public function setWrapText($wrapText)
  {
    $this->wrapText = $wrapText;
  }
  /**
   * @return bool
   */
  public function getWrapText()
  {
    return $this->wrapText;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAppsCardV1DecoratedText::class, 'Google_Service_HangoutsChat_GoogleAppsCardV1DecoratedText');
