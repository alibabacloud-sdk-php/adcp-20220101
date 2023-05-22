<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @example https://172.16.6.**:6443
     *
     * @var string
     */
    public $intranetApiServerEndpoint;

    /**
     * @example https://123.57.21.***:6443
     *
     * @var string
     */
    public $publicApiServerEndpoint;
    protected $_name = [
        'intranetApiServerEndpoint' => 'IntranetApiServerEndpoint',
        'publicApiServerEndpoint'   => 'PublicApiServerEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intranetApiServerEndpoint) {
            $res['IntranetApiServerEndpoint'] = $this->intranetApiServerEndpoint;
        }
        if (null !== $this->publicApiServerEndpoint) {
            $res['PublicApiServerEndpoint'] = $this->publicApiServerEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntranetApiServerEndpoint'])) {
            $model->intranetApiServerEndpoint = $map['IntranetApiServerEndpoint'];
        }
        if (isset($map['PublicApiServerEndpoint'])) {
            $model->publicApiServerEndpoint = $map['PublicApiServerEndpoint'];
        }

        return $model;
    }
}
