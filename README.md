# Refund Form - Indonesia #

## Description ##
* Build based on Refund Form Philippines, with some new features to fit country needs.
* Refund Form: <url>/refund_form_id
* Refund Shipping Fee: <url>/refund_form_id/shipping_fee
* Agent Page: <url>/refund_form_id/agent

## Specification ##
* New features:
* * Frontend: Refund for Shipping Fees
* * Agent Page: New tab for "Refund for Shipping Fees"
* * Agent Page: Show 2 data tables in "Issue" & "Processed" tab, showing both normal refund & refund for shipping fee

## Setup ##
* Database configuration - change database configuration in `application/config/database.php` to connect to local DB
* Database query dump - `return_item_id.sql`
* Config file - params.php: copycat setting, redirect_uri change to <url>/refund_form_id/agent

## Remarks ##
* OMS API doesn't have information on Product's color, return_type (if item is returnable), wallet credit (to calculate total refund).
* * Currently still connect to copycat to get this 3 information
* * To be update once OMS API is ready with this 3 information
* * Impact: if copycat down, customer able to return Non-returnable item