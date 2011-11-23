<?php
/**
 * Copyright 2004-present Facebook. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package WebDriver
 */

/**
 * WebDriver_SimpleItem class
 *
 * @package WebDriver
 */
final class WebDriver_SimpleItem extends WebDriver_Base {
  private $_methods = array();

  /**
   * Return array of supported method names and corresponding HTTP request types
   *
   * @return array
   */
  protected function methods() {
    return $this->_methods;
  }

  /**
   * Set array of supported method names and corresponding HTTP request types
   *
   * @param array $methods
   */
  public function setMethods($methods) {
    $this->_methods = $methods;
    return $this;
  }
}