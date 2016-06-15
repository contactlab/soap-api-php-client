<?php

/**
 * Copyright 2012-2015 ContactLab, Italy
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class FieldDescription
{

    /**
     * @var string $fieldName
     * @access public
     */
    public $fieldName = null;

    /**
     * @var string $dataType
     * @access public
     */
    public $dataType = null;

    /**
     * @var boolean $primary
     * @access public
     */
    public $primary = null;

    /**
     * @var boolean $notNull
     * @access public
     */
    public $notNull = null;

    /**
     * @var boolean $unique
     * @access public
     */
    public $unique = null;

    /**
     * @var boolean $autoIncrement
     * @access public
     */
    public $autoIncrement = null;

    /**
     * @var string $defaultValue
     * @access public
     */
    public $defaultValue = null;
}
