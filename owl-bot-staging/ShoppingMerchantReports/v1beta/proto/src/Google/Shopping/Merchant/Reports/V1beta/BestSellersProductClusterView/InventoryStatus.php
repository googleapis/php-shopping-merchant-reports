<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reports/v1beta/reports.proto

namespace Google\Shopping\Merchant\Reports\V1beta\BestSellersProductClusterView;

use UnexpectedValueException;

/**
 * Status of the product cluster or brand in your inventory.
 *
 * Protobuf type <code>google.shopping.merchant.reports.v1beta.BestSellersProductClusterView.InventoryStatus</code>
 */
class InventoryStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>INVENTORY_STATUS_UNSPECIFIED = 0;</code>
     */
    const INVENTORY_STATUS_UNSPECIFIED = 0;
    /**
     * You have a product for this product cluster or brand in stock.
     *
     * Generated from protobuf enum <code>IN_STOCK = 1;</code>
     */
    const IN_STOCK = 1;
    /**
     * You have a product for this product cluster or brand in inventory but it
     * is currently out of stock.
     *
     * Generated from protobuf enum <code>OUT_OF_STOCK = 2;</code>
     */
    const OUT_OF_STOCK = 2;
    /**
     * You do not have a product for this product cluster or brand in inventory.
     *
     * Generated from protobuf enum <code>NOT_IN_INVENTORY = 3;</code>
     */
    const NOT_IN_INVENTORY = 3;

    private static $valueToName = [
        self::INVENTORY_STATUS_UNSPECIFIED => 'INVENTORY_STATUS_UNSPECIFIED',
        self::IN_STOCK => 'IN_STOCK',
        self::OUT_OF_STOCK => 'OUT_OF_STOCK',
        self::NOT_IN_INVENTORY => 'NOT_IN_INVENTORY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InventoryStatus::class, \Google\Shopping\Merchant\Reports\V1beta\BestSellersProductClusterView_InventoryStatus::class);

