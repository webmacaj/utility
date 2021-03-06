<?php
/**
 * This file is part of riesenia/utility package.
 *
 * Licensed under the MIT License
 * (c) RIESENIA.com
 */

declare(strict_types=1);

namespace Riesenia\Utility\Kendo;

use Riesenia\Kendo\Kendo;

/**
 * MultiSelect helper.
 *
 * @author Tomas Saghy <segy@riesenia.com>
 */
class MultiSelect extends KendoHelper
{
    /**
     * Construct the select.
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        parent::__construct($id);

        $this->dataSource = Kendo::createDataSource()
            ->setSchema(['data' => 'results', 'total' => 'count'])
            ->setServerFiltering(true)
            ->setServerPaging(true);

        $this->widget = Kendo::createMultiSelect('#' . $id)
            ->setDataSource($this->dataSource)
            ->setDataValueField('id')
            ->setDataTextField('name');

        $this->addAttribute('name', $id);
    }

    /**
     * Return HTML.
     *
     * @return string
     */
    public function html(): string
    {
        return $this->_select($this->_id);
    }

    /**
     * Return JavaScript.
     *
     * @return string
     */
    public function script(): string
    {
        $script = $this->widget->__toString();

        return $script;
    }
}
