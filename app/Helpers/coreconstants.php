<?php

const LANGUAGE_DEFAULT = 'en';

const PAGINATION_PAGE_NAME = 'p';
const PAGINATION_ITEM_PER_PAGE = 10;
const PAGINATION_EACH_SIDE = 1;

const USER_ROLE_ADMIN = 'admin';
const USER_ROLE_USER = 'user';
const USER_ROLE_SELLER = 'seller';

const RESPONSE_STATUS_KEY = 'status';
const RESPONSE_MESSAGE_KEY = 'message';
const RESPONSE_DATA_KEY = 'data';

const RESPONSE_TYPE_SUCCESS = 'success';
const RESPONSE_TYPE_WARNING = 'warning';
const RESPONSE_TYPE_ERROR = 'error';

const ROUTE_GROUP_READER_ACCESS = 'reader_access';
const ROUTE_GROUP_CREATION_ACCESS = 'creation_access';
const ROUTE_GROUP_MODIFIER_ACCESS = 'modifier_access';
const ROUTE_GROUP_DELETION_ACCESS = 'deletion_access';
const ROUTE_GROUP_FULL_ACCESS = 'full_access';

const ROUTE_TYPE_ROLE_BASED = 'role_based_routes';
const ROUTE_TYPE_AVOIDABLE_MAINTENANCE = 'avoidable_maintenance_routes';
const ROUTE_TYPE_AVOIDABLE_UNVERIFIED = 'avoidable_unverified_routes';
const ROUTE_TYPE_AVOIDABLE_INACTIVE = 'avoidable_suspended_routes';
const ROUTE_TYPE_FINANCIAL = 'financial_routes';
const ROUTE_TYPE_GLOBAL = 'global_routes';

const ROUTE_MUST_ACCESSIBLE = 'route_must_accessible';
const ROUTE_NOT_ACCESSIBLE = 'route_not_accessible';

const ROUTE_REDIRECT_TO_UNAUTHORIZED = '401';
const ROUTE_REDIRECT_TO_UNDER_MAINTENANCE = 'under_maintenance';
const ROUTE_REDIRECT_TO_EMAIL_UNVERIFIED = 'email_unverified';
const ROUTE_REDIRECT_TO_ACCOUNT_SUSPENDED = 'account_suspended';
const ROUTE_REDIRECT_TO_FINANCIAL_ACCOUNT_SUSPENDED = 'financial_account_suspended';
const REDIRECT_ROUTE_TO_USER_AFTER_LOGIN = 'profile.index';
const REDIRECT_ROUTE_TO_LOGIN = 'login';

const MENU_TYPE_ROUTE = 'route';
const MENU_TYPE_LINK = 'link';
const MENU_TYPE_PAGE = 'page';

const ACTIVE = 1;
const INACTIVE = 0;
const DELETED = -1;

const VERIFIED = 1;
const UNVERIFIED = 0;

const ENABLED = 1;
const DISABLED = 0;

const STATUS_ACTIVE = 'active';
const STATUS_INACTIVE = 'inactive';
const STATUS_DELETED = 'deleted';
const STATUS_OPEN = 'open';
const STATUS_IN_PROGRESS = 'progress';
const STATUS_RESOLVED = 'resolved';
const STATUS_CLOSED = 'closed';

const VISIBLE_TYPE_PUBLIC = 'public';
const VISIBLE_TYPE_PRIVATE = 'private';

const PRODUCT_VERIFIER_URL = 'https://verifier.codemen.org/api/product-verify';

/*
 * All Status
 */
const UNDER_MAINTENANCE_MODE_ACTIVE = 1;
const UNDER_MAINTENANCE_MODE_INACTIVE = 0;

const UNDER_MAINTENANCE_ACCESS_ACTIVE = 1;
const UNDER_MAINTENANCE_ACCESS_INACTIVE = 0;

const ACTIVE_STATUS_ACTIVE = 1;
const ACTIVE_STATUS_INACTIVE = 0;

const FINANCIAL_STATUS_ACTIVE = 1;
const FINANCIAL_STATUS_INACTIVE = 0;

const EMAIL_VERIFICATION_STATUS_ACTIVE = 1;
const EMAIL_VERIFICATION_STATUS_INACTIVE = 0;

const USER_STATUS_INACTIVE = 0;
const USER_STATUS_ACTIVE = 1;
const USER_STATUS_DELETED = -1;

/*
 * Auction related constants start here
 */

