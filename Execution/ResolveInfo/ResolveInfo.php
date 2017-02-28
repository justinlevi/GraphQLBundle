<?php
/**
 * This file is a part of GraphQLBundle project.
 *
 * @author Alexandr Viniychuk <a@viniychuk.com>
 * created: 2/27/17 9:46 PM
 */

namespace Youshido\GraphQLBundle\Execution\ResolveInfo;


use Youshido\GraphQLBundle\Execution\Context\ExecutionContext;

class ResolveInfo extends \Youshido\GraphQL\Execution\ResolveInfo\ResolveInfo
{

    /** @var ExecutionContext */
    protected $executionContext;

    /**
     * @return ExecutionContext
     */
    public function getExecutionContext()
    {
        return parent::getExecutionContext(); // TODO: Change the autogenerated stub
    }


}