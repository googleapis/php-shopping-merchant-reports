<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reports/v1beta/reports.proto

namespace Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * How the issue affects the serving of the product.
 *
 * Generated from protobuf message <code>google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueSeverity</code>
 */
class ItemIssueSeverity extends \Google\Protobuf\Internal\Message
{
    /**
     * Issue severity per reporting context.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueSeverity.IssueSeverityPerReportingContext severity_per_reporting_context = 1;</code>
     */
    private $severity_per_reporting_context;
    /**
     * Aggregated severity of the issue for all reporting contexts it affects.
     * **This field can be used for filtering the results.**
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueSeverity.AggregatedIssueSeverity aggregated_severity = 2;</code>
     */
    protected $aggregated_severity = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueSeverity\IssueSeverityPerReportingContext>|\Google\Protobuf\Internal\RepeatedField $severity_per_reporting_context
     *           Issue severity per reporting context.
     *     @type int $aggregated_severity
     *           Aggregated severity of the issue for all reporting contexts it affects.
     *           **This field can be used for filtering the results.**
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Reports\V1Beta\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * Issue severity per reporting context.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueSeverity.IssueSeverityPerReportingContext severity_per_reporting_context = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSeverityPerReportingContext()
    {
        return $this->severity_per_reporting_context;
    }

    /**
     * Issue severity per reporting context.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueSeverity.IssueSeverityPerReportingContext severity_per_reporting_context = 1;</code>
     * @param array<\Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueSeverity\IssueSeverityPerReportingContext>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSeverityPerReportingContext($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueSeverity\IssueSeverityPerReportingContext::class);
        $this->severity_per_reporting_context = $arr;

        return $this;
    }

    /**
     * Aggregated severity of the issue for all reporting contexts it affects.
     * **This field can be used for filtering the results.**
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueSeverity.AggregatedIssueSeverity aggregated_severity = 2;</code>
     * @return int
     */
    public function getAggregatedSeverity()
    {
        return isset($this->aggregated_severity) ? $this->aggregated_severity : 0;
    }

    public function hasAggregatedSeverity()
    {
        return isset($this->aggregated_severity);
    }

    public function clearAggregatedSeverity()
    {
        unset($this->aggregated_severity);
    }

    /**
     * Aggregated severity of the issue for all reporting contexts it affects.
     * **This field can be used for filtering the results.**
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueSeverity.AggregatedIssueSeverity aggregated_severity = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAggregatedSeverity($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueSeverity\AggregatedIssueSeverity::class);
        $this->aggregated_severity = $var;

        return $this;
    }

}


