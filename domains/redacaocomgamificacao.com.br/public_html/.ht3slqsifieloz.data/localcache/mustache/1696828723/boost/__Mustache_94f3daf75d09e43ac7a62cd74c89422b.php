<?php

class __Mustache_94f3daf75d09e43ac7a62cd74c89422b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block_xp-recent-activity">
';
        $buffer .= $indent . '    <h5 class="block_xp-heading">';
        $value = $context->find('str');
        $buffer .= $this->section5489131df990cc67529f198f7d90aa3c($context, $indent, $value);
        $buffer .= '</h5>
';
        $value = $context->find('hasrecentactivities');
        if (empty($value)) {
            
            $buffer .= $indent . '        <p>-</p>
';
        }
        $value = $context->find('hasrecentactivities');
        $buffer .= $this->sectionCc7180a737eab9a46c64d4c25bf48db1($context, $indent, $value);
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section5489131df990cc67529f198f7d90aa3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'recentrewards, block_xp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'recentrewards, block_xp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section916bda8fde57da9187dbec7f421e9f64(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="activity-entry xp-text-sm xp-flex">
                <div class="xp-flex-none xp-text-gray-500 xp-order-1" title="{{date}}">{{dateagotiny}}</div>
                <div class="xp-flex-none xp-min-w-[2.25rem]">{{{xphtml}}}</div>
                <div class="xp-flex-1 xp-mx-2">{{description}}</div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="activity-entry xp-text-sm xp-flex">
';
                $buffer .= $indent . '                <div class="xp-flex-none xp-text-gray-500 xp-order-1" title="';
                $value = $this->resolveValue($context->find('date'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('dateagotiny'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '                <div class="xp-flex-none xp-min-w-[2.25rem]">';
                $value = $this->resolveValue($context->find('xphtml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                <div class="xp-flex-1 xp-mx-2">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0befb8877f48f142cce83e6b45e1a0db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="xp-space-y-0.5">
        {{#recentactivities}}
            <div class="activity-entry xp-text-sm xp-flex">
                <div class="xp-flex-none xp-text-gray-500 xp-order-1" title="{{date}}">{{dateagotiny}}</div>
                <div class="xp-flex-none xp-min-w-[2.25rem]">{{{xphtml}}}</div>
                <div class="xp-flex-1 xp-mx-2">{{description}}</div>
            </div>
        {{/recentactivities}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="xp-space-y-0.5">
';
                $value = $context->find('recentactivities');
                $buffer .= $this->section916bda8fde57da9187dbec7f421e9f64($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7ca3a3da7b60e5d95a05b2f79d9e1a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <tr>
                <td class="xp-align-top xp-p-0 xp-pr-2">{{{xphtml}}}</td>
                <td class="xp-align-top xp-p-0 xp-mx-2">{{description}}</td>
                <td class="xp-align-top xp-p-0 xp-pl-2 xp-text-gray-500 xp-text-right" title="{{date}}">{{dateagotiny}}</td>
            </tr>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <tr>
';
                $buffer .= $indent . '                <td class="xp-align-top xp-p-0 xp-pr-2">';
                $value = $this->resolveValue($context->find('xphtml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                <td class="xp-align-top xp-p-0 xp-mx-2">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                <td class="xp-align-top xp-p-0 xp-pl-2 xp-text-gray-500 xp-text-right" title="';
                $value = $this->resolveValue($context->find('date'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('dateagotiny'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc7180a737eab9a46c64d4c25bf48db1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#x}}
        <div class="xp-space-y-0.5">
        {{#recentactivities}}
            <div class="activity-entry xp-text-sm xp-flex">
                <div class="xp-flex-none xp-text-gray-500 xp-order-1" title="{{date}}">{{dateagotiny}}</div>
                <div class="xp-flex-none xp-min-w-[2.25rem]">{{{xphtml}}}</div>
                <div class="xp-flex-1 xp-mx-2">{{description}}</div>
            </div>
        {{/recentactivities}}
        </div>
        {{/x}}

        <table class="xp-w-full xp-border-0">
        {{#recentactivities}}
            <tr>
                <td class="xp-align-top xp-p-0 xp-pr-2">{{{xphtml}}}</td>
                <td class="xp-align-top xp-p-0 xp-mx-2">{{description}}</td>
                <td class="xp-align-top xp-p-0 xp-pl-2 xp-text-gray-500 xp-text-right" title="{{date}}">{{dateagotiny}}</td>
            </tr>
        {{/recentactivities}}
        </table>

    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('x');
                $buffer .= $this->section0befb8877f48f142cce83e6b45e1a0db($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <table class="xp-w-full xp-border-0">
';
                $value = $context->find('recentactivities');
                $buffer .= $this->sectionF7ca3a3da7b60e5d95a05b2f79d9e1a7($context, $indent, $value);
                $buffer .= $indent . '        </table>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
