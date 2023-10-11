<?php

class __Mustache_e97e20a2c30c542704067c77d6b94e9e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid tertiary-navigation">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('edit');
        $buffer .= $this->section37d0e25acc28509d031c8630bff8eff3($context, $indent, $value);
        $value = $context->find('editcontents');
        $buffer .= $this->section37d0e25acc28509d031c8630bff8eff3($context, $indent, $value);
        $value = $context->find('gradeessays');
        $buffer .= $this->section37d0e25acc28509d031c8630bff8eff3($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('notification');
        $buffer .= $this->section3a9184eb38367d0bf3b27a9ccffc8428($context, $indent, $value);

        return $buffer;
    }

    private function sectionBd4fb985ae759913a88aabe4f9a85cfe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="navitem">
                    {{>core/single_button}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section37d0e25acc28509d031c8630bff8eff3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#button}}
                <div class="navitem">
                    {{>core/single_button}}
                </div>
            {{/button}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('button');
                $buffer .= $this->sectionBd4fb985ae759913a88aabe4f9a85cfe($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a9184eb38367d0bf3b27a9ccffc8428(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
