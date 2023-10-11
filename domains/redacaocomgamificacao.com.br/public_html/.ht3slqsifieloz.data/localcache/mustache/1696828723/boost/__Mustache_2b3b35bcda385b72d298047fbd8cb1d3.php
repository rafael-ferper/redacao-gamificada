<?php

class __Mustache_2b3b35bcda385b72d298047fbd8cb1d3 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block_xp-level-progress xp-flex xp-flex-col">
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <div class="xp-bg-gray-200 xp-rounded-full xp-h-3 xp-relative xp-overflow-hidden" role="progressbar" aria-valuenow="';
        $value = $this->resolveValue($context->find('percentagehuman'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-valuemin="0" aria-valuemax="100">
';
        $buffer .= $indent . '            <div style="width: ';
        $value = $this->resolveValue($context->find('percentage'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '%;" class="xp-h-full xp-bg-green-400 ';
        $value = $context->find('nonzero');
        $buffer .= $this->sectionC776047294ce3bd535001c5a1ba9cb30($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('nonfull');
        $buffer .= $this->section5b579b82e7762531a8741e10c909313b($context, $indent, $value);
        $buffer .= '"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="xp-flex xp-justify-end xp-self-end xp-text-right xp-text-sm xp-leading-none xp-mt-1">
';
        $value = $context->find('atmaxlevel');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="xp-text-gray-500 xp-text-xs">
';
            $buffer .= $indent . '            ';
            $value = $context->find('islevelless');
            if (empty($value)) {
                
                $value = $context->find('str');
                $buffer .= $this->section1f95e605a93ac4cba07f4268713e1e98($context, $indent, $value);
            }
            $buffer .= '
';
            $buffer .= $indent . '            ';
            $value = $context->find('islevelless');
            $buffer .= $this->section577b119044dc2b56401944409d70093d($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '        <div class="xp-ml-1">';
            $value = $this->resolveValue($context->find('nextinvaluehtml'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '</div>
';
        }
        $value = $context->find('atmaxlevel');
        $buffer .= $this->section26bfc48750547401723fcc7be0183f5c($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionC776047294ce3bd535001c5a1ba9cb30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xp-min-w-[0.25rem]';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'xp-min-w-[0.25rem]';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b579b82e7762531a8741e10c909313b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' xp-max-w-[99%] ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' xp-max-w-[99%] ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f95e605a93ac4cba07f4268713e1e98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nextlevelin, block_xp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nextlevelin, block_xp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBae897025dcfc23987573aa30504c3a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'remaining, block_xp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'remaining, block_xp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section577b119044dc2b56401944409d70093d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}remaining, block_xp{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionBae897025dcfc23987573aa30504c3a8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7f825f21c60e31796ea149d7469bb2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'maxlevelexcl, block_xp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'maxlevelexcl, block_xp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section26bfc48750547401723fcc7be0183f5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="xp-text-gray-500 xp-text-xs">
            {{#str}}maxlevelexcl, block_xp{{/str}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="xp-text-gray-500 xp-text-xs">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionD7f825f21c60e31796ea149d7469bb2a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
