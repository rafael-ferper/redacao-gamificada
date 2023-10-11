<?php

class __Mustache_cb3fbc7067f50e98eeb6425ac36c6c10 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="section-summary-activities pr-2 mdl-right">
';
        $value = $context->find('mods');
        $buffer .= $this->section56e83f2ab6a498d4e63feb017b0f791b($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="section-summary-activities pr-2 mdl-right">
';
        $buffer .= $indent . '    <span class="activity-count">';
        $value = $this->resolveValue($context->find('modprogress'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section56e83f2ab6a498d4e63feb017b0f791b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="activity-count">{{name}}: {{count}}</span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span class="activity-count">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ': ';
                $value = $this->resolveValue($context->find('count'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
