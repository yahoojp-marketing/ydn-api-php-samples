<?php

namespace Jp\YahooApis\YDN\V201911\Dictionary;

class GeographicLocationSelector
{

    /**
     * @var DictionaryLang $lang
     */
    protected $lang = null;

    /**
     * @var GeographicLocationType $type
     */
    protected $type = null;

    /**
     * @param DictionaryLang $lang
     */
    public function __construct($lang)
    {
      $this->lang = $lang;
    }

    /**
     * @return DictionaryLang
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param DictionaryLang $lang
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\GeographicLocationSelector
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

    /**
     * @return GeographicLocationType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param GeographicLocationType $type
     * @return \Jp\YahooApis\YDN\V201911\Dictionary\GeographicLocationSelector
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
