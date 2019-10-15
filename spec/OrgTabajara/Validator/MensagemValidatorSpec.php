<?php

namespace spec\OrgTabajara\Validator;

use OrgTabajara\Validator\MensagemValidator;
use PhpSpec\ObjectBehavior;

class MensagemValidatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MensagemValidator::class);
    }
}
