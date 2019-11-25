<?php

namespace Jp\YahooApis\YDN\V201911\ReportDefinition;

class ReportFieldAttribute
{

    /**
     * @var string $fieldName
     */
    protected $fieldName = null;

    /**
     * @var string $displayFieldNameJA
     */
    protected $displayFieldNameJA = null;

    /**
     * @var string $displayFieldNameEN
     */
    protected $displayFieldNameEN = null;

    /**
     * @var string $xmlAttributeName
     */
    protected $xmlAttributeName = null;

    /**
     * @var string $fieldType
     */
    protected $fieldType = null;

    /**
     * @var boolean $filterable
     */
    protected $filterable = null;

    /**
     * @var string[] $impossibleCombinationFields
     */
    protected $impossibleCombinationFields = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
      return $this->fieldName;
    }

    /**
     * @param string $fieldName
     * @return \Jp\YahooApis\YDN\V201911\ReportDefinition\ReportFieldAttribute
     */
    public function setFieldName($fieldName)
    {
      $this->fieldName = $fieldName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayFieldNameJA()
    {
      return $this->displayFieldNameJA;
    }

    /**
     * @param string $displayFieldNameJA
     * @return \Jp\YahooApis\YDN\V201911\ReportDefinition\ReportFieldAttribute
     */
    public function setDisplayFieldNameJA($displayFieldNameJA)
    {
      $this->displayFieldNameJA = $displayFieldNameJA;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayFieldNameEN()
    {
      return $this->displayFieldNameEN;
    }

    /**
     * @param string $displayFieldNameEN
     * @return \Jp\YahooApis\YDN\V201911\ReportDefinition\ReportFieldAttribute
     */
    public function setDisplayFieldNameEN($displayFieldNameEN)
    {
      $this->displayFieldNameEN = $displayFieldNameEN;
      return $this;
    }

    /**
     * @return string
     */
    public function getXmlAttributeName()
    {
      return $this->xmlAttributeName;
    }

    /**
     * @param string $xmlAttributeName
     * @return \Jp\YahooApis\YDN\V201911\ReportDefinition\ReportFieldAttribute
     */
    public function setXmlAttributeName($xmlAttributeName)
    {
      $this->xmlAttributeName = $xmlAttributeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldType()
    {
      return $this->fieldType;
    }

    /**
     * @param string $fieldType
     * @return \Jp\YahooApis\YDN\V201911\ReportDefinition\ReportFieldAttribute
     */
    public function setFieldType($fieldType)
    {
      $this->fieldType = $fieldType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFilterable()
    {
      return $this->filterable;
    }

    /**
     * @param boolean $filterable
     * @return \Jp\YahooApis\YDN\V201911\ReportDefinition\ReportFieldAttribute
     */
    public function setFilterable($filterable)
    {
      $this->filterable = $filterable;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getImpossibleCombinationFields()
    {
      return $this->impossibleCombinationFields;
    }

    /**
     * @param string[] $impossibleCombinationFields
     * @return \Jp\YahooApis\YDN\V201911\ReportDefinition\ReportFieldAttribute
     */
    public function setImpossibleCombinationFields(array $impossibleCombinationFields = null)
    {
      $this->impossibleCombinationFields = $impossibleCombinationFields;
      return $this;
    }

}
