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

namespace Google\Service\DriveActivity;

class FieldValue extends \Google\Model
{
  /**
   * @var Date
   */
  public $date;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /**
   * @var DriveactivityInteger
   */
  public $integer;
  protected $integerType = DriveactivityInteger::class;
  protected $integerDataType = '';
  /**
   * @var Selection
   */
  public $selection;
  protected $selectionType = Selection::class;
  protected $selectionDataType = '';
  /**
   * @var SelectionList
   */
  public $selectionList;
  protected $selectionListType = SelectionList::class;
  protected $selectionListDataType = '';
  /**
   * @var Text
   */
  public $text;
  protected $textType = Text::class;
  protected $textDataType = '';
  /**
   * @var TextList
   */
  public $textList;
  protected $textListType = TextList::class;
  protected $textListDataType = '';
  /**
   * @var SingleUser
   */
  public $user;
  protected $userType = SingleUser::class;
  protected $userDataType = '';
  /**
   * @var UserList
   */
  public $userList;
  protected $userListType = UserList::class;
  protected $userListDataType = '';

  /**
   * @param Date
   */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /**
   * @return Date
   */
  public function getDate()
  {
    return $this->date;
  }
  /**
   * @param DriveactivityInteger
   */
  public function setInteger(DriveactivityInteger $integer)
  {
    $this->integer = $integer;
  }
  /**
   * @return DriveactivityInteger
   */
  public function getInteger()
  {
    return $this->integer;
  }
  /**
   * @param Selection
   */
  public function setSelection(Selection $selection)
  {
    $this->selection = $selection;
  }
  /**
   * @return Selection
   */
  public function getSelection()
  {
    return $this->selection;
  }
  /**
   * @param SelectionList
   */
  public function setSelectionList(SelectionList $selectionList)
  {
    $this->selectionList = $selectionList;
  }
  /**
   * @return SelectionList
   */
  public function getSelectionList()
  {
    return $this->selectionList;
  }
  /**
   * @param Text
   */
  public function setText(Text $text)
  {
    $this->text = $text;
  }
  /**
   * @return Text
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * @param TextList
   */
  public function setTextList(TextList $textList)
  {
    $this->textList = $textList;
  }
  /**
   * @return TextList
   */
  public function getTextList()
  {
    return $this->textList;
  }
  /**
   * @param SingleUser
   */
  public function setUser(SingleUser $user)
  {
    $this->user = $user;
  }
  /**
   * @return SingleUser
   */
  public function getUser()
  {
    return $this->user;
  }
  /**
   * @param UserList
   */
  public function setUserList(UserList $userList)
  {
    $this->userList = $userList;
  }
  /**
   * @return UserList
   */
  public function getUserList()
  {
    return $this->userList;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldValue::class, 'Google_Service_DriveActivity_FieldValue');
