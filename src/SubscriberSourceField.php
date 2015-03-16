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

class SubscriberSourceField
{

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var field $type
     * @access public
     */
    public $type = null;

    /**
     * @var boolean $emailField
     * @access public
     */
    public $emailField = null;

    /**
     * @var boolean $phoneField
     * @access public
     */
    public $phoneField = null;

    /**
     * @var boolean $faxField
     * @access public
     */
    public $faxField = null;

    /**
     * @var boolean $pushField
     * @access public
     */
    public $pushField = null;
}
