<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DetachClusterFromHubRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterIds;

    /**
     * @var bool
     */
    public $detachFromMesh;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'clusterIds'     => 'ClusterIds',
        'detachFromMesh' => 'DetachFromMesh',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }
        if (null !== $this->detachFromMesh) {
            $res['DetachFromMesh'] = $this->detachFromMesh;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachClusterFromHubRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterIds'])) {
            $model->clusterIds = $map['ClusterIds'];
        }
        if (isset($map['DetachFromMesh'])) {
            $model->detachFromMesh = $map['DetachFromMesh'];
        }

        return $model;
    }
}
