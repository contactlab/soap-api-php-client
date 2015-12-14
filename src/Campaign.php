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

class Campaign
{

    /**
     * @var int $identifier
     * @access public
     */
    public $identifier = null;

    /**
     * @var string $name
     * @access public
     */
    public $name = null;

    /**
     * @var string $alias
     * @access public
     */
    public $alias = null;

    /**
     * @var Message $message
     * @access public
     */
    public $message = null;

    /**
     * @var CampaignType $modifier
     * @access public
     */
    public $modifier = null;

    /**
     * @var boolean $isDeferred
     * @access public
     */
    public $isDeferred = null;

    /**
     * @var dateTime $deferredTo
     * @access public
     */
    public $deferredTo = null;

    /**
     * @var dateTime $startDate
     * @access public
     */
    public $startDate = null;

    /**
     * @var dateTime $endDate
     * @access public
     */
    public $endDate = null;

    /**
     * @var boolean $executeTestRender
     * @access public
     */
    public $executeTestRender = null;

    /**
     * @var int $parentId
     * @access public
     */
    public $parentId = null;

    /**
     * @var deliveryRoleType $roleType
     * @access public
     */
    public $roleType = null;

    /**
     * @var boolean $removeDuplicates
     * @access public
     */
    public $removeDuplicates = null;

    /**
     * @var int $subscribersCount
     * @access public
     */
    public $subscribersCount = null;

    /**
     * @var deliveryStatus $status
     * @access public
     */
    public $status = null;
}
