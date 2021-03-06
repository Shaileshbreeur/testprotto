<?php
	namespace ElasticEmailEnums; 

class UsageData
{
    /**
     * Date in YYYY-MM-DDThh:ii:ss format
     */
    public /*DateTime*/ $Date;

    /**
     * Number of finished tasks
     */
    public /*int*/ $JobCount;

    /**
     * Overall number of recipients
     */
    public /*int*/ $RecipientCount;

    /**
     * Number of inbound emails
     */
    public /*int*/ $InboundCount;

    /**
     * Number of attachments sent
     */
    public /*int*/ $AttachmentCount;

    /**
     * Size of attachments sent
     */
    public /*long*/ $AttachmentsSize;

    /**
     * Calculated cost of sending
     */
    public /*decimal*/ $Cost;

    /**
     * Number of pricate IPs
     */
    public /*?int*/ $PrivateIPCount;

    /**
     * 
     */
    public /*decimal*/ $PrivateIPCost;

    /**
     * Number of SMS
     */
    public /*?int*/ $SmsCount;

    /**
     * Overall cost of SMS
     */
    public /*decimal*/ $SmsCost;

    /**
     * Cost of templates
     */
    public /*decimal*/ $TemplateCost;

    /**
     * Cost of email credits
     */
    public /*?int*/ $EmailCreditsCost;

    /**
     * Cost of template credit
     */
    public /*?int*/ $TemplateCreditsCost;

    /**
     * Cost of litmus credits
     */
    public /*decimal*/ $LitmusCost;

    /**
     * Cost of 1 litmus credit
     */
    public /*decimal*/ $LitmusCreditsCost;

    /**
     * Daily cost of Contact Delivery Tools
     */
    public /*decimal*/ $ContactCost;

    /**
     * Number of contacts
     */
    public /*long*/ $ContactCount;

    /**
     * 
     */
    public /*decimal*/ $SupportCost;

    /**
     * 
     */
    public /*decimal*/ $EmailCost;

}
