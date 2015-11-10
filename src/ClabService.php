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

include_once('AuthToken.php');
include_once('Message.php');
include_once('Recipients.php');
include_once('Sender.php');
include_once('TextMessage.php');
include_once('EmailMessage.php');
include_once('FaxMessage.php');
include_once('PushMessage.php');
include_once('PushLink.php');
include_once('APNsPushTemplate.php');
include_once('variants.php');
include_once('entry.php');
include_once('SubscriberSourceFilter.php');
include_once('CommunicationCategory.php');
include_once('Subscriber.php');
include_once('SubscriberAttribute.php');
include_once('SendImmediateOptions.php');
include_once('Attachment.php');
include_once('LookupPreferences.php');
include_once('CampaignLookupPreferences.php');
include_once('XMLDeliveryInfos.php');
include_once('SlicedDataSet.php');
include_once('Campaigns.php');
include_once('Campaign.php');
include_once('SubscriberSources.php');
include_once('SubscriberSource.php');
include_once('SubscriberSourceField.php');
include_once('MessageModels.php');
include_once('SubscriberSourceFilters.php');
include_once('CampaignNotes.php');
include_once('CampaignNote.php');
include_once('TrackedLinks.php');
include_once('TrackedLink.php');
include_once('Subscribers.php');
include_once('MobileApplicationCertificate.php');
include_once('MobileApplicationCertificateAssignment.php');
include_once('APNsMobileApplicationCertificate.php');
include_once('components.php');
include_once('GCMsMobileApplicationCertificate.php');
include_once('SplitTestCampaign.php');
include_once('DeliverySplitConfig.php');
include_once('CampaignFeedback.php');
include_once('BounceDetail.php');
include_once('charset.php');
include_once('PreferredContent.php');
include_once('MimeType.php');
include_once('PushEndpointType.php');
include_once('APNsPushStandardFieldEnum.php');
include_once('GCMsPushStandardFieldEnum.php');
include_once('SubscriberSourceFilterType.php');
include_once('LookupMatchingMode.php');
include_once('LookupSortingMode.php');
include_once('CampaignSortingOption.php');
include_once('CampaignType.php');
include_once('deliveryStatus.php');
include_once('field.php');
include_once('channel.php');
include_once('ActivityStatus.php');
include_once('APNsMobileApplicationCertificateComponentEnum.php');
include_once('GCMsMobileApplicationCertificateComponentEnum.php');
include_once('keepaliveToken.php');
include_once('keepaliveTokenResponse.php');
include_once('findMessageInfoByCampaignId.php');
include_once('findMessageInfoByCampaignIdResponse.php');
include_once('pushTemplateEnvelope.php');
include_once('pushTemplate.php');
include_once('customData.php');
include_once('trackableLink.php');
include_once('gcMsPushTemplate.php');
include_once('triggerDeliveryByAlias.php');
include_once('triggerDeliveryByAliasResponse.php');
include_once('addSubscriberSourceFilter.php');
include_once('addSubscriberSourceFilterResponse.php');
include_once('getAvailableCommunicationCategories.php');
include_once('getAvailableCommunicationCategoriesResponse.php');
include_once('sendImmediateByCampaignAliasToSubscriber.php');
include_once('sendImmediateByCampaignAliasToSubscriberResponse.php');
include_once('getArchivedSubscriberSourceFilter.php');
include_once('getArchivedSubscriberSourceFilterResponse.php');
include_once('getXMLDeliveries.php');
include_once('getXMLDeliveriesResponse.php');
include_once('xmlDeliveryInfo.php');
include_once('getEmptyPushTemplate.php');
include_once('getEmptyPushTemplateResponse.php');
include_once('sendCampaign.php');
include_once('sendCampaignResponse.php');
include_once('findCampaignsSentBetween.php');
include_once('findCampaignsSentBetweenResponse.php');
include_once('countSubscribers.php');
include_once('countSubscribersResponse.php');
include_once('sendImmediateMessageSdataCAlCA.php');
include_once('sendImmediateMessageSdataCAlCAResponse.php');
include_once('getXMLDeliveryTransitions.php');
include_once('getXMLDeliveryTransitionsResponse.php');
include_once('xmlDeliveryTransitionInfo.php');
include_once('findCampaignsByNameOrSubject.php');
include_once('findCampaignsByNameOrSubjectResponse.php');
include_once('sendImmediateMessageSidCAlCA.php');
include_once('sendImmediateMessageSidCAlCAResponse.php');
include_once('addCampaignNote.php');
include_once('addCampaignNoteResponse.php');
include_once('triggerDeliveryById.php');
include_once('triggerDeliveryByIdResponse.php');
include_once('findCampaigns.php');
include_once('findCampaignsResponse.php');
include_once('getRequestStatus.php');
include_once('getRequestStatusResponse.php');
include_once('getMobileApplicationByCode.php');
include_once('getMobileApplicationByCodeResponse.php');
include_once('mobileApplication.php');
include_once('updateSubscriber.php');
include_once('updateSubscriberResponse.php');
include_once('getCryptoKey.php');
include_once('getCryptoKeyResponse.php');
include_once('archiveSubscriberSourceFilter.php');
include_once('archiveSubscriberSourceFilterResponse.php');
include_once('cloneAndSendCampaign.php');
include_once('cloneAndSendCampaignResponse.php');
include_once('uploadMediaContent.php');
include_once('uploadMediaContentResponse.php');
include_once('findMessageModels.php');
include_once('findMessageModelsResponse.php');
include_once('sendImmediateMessageSDataCDataCA.php');
include_once('sendImmediateMessageSDataCDataCAResponse.php');
include_once('findMessagesInfoByChannel.php');
include_once('findMessagesInfoByChannelResponse.php');
include_once('getCampaign.php');
include_once('getCampaignResponse.php');
include_once('addSubscribers.php');
include_once('addSubscribersResponse.php');
include_once('sendImmediateMessageSidCid.php');
include_once('sendImmediateMessageSidCidResponse.php');
include_once('findMessagesInfo.php');
include_once('findMessagesInfoResponse.php');
include_once('sendImmediateMessageSDataCIdCA.php');
include_once('sendImmediateMessageSDataCIdCAResponse.php');
include_once('getSubscriberSourceFilter.php');
include_once('getSubscriberSourceFilterResponse.php');
include_once('findMessagesByChannel.php');
include_once('findMessagesByChannelResponse.php');
include_once('findArchivedFiltersBySubscriberSource.php');
include_once('findArchivedFiltersBySubscriberSourceResponse.php');
include_once('getAttachmentByCampaignId.php');
include_once('getAttachmentByCampaignIdResponse.php');
include_once('getMessageModelById.php');
include_once('getMessageModelByIdResponse.php');
include_once('getSubscriber.php');
include_once('getSubscriberResponse.php');
include_once('sendSplitTest.php');
include_once('sendSplitTestResponse.php');
include_once('borrowToken.php');
include_once('borrowTokenResponse.php');
include_once('modifySubscriberSubscriptionStatus.php');
include_once('modifySubscriberSubscriptionStatusResponse.php');
include_once('findPeriodicCampaigns.php');
include_once('findPeriodicCampaignsResponse.php');
include_once('sendImmediateByCampaignIdToSubscriber.php');
include_once('sendImmediateByCampaignIdToSubscriberResponse.php');
include_once('findNotesByCampaign.php');
include_once('findNotesByCampaignResponse.php');
include_once('modifySubscriberSubscriptionStatusByMailqId.php');
include_once('modifySubscriberSubscriptionStatusByMailqIdResponse.php');
include_once('sendImmediateByCampaignAliasToSubscriberId.php');
include_once('sendImmediateByCampaignAliasToSubscriberIdResponse.php');
include_once('unmarshalPushTemplateEnvelope.php');
include_once('unmarshalPushTemplateEnvelopeResponse.php');
include_once('isSubscriberSourceLocked.php');
include_once('isSubscriberSourceLockedResponse.php');
include_once('startSubscriberDataExchange.php');
include_once('startSubscriberDataExchangeResponse.php');
include_once('getDeliveryStatus.php');
include_once('getDeliveryStatusResponse.php');
include_once('deliveryInformation.php');
include_once('sendSplitTestWinner.php');
include_once('sendSplitTestWinnerResponse.php');
include_once('getCampaignDeliveryStatus.php');
include_once('getCampaignDeliveryStatusResponse.php');
include_once('removeSubscriber.php');
include_once('removeSubscriberResponse.php');
include_once('addAttachment.php');
include_once('addAttachmentResponse.php');
include_once('sendImmediateByCampaignIdToSubscriberId.php');
include_once('sendImmediateByCampaignIdToSubscriberIdResponse.php');
include_once('findFiltersBySubscriberSource.php');
include_once('findFiltersBySubscriberSourceResponse.php');
include_once('setCampaignRecurrency.php');
include_once('setCampaignRecurrencyResponse.php');
include_once('countSubscribersIncludedInFilter.php');
include_once('countSubscribersIncludedInFilterResponse.php');
include_once('sendImmediateMessageSidCidCA.php');
include_once('sendImmediateMessageSidCidCAResponse.php');
include_once('findSubscriberSources.php');
include_once('findSubscriberSourcesResponse.php');
include_once('addSubscriberSource.php');
include_once('addSubscriberSourceResponse.php');
include_once('findMessageModelsBySubscriberSource.php');
include_once('findMessageModelsBySubscriberSourceResponse.php');
include_once('sendImmediateMessageSdataCAl.php');
include_once('sendImmediateMessageSdataCAlResponse.php');
include_once('findCampaignsByModel.php');
include_once('findCampaignsByModelResponse.php');
include_once('findMessages.php');
include_once('findMessagesResponse.php');
include_once('sendImmediateMessageSDataCData.php');
include_once('sendImmediateMessageSDataCDataResponse.php');
include_once('getSubscriberDataExchangeStatus.php');
include_once('getSubscriberDataExchangeStatusResponse.php');
include_once('sendImmediateMessageSIdCDataCA.php');
include_once('sendImmediateMessageSIdCDataCAResponse.php');
include_once('sendImmediateMessage.php');
include_once('sendImmediateMessageResponse.php');
include_once('sendImmediateMessageSIdCData.php');
include_once('sendImmediateMessageSIdCDataResponse.php');
include_once('findMessagesInfoByCampaignName.php');
include_once('findMessagesInfoByCampaignNameResponse.php');
include_once('findCampaignsBySubscriberSourceFilter.php');
include_once('findCampaignsBySubscriberSourceFilterResponse.php');
include_once('sendImmediateMessageSidCAl.php');
include_once('sendImmediateMessageSidCAlResponse.php');
include_once('createSplitTest.php');
include_once('createSplitTestResponse.php');
include_once('sendImmediateByCampaignToSubscriber.php');
include_once('sendImmediateByCampaignToSubscriberResponse.php');
include_once('findCampaignsByStatus.php');
include_once('findCampaignsByStatusResponse.php');
include_once('getSubscriberSource.php');
include_once('getSubscriberSourceResponse.php');
include_once('sendImmediateByCampaignToSubscriberId.php');
include_once('sendImmediateByCampaignToSubscriberIdResponse.php');
include_once('findSubscribers.php');
include_once('findSubscribersResponse.php');
include_once('findTriggerableCampaigns.php');
include_once('findTriggerableCampaignsResponse.php');
include_once('findMessageByCampaignId.php');
include_once('findMessageByCampaignIdResponse.php');
include_once('findCampaignsByNote.php');
include_once('findCampaignsByNoteResponse.php');
include_once('invalidateToken.php');
include_once('invalidateTokenResponse.php');
include_once('publishOnWeb.php');
include_once('publishOnWebResponse.php');
include_once('reuseSubscriberSourceFilter.php');
include_once('reuseSubscriberSourceFilterResponse.php');
include_once('findMessagesByCampaignName.php');
include_once('findMessagesByCampaignNameResponse.php');
include_once('createCampaign.php');
include_once('createCampaignResponse.php');
include_once('addSubscriber.php');
include_once('addSubscriberResponse.php');
include_once('getTrackedLinks.php');
include_once('getTrackedLinksResponse.php');
include_once('getCampaignFeedback.php');
include_once('getCampaignFeedbackResponse.php');
include_once('requestCampaignFeedbackReport.php');
include_once('requestCampaignFeedbackReportResponse.php');
include_once('createMessageModel.php');
include_once('createMessageModelResponse.php');
include_once('cancelCampaign.php');
include_once('cancelCampaignResponse.php');
include_once('findSubscribersIncludedInFilter.php');
include_once('findSubscribersIncludedInFilterResponse.php');
include_once('xmlDeliveryStatusType.php');
include_once('xmlDeliverySubStatusType.php');
include_once('deliveryRoleType.php');
include_once('mobileApplicationEnvironmentEnum.php');
include_once('winningCriterion.php');
include_once('deliverySplitType.php');

