<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @description The domain name of the cluster.
     *
     * @example cluster.local
     *
     * @var string
     */
    public $clusterDomain;

    /**
     * @description The security group IDs.
     *
     * @var string[]
     */
    public $securityGroupIDs;

    /**
     * @description The IDs of vSwitches to which the cluster belongs.
     *
     * @var string[]
     */
    public $vSwitches;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the cluster belongs.
     *
     * @example vpc-2zeusrwi7c2mlww4a****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterDomain'    => 'ClusterDomain',
        'securityGroupIDs' => 'SecurityGroupIDs',
        'vSwitches'        => 'VSwitches',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }
        if (null !== $this->securityGroupIDs) {
            $res['SecurityGroupIDs'] = $this->securityGroupIDs;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = $this->vSwitches;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }
        if (isset($map['SecurityGroupIDs'])) {
            if (!empty($map['SecurityGroupIDs'])) {
                $model->securityGroupIDs = $map['SecurityGroupIDs'];
            }
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = $map['VSwitches'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
