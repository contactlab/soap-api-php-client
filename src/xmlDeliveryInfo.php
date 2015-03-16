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

class xmlDeliveryInfo
{

    /**
     * @var dateTime $beginsAt
     * @access public
     */
    public $beginsAt = null;

    /**
     * @var int $configurationId
     * @access public
     */
    public $configurationId = null;

    /**
     * @var string $configurationName
     * @access public
     */
    public $configurationName = null;

    /**
     * @var dateTime $endsAt
     * @access public
     */
    public $endsAt = null;

    /**
     * @var string $fileName
     * @access public
     */
    public $fileName = null;

    /**
     * @var string $host
     * @access public
     */
    public $host = null;

    /**
     * @var int $id
     * @access public
     */
    public $id = null;

    /**
     * @var dateTime $lastModified
     * @access public
     */
    public $lastModified = null;

    /**
     * @var xmlDeliveryStatusType $status
     * @access public
     */
    public $status = null;

    /**
     * @var xmlDeliverySubStatusType $subStatus
     * @access public
     */
    public $subStatus = null;
}