const AUCTION_FEE_IN_PERCENT = 1;
const AUCTION_FEE_IN_FIXED_AMOUNT = 2;
const AUCTION_FEE_IN_BOTH_AMOUNT = 3;

const AUCTION_TYPE_HIGHEST_BIDDER = 1;
const AUCTION_TYPE_BLIND_BIDDER = 2;
const AUCTION_TYPE_UNIQUE_BIDDER = 3;
const AUCTION_TYPE_VICKREY_BIDDER = 4;

const SHIPPING_TYPE_PAID = 0;
const SHIPPING_TYPE_FREE = 1;

const AUCTION_STATUS_DRAFT = 1;
const AUCTION_STATUS_RUNNING = 2;
const AUCTION_STATUS_COMPLETED = 3;

const AUCTION_WINNER_STATUS_LOSE = 0;
const AUCTION_WINNER_STATUS_WIN = 1;

const AUCTION_PRODUCT_CLAIM_STATUS_NOT_DELIVERED_YET = 0;
const AUCTION_PRODUCT_CLAIM_STATUS_ON_SHIPPING = 1;
const AUCTION_PRODUCT_CLAIM_STATUS_DISPUTED = 2;
const AUCTION_PRODUCT_CLAIM_STATUS_PENDING = 3;
const AUCTION_PRODUCT_CLAIM_STATUS_DELIVERED = 4;

const DISPUTE_TYPE_AUCTION_ISSUE = 1;
const DISPUTE_TYPE_SELLER_ISSUE = 2;
const DISPUTE_TYPE_SHIPPING_ISSUE = 3;
const DISPUTE_TYPE_OTHER_ISSUE = 4;

const DISPUTE_STATUS_PENDING = 0;
const DISPUTE_STATUS_ON_INVESTIGATION = 1;
const DISPUTE_STATUS_SOLVED = 2;
const DISPUTE_STATUS_DECLINED = 3;

const IDENTIFICATION_TYPE_WITH_ID_NID = 1;
const IDENTIFICATION_TYPE_WITH_ID_DRIVING_LICENSE = 2;
const IDENTIFICATION_TYPE_WITH_ID_PASSPORT = 3;

const IDENTIFICATION_TYPE_WITH_ADDRESS_UTILITY_BILL = 4;
const IDENTIFICATION_TYPE_WITH_ADDRESS_BANK_STATEMENT = 5;

const VERIFICATION_STATUS_UNVERIFIED = 0;
const VERIFICATION_STATUS_APPROVED = 1;
const VERIFICATION_STATUS_PENDING = 2;

const VERIFICATION_TYPE_ADDRESS = 1;
const VERIFICATION_TYPE_ID = 2;


//Transaction constant

const PAYMENT_METHOD_PAYPAL = 1;
const PAYMENT_METHOD_BANK = 2;
const PAYMENT_METHOD_COINPAYMENTS = 3;
const PAYMENT_METHOD_BITCOIN_FORK = 4;

const TRANSACTION_TYPE_DEPOSIT = 1;
const TRANSACTION_TYPE_WITHDRAWAL = 2;
const TRANSACTION_TYPE_SYSTEM_FEE = 3;
const TRANSACTION_TYPE_AUCTION_EXPENSE = 4;
const TRANSACTION_TYPE_EARNING = 5;
const TRANSACTION_TYPE_BALANCE_INCREMENT = 6;
const TRANSACTION_TYPE_BALANCE_DECREMENT = 7;

const PAYMENT_STATUS_CANCELED = 1;
const PAYMENT_STATUS_FAILED = 2;
const PAYMENT_STATUS_PENDING = 3;
const PAYMENT_STATUS_COMPLETED = 4;
const PAYMENT_STATUS_REVIEWING = 5;
const PAYMENT_STATUS_PROCESSING = 6;

const CURRENCY_TYPE_USD = 'USD';

const JOURNAL_TYPE_DEBIT = 1;
const JOURNAL_TYPE_CREDIT = 2;

//Deposit
const DECREASED_FROM_OUTSIDE_AS_DEPOSIT = 1;
const INCREASED_TO_USER_WALLET_AS_DEPOSIT_CONFIRMATION = 2;

//Withdrawal
const DECREASED_FROM_USER_WALLET_AS_WITHDRAWAL = 3;
const INCREASED_TO_OUTSIDE_AS_WITHDRAWAL_CONFIRMATION = 4;

