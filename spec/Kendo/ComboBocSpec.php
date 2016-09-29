<?php
namespace spec\Riesenia\Utility\Kendo;

use PhpSpec\ObjectBehavior;

class ComboBoxSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('id');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('Riesenia\Utility\Kendo\ComboBox');
    }

    public function it_creates_input()
    {
        $this->html()->shouldReturn('<input name="id" id="id" />');
    }
}