class ClabService extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'AuthToken' => '\AuthToken',
      'Message' => '\Message',
      'Recipients' => '\Recipients',
      'Sender' => '\Sender',
      'TextMessage' => '\TextMessage',
      'EmailMessage' => '\EmailMessage',
      'FaxMessage' => '\FaxMessage',
      'PushMessage' => '\PushMessage',
      'PushLink' => '\PushLink',
      'APNsPushTemplate' => '\APNsPushTemplate',
      'variants' => '\variants',
      'entry' => '\entry',
      'SubscriberSourceFilter' => '\SubscriberSourceFilter',
      'CommunicationCategory' => '\CommunicationCategory',
      'Subscriber' => '\Subscriber',
      'SubscriberAttribute' => '\SubscriberAttribute',
      'SendImmediateOptions' => '\SendImmediateOptions',
      'Attachment' => '\Attachment',
      'LookupPreferences' => '\LookupPreferences',
      'CampaignLookupPreferences' => '\CampaignLookupPreferences',
      'XMLDeliveryInfos' => '\XMLDeliveryInfos',
      'SlicedDataSet' => '\SlicedDataSet',
      'Campaigns' => '\Campaigns',
      'Campaign' => '\Campaign',
      'SubscriberSources' => '\SubscriberSources',
      'SubscriberSource' => '\SubscriberSource',
      'SubscriberSourceField' => '\SubscriberSourceField',
      'MessageModels' => '\MessageModels',
      'SubscriberSourceFilters' => '\SubscriberSourceFilters',
      'CampaignNotes' => '\CampaignNotes',
      'CampaignNote' => '\CampaignNote',
      'TrackedLinks' => '\TrackedLinks',
      'TrackedLink' => '\TrackedLink',
      'Subscribers' => '\Subscribers',
      'MobileApplicationCertificate' => '\MobileApplicationCertificate',
      'MobileApplicationCertificateAssignment' => '\MobileApplicationCertificateAssignment',
      'APNsMobileApplicationCertificate' => '\APNsMobileApplicationCertificate',
      'components' => '\components',
      'GCMsMobileApplicationCertificate' => '\GCMsMobileApplicationCertificate',
      'SplitTestCampaign' => '\SplitTestCampaign',
      'DeliverySplitConfig' => '\DeliverySplitConfig',
      'CampaignFeedback' => '\CampaignFeedback',
      'BounceDetail' => '\BounceDetail',
      'keepaliveToken' => '\keepaliveToken',
      'keepaliveTokenResponse' => '\keepaliveTokenResponse',
      'findMessageInfoByCampaignId' => '\findMessageInfoByCampaignId',
      'findMessageInfoByCampaignIdResponse' => '\findMessageInfoByCampaignIdResponse',
      'pushTemplateEnvelope' => '\pushTemplateEnvelope',
      'pushTemplate' => '\pushTemplate',
      'customData' => '\customData',
      'trackableLink' => '\trackableLink',
      'gcMsPushTemplate' => '\gcMsPushTemplate',
      'triggerDeliveryByAlias' => '\triggerDeliveryByAlias',
      'triggerDeliveryByAliasResponse' => '\triggerDeliveryByAliasResponse',
      'addSubscriberSourceFilter' => '\addSubscriberSourceFilter',
      'addSubscriberSourceFilterResponse' => '\addSubscriberSourceFilterResponse',
      'getAvailableCommunicationCategories' => '\getAvailableCommunicationCategories',
      'getAvailableCommunicationCategoriesResponse' => '\getAvailableCommunicationCategoriesResponse',
      'sendImmediateByCampaignAliasToSubscriber' => '\sendImmediateByCampaignAliasToSubscriber',
      'sendImmediateByCampaignAliasToSubscriberResponse' => '\sendImmediateByCampaignAliasToSubscriberResponse',
      'getArchivedSubscriberSourceFilter' => '\getArchivedSubscriberSourceFilter',
      'getArchivedSubscriberSourceFilterResponse' => '\getArchivedSubscriberSourceFilterResponse',
      'getXMLDeliveries' => '\getXMLDeliveries',
      'getXMLDeliveriesResponse' => '\getXMLDeliveriesResponse',
      'xmlDeliveryInfo' => '\xmlDeliveryInfo',
      'getEmptyPushTemplate' => '\getEmptyPushTemplate',
      'getEmptyPushTemplateResponse' => '\getEmptyPushTemplateResponse',
      'sendCampaign' => '\sendCampaign',
      'sendCampaignResponse' => '\sendCampaignResponse',
      'findCampaignsSentBetween' => '\findCampaignsSentBetween',
      'findCampaignsSentBetweenResponse' => '\findCampaignsSentBetweenResponse',
      'countSubscribers' => '\countSubscribers',
      'countSubscribersResponse' => '\countSubscribersResponse',
      'sendImmediateMessageSdataCAlCA' => '\sendImmediateMessageSdataCAlCA',
      'sendImmediateMessageSdataCAlCAResponse' => '\sendImmediateMessageSdataCAlCAResponse',
      'getXMLDeliveryTransitions' => '\getXMLDeliveryTransitions',
      'getXMLDeliveryTransitionsResponse' => '\getXMLDeliveryTransitionsResponse',
      'xmlDeliveryTransitionInfo' => '\xmlDeliveryTransitionInfo',
      'findCampaignsByNameOrSubject' => '\findCampaignsByNameOrSubject',
      'findCampaignsByNameOrSubjectResponse' => '\findCampaignsByNameOrSubjectResponse',
      'sendImmediateMessageSidCAlCA' => '\sendImmediateMessageSidCAlCA',
      'sendImmediateMessageSidCAlCAResponse' => '\sendImmediateMessageSidCAlCAResponse',
      'addCampaignNote' => '\addCampaignNote',
      'addCampaignNoteResponse' => '\addCampaignNoteResponse',
      'triggerDeliveryById' => '\triggerDeliveryById',
      'triggerDeliveryByIdResponse' => '\triggerDeliveryByIdResponse',
      'findCampaigns' => '\findCampaigns',
      'findCampaignsResponse' => '\findCampaignsResponse',
      'getRequestStatus' => '\getRequestStatus',
      'getRequestStatusResponse' => '\getRequestStatusResponse',
      'getMobileApplicationByCode' => '\getMobileApplicationByCode',
      'getMobileApplicationByCodeResponse' => '\getMobileApplicationByCodeResponse',
      'mobileApplication' => '\mobileApplication',
      'updateSubscriber' => '\updateSubscriber',
      'updateSubscriberResponse' => '\updateSubscriberResponse',
      'getCryptoKey' => '\getCryptoKey',
      'getCryptoKeyResponse' => '\getCryptoKeyResponse',
      'archiveSubscriberSourceFilter' => '\archiveSubscriberSourceFilter',
      'archiveSubscriberSourceFilterResponse' => '\archiveSubscriberSourceFilterResponse',
      'cloneAndSendCampaign' => '\cloneAndSendCampaign',
      'cloneAndSendCampaignResponse' => '\cloneAndSendCampaignResponse',
      'uploadMediaContent' => '\uploadMediaContent',
      'uploadMediaContentResponse' => '\uploadMediaContentResponse',
      'findMessageModels' => '\findMessageModels',
      'findMessageModelsResponse' => '\findMessageModelsResponse',
      'sendImmediateMessageSDataCDataCA' => '\sendImmediateMessageSDataCDataCA',
      'sendImmediateMessageSDataCDataCAResponse' => '\sendImmediateMessageSDataCDataCAResponse',
      'findMessagesInfoByChannel' => '\findMessagesInfoByChannel',
      'findMessagesInfoByChannelResponse' => '\findMessagesInfoByChannelResponse',
      'getCampaign' => '\getCampaign',
      'getCampaignResponse' => '\getCampaignResponse',
      'addSubscribers' => '\addSubscribers',
      'addSubscribersResponse' => '\addSubscribersResponse',
      'sendImmediateMessageSidCid' => '\sendImmediateMessageSidCid',
      'sendImmediateMessageSidCidResponse' => '\sendImmediateMessageSidCidResponse',
      'findMessagesInfo' => '\findMessagesInfo',
      'findMessagesInfoResponse' => '\findMessagesInfoResponse',
      'sendImmediateMessageSDataCIdCA' => '\sendImmediateMessageSDataCIdCA',
      'sendImmediateMessageSDataCIdCAResponse' => '\sendImmediateMessageSDataCIdCAResponse',
      'getSubscriberSourceFilter' => '\getSubscriberSourceFilter',
      'getSubscriberSourceFilterResponse' => '\getSubscriberSourceFilterResponse',
      'findMessagesByChannel' => '\findMessagesByChannel',
      'findMessagesByChannelResponse' => '\findMessagesByChannelResponse',
      'findArchivedFiltersBySubscriberSource' => '\findArchivedFiltersBySubscriberSource',
      'findArchivedFiltersBySubscriberSourceResponse' => '\findArchivedFiltersBySubscriberSourceResponse',
      'getAttachmentByCampaignId' => '\getAttachmentByCampaignId',
      'getAttachmentByCampaignIdResponse' => '\getAttachmentByCampaignIdResponse',
      'getMessageModelById' => '\getMessageModelById',
      'getMessageModelByIdResponse' => '\getMessageModelByIdResponse',
      'getSubscriber' => '\getSubscriber',
      'getSubscriberResponse' => '\getSubscriberResponse',
      'sendSplitTest' => '\sendSplitTest',
      'sendSplitTestResponse' => '\sendSplitTestResponse',
      'borrowToken' => '\borrowToken',
      'borrowTokenResponse' => '\borrowTokenResponse',
      'modifySubscriberSubscriptionStatus' => '\modifySubscriberSubscriptionStatus',
      'modifySubscriberSubscriptionStatusResponse' => '\modifySubscriberSubscriptionStatusResponse',
      'findPeriodicCampaigns' => '\findPeriodicCampaigns',
      'findPeriodicCampaignsResponse' => '\findPeriodicCampaignsResponse',
      'sendImmediateByCampaignIdToSubscriber' => '\sendImmediateByCampaignIdToSubscriber',
      'sendImmediateByCampaignIdToSubscriberResponse' => '\sendImmediateByCampaignIdToSubscriberResponse',
      'findNotesByCampaign' => '\findNotesByCampaign',
      'findNotesByCampaignResponse' => '\findNotesByCampaignResponse',
      'modifySubscriberSubscriptionStatusByMailqId' => '\modifySubscriberSubscriptionStatusByMailqId',
      'modifySubscriberSubscriptionStatusByMailqIdResponse' => '\modifySubscriberSubscriptionStatusByMailqIdResponse',
      'sendImmediateByCampaignAliasToSubscriberId' => '\sendImmediateByCampaignAliasToSubscriberId',
      'sendImmediateByCampaignAliasToSubscriberIdResponse' => '\sendImmediateByCampaignAliasToSubscriberIdResponse',
      'unmarshalPushTemplateEnvelope' => '\unmarshalPushTemplateEnvelope',
      'unmarshalPushTemplateEnvelopeResponse' => '\unmarshalPushTemplateEnvelopeResponse',
      'isSubscriberSourceLocked' => '\isSubscriberSourceLocked',
      'isSubscriberSourceLockedResponse' => '\isSubscriberSourceLockedResponse',
      'startSubscriberDataExchange' => '\startSubscriberDataExchange',
      'startSubscriberDataExchangeResponse' => '\startSubscriberDataExchangeResponse',
      'getDeliveryStatus' => '\getDeliveryStatus',
      'getDeliveryStatusResponse' => '\getDeliveryStatusResponse',
      'deliveryInformation' => '\deliveryInformation',
      'sendSplitTestWinner' => '\sendSplitTestWinner',
      'sendSplitTestWinnerResponse' => '\sendSplitTestWinnerResponse',
      'getCampaignDeliveryStatus' => '\getCampaignDeliveryStatus',
      'getCampaignDeliveryStatusResponse' => '\getCampaignDeliveryStatusResponse',
      'removeSubscriber' => '\removeSubscriber',
      'removeSubscriberResponse' => '\removeSubscriberResponse',
      'addAttachment' => '\addAttachment',
      'addAttachmentResponse' => '\addAttachmentResponse',
      'sendImmediateByCampaignIdToSubscriberId' => '\sendImmediateByCampaignIdToSubscriberId',
      'sendImmediateByCampaignIdToSubscriberIdResponse' => '\sendImmediateByCampaignIdToSubscriberIdResponse',
      'findFiltersBySubscriberSource' => '\findFiltersBySubscriberSource',
      'findFiltersBySubscriberSourceResponse' => '\findFiltersBySubscriberSourceResponse',
      'setCampaignRecurrency' => '\setCampaignRecurrency',
      'setCampaignRecurrencyResponse' => '\setCampaignRecurrencyResponse',
      'countSubscribersIncludedInFilter' => '\countSubscribersIncludedInFilter',
      'countSubscribersIncludedInFilterResponse' => '\countSubscribersIncludedInFilterResponse',
      'sendImmediateMessageSidCidCA' => '\sendImmediateMessageSidCidCA',
      'sendImmediateMessageSidCidCAResponse' => '\sendImmediateMessageSidCidCAResponse',
      'findSubscriberSources' => '\findSubscriberSources',
      'findSubscriberSourcesResponse' => '\findSubscriberSourcesResponse',
      'addSubscriberSource' => '\addSubscriberSource',
      'addSubscriberSourceResponse' => '\addSubscriberSourceResponse',
      'findMessageModelsBySubscriberSource' => '\findMessageModelsBySubscriberSource',
      'findMessageModelsBySubscriberSourceResponse' => '\findMessageModelsBySubscriberSourceResponse',
      'sendImmediateMessageSdataCAl' => '\sendImmediateMessageSdataCAl',
      'sendImmediateMessageSdataCAlResponse' => '\sendImmediateMessageSdataCAlResponse',
      'findCampaignsByModel' => '\findCampaignsByModel',
      'findCampaignsByModelResponse' => '\findCampaignsByModelResponse',
      'findMessages' => '\findMessages',
      'findMessagesResponse' => '\findMessagesResponse',
      'sendImmediateMessageSDataCData' => '\sendImmediateMessageSDataCData',
      'sendImmediateMessageSDataCDataResponse' => '\sendImmediateMessageSDataCDataResponse',
      'getSubscriberDataExchangeStatus' => '\getSubscriberDataExchangeStatus',
      'getSubscriberDataExchangeStatusResponse' => '\getSubscriberDataExchangeStatusResponse',
      'sendImmediateMessageSIdCDataCA' => '\sendImmediateMessageSIdCDataCA',
      'sendImmediateMessageSIdCDataCAResponse' => '\sendImmediateMessageSIdCDataCAResponse',
      'sendImmediateMessage' => '\sendImmediateMessage',
      'sendImmediateMessageResponse' => '\sendImmediateMessageResponse',
      'sendImmediateMessageSIdCData' => '\sendImmediateMessageSIdCData',
      'sendImmediateMessageSIdCDataResponse' => '\sendImmediateMessageSIdCDataResponse',
      'findMessagesInfoByCampaignName' => '\findMessagesInfoByCampaignName',
      'findMessagesInfoByCampaignNameResponse' => '\findMessagesInfoByCampaignNameResponse',
      'findCampaignsBySubscriberSourceFilter' => '\findCampaignsBySubscriberSourceFilter',
      'findCampaignsBySubscriberSourceFilterResponse' => '\findCampaignsBySubscriberSourceFilterResponse',
      'sendImmediateMessageSidCAl' => '\sendImmediateMessageSidCAl',
      'sendImmediateMessageSidCAlResponse' => '\sendImmediateMessageSidCAlResponse',
      'createSplitTest' => '\createSplitTest',
      'createSplitTestResponse' => '\createSplitTestResponse',
      'sendImmediateByCampaignToSubscriber' => '\sendImmediateByCampaignToSubscriber',
      'sendImmediateByCampaignToSubscriberResponse' => '\sendImmediateByCampaignToSubscriberResponse',
      'findCampaignsByStatus' => '\findCampaignsByStatus',
      'findCampaignsByStatusResponse' => '\findCampaignsByStatusResponse',
      'getSubscriberSource' => '\getSubscriberSource',
      'getSubscriberSourceResponse' => '\getSubscriberSourceResponse',
      'sendImmediateByCampaignToSubscriberId' => '\sendImmediateByCampaignToSubscriberId',
      'sendImmediateByCampaignToSubscriberIdResponse' => '\sendImmediateByCampaignToSubscriberIdResponse',
      'findSubscribers' => '\findSubscribers',
      'findSubscribersResponse' => '\findSubscribersResponse',
      'findTriggerableCampaigns' => '\findTriggerableCampaigns',
      'findTriggerableCampaignsResponse' => '\findTriggerableCampaignsResponse',
      'findMessageByCampaignId' => '\findMessageByCampaignId',
      'findMessageByCampaignIdResponse' => '\findMessageByCampaignIdResponse',
      'findCampaignsByNote' => '\findCampaignsByNote',
      'findCampaignsByNoteResponse' => '\findCampaignsByNoteResponse',
      'invalidateToken' => '\invalidateToken',
      'invalidateTokenResponse' => '\invalidateTokenResponse',
      'publishOnWeb' => '\publishOnWeb',
      'publishOnWebResponse' => '\publishOnWebResponse',
      'reuseSubscriberSourceFilter' => '\reuseSubscriberSourceFilter',
      'reuseSubscriberSourceFilterResponse' => '\reuseSubscriberSourceFilterResponse',
      'findMessagesByCampaignName' => '\findMessagesByCampaignName',
      'findMessagesByCampaignNameResponse' => '\findMessagesByCampaignNameResponse',
      'createCampaign' => '\createCampaign',
      'createCampaignResponse' => '\createCampaignResponse',
      'addSubscriber' => '\addSubscriber',
      'addSubscriberResponse' => '\addSubscriberResponse',
      'getTrackedLinks' => '\getTrackedLinks',
      'getTrackedLinksResponse' => '\getTrackedLinksResponse',
      'getCampaignFeedback' => '\getCampaignFeedback',
      'getCampaignFeedbackResponse' => '\getCampaignFeedbackResponse',
      'requestCampaignFeedbackReport' => '\requestCampaignFeedbackReport',
      'requestCampaignFeedbackReportResponse' => '\requestCampaignFeedbackReportResponse',
      'createMessageModel' => '\createMessageModel',
      'createMessageModelResponse' => '\createMessageModelResponse',
      'cancelCampaign' => '\cancelCampaign',
      'cancelCampaignResponse' => '\cancelCampaignResponse',
      'findSubscribersIncludedInFilter' => '\findSubscribersIncludedInFilter',
      'findSubscribersIncludedInFilterResponse' => '\findSubscribersIncludedInFilterResponse');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://soap.contactlab.it/soap/services?wsdl')
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
      
        if (isset($options['features']) == false) {
            $options['features'] = SOAP_SINGLE_ELEMENT_ARRAYS | SOAP_WAIT_ONE_WAY_CALLS;
        }
    
        parent::__construct($wsdl, $options);
    }

    /**
     * @param isSubscriberSourceLocked $parameters
     * @access public
     * @return isSubscriberSourceLockedResponse
     */
    public function isSubscriberSourceLocked(isSubscriberSourceLocked $parameters)
    {
        return $this->__soapCall('isSubscriberSourceLocked', array($parameters));
    }

    /**
     * @param getAvailableCommunicationCategories $parameters
     * @access public
     * @return getAvailableCommunicationCategoriesResponse
     */
    public function getAvailableCommunicationCategories(getAvailableCommunicationCategories $parameters)
    {
        return $this->__soapCall('getAvailableCommunicationCategories', array($parameters));
    }

    /**
     * @param getCampaignDeliveryStatus $parameters
     * @access public
     * @return getCampaignDeliveryStatusResponse
     */
    public function getCampaignDeliveryStatus(getCampaignDeliveryStatus $parameters)
    {
        return $this->__soapCall('getCampaignDeliveryStatus', array($parameters));
    }

    /**
     * @param countSubscribers $parameters
     * @access public
     * @return countSubscribersResponse
     */
    public function countSubscribers(countSubscribers $parameters)
    {
        return $this->__soapCall('countSubscribers', array($parameters));
    }

    /**
     * @param updateSubscriber $parameters
     * @access public
     * @return updateSubscriberResponse
     */
    public function updateSubscriber(updateSubscriber $parameters)
    {
        return $this->__soapCall('updateSubscriber', array($parameters));
    }

    /**
     * @param modifySubscriberSubscriptionStatus $parameters
     * @access public
     * @return modifySubscriberSubscriptionStatusResponse
     */
    public function modifySubscriberSubscriptionStatus(modifySubscriberSubscriptionStatus $parameters)
    {
        return $this->__soapCall('modifySubscriberSubscriptionStatus', array($parameters));
    }

    /**
     * @param publishOnWeb $parameters
     * @access public
     * @return publishOnWebResponse
     */
    public function publishOnWeb(publishOnWeb $parameters)
    {
        return $this->__soapCall('publishOnWeb', array($parameters));
    }

    /**
     * @param findMessageByCampaignId $parameters
     * @access public
     * @return findMessageByCampaignIdResponse
     */
    public function findMessageByCampaignId(findMessageByCampaignId $parameters)
    {
        return $this->__soapCall('findMessageByCampaignId', array($parameters));
    }

    /**
     * @param findMessageInfoByCampaignId $parameters
     * @access public
     * @return findMessageInfoByCampaignIdResponse
     */
    public function findMessageInfoByCampaignId(findMessageInfoByCampaignId $parameters)
    {
        return $this->__soapCall('findMessageInfoByCampaignId', array($parameters));
    }

    /**
     * @param findMessages $parameters
     * @access public
     * @return findMessagesResponse
     */
    public function findMessages(findMessages $parameters)
    {
        return $this->__soapCall('findMessages', array($parameters));
    }

    /**
     * @param findMessagesInfo $parameters
     * @access public
     * @return findMessagesInfoResponse
     */
    public function findMessagesInfo(findMessagesInfo $parameters)
    {
        return $this->__soapCall('findMessagesInfo', array($parameters));
    }

    /**
     * @param findMessagesByCampaignName $parameters
     * @access public
     * @return findMessagesByCampaignNameResponse
     */
    public function findMessagesByCampaignName(findMessagesByCampaignName $parameters)
    {
        return $this->__soapCall('findMessagesByCampaignName', array($parameters));
    }

    /**
     * @param findMessagesInfoByCampaignName $parameters
     * @access public
     * @return findMessagesInfoByCampaignNameResponse
     */
    public function findMessagesInfoByCampaignName(findMessagesInfoByCampaignName $parameters)
    {
        return $this->__soapCall('findMessagesInfoByCampaignName', array($parameters));
    }

    /**
     * @param findMessagesByChannel $parameters
     * @access public
     * @return findMessagesByChannelResponse
     */
    public function findMessagesByChannel(findMessagesByChannel $parameters)
    {
        return $this->__soapCall('findMessagesByChannel', array($parameters));
    }

    /**
     * @param findMessagesInfoByChannel $parameters
     * @access public
     * @return findMessagesInfoByChannelResponse
     */
    public function findMessagesInfoByChannel(findMessagesInfoByChannel $parameters)
    {
        return $this->__soapCall('findMessagesInfoByChannel', array($parameters));
    }

    /**
     * @param getMobileApplicationByCode $parameters
     * @access public
     * @return getMobileApplicationByCodeResponse
     */
    public function getMobileApplicationByCode(getMobileApplicationByCode $parameters)
    {
        return $this->__soapCall('getMobileApplicationByCode', array($parameters));
    }

    /**
     * @param getSubscriberSourceFilter $parameters
     * @access public
     * @return getSubscriberSourceFilterResponse
     */
    public function getSubscriberSourceFilter(getSubscriberSourceFilter $parameters)
    {
        return $this->__soapCall('getSubscriberSourceFilter', array($parameters));
    }

    /**
     * @param addSubscriberSourceFilter $parameters
     * @access public
     * @return addSubscriberSourceFilterResponse
     */
    public function addSubscriberSourceFilter(addSubscriberSourceFilter $parameters)
    {
        return $this->__soapCall('addSubscriberSourceFilter', array($parameters));
    }

    /**
     * @param findFiltersBySubscriberSource $parameters
     * @access public
     * @return findFiltersBySubscriberSourceResponse
     */
    public function findFiltersBySubscriberSource(findFiltersBySubscriberSource $parameters)
    {
        return $this->__soapCall('findFiltersBySubscriberSource', array($parameters));
    }

    /**
     * @param findCampaignsByNameOrSubject $parameters
     * @access public
     * @return findCampaignsByNameOrSubjectResponse
     */
    public function findCampaignsByNameOrSubject(findCampaignsByNameOrSubject $parameters)
    {
        return $this->__soapCall('findCampaignsByNameOrSubject', array($parameters));
    }

    /**
     * @param findCampaignsByStatus $parameters
     * @access public
     * @return findCampaignsByStatusResponse
     */
    public function findCampaignsByStatus(findCampaignsByStatus $parameters)
    {
        return $this->__soapCall('findCampaignsByStatus', array($parameters));
    }

    /**
     * @param findCampaignsSentBetween $parameters
     * @access public
     * @return findCampaignsSentBetweenResponse
     */
    public function findCampaignsSentBetween(findCampaignsSentBetween $parameters)
    {
        return $this->__soapCall('findCampaignsSentBetween', array($parameters));
    }

    /**
     * @param findCampaignsByNote $parameters
     * @access public
     * @return findCampaignsByNoteResponse
     */
    public function findCampaignsByNote(findCampaignsByNote $parameters)
    {
        return $this->__soapCall('findCampaignsByNote', array($parameters));
    }

    /**
     * @param findCampaignsByModel $parameters
     * @access public
     * @return findCampaignsByModelResponse
     */
    public function findCampaignsByModel(findCampaignsByModel $parameters)
    {
        return $this->__soapCall('findCampaignsByModel', array($parameters));
    }

    /**
     * @param findTriggerableCampaigns $parameters
     * @access public
     * @return findTriggerableCampaignsResponse
     */
    public function findTriggerableCampaigns(findTriggerableCampaigns $parameters)
    {
        return $this->__soapCall('findTriggerableCampaigns', array($parameters));
    }

    /**
     * @param findPeriodicCampaigns $parameters
     * @access public
     * @return findPeriodicCampaignsResponse
     */
    public function findPeriodicCampaigns(findPeriodicCampaigns $parameters)
    {
        return $this->__soapCall('findPeriodicCampaigns', array($parameters));
    }

    /**
     * @param findCampaignsBySubscriberSourceFilter $parameters
     * @access public
     * @return findCampaignsBySubscriberSourceFilterResponse
     */
    public function findCampaignsBySubscriberSourceFilter(findCampaignsBySubscriberSourceFilter $parameters)
    {
        return $this->__soapCall('findCampaignsBySubscriberSourceFilter', array($parameters));
    }

    /**
     * @param getSubscriber $parameters
     * @access public
     * @return getSubscriberResponse
     */
    public function getSubscriber(getSubscriber $parameters)
    {
        return $this->__soapCall('getSubscriber', array($parameters));
    }

    /**
     * @param addSubscriber $parameters
     * @access public
     * @return addSubscriberResponse
     */
    public function addSubscriber(addSubscriber $parameters)
    {
        return $this->__soapCall('addSubscriber', array($parameters));
    }

    /**
     * @param addSubscribers $parameters
     * @access public
     * @return addSubscribersResponse
     */
    public function addSubscribers(addSubscribers $parameters)
    {
        return $this->__soapCall('addSubscribers', array($parameters));
    }

    /**
     * @param removeSubscriber $parameters
     * @access public
     * @return removeSubscriberResponse
     */
    public function removeSubscriber(removeSubscriber $parameters)
    {
        return $this->__soapCall('removeSubscriber', array($parameters));
    }

    /**
     * @param findSubscribersIncludedInFilter $parameters
     * @access public
     * @return findSubscribersIncludedInFilterResponse
     */
    public function findSubscribersIncludedInFilter(findSubscribersIncludedInFilter $parameters)
    {
        return $this->__soapCall('findSubscribersIncludedInFilter', array($parameters));
    }

    /**
     * @param addCampaignNote $parameters
     * @access public
     * @return addCampaignNoteResponse
     */
    public function addCampaignNote(addCampaignNote $parameters)
    {
        return $this->__soapCall('addCampaignNote', array($parameters));
    }

    /**
     * @param findNotesByCampaign $parameters
     * @access public
     * @return findNotesByCampaignResponse
     */
    public function findNotesByCampaign(findNotesByCampaign $parameters)
    {
        return $this->__soapCall('findNotesByCampaign', array($parameters));
    }

    /**
     * @param addAttachment $parameters
     * @access public
     * @return addAttachmentResponse
     */
    public function addAttachment(addAttachment $parameters)
    {
        return $this->__soapCall('addAttachment', array($parameters));
    }

    /**
     * @param getCampaignFeedback $parameters
     * @access public
     * @return getCampaignFeedbackResponse
     */
    public function getCampaignFeedback(getCampaignFeedback $parameters)
    {
        return $this->__soapCall('getCampaignFeedback', array($parameters));
    }

    /**
     * @param requestCampaignFeedbackReport $parameters
     * @access public
     * @return requestCampaignFeedbackReportResponse
     */
    public function requestCampaignFeedbackReport(requestCampaignFeedbackReport $parameters)
    {
        return $this->__soapCall('requestCampaignFeedbackReport', array($parameters));
    }

    /**
     * @param uploadMediaContent $parameters
     * @access public
     * @return uploadMediaContentResponse
     */
    public function uploadMediaContent(uploadMediaContent $parameters)
    {
        return $this->__soapCall('uploadMediaContent', array($parameters));
    }

    /**
     * @param getCampaign $parameters
     * @access public
     * @return getCampaignResponse
     */
    public function getCampaign(getCampaign $parameters)
    {
        return $this->__soapCall('getCampaign', array($parameters));
    }

    /**
     * @param getSubscriberSource $parameters
     * @access public
     * @return getSubscriberSourceResponse
     */
    public function getSubscriberSource(getSubscriberSource $parameters)
    {
        return $this->__soapCall('getSubscriberSource', array($parameters));
    }

    /**
     * @param findSubscriberSources $parameters
     * @access public
     * @return findSubscriberSourcesResponse
     */
    public function findSubscriberSources(findSubscriberSources $parameters)
    {
        return $this->__soapCall('findSubscriberSources', array($parameters));
    }

    /**
     * @param startSubscriberDataExchange $parameters
     * @access public
     * @return startSubscriberDataExchangeResponse
     */
    public function startSubscriberDataExchange(startSubscriberDataExchange $parameters)
    {
        return $this->__soapCall('startSubscriberDataExchange', array($parameters));
    }

    /**
     * @param getSubscriberDataExchangeStatus $parameters
     * @access public
     * @return getSubscriberDataExchangeStatusResponse
     */
    public function getSubscriberDataExchangeStatus(getSubscriberDataExchangeStatus $parameters)
    {
        return $this->__soapCall('getSubscriberDataExchangeStatus', array($parameters));
    }

    /**
     * @param setCampaignRecurrency $parameters
     * @access public
     * @return setCampaignRecurrencyResponse
     */
    public function setCampaignRecurrency(setCampaignRecurrency $parameters)
    {
        return $this->__soapCall('setCampaignRecurrency', array($parameters));
    }

    /**
     * @param getMessageModelById $parameters
     * @access public
     * @return getMessageModelByIdResponse
     */
    public function getMessageModelById(getMessageModelById $parameters)
    {
        return $this->__soapCall('getMessageModelById', array($parameters));
    }

    /**
     * @param createMessageModel $parameters
     * @access public
     * @return createMessageModelResponse
     */
    public function createMessageModel(createMessageModel $parameters)
    {
        return $this->__soapCall('createMessageModel', array($parameters));
    }

    /**
     * @param findMessageModels $parameters
     * @access public
     * @return findMessageModelsResponse
     */
    public function findMessageModels(findMessageModels $parameters)
    {
        return $this->__soapCall('findMessageModels', array($parameters));
    }

    /**
     * @param findMessageModelsBySubscriberSource $parameters
     * @access public
     * @return findMessageModelsBySubscriberSourceResponse
     */
    public function findMessageModelsBySubscriberSource(findMessageModelsBySubscriberSource $parameters)
    {
        return $this->__soapCall('findMessageModelsBySubscriberSource', array($parameters));
    }

    /**
     * @param sendCampaign $parameters
     * @access public
     * @return sendCampaignResponse
     */
    public function sendCampaign(sendCampaign $parameters)
    {
        return $this->__soapCall('sendCampaign', array($parameters));
    }

    /**
     * @param sendSplitTest $parameters
     * @access public
     * @return sendSplitTestResponse
     */
    public function sendSplitTest(sendSplitTest $parameters)
    {
        return $this->__soapCall('sendSplitTest', array($parameters));
    }

    /**
     * @param cloneAndSendCampaign $parameters
     * @access public
     * @return cloneAndSendCampaignResponse
     */
    public function cloneAndSendCampaign(cloneAndSendCampaign $parameters)
    {
        return $this->__soapCall('cloneAndSendCampaign', array($parameters));
    }

    /**
     * @param getRequestStatus $parameters
     * @access public
     * @return getRequestStatusResponse
     */
    public function getRequestStatus(getRequestStatus $parameters)
    {
        return $this->__soapCall('getRequestStatus', array($parameters));
    }

    /**
     * @param createCampaign $parameters
     * @access public
     * @return createCampaignResponse
     */
    public function createCampaign(createCampaign $parameters)
    {
        return $this->__soapCall('createCampaign', array($parameters));
    }

    /**
     * @param getXMLDeliveries $parameters
     * @access public
     * @return getXMLDeliveriesResponse
     */
    public function getXMLDeliveries(getXMLDeliveries $parameters)
    {
        return $this->__soapCall('getXMLDeliveries', array($parameters));
    }

    /**
     * @param getXMLDeliveryTransitions $parameters
     * @access public
     * @return getXMLDeliveryTransitionsResponse
     */
    public function getXMLDeliveryTransitions(getXMLDeliveryTransitions $parameters)
    {
        return $this->__soapCall('getXMLDeliveryTransitions', array($parameters));
    }

    /**
     * @param cancelCampaign $parameters
     * @access public
     * @return cancelCampaignResponse
     */
    public function cancelCampaign(cancelCampaign $parameters)
    {
        return $this->__soapCall('cancelCampaign', array($parameters));
    }

    /**
     * @param countSubscribersIncludedInFilter $parameters
     * @access public
     * @return countSubscribersIncludedInFilterResponse
     */
    public function countSubscribersIncludedInFilter(countSubscribersIncludedInFilter $parameters)
    {
        return $this->__soapCall('countSubscribersIncludedInFilter', array($parameters));
    }

    /**
     * @param findCampaigns $parameters
     * @access public
     * @return findCampaignsResponse
     */
    public function findCampaigns(findCampaigns $parameters)
    {
        return $this->__soapCall('findCampaigns', array($parameters));
    }

    /**
     * @param getAttachmentByCampaignId $parameters
     * @access public
     * @return getAttachmentByCampaignIdResponse
     */
    public function getAttachmentByCampaignId(getAttachmentByCampaignId $parameters)
    {
        return $this->__soapCall('getAttachmentByCampaignId', array($parameters));
    }

    /**
     * @param getTrackedLinks $parameters
     * @access public
     * @return getTrackedLinksResponse
     */
    public function getTrackedLinks(getTrackedLinks $parameters)
    {
        return $this->__soapCall('getTrackedLinks', array($parameters));
    }

    /**
     * @param triggerDeliveryById $parameters
     * @access public
     * @return triggerDeliveryByIdResponse
     */
    public function triggerDeliveryById(triggerDeliveryById $parameters)
    {
        return $this->__soapCall('triggerDeliveryById', array($parameters));
    }

    /**
     * @param triggerDeliveryByAlias $parameters
     * @access public
     * @return triggerDeliveryByAliasResponse
     */
    public function triggerDeliveryByAlias(triggerDeliveryByAlias $parameters)
    {
        return $this->__soapCall('triggerDeliveryByAlias', array($parameters));
    }

    /**
     * @param addSubscriberSource $parameters
     * @access public
     * @return addSubscriberSourceResponse
     */
    public function addSubscriberSource(addSubscriberSource $parameters)
    {
        return $this->__soapCall('addSubscriberSource', array($parameters));
    }

    /**
     * @param findSubscribers $parameters
     * @access public
     * @return findSubscribersResponse
     */
    public function findSubscribers(findSubscribers $parameters)
    {
        return $this->__soapCall('findSubscribers', array($parameters));
    }

    /**
     * @param getCryptoKey $parameters
     * @access public
     * @return getCryptoKeyResponse
     */
    public function getCryptoKey(getCryptoKey $parameters)
    {
        return $this->__soapCall('getCryptoKey', array($parameters));
    }

    /**
     * @param borrowToken $parameters
     * @access public
     * @return borrowTokenResponse
     */
    public function borrowToken(borrowToken $parameters)
    {
        return $this->__soapCall('borrowToken', array($parameters));
    }

    /**
     * @param keepaliveToken $parameters
     * @access public
     * @return keepaliveTokenResponse
     */
    public function keepaliveToken(keepaliveToken $parameters)
    {
        return $this->__soapCall('keepaliveToken', array($parameters));
    }

    /**
     * @param invalidateToken $parameters
     * @access public
     * @return invalidateTokenResponse
     */
    public function invalidateToken(invalidateToken $parameters)
    {
        return $this->__soapCall('invalidateToken', array($parameters));
    }

    /**
     * @param sendSplitTestWinner $parameters
     * @access public
     * @return sendSplitTestWinnerResponse
     */
    public function sendSplitTestWinner(sendSplitTestWinner $parameters)
    {
        return $this->__soapCall('sendSplitTestWinner', array($parameters));
    }

    /**
     * @param createSplitTest $parameters
     * @access public
     * @return createSplitTestResponse
     */
    public function createSplitTest(createSplitTest $parameters)
    {
        return $this->__soapCall('createSplitTest', array($parameters));
    }

    /**
     * @param unmarshalPushTemplateEnvelope $parameters
     * @access public
     * @return unmarshalPushTemplateEnvelopeResponse
     */
    public function unmarshalPushTemplateEnvelope(unmarshalPushTemplateEnvelope $parameters)
    {
        return $this->__soapCall('unmarshalPushTemplateEnvelope', array($parameters));
    }

    /**
     * @param archiveSubscriberSourceFilter $parameters
     * @access public
     * @return archiveSubscriberSourceFilterResponse
     */
    public function archiveSubscriberSourceFilter(archiveSubscriberSourceFilter $parameters)
    {
        return $this->__soapCall('archiveSubscriberSourceFilter', array($parameters));
    }

    /**
     * @param reuseSubscriberSourceFilter $parameters
     * @access public
     * @return reuseSubscriberSourceFilterResponse
     */
    public function reuseSubscriberSourceFilter(reuseSubscriberSourceFilter $parameters)
    {
        return $this->__soapCall('reuseSubscriberSourceFilter', array($parameters));
    }

    /**
     * @param findArchivedFiltersBySubscriberSource $parameters
     * @access public
     * @return findArchivedFiltersBySubscriberSourceResponse
     */
    public function findArchivedFiltersBySubscriberSource(findArchivedFiltersBySubscriberSource $parameters)
    {
        return $this->__soapCall('findArchivedFiltersBySubscriberSource', array($parameters));
    }

    /**
     * @param getArchivedSubscriberSourceFilter $parameters
     * @access public
     * @return getArchivedSubscriberSourceFilterResponse
     */
    public function getArchivedSubscriberSourceFilter(getArchivedSubscriberSourceFilter $parameters)
    {
        return $this->__soapCall('getArchivedSubscriberSourceFilter', array($parameters));
    }

    /**
     * @param modifySubscriberSubscriptionStatusByMailqId $parameters
     * @access public
     * @return modifySubscriberSubscriptionStatusByMailqIdResponse
     */
    public function modifySubscriberSubscriptionStatusByMailqId(modifySubscriberSubscriptionStatusByMailqId $parameters)
    {
        return $this->__soapCall('modifySubscriberSubscriptionStatusByMailqId', array($parameters));
    }

    /**
     * @param sendImmediateMessage $parameters
     * @access public
     * @return sendImmediateMessageResponse
     */
    public function sendImmediateMessage(sendImmediateMessage $parameters)
    {
        return $this->__soapCall('sendImmediateMessage', array($parameters));
    }

    /**
     * @param sendImmediateMessageSidCid $parameters
     * @access public
     * @return sendImmediateMessageSidCidResponse
     */
    public function sendImmediateMessageSidCid(sendImmediateMessageSidCid $parameters)
    {
        return $this->__soapCall('sendImmediateMessageSidCid', array($parameters));
    }

    /**
     * @param sendImmediateMessageSDataCData $parameters
     * @access public
     * @return sendImmediateMessageSDataCDataResponse
     */
    public function sendImmediateMessageSDataCData(sendImmediateMessageSDataCData $parameters)
    {
        return $this->__soapCall('sendImmediateMessageSDataCData', array($parameters));
    }

    /**
     * @param sendImmediateMessageSIdCData $parameters
     * @access public
     * @return sendImmediateMessageSIdCDataResponse
     */
    public function sendImmediateMessageSIdCData(sendImmediateMessageSIdCData $parameters)
    {
        return $this->__soapCall('sendImmediateMessageSIdCData', array($parameters));
    }

    /**
     * @param sendImmediateMessageSdataCAl $parameters
     * @access public
     * @return sendImmediateMessageSdataCAlResponse
     */
    public function sendImmediateMessageSdataCAl(sendImmediateMessageSdataCAl $parameters)
    {
        return $this->__soapCall('sendImmediateMessageSdataCAl', array($parameters));
    }

    /**
     * @param sendImmediateMessageSidCAl $parameters
     * @access public
     * @return sendImmediateMessageSidCAlResponse
     */
    public function sendImmediateMessageSidCAl(sendImmediateMessageSidCAl $parameters)
    {
        return $this->__soapCall('sendImmediateMessageSidCAl', array($parameters));
    }

    /**
     * @param sendImmediateMessageSDataCIdCA $parameters
     * @access public
     * @return sendImmediateMessageSDataCIdCAResponse
     */
    public function sendImmediateMessageSDataCIdCA(sendImmediateMessageSDataCIdCA $parameters)
    {
        return $this->__soapCall('sendImmediateMessageSDataCIdCA', array($parameters));
    }

    /**
     * @param sendImmediateMessageSidCidCA $parameters
     * @access public
     * @return sendImmediateMessageSidCidCAResponse
     */
    public function sendImmediateMessageSidCidCA(sendImmediateMessageSidCidCA $parameters)
    {
        return $this->__soapCall('sendImmediateMessageSidCidCA', array($parameters));
    }

    /**
     * @param sendImmediateMessageSDataCDataCA $parameters
     * @access public
     * @return sendImmediateMessageSDataCDataCAResponse
     */
    public function sendImmediateMessageSDataCDataCA(sendImmediateMessageSDataCDataCA $parameters)
    {
        return $this->__soapCall('sendImmediateMessageSDataCDataCA', array($parameters));
    }

    /**
     * @param sendImmediateMessageSIdCDataCA $parameters
     * @access public
     * @return sendImmediateMessageSIdCDataCAResponse
     */
    public function sendImmediateMessageSIdCDataCA(sendImmediateMessageSIdCDataCA $parameters)
    {
        return $this->__soapCall('sendImmediateMessageSIdCDataCA', array($parameters));
    }

    /**
     * @param sendImmediateMessageSdataCAlCA $parameters
     * @access public
     * @return sendImmediateMessageSdataCAlCAResponse
     */
    public function sendImmediateMessageSdataCAlCA(sendImmediateMessageSdataCAlCA $parameters)
    {
        return $this->__soapCall('sendImmediateMessageSdataCAlCA', array($parameters));
    }

    /**
     * @param sendImmediateMessageSidCAlCA $parameters
     * @access public
     * @return sendImmediateMessageSidCAlCAResponse
     */
    public function sendImmediateMessageSidCAlCA(sendImmediateMessageSidCAlCA $parameters)
    {
        return $this->__soapCall('sendImmediateMessageSidCAlCA', array($parameters));
    }

    /**
     * @param sendImmediateByCampaignIdToSubscriber $parameters
     * @access public
     * @return sendImmediateByCampaignIdToSubscriberResponse
     */
    public function sendImmediateByCampaignIdToSubscriber(sendImmediateByCampaignIdToSubscriber $parameters)
    {
        return $this->__soapCall('sendImmediateByCampaignIdToSubscriber', array($parameters));
    }

    /**
     * @param sendImmediateByCampaignToSubscriber $parameters
     * @access public
     * @return sendImmediateByCampaignToSubscriberResponse
     */
    public function sendImmediateByCampaignToSubscriber(sendImmediateByCampaignToSubscriber $parameters)
    {
        return $this->__soapCall('sendImmediateByCampaignToSubscriber', array($parameters));
    }

    /**
     * @param sendImmediateByCampaignToSubscriberId $parameters
     * @access public
     * @return sendImmediateByCampaignToSubscriberIdResponse
     */
    public function sendImmediateByCampaignToSubscriberId(sendImmediateByCampaignToSubscriberId $parameters)
    {
        return $this->__soapCall('sendImmediateByCampaignToSubscriberId', array($parameters));
    }

    /**
     * @param sendImmediateByCampaignIdToSubscriberId $parameters
     * @access public
     * @return sendImmediateByCampaignIdToSubscriberIdResponse
     */
    public function sendImmediateByCampaignIdToSubscriberId(sendImmediateByCampaignIdToSubscriberId $parameters)
    {
        return $this->__soapCall('sendImmediateByCampaignIdToSubscriberId', array($parameters));
    }

    /**
     * @param sendImmediateByCampaignAliasToSubscriber $parameters
     * @access public
     * @return sendImmediateByCampaignAliasToSubscriberResponse
     */
    public function sendImmediateByCampaignAliasToSubscriber(sendImmediateByCampaignAliasToSubscriber $parameters)
    {
        return $this->__soapCall('sendImmediateByCampaignAliasToSubscriber', array($parameters));
    }

    /**
     * @param sendImmediateByCampaignAliasToSubscriberId $parameters
     * @access public
     * @return sendImmediateByCampaignAliasToSubscriberIdResponse
     */
    public function sendImmediateByCampaignAliasToSubscriberId(sendImmediateByCampaignAliasToSubscriberId $parameters)
    {
        return $this->__soapCall('sendImmediateByCampaignAliasToSubscriberId', array($parameters));
    }

    /**
     * @param getDeliveryStatus $parameters
     * @access public
     * @return getDeliveryStatusResponse
     */
    public function getDeliveryStatus(getDeliveryStatus $parameters)
    {
        return $this->__soapCall('getDeliveryStatus', array($parameters));
    }

    /**
     * @param getEmptyPushTemplate $parameters
     * @access public
     * @return getEmptyPushTemplateResponse
     */
    public function getEmptyPushTemplate(getEmptyPushTemplate $parameters)
    {
        return $this->__soapCall('getEmptyPushTemplate', array($parameters));
    }
}