const DECREASED_FROM_USER_WALLET_AS_WITHDRAWAL_FEES = 5;
const INCREASED_TO_SYSTEM_WALLET_AS_WITHDRAWAL_FEES = 6;

//Auctions fees
const DECREASED_FROM_USER_WALLET_AS_AUCTION_FEES = 7;
const INCREASED_TO_SYSTEM_WALLET_AS_AUCTION_FEES = 8;

//Bidding amount
const DECREASED_FROM_USER_WALLET_TO_ESCROW_ON_BIDDING = 9;
const INCREASED_TO_ESCROW_ON_BIDDING_FROM_USER_WALLET = 10;

//Auction completion amount
const DECREASED_FROM_ESCROW_TO_SELLER_WALLET_ON_AUCTION_COMPLETION = 11;
const INCREASED_TO_SELLER_WALLET_FROM_ESCROW_ON_AUCTION_COMPLETION = 12;

//Auction completion fee
const DECREASED_FROM_SELLER_WALLET_TO_SYSTEM_WALLET_AS_SELLING_FEE = 13;
const INCREASED_TO_SYSTEM_WALLET_FROM_SELLER_WALLET_AS_SELLING_FEE = 14;

//Bidding amount reversal
const INCREASED_TO_USER_WALLET_FROM_ESCROW_ON_BIDDING_REVERSAL = 15;
const DECREASED_FROM_ESCROW_TO_USER_WALLET_ON_BIDDING_REVERSAL = 16;

//Bidding fees
const DECREASED_FROM_USER_WALLET_TO_SYSTEM_WALLET_AS_BIDDING_FEES = 17;
const INCREASED_TO_SYSTEM_WALLET_FROM_USER_WALLET_AS_BIDDING_FEES = 18;

//auction layout types
const AUCTION_LAYOUT_TYPE_RECENT_AUCTION = 1;
const AUCTION_LAYOUT_TYPE_POPULAR_AUCTION = 2;
const AUCTION_LAYOUT_TYPE_HIGHEST_BIDDER_AUCTION = 3;
const AUCTION_LAYOUT_TYPE_BLIND_BIDDER_AUCTION = 4;
const AUCTION_LAYOUT_TYPE_UNIQUE_BIDDER_AUCTION = 5;
const AUCTION_LAYOUT_TYPE_VICKREY_BIDDER_AUCTION = 6;
const AUCTION_LAYOUT_TYPE_LOWEST_PRICE_AUCTION = 7;
const AUCTION_LAYOUT_TYPE_HIGHEST_PRICE_AUCTION = 8;

// paypal webhook event types
const PAYPAL_PAYMENT_PAYOUTS_ITEM_BLOCKED = "PAYMENT.PAYOUTS-ITEM.BLOCKED";
const PAYPAL_PAYMENT_PAYOUTS_ITEM_CANCELED = "PAYMENT.PAYOUTS-ITEM.CANCELED";
const PAYPAL_PAYMENT_PAYOUTS_ITEM_DENIED = "PAYMENT.PAYOUTS-ITEM.DENIED";
const PAYPAL_PAYMENT_PAYOUTS_ITEM_FAILED = "PAYMENT.PAYOUTS-ITEM.FAILED";
const PAYPAL_PAYMENT_PAYOUTS_ITEM_HELD = "PAYMENT.PAYOUTS-ITEM.HELD";
const PAYPAL_PAYMENT_PAYOUTS_ITEM_REFUNDED = "PAYMENT.PAYOUTS-ITEM.REFUNDED";
const PAYPAL_PAYMENT_PAYOUTS_ITEM_RETURNED = "PAYMENT.PAYOUTS-ITEM.RETURNED";
const PAYPAL_PAYMENT_PAYOUTS_ITEM_SUCCEEDED = "PAYMENT.PAYOUTS-ITEM.SUCCEEDED";

const PAYPAL_CHECKOUT_ORDER_APPROVED = "CHECKOUT.ORDER.APPROVED";
const PAYPAL_CHECKOUT_ORDER_COMPLETED = "PAYMENT.CAPTURE.COMPLETED";

const PAYPAL_WEBHOOK_VALIDATION_SUCCESS = "SUCCESS";
const PAYPAL_WEBHOOK_VALIDATION_FAILUR = "FAILURE";

// currency type
const CURRENCY_TYPE_FIAT = 'fiat';
const CURRENCY_TYPE_CRYPTO = 'crypto';

//Fee types
const FEE_TYPE_FIXED = 'fixed';
const FEE_TYPE_PERCENT = 'percent';


