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

class CampaignAttributes
{

    /**
     * @var charset $charset
     * @access public
     */
    public $charset = null;

    /**
     * @var LookupIdentifiers $identifiers
     * @access public
     */
    public $identifiers = null;

    /**
     * @var LookupField $alias
     * @access public
     */
    public $alias = null;

    /**
     * @var LookupIdentifiers $messageIdentifiers
     * @access public
     */
    public $messageIdentifiers = null;

    /**
     * @var LookupDate $startDate
     * @access public
     */
    public $startDate = null;

    /**
     * @var deliveryStatus $status
     * @access public
     */
    public $status = null;

    /**
     * @var CampaignType $type
     * @access public
     */
    public $type = null;

    /**
     * @var boolean $deferred
     * @access public
     */
    public $deferred = null;

    /**
     * @var LookupIdentifiers $sourceFilters
     * @access public
     */
    public $sourceFilters = null;

    /**
     * @var LookupField $name
     * @access public
     */
    public $name = null;

    /**
     * @var LookupField $subject
     * @access public
     */
    public $subject = null;

    /**
     * @var LookupNote $note
     * @access public
     */
    public $note = null;

    /**
     * @var int $categoryId
     * @access public
     */
    public $categoryId = null;

    /**
     * @var int $parentId
     * @access public
     */
    public $parentId = null;

    /**
     * @var boolean $triggerable
     * @access public
     */
    public $triggerable = null;

    /**
     * @var AttributeMatchingMode $matchingMode
     * @access public
     */
    public $matchingMode = null;
}
