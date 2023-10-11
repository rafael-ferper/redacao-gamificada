<?php

class __Mustache_4b205637b1f3956499a080e713682d00 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="stash-area-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('canacquireitems');
        $buffer .= $this->section7b4da2c9629f9d8d92d5a2a7343807f2($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('canmanage');
        $buffer .= $this->section29c9454bd0ff6ba357a45863e7f340e5($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section566525be860283d94d60f537f36815d8($context, $indent, $value);

        return $buffer;
    }

    private function section4eb2efc00deda42e1ee04078c5c9852b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{>block_stash/user_item}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('block_stash/user_item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4505749cc175616ff0b4b5863e2bdb7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'yourinventoryisempty, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'yourinventoryisempty, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b4da2c9629f9d8d92d5a2a7343807f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="item-list">
        {{#items}}
            {{>block_stash/user_item}}
        {{/items}}
        {{^items}}
            <div class="empty-content alert alert-info">{{#str}}yourinventoryisempty, block_stash{{/str}}</div>
        {{/items}}
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="item-list">
';
                $value = $context->find('items');
                $buffer .= $this->section4eb2efc00deda42e1ee04078c5c9852b($context, $indent, $value);
                $value = $context->find('items');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="empty-content alert alert-info">';
                    $value = $context->find('str');
                    $buffer .= $this->section4505749cc175616ff0b4b5863e2bdb7b($context, $indent, $value);
                    $buffer .= '</div>
';
                }
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section272c1de05580284d192311798ec23945(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/report';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/report';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section132da7e03ba027db12d720f1b81991ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'report, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'report, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfe97ecff5aef38a82f9a53dc3f272fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/settings';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/settings';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b3fa3291c1baec937d788cfc9a14872(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'setup, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'setup, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29c9454bd0ff6ba357a45863e7f340e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <nav>
        <a href="{{reporturl}}" class="nav-button">
            <div>{{#pix}}i/report{{/pix}}</div>
            <div>{{#str}}report, block_stash{{/str}}</div>
        </a>
        <a href="{{inventoryurl}}" class="nav-button">
            <div>{{#pix}}i/settings{{/pix}}</div>
            <div>{{#str}}setup, block_stash{{/str}}</div>
        </a>
    </nav>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <nav>
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('reporturl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="nav-button">
';
                $buffer .= $indent . '            <div>';
                $value = $context->find('pix');
                $buffer .= $this->section272c1de05580284d192311798ec23945($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            <div>';
                $value = $context->find('str');
                $buffer .= $this->section132da7e03ba027db12d720f1b81991ca($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('inventoryurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="nav-button">
';
                $buffer .= $indent . '            <div>';
                $value = $context->find('pix');
                $buffer .= $this->sectionBfe97ecff5aef38a82f9a53dc3f272fb($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            <div>';
                $value = $context->find('str');
                $buffer .= $this->section0b3fa3291c1baec937d788cfc9a14872($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section566525be860283d94d60f537f36815d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'jquery\',
    \'block_stash/stash-area\'
], function($, StashArea) {
    var Area = new StashArea(\'#stash-area-{{id}}\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'block_stash/stash-area\'
';
                $buffer .= $indent . '], function($, StashArea) {
';
                $buffer .= $indent . '    var Area = new StashArea(\'#stash-area-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
