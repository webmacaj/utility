<?php
namespace Riesenia\Utility\Kendo;

use Riesenia\Kendo\Kendo;

/**
 * Select helper
 *
 * @author Tomas Saghy <segy@riesenia.com>
 */
class Select extends KendoHelper
{
    /**
     * Input name
     *
     * @var string
     */
    protected $_name;

    /**
     * Construct the select
     *
     * @param string id
     */
    public function __construct($id)
    {
        parent::__construct($id);

        $this->dataSource = Kendo::createDataSource()
            ->setSchema(['data' => 'results', 'total' => 'count'])
            ->setServerFiltering(true)
            ->setServerPaging(true);

        $this->_widget = Kendo::createDropDownList('#' . $id)
            ->setDataSource($this->dataSource)
            ->setDataValueField('id')
            ->setDataTextField('name');

        $this->_name = $id;
    }

    /**
     * Set input name
     *
     * @param string name
     * @return Riesenia\Utility\Kendo\Select
     */
    public function setName($name)
    {
        $this->_name = $name;

        return $this;
    }

    /**
     * Return HTML
     *
     * @return string
     */
    public function html()
    {
        return '<input id="' . $this->_id . '" name="' . $this->_name . '" />';
    }

    /**
     * Return JavaScript
     *
     * @return string
     */
    public function script()
    {
        $script = $this->_widget->__toString();

        return $script;
    }
}