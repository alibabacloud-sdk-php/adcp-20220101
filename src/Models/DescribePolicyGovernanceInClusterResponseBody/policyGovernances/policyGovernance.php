<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance\admitLog;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance\onState;
use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyGovernanceInClusterResponseBody\policyGovernances\policyGovernance\violation;
use AlibabaCloud\Tea\Model;

class policyGovernance extends Model
{
    /**
     * @description The audit log generated by the associated cluster.
     *
     * @var admitLog
     */
    public $admitLog;

    /**
     * @description The number of policies of each severity level enabled in the associated cluster.
     *
     * @var onState[]
     */
    public $onState;

    /**
     * @description The number of deployments that match the policies in the associated cluster, including deployments that are blocked and deployments that have triggered alerting.
     *
     * @var violation
     */
    public $violation;
    protected $_name = [
        'admitLog'  => 'AdmitLog',
        'onState'   => 'OnState',
        'violation' => 'Violation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->admitLog) {
            $res['AdmitLog'] = null !== $this->admitLog ? $this->admitLog->toMap() : null;
        }
        if (null !== $this->onState) {
            $res['OnState'] = [];
            if (null !== $this->onState && \is_array($this->onState)) {
                $n = 0;
                foreach ($this->onState as $item) {
                    $res['OnState'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->violation) {
            $res['Violation'] = null !== $this->violation ? $this->violation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyGovernance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdmitLog'])) {
            $model->admitLog = admitLog::fromMap($map['AdmitLog']);
        }
        if (isset($map['OnState'])) {
            if (!empty($map['OnState'])) {
                $model->onState = [];
                $n              = 0;
                foreach ($map['OnState'] as $item) {
                    $model->onState[$n++] = null !== $item ? onState::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Violation'])) {
            $model->violation = violation::fromMap($map['Violation']);
        }

        return $model;
    }
}
