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

class DeliverySplitConfig
{

    /**
     * @var int $splitPercent
     * @access public
     */
    public $splitPercent = null;

    /**
     * @var winningCriterion $testWinningCriterion
     * @access public
     */
    public $testWinningCriterion = null;

    /**
     * @var int $deliveryId
     * @access public
     */
    public $deliveryId = null;

    /**
     * @var int $splits
     * @access public
     */
    public $splits = null;

    /**
     * @var deliverySplitType $splitType
     * @access public
     */
    public $splitType = null;
}
