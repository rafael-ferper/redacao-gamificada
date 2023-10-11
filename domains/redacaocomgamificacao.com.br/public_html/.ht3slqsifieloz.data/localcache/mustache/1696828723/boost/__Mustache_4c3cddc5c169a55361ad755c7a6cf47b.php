<?php

class __Mustache_4c3cddc5c169a55361ad755c7a6cf47b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '
';
        $value = $context->find('hasmanagernotices');
        $buffer .= $this->sectionAf30aa261ede5eb3b373e6323db9867d($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('introhtml');
        $buffer .= $this->section7b857e126be15d106a5e1d9e4e724c41($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="xp-text-xl xp-text-center xp-font-bold">';
        $value = $this->resolveValue($context->find('levelnamehtml'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div>';
        $value = $this->resolveValue($context->find('badgehtml'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="xp-mt-6">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="xp-flex xp-gap-3">
';
        $buffer .= $indent . '            <div class="xp-flex-1 xp-overflow-hidden">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="xp-flex xp-flex-wrap xp-items-end xp-gap-1 xp-max-w-full">
';
        $buffer .= $indent . '                    <div class="xp-text-xs xp-uppercase xp-text-gray-600">';
        $value = $context->find('str');
        $buffer .= $this->section2c1036254caa1bc102ad8f2f56d0323d($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                    <div class="xp-bg-gray-200 xp-rounded-full xp-px-3 xp-py-1 xp-overflow-hidden">
';
        $buffer .= $indent . '                        <div class="xp-max-w-full xp-text-xl xp-leading-none xp-truncate" title="';
        $value = $this->resolveValue($context->find('xp'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->find('xphtml'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="xp-mt-2">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('progressbarhtml'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('shownextlevel');
        $buffer .= $this->section6ef7911b94fe2fb0a9feef98845b345f($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('showrankingsnapshot');
        $buffer .= $this->sectionF1f7814262487581e0fb8d108955e086($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('showrecentactivity');
        $buffer .= $this->section36b14a9d5f6753f3801523a0bf37e7bb($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('showactions');
        $buffer .= $this->sectionE51b1ad7e0e4dd97161c8b8aaac89b8b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionAec9e99dfcb6b807af3a96a26858b73e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{.}}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf30aa261ede5eb3b373e6323db9867d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#managernotices}}
            {{{.}}}
        {{/managernotices}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('managernotices');
                $buffer .= $this->sectionAec9e99dfcb6b807af3a96a26858b73e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b857e126be15d106a5e1d9e4e724c41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="introduction">{{{.}}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="introduction">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c1036254caa1bc102ad8f2f56d0323d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'total, block_xp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'total, block_xp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ef7911b94fe2fb0a9feef98845b345f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="xp-self-end">
                {{{nextbadgehtml}}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="xp-self-end">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('nextbadgehtml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD20b8093cd082e8247946c6f4b781830(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ranking, block_xp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ranking, block_xp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6602a539190165c54691d640de702c59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xp-flex-2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'xp-flex-2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe375db2739080fb75985b8363ba1c7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xp-text-xl xp-bg-gray-200 xp-rounded-full xp-px-2 xp-py-1 xp-min-w-[3rem] ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'xp-text-xl xp-bg-gray-200 xp-rounded-full xp-px-2 xp-py-1 xp-min-w-[3rem] ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf8052a509e56cf5fe9e6441a5c806e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '-';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '-';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section307f976af2aa8555a00c17be841354c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="xp-flex xp-flex-col xp-items-center {{^highlight}}xp-flex-1{{/highlight}}{{#highlight}}xp-flex-2{{/highlight}} xp-overflow-hidden">
                        <div class="{{^highlight}}xp-mt-4{{/highlight}}{{#highlight}}xp-text-xl xp-bg-gray-200 xp-rounded-full xp-px-2 xp-py-1 xp-min-w-[3rem] {{/highlight}} xp-max-w-full xp-truncate xp-text-center xp-leading-none xp-mb-1" aria-labelledby="block_xp-ranking-snapshot-rank-{{uniqid}}-{{idx}}">
                            {{#isplaceholder}}-{{/isplaceholder}}
                            {{^isplaceholder}}{{{rankhtml}}}{{/isplaceholder}}
                        </div>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="xp-flex xp-flex-col xp-items-center ';
                $value = $context->find('highlight');
                if (empty($value)) {
                    
                    $buffer .= 'xp-flex-1';
                }
                $value = $context->find('highlight');
                $buffer .= $this->section6602a539190165c54691d640de702c59($context, $indent, $value);
                $buffer .= ' xp-overflow-hidden">
';
                $buffer .= $indent . '                        <div class="';
                $value = $context->find('highlight');
                if (empty($value)) {
                    
                    $buffer .= 'xp-mt-4';
                }
                $value = $context->find('highlight');
                $buffer .= $this->sectionEe375db2739080fb75985b8363ba1c7d($context, $indent, $value);
                $buffer .= ' xp-max-w-full xp-truncate xp-text-center xp-leading-none xp-mb-1" aria-labelledby="block_xp-ranking-snapshot-rank-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->find('idx'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('isplaceholder');
                $buffer .= $this->sectionDf8052a509e56cf5fe9e6441a5c806e8($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('isplaceholder');
                if (empty($value)) {
                    
                    $value = $this->resolveValue($context->find('rankhtml'), $context);
                    $buffer .= ($value === null ? '' : $value);
                }
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60c9331fc004605726d51008663dcff1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="xp-flex xp-gap-2 xp-items-center">
                {{#rankingsnapshot}}
                    <div class="xp-flex xp-flex-col xp-items-center {{^highlight}}xp-flex-1{{/highlight}}{{#highlight}}xp-flex-2{{/highlight}} xp-overflow-hidden">
                        <div class="{{^highlight}}xp-mt-4{{/highlight}}{{#highlight}}xp-text-xl xp-bg-gray-200 xp-rounded-full xp-px-2 xp-py-1 xp-min-w-[3rem] {{/highlight}} xp-max-w-full xp-truncate xp-text-center xp-leading-none xp-mb-1" aria-labelledby="block_xp-ranking-snapshot-rank-{{uniqid}}-{{idx}}">
                            {{#isplaceholder}}-{{/isplaceholder}}
                            {{^isplaceholder}}{{{rankhtml}}}{{/isplaceholder}}
                        </div>
                    </div>
                {{/rankingsnapshot}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="xp-flex xp-gap-2 xp-items-center">
';
                $value = $context->find('rankingsnapshot');
                $buffer .= $this->section307f976af2aa8555a00c17be841354c0($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCeaf6cc071b34fea70099d4936da43b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' xp-max-w-[6rem] xp-border-sky-400 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' xp-max-w-[6rem] xp-border-sky-400 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDee58d0848ff551692aed7b5baf29cc3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{diff}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('diff'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF949e02ebd2073d16a6d2b2c5ea4d1d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{^highlight}}
                        <div class="xp-text-xxs xp-text-gray-500 xp-mt-1" title="{{diff}}">
                            {{#hasdiff}}{{{diff}}}{{/hasdiff}}{{^hasdiff}}&nbsp;{{/hasdiff}}
                        </div>
                        {{/highlight}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('highlight');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <div class="xp-text-xxs xp-text-gray-500 xp-mt-1" title="';
                    $value = $this->resolveValue($context->find('diff'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                    $buffer .= $indent . '                            ';
                    $value = $context->find('hasdiff');
                    $buffer .= $this->sectionDee58d0848ff551692aed7b5baf29cc3($context, $indent, $value);
                    $value = $context->find('hasdiff');
                    if (empty($value)) {
                        
                        $buffer .= '&nbsp;';
                    }
                    $buffer .= '
';
                    $buffer .= $indent . '                        </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAefa7709a7310909d3789e10d63a76ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="xp-flex xp-flex-col xp-items-center {{^highlight}}xp-mt-1 xp-flex-1{{/highlight}}{{#highlight}}xp-flex-2{{/highlight}} xp-overflow-hidden" id="block_xp-ranking-snapshot-rank-{{uniqid}}-{{idx}}">
                        <img src="{{picurl}}" alt="{{name}}" class="xp-block xp-w-full xp-rounded-full {{^highlight}} xp-max-w-[4rem] xp-border-gray-200 {{/highlight}}{{#highlight}} xp-max-w-[6rem] xp-border-sky-400 {{/highlight}} xp-border-solid xp-border-2 xp-p-0.5">
                        {{#showdiffsinrankingsnapshot}}
                        {{^highlight}}
                        <div class="xp-text-xxs xp-text-gray-500 xp-mt-1" title="{{diff}}">
                            {{#hasdiff}}{{{diff}}}{{/hasdiff}}{{^hasdiff}}&nbsp;{{/hasdiff}}
                        </div>
                        {{/highlight}}
                        {{/showdiffsinrankingsnapshot}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="xp-flex xp-flex-col xp-items-center ';
                $value = $context->find('highlight');
                if (empty($value)) {
                    
                    $buffer .= 'xp-mt-1 xp-flex-1';
                }
                $value = $context->find('highlight');
                $buffer .= $this->section6602a539190165c54691d640de702c59($context, $indent, $value);
                $buffer .= ' xp-overflow-hidden" id="block_xp-ranking-snapshot-rank-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->find('idx'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('picurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="xp-block xp-w-full xp-rounded-full ';
                $value = $context->find('highlight');
                if (empty($value)) {
                    
                    $buffer .= ' xp-max-w-[4rem] xp-border-gray-200 ';
                }
                $value = $context->find('highlight');
                $buffer .= $this->sectionCeaf6cc071b34fea70099d4936da43b5($context, $indent, $value);
                $buffer .= ' xp-border-solid xp-border-2 xp-p-0.5">
';
                $value = $context->find('showdiffsinrankingsnapshot');
                $buffer .= $this->sectionF949e02ebd2073d16a6d2b2c5ea4d1d1($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE47ea5ef614c553004cdb31615566944(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#showranksinrankingsnapshot}}
            <div class="xp-flex xp-gap-2 xp-items-center">
                {{#rankingsnapshot}}
                    <div class="xp-flex xp-flex-col xp-items-center {{^highlight}}xp-flex-1{{/highlight}}{{#highlight}}xp-flex-2{{/highlight}} xp-overflow-hidden">
                        <div class="{{^highlight}}xp-mt-4{{/highlight}}{{#highlight}}xp-text-xl xp-bg-gray-200 xp-rounded-full xp-px-2 xp-py-1 xp-min-w-[3rem] {{/highlight}} xp-max-w-full xp-truncate xp-text-center xp-leading-none xp-mb-1" aria-labelledby="block_xp-ranking-snapshot-rank-{{uniqid}}-{{idx}}">
                            {{#isplaceholder}}-{{/isplaceholder}}
                            {{^isplaceholder}}{{{rankhtml}}}{{/isplaceholder}}
                        </div>
                    </div>
                {{/rankingsnapshot}}
            </div>
            {{/showranksinrankingsnapshot}}
            <div class="xp-flex xp-gap-2 xp-items-center">
                {{#rankingsnapshot}}
                    <div class="xp-flex xp-flex-col xp-items-center {{^highlight}}xp-mt-1 xp-flex-1{{/highlight}}{{#highlight}}xp-flex-2{{/highlight}} xp-overflow-hidden" id="block_xp-ranking-snapshot-rank-{{uniqid}}-{{idx}}">
                        <img src="{{picurl}}" alt="{{name}}" class="xp-block xp-w-full xp-rounded-full {{^highlight}} xp-max-w-[4rem] xp-border-gray-200 {{/highlight}}{{#highlight}} xp-max-w-[6rem] xp-border-sky-400 {{/highlight}} xp-border-solid xp-border-2 xp-p-0.5">
                        {{#showdiffsinrankingsnapshot}}
                        {{^highlight}}
                        <div class="xp-text-xxs xp-text-gray-500 xp-mt-1" title="{{diff}}">
                            {{#hasdiff}}{{{diff}}}{{/hasdiff}}{{^hasdiff}}&nbsp;{{/hasdiff}}
                        </div>
                        {{/highlight}}
                        {{/showdiffsinrankingsnapshot}}
                    </div>
                {{/rankingsnapshot}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('showranksinrankingsnapshot');
                $buffer .= $this->section60c9331fc004605726d51008663dcff1($context, $indent, $value);
                $buffer .= $indent . '            <div class="xp-flex xp-gap-2 xp-items-center">
';
                $value = $context->find('rankingsnapshot');
                $buffer .= $this->sectionAefa7709a7310909d3789e10d63a76ae($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1f7814262487581e0fb8d108955e086(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="xp-mt-6">
            <h5 class="block_xp-heading">{{#str}}ranking, block_xp{{/str}}</h5>
            {{#hasrankingsnapshot}}
            {{#showranksinrankingsnapshot}}
            <div class="xp-flex xp-gap-2 xp-items-center">
                {{#rankingsnapshot}}
                    <div class="xp-flex xp-flex-col xp-items-center {{^highlight}}xp-flex-1{{/highlight}}{{#highlight}}xp-flex-2{{/highlight}} xp-overflow-hidden">
                        <div class="{{^highlight}}xp-mt-4{{/highlight}}{{#highlight}}xp-text-xl xp-bg-gray-200 xp-rounded-full xp-px-2 xp-py-1 xp-min-w-[3rem] {{/highlight}} xp-max-w-full xp-truncate xp-text-center xp-leading-none xp-mb-1" aria-labelledby="block_xp-ranking-snapshot-rank-{{uniqid}}-{{idx}}">
                            {{#isplaceholder}}-{{/isplaceholder}}
                            {{^isplaceholder}}{{{rankhtml}}}{{/isplaceholder}}
                        </div>
                    </div>
                {{/rankingsnapshot}}
            </div>
            {{/showranksinrankingsnapshot}}
            <div class="xp-flex xp-gap-2 xp-items-center">
                {{#rankingsnapshot}}
                    <div class="xp-flex xp-flex-col xp-items-center {{^highlight}}xp-mt-1 xp-flex-1{{/highlight}}{{#highlight}}xp-flex-2{{/highlight}} xp-overflow-hidden" id="block_xp-ranking-snapshot-rank-{{uniqid}}-{{idx}}">
                        <img src="{{picurl}}" alt="{{name}}" class="xp-block xp-w-full xp-rounded-full {{^highlight}} xp-max-w-[4rem] xp-border-gray-200 {{/highlight}}{{#highlight}} xp-max-w-[6rem] xp-border-sky-400 {{/highlight}} xp-border-solid xp-border-2 xp-p-0.5">
                        {{#showdiffsinrankingsnapshot}}
                        {{^highlight}}
                        <div class="xp-text-xxs xp-text-gray-500 xp-mt-1" title="{{diff}}">
                            {{#hasdiff}}{{{diff}}}{{/hasdiff}}{{^hasdiff}}&nbsp;{{/hasdiff}}
                        </div>
                        {{/highlight}}
                        {{/showdiffsinrankingsnapshot}}
                    </div>
                {{/rankingsnapshot}}
            </div>
            {{/hasrankingsnapshot}}

        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="xp-mt-6">
';
                $buffer .= $indent . '            <h5 class="block_xp-heading">';
                $value = $context->find('str');
                $buffer .= $this->sectionD20b8093cd082e8247946c6f4b781830($context, $indent, $value);
                $buffer .= '</h5>
';
                $value = $context->find('hasrankingsnapshot');
                $buffer .= $this->sectionE47ea5ef614c553004cdb31615566944($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36b14a9d5f6753f3801523a0bf37e7bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="xp-mt-6">
            {{{recentactivityhtml}}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="xp-mt-6">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('recentactivityhtml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE51b1ad7e0e4dd97161c8b8aaac89b8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="xp-mt-6">
            {{{actionshtml}}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="xp-mt-6">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('actionshtml'), $context);
                $buffer .= ($value === null ? '' : $value);
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
