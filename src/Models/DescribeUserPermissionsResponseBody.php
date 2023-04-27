<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeUserPermissionsResponseBody\permissions;
use AlibabaCloud\Tea\Model;

class DescribeUserPermissionsResponseBody extends Model
{
    /**
     * @description The details about the permissions of the RAM user.
     *
     * @var permissions[]
     */
    public $permissions;

    /**
     * @description The ID of the request.
     *
     * @example EA06613B-37A3-549E-BAE0-E4AD8A6E93D7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'permissions' => 'Permissions',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissions) {
            $res['Permissions'] = [];
            if (null !== $this->permissions && \is_array($this->permissions)) {
                $n = 0;
                foreach ($this->permissions as $item) {
                    $res['Permissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserPermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Permissions'])) {
            if (!empty($map['Permissions'])) {
                $model->permissions = [];
                $n                  = 0;
                foreach ($map['Permissions'] as $item) {
                    $model->permissions[$n++] = null !== $item ? permissions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
