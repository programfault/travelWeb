<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection order_adult
     * @property Grid\Column|Collection order_amount
     * @property Grid\Column|Collection order_child
     * @property Grid\Column|Collection order_indentify
     * @property Grid\Column|Collection order_name
     * @property Grid\Column|Collection order_no
     * @property Grid\Column|Collection order_source
     * @property Grid\Column|Collection order_time
     * @property Grid\Column|Collection order_title
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection travel_date
     * @property Grid\Column|Collection website
     * @property Grid\Column|Collection amount
     * @property Grid\Column|Collection child_price
     * @property Grid\Column|Collection current_price
     * @property Grid\Column|Collection orignal_price
     * @property Grid\Column|Collection email_verified_at
     * @property Grid\Column|Collection domain
     * @property Grid\Column|Collection icp
     * @property Grid\Column|Collection telephone
     * @property Grid\Column|Collection webxin
     *
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection order_adult(string $label = null)
     * @method Grid\Column|Collection order_amount(string $label = null)
     * @method Grid\Column|Collection order_child(string $label = null)
     * @method Grid\Column|Collection order_indentify(string $label = null)
     * @method Grid\Column|Collection order_name(string $label = null)
     * @method Grid\Column|Collection order_no(string $label = null)
     * @method Grid\Column|Collection order_source(string $label = null)
     * @method Grid\Column|Collection order_time(string $label = null)
     * @method Grid\Column|Collection order_title(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection travel_date(string $label = null)
     * @method Grid\Column|Collection website(string $label = null)
     * @method Grid\Column|Collection amount(string $label = null)
     * @method Grid\Column|Collection child_price(string $label = null)
     * @method Grid\Column|Collection current_price(string $label = null)
     * @method Grid\Column|Collection orignal_price(string $label = null)
     * @method Grid\Column|Collection email_verified_at(string $label = null)
     * @method Grid\Column|Collection domain(string $label = null)
     * @method Grid\Column|Collection icp(string $label = null)
     * @method Grid\Column|Collection telephone(string $label = null)
     * @method Grid\Column|Collection webxin(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection type
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection version
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection order
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection value
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection password
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection username
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection order_adult
     * @property Show\Field|Collection order_amount
     * @property Show\Field|Collection order_child
     * @property Show\Field|Collection order_indentify
     * @property Show\Field|Collection order_name
     * @property Show\Field|Collection order_no
     * @property Show\Field|Collection order_source
     * @property Show\Field|Collection order_time
     * @property Show\Field|Collection order_title
     * @property Show\Field|Collection status
     * @property Show\Field|Collection travel_date
     * @property Show\Field|Collection website
     * @property Show\Field|Collection amount
     * @property Show\Field|Collection child_price
     * @property Show\Field|Collection current_price
     * @property Show\Field|Collection orignal_price
     * @property Show\Field|Collection email_verified_at
     * @property Show\Field|Collection domain
     * @property Show\Field|Collection icp
     * @property Show\Field|Collection telephone
     * @property Show\Field|Collection webxin
     *
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection order_adult(string $label = null)
     * @method Show\Field|Collection order_amount(string $label = null)
     * @method Show\Field|Collection order_child(string $label = null)
     * @method Show\Field|Collection order_indentify(string $label = null)
     * @method Show\Field|Collection order_name(string $label = null)
     * @method Show\Field|Collection order_no(string $label = null)
     * @method Show\Field|Collection order_source(string $label = null)
     * @method Show\Field|Collection order_time(string $label = null)
     * @method Show\Field|Collection order_title(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection travel_date(string $label = null)
     * @method Show\Field|Collection website(string $label = null)
     * @method Show\Field|Collection amount(string $label = null)
     * @method Show\Field|Collection child_price(string $label = null)
     * @method Show\Field|Collection current_price(string $label = null)
     * @method Show\Field|Collection orignal_price(string $label = null)
     * @method Show\Field|Collection email_verified_at(string $label = null)
     * @method Show\Field|Collection domain(string $label = null)
     * @method Show\Field|Collection icp(string $label = null)
     * @method Show\Field|Collection telephone(string $label = null)
     * @method Show\Field|Collection webxin(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
