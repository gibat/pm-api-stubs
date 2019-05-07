<?php
// Copyright 1999-2017. Plesk International GmbH. All rights reserved.
/**
 * Sub Form
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_Form_SubForm extends Zend_Form implements Zend_Validate_Interface
{

    const DECORATOR = 'DECORATOR';

    const ELEMENT = 'ELEMENT';

    const METHOD_DELETE = 'delete';

    const METHOD_GET = 'get';

    const METHOD_POST = 'post';

    const METHOD_PUT = 'put';

    const ENCTYPE_URLENCODED = 'application/x-www-form-urlencoded';

    const ENCTYPE_MULTIPART = 'multipart/form-data';

    /**
     * Create a new form
     *
     * @see Zend_Form::__construct
     * @param mixed|array $options basic Zend_Form options
     */
    public function __construct($options = []) { }

    /**
     * Initialize form
     */
    public function init() { }

    /**
     * Process form after submit
     */
    public function process() { }

    /**
     * Validate form
     *
     * @param array $data
     * @return bool
     */
    public function isValid($data) { }

    /**
     * Retrieve value for single element
     *
     * @param  string $name
     * @return mixed
     */
    public function getValue($name) { }

    /**
     * Retrieve all form element values
     *
     * @param  bool $suppressArrayNotation
     * @return array
     */
    public function getValues($suppressArrayNotation = false) { }

    /**
     * Add a new element
     *
     * Basic elements are:
     * - Text
     * - Password
     * - Textarea
     * - SimpleText
     * - Select
     * - Radio
     * - Checkbox
     * - Hidden
     *
     * More classes see in CommonPanel\Form\Element and Zend\Form\Element
     *
     * @see Zend_Form::addElement
     * @param string|Zend_Form_Element $element
     * @param string $name
     * @param array|Zend_Config $options
     * @return Zend_Form
     */
    public function addElement($element, $name = null, $options = null) { }

    /**
     * Retrieve a single element
     *
     * @param string $name
     * @return null|Zend_Form_Element
     */
    public function getElement($name) { }

    /**
     * Translate message by key according to current locale
     *
     * @param string $key
     * @param array $params
     * @return string
     */
    public function lmsg($key, $params = []) { }

    /**
     * Add a sub form
     *
     * @param Zend_Form $form
     * @param string $name
     * @param null $order
     * @return Zend_Form
     */
    public function addSubForm($form, $name, $order = null) { }

    /**
     * Retrieve a single sub form
     *
     * @param string $name
     * @return null|Zend_Form
     */
    public function getSubForm($name) { }

    /**
     * Retrieve all sub forms
     *
     * @return Zend_Form[]
     */
    public function getSubForms() { }

    /**
     * Set form legend
     *
     * @param string $value
     * @return Zend_Form
     */
    public function setLegend($value) { }

    /**
     * Retrieve form legend
     *
     * @return string
     */
    public function getLegend() { }

}
