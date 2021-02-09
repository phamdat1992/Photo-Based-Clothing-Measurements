<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Pagespeedonline (v2).
 *
 * <p>
 * Lets you analyze the performance of a web page and get tailored suggestions
 * to make that page faster.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/speed/docs/insights/v2/getting-started" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Pagespeedonline extends Google_Service
{


    public $pagespeedapi;


    /**
     * Constructs the internal representation of the Pagespeedonline service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'pagespeedonline/v2/';
        $this->version = 'v2';
        $this->serviceName = 'pagespeedonline';

        $this->pagespeedapi = new Google_Service_Pagespeedonline_Pagespeedapi_Resource(
            $this,
            $this->serviceName,
            'pagespeedapi',
            array(
                'methods' => array(
                    'runpagespeed' => array(
                        'path' => 'runPagespeed',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'url' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'screenshot' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'locale' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'rule' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                            'strategy' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'filter_third_party_resources' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ),
                )
            )
        );
    }
}


/**
 * The "pagespeedapi" collection of methods.
 * Typical usage is:
 *  <code>
 *   $pagespeedonlineService = new Google_Service_Pagespeedonline(...);
 *   $pagespeedapi = $pagespeedonlineService->pagespeedapi;
 *  </code>
 */
class Google_Service_Pagespeedonline_Pagespeedapi_Resource extends Google_Service_Resource
{

    /**
     * Runs PageSpeed analysis on the page at the specified URL, and returns
     * PageSpeed scores, a list of suggestions to make that page faster, and other
     * information. (pagespeedapi.runpagespeed)
     *
     * @param string $url The URL to fetch and analyze
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool screenshot Indicates if binary data containing a screenshot
     * should be included
     * @opt_param string locale The locale used to localize formatted results
     * @opt_param string rule A PageSpeed rule to run; if none are given, all rules
     * are run
     * @opt_param string strategy The analysis strategy to use
     * @opt_param bool filter_third_party_resources Indicates if third party
     * resources should be filtered out before PageSpeed analysis.
     * @return Google_Service_Pagespeedonline_Result
     */
    public function runpagespeed($url, $optParams = [])
    {
        $params = array('url' => $url);
        $params = array_merge($params, $optParams);
        return $this->call('runpagespeed', array($params), "Google_Service_Pagespeedonline_Result");
    }
}


class Google_Service_Pagespeedonline_PagespeedApiFormatStringV2 extends Google_Collection
{
    public $format;
    protected $collection_key = 'args';
    protected $internal_gapi_mappings = [];
    protected $argsType = 'Google_Service_Pagespeedonline_PagespeedApiFormatStringV2Args';
    protected $argsDataType = 'array';

    public function setArgs($args)
    {
        $this->args = $args;
    }

    public function getArgs()
    {
        return $this->args;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat($format)
    {
        $this->format = $format;
    }
}

class Google_Service_Pagespeedonline_PagespeedApiFormatStringV2Args extends Google_Collection
{
    public $key;
    public $type;
    public $value;
    protected $collection_key = 'secondary_rects';
    protected $internal_gapi_mappings = array(
        "secondaryRects" => "secondary_rects",
    );
    protected $rectsType = 'Google_Service_Pagespeedonline_PagespeedApiFormatStringV2ArgsRects';
    protected $rectsDataType = 'array';
    protected $secondaryRectsType = 'Google_Service_Pagespeedonline_PagespeedApiFormatStringV2ArgsSecondaryRects';
    protected $secondaryRectsDataType = 'array';

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;
    }

    public function setRects($rects)
    {
        $this->rects = $rects;
    }

    public function getRects()
    {
        return $this->rects;
    }

    public function setSecondaryRects($secondaryRects)
    {
        $this->secondaryRects = $secondaryRects;
    }

    public function getSecondaryRects()
    {
        return $this->secondaryRects;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_Service_Pagespeedonline_PagespeedApiFormatStringV2ArgsRects extends Google_Model
{
    public $height;
    public $left;
    public $top;
    public $width;
    protected $internal_gapi_mappings = [];

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function setLeft($left)
    {
        $this->left = $left;
    }

    public function getTop()
    {
        return $this->top;
    }

    public function setTop($top)
    {
        $this->top = $top;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
}

class Google_Service_Pagespeedonline_PagespeedApiFormatStringV2ArgsSecondaryRects extends Google_Model
{
    public $height;
    public $left;
    public $top;
    public $width;
    protected $internal_gapi_mappings = [];

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function setLeft($left)
    {
        $this->left = $left;
    }

    public function getTop()
    {
        return $this->top;
    }

    public function setTop($top)
    {
        $this->top = $top;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
}

class Google_Service_Pagespeedonline_PagespeedApiImageV2 extends Google_Model
{
    public $data;
    public $height;
    public $key;
    public $mimeType;
    public $width;
    protected $internal_gapi_mappings = array(
        "mimeType" => "mime_type",
        "pageRect" => "page_rect",
    );
    protected $pageRectType = 'Google_Service_Pagespeedonline_PagespeedApiImageV2PageRect';
    protected $pageRectDataType = '';

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;
    }

    public function getMimeType()
    {
        return $this->mimeType;
    }

    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }

    public function setPageRect(Google_Service_Pagespeedonline_PagespeedApiImageV2PageRect $pageRect)
    {
        $this->pageRect = $pageRect;
    }

    public function getPageRect()
    {
        return $this->pageRect;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
}

class Google_Service_Pagespeedonline_PagespeedApiImageV2PageRect extends Google_Model
{
    public $height;
    public $left;
    public $top;
    public $width;
    protected $internal_gapi_mappings = [];

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getLeft()
    {
        return $this->left;
    }

    public function setLeft($left)
    {
        $this->left = $left;
    }

    public function getTop()
    {
        return $this->top;
    }

    public function setTop($top)
    {
        $this->top = $top;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
}

class Google_Service_Pagespeedonline_Result extends Google_Collection
{
    public $id;
    public $invalidRules;
    public $kind;
    public $responseCode;
    public $title;
    protected $collection_key = 'invalidRules';
    protected $internal_gapi_mappings = [];
    protected $formattedResultsType = 'Google_Service_Pagespeedonline_ResultFormattedResults';
    protected $formattedResultsDataType = '';
    protected $pageStatsType = 'Google_Service_Pagespeedonline_ResultPageStats';
    protected $pageStatsDataType = '';
    protected $ruleGroupsType = 'Google_Service_Pagespeedonline_ResultRuleGroupsElement';
    protected $ruleGroupsDataType = 'map';
    protected $screenshotType = 'Google_Service_Pagespeedonline_PagespeedApiImageV2';
    protected $screenshotDataType = '';
    protected $versionType = 'Google_Service_Pagespeedonline_ResultVersion';
    protected $versionDataType = '';


    public function setFormattedResults(Google_Service_Pagespeedonline_ResultFormattedResults $formattedResults)
    {
        $this->formattedResults = $formattedResults;
    }

    public function getFormattedResults()
    {
        return $this->formattedResults;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getInvalidRules()
    {
        return $this->invalidRules;
    }

    public function setInvalidRules($invalidRules)
    {
        $this->invalidRules = $invalidRules;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setPageStats(Google_Service_Pagespeedonline_ResultPageStats $pageStats)
    {
        $this->pageStats = $pageStats;
    }

    public function getPageStats()
    {
        return $this->pageStats;
    }

    public function getResponseCode()
    {
        return $this->responseCode;
    }

    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
    }

    public function setRuleGroups($ruleGroups)
    {
        $this->ruleGroups = $ruleGroups;
    }

    public function getRuleGroups()
    {
        return $this->ruleGroups;
    }

    public function setScreenshot(Google_Service_Pagespeedonline_PagespeedApiImageV2 $screenshot)
    {
        $this->screenshot = $screenshot;
    }

    public function getScreenshot()
    {
        return $this->screenshot;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setVersion(Google_Service_Pagespeedonline_ResultVersion $version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }
}

class Google_Service_Pagespeedonline_ResultFormattedResults extends Google_Model
{
    public $locale;
    protected $internal_gapi_mappings = [];
    protected $ruleResultsType = 'Google_Service_Pagespeedonline_ResultFormattedResultsRuleResultsElement';
    protected $ruleResultsDataType = 'map';

    public function getLocale()
    {
        return $this->locale;
    }

    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    public function setRuleResults($ruleResults)
    {
        $this->ruleResults = $ruleResults;
    }

    public function getRuleResults()
    {
        return $this->ruleResults;
    }
}

class Google_Service_Pagespeedonline_ResultFormattedResultsRuleResults extends Google_Model
{
}

class Google_Service_Pagespeedonline_ResultFormattedResultsRuleResultsElement extends Google_Collection
{
    public $groups;
    public $localizedRuleName;
    public $ruleImpact;
    protected $collection_key = 'urlBlocks';
    protected $internal_gapi_mappings = [];
    protected $summaryType = 'Google_Service_Pagespeedonline_PagespeedApiFormatStringV2';
    protected $summaryDataType = '';
    protected $urlBlocksType = 'Google_Service_Pagespeedonline_ResultFormattedResultsRuleResultsElementUrlBlocks';
    protected $urlBlocksDataType = 'array';

    public function getGroups()
    {
        return $this->groups;
    }

    public function setGroups($groups)
    {
        $this->groups = $groups;
    }

    public function getLocalizedRuleName()
    {
        return $this->localizedRuleName;
    }

    public function setLocalizedRuleName($localizedRuleName)
    {
        $this->localizedRuleName = $localizedRuleName;
    }

    public function getRuleImpact()
    {
        return $this->ruleImpact;
    }

    public function setRuleImpact($ruleImpact)
    {
        $this->ruleImpact = $ruleImpact;
    }

    public function setSummary(Google_Service_Pagespeedonline_PagespeedApiFormatStringV2 $summary)
    {
        $this->summary = $summary;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setUrlBlocks($urlBlocks)
    {
        $this->urlBlocks = $urlBlocks;
    }

    public function getUrlBlocks()
    {
        return $this->urlBlocks;
    }
}

class Google_Service_Pagespeedonline_ResultFormattedResultsRuleResultsElementUrlBlocks extends Google_Collection
{
    protected $collection_key = 'urls';
    protected $internal_gapi_mappings = [];
    protected $headerType = 'Google_Service_Pagespeedonline_PagespeedApiFormatStringV2';
    protected $headerDataType = '';
    protected $urlsType = 'Google_Service_Pagespeedonline_ResultFormattedResultsRuleResultsElementUrlBlocksUrls';
    protected $urlsDataType = 'array';


    public function setHeader(Google_Service_Pagespeedonline_PagespeedApiFormatStringV2 $header)
    {
        $this->header = $header;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function setUrls($urls)
    {
        $this->urls = $urls;
    }

    public function getUrls()
    {
        return $this->urls;
    }
}

class Google_Service_Pagespeedonline_ResultFormattedResultsRuleResultsElementUrlBlocksUrls extends Google_Collection
{
    protected $collection_key = 'details';
    protected $internal_gapi_mappings = [];
    protected $detailsType = 'Google_Service_Pagespeedonline_PagespeedApiFormatStringV2';
    protected $detailsDataType = 'array';
    protected $resultType = 'Google_Service_Pagespeedonline_PagespeedApiFormatStringV2';
    protected $resultDataType = '';


    public function setDetails($details)
    {
        $this->details = $details;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setResult(Google_Service_Pagespeedonline_PagespeedApiFormatStringV2 $result)
    {
        $this->result = $result;
    }

    public function getResult()
    {
        return $this->result;
    }
}

class Google_Service_Pagespeedonline_ResultPageStats extends Google_Model
{
    public $cssResponseBytes;
    public $flashResponseBytes;
    public $htmlResponseBytes;
    public $imageResponseBytes;
    public $javascriptResponseBytes;
    public $numberCssResources;
    public $numberHosts;
    public $numberJsResources;
    public $numberResources;
    public $numberStaticResources;
    public $otherResponseBytes;
    public $textResponseBytes;
    public $totalRequestBytes;
    protected $internal_gapi_mappings = [];

    public function getCssResponseBytes()
    {
        return $this->cssResponseBytes;
    }

    public function setCssResponseBytes($cssResponseBytes)
    {
        $this->cssResponseBytes = $cssResponseBytes;
    }

    public function getFlashResponseBytes()
    {
        return $this->flashResponseBytes;
    }

    public function setFlashResponseBytes($flashResponseBytes)
    {
        $this->flashResponseBytes = $flashResponseBytes;
    }

    public function getHtmlResponseBytes()
    {
        return $this->htmlResponseBytes;
    }

    public function setHtmlResponseBytes($htmlResponseBytes)
    {
        $this->htmlResponseBytes = $htmlResponseBytes;
    }

    public function getImageResponseBytes()
    {
        return $this->imageResponseBytes;
    }

    public function setImageResponseBytes($imageResponseBytes)
    {
        $this->imageResponseBytes = $imageResponseBytes;
    }

    public function getJavascriptResponseBytes()
    {
        return $this->javascriptResponseBytes;
    }

    public function setJavascriptResponseBytes($javascriptResponseBytes)
    {
        $this->javascriptResponseBytes = $javascriptResponseBytes;
    }

    public function getNumberCssResources()
    {
        return $this->numberCssResources;
    }

    public function setNumberCssResources($numberCssResources)
    {
        $this->numberCssResources = $numberCssResources;
    }

    public function getNumberHosts()
    {
        return $this->numberHosts;
    }

    public function setNumberHosts($numberHosts)
    {
        $this->numberHosts = $numberHosts;
    }

    public function getNumberJsResources()
    {
        return $this->numberJsResources;
    }

    public function setNumberJsResources($numberJsResources)
    {
        $this->numberJsResources = $numberJsResources;
    }

    public function getNumberResources()
    {
        return $this->numberResources;
    }

    public function setNumberResources($numberResources)
    {
        $this->numberResources = $numberResources;
    }

    public function getNumberStaticResources()
    {
        return $this->numberStaticResources;
    }

    public function setNumberStaticResources($numberStaticResources)
    {
        $this->numberStaticResources = $numberStaticResources;
    }

    public function getOtherResponseBytes()
    {
        return $this->otherResponseBytes;
    }

    public function setOtherResponseBytes($otherResponseBytes)
    {
        $this->otherResponseBytes = $otherResponseBytes;
    }

    public function getTextResponseBytes()
    {
        return $this->textResponseBytes;
    }

    public function setTextResponseBytes($textResponseBytes)
    {
        $this->textResponseBytes = $textResponseBytes;
    }

    public function getTotalRequestBytes()
    {
        return $this->totalRequestBytes;
    }

    public function setTotalRequestBytes($totalRequestBytes)
    {
        $this->totalRequestBytes = $totalRequestBytes;
    }
}

class Google_Service_Pagespeedonline_ResultRuleGroups extends Google_Model
{
}

class Google_Service_Pagespeedonline_ResultRuleGroupsElement extends Google_Model
{
    public $score;
    protected $internal_gapi_mappings = [];

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($score)
    {
        $this->score = $score;
    }
}

class Google_Service_Pagespeedonline_ResultVersion extends Google_Model
{
    public $major;
    public $minor;
    protected $internal_gapi_mappings = [];

    public function getMajor()
    {
        return $this->major;
    }

    public function setMajor($major)
    {
        $this->major = $major;
    }

    public function getMinor()
    {
        return $this->minor;
    }

    public function setMinor($minor)
    {
        $this->minor = $minor;
    }
}
