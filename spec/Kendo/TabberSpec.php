<?php
namespace spec\Riesenia\Utility\Kendo;

use PhpSpec\ObjectBehavior;

class TabberSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('id');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('Riesenia\Utility\Kendo\Tabber');
    }

    public function it_creates_ul()
    {
        $this->addRemoteTab('Label', 'URL', true)->shouldReturn($this);
        $this->html()->shouldReturn('<div id="id"><ul><li class="k-state-active">Label</li></ul></div>');
    }
}
