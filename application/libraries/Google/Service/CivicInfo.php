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
 * Service definition for CivicInfo (v2).
 *
 * <p>
 * An API for accessing civic information.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/civic-information" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_CivicInfo extends Google_Service
{


    public $divisions;
    public $elections;
    public $representatives;


    /**
     * Constructs the internal representation of the CivicInfo service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'civicinfo/v2/';
        $this->version = 'v2';
        $this->serviceName = 'civicinfo';

        $this->divisions = new Google_Service_CivicInfo_Divisions_Resource(
            $this,
            $this->serviceName,
            'divisions',
            array(
                'methods' => array(
                    'search' => array(
                        'path' => 'divisions',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'query' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->elections = new Google_Service_CivicInfo_Elections_Resource(
            $this,
            $this->serviceName,
            'elections',
            array(
                'methods' => array(
                    'electionQuery' => array(
                        'path' => 'elections',
                        'httpMethod' => 'GET',
                        'parameters' => [],
                    ), 'voterInfoQuery' => array(
                        'path' => 'voterinfo',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'address' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'electionId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'officialOnly' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->representatives = new Google_Service_CivicInfo_Representatives_Resource(
            $this,
            $this->serviceName,
            'representatives',
            array(
                'methods' => array(
                    'representativeInfoByAddress' => array(
                        'path' => 'representatives',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'includeOffices' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'levels' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                            'roles' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                            'address' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'representativeInfoByDivision' => array(
                        'path' => 'representatives/{ocdId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'ocdId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'levels' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                            'recursive' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'roles' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                        ),
                    ),
                )
            )
        );
    }
}


/**
 * The "divisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $civicinfoService = new Google_Service_CivicInfo(...);
 *   $divisions = $civicinfoService->divisions;
 *  </code>
 */
class Google_Service_CivicInfo_Divisions_Resource extends Google_Service_Resource
{

    /**
     * Searches for political divisions by their natural name or OCD ID.
     * (divisions.search)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string query The search query. Queries can cover any parts of a
     * OCD ID or a human readable division name. All words given in the query are
     * treated as required patterns. In addition to that, most query operators of
     * the Apache Lucene library are supported. See
     * http://lucene.apache.org/core/2_9_4/queryparsersyntax.html
     * @return Google_Service_CivicInfo_DivisionSearchResponse
     */
    public function search($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_CivicInfo_DivisionSearchResponse");
    }
}

/**
 * The "elections" collection of methods.
 * Typical usage is:
 *  <code>
 *   $civicinfoService = new Google_Service_CivicInfo(...);
 *   $elections = $civicinfoService->elections;
 *  </code>
 */
class Google_Service_CivicInfo_Elections_Resource extends Google_Service_Resource
{

    /**
     * List of available elections to query. (elections.electionQuery)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Service_CivicInfo_ElectionsQueryResponse
     */
    public function electionQuery($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('electionQuery', array($params), "Google_Service_CivicInfo_ElectionsQueryResponse");
    }

    /**
     * Looks up information relevant to a voter based on the voter's registered
     * address. (elections.voterInfoQuery)
     *
     * @param string $address The registered address of the voter to look up.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string electionId The unique ID of the election to look up. A list
     * of election IDs can be obtained at
     * https://www.googleapis.com/civicinfo/{version}/elections
     * @opt_param bool officialOnly If set to true, only data from official state
     * sources will be returned.
     * @return Google_Service_CivicInfo_VoterInfoResponse
     */
    public function voterInfoQuery($address, $optParams = [])
    {
        $params = array('address' => $address);
        $params = array_merge($params, $optParams);
        return $this->call('voterInfoQuery', array($params), "Google_Service_CivicInfo_VoterInfoResponse");
    }
}

/**
 * The "representatives" collection of methods.
 * Typical usage is:
 *  <code>
 *   $civicinfoService = new Google_Service_CivicInfo(...);
 *   $representatives = $civicinfoService->representatives;
 *  </code>
 */
class Google_Service_CivicInfo_Representatives_Resource extends Google_Service_Resource
{

    /**
     * Looks up political geography and representative information for a single
     * address. (representatives.representativeInfoByAddress)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeOffices Whether to return information about offices
     * and officials. If false, only the top-level district information will be
     * returned.
     * @opt_param string levels A list of office levels to filter by. Only offices
     * that serve at least one of these levels will be returned. Divisions that
     * don't contain a matching office will not be returned.
     * @opt_param string roles A list of office roles to filter by. Only offices
     * fulfilling one of these roles will be returned. Divisions that don't contain
     * a matching office will not be returned.
     * @opt_param string address The address to look up. May only be specified if
     * the field ocdId is not given in the URL.
     * @return Google_Service_CivicInfo_RepresentativeInfoResponse
     */
    public function representativeInfoByAddress($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('representativeInfoByAddress', array($params), "Google_Service_CivicInfo_RepresentativeInfoResponse");
    }

    /**
     * Looks up representative information for a single geographic division.
     * (representatives.representativeInfoByDivision)
     *
     * @param string $ocdId The Open Civic Data division identifier of the division
     * to look up.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string levels A list of office levels to filter by. Only offices
     * that serve at least one of these levels will be returned. Divisions that
     * don't contain a matching office will not be returned.
     * @opt_param bool recursive If true, information about all divisions contained
     * in the division requested will be included as well. For example, if querying
     * ocd-division/country:us/district:dc, this would also return all DC's wards
     * and ANCs.
     * @opt_param string roles A list of office roles to filter by. Only offices
     * fulfilling one of these roles will be returned. Divisions that don't contain
     * a matching office will not be returned.
     * @return Google_Service_CivicInfo_RepresentativeInfoData
     */
    public function representativeInfoByDivision($ocdId, $optParams = [])
    {
        $params = array('ocdId' => $ocdId);
        $params = array_merge($params, $optParams);
        return $this->call('representativeInfoByDivision', array($params), "Google_Service_CivicInfo_RepresentativeInfoData");
    }
}


class Google_Service_CivicInfo_AdministrationRegion extends Google_Collection
{
    public $id;
    public $name;
    protected $collection_key = 'sources';
    protected $internal_gapi_mappings = array(
        "localJurisdiction" => "local_jurisdiction",
    );
    protected $electionAdministrationBodyType = 'Google_Service_CivicInfo_AdministrativeBody';
    protected $electionAdministrationBodyDataType = '';
    protected $localJurisdictionType = 'Google_Service_CivicInfo_AdministrationRegion';
    protected $localJurisdictionDataType = '';
    protected $sourcesType = 'Google_Service_CivicInfo_Source';
    protected $sourcesDataType = 'array';


    public function setElectionAdministrationBody(Google_Service_CivicInfo_AdministrativeBody $electionAdministrationBody)
    {
        $this->electionAdministrationBody = $electionAdministrationBody;
    }

    public function getElectionAdministrationBody()
    {
        return $this->electionAdministrationBody;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setLocalJurisdiction(Google_Service_CivicInfo_AdministrationRegion $localJurisdiction)
    {
        $this->localJurisdiction = $localJurisdiction;
    }

    public function getLocalJurisdiction()
    {
        return $this->localJurisdiction;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSources($sources)
    {
        $this->sources = $sources;
    }

    public function getSources()
    {
        return $this->sources;
    }
}

class Google_Service_CivicInfo_AdministrativeBody extends Google_Collection
{
    public $absenteeVotingInfoUrl;
    public $ballotInfoUrl;
    public $electionInfoUrl;
    public $electionRegistrationConfirmationUrl;
    public $electionRegistrationUrl;
    public $electionRulesUrl;
    public $hoursOfOperation;
    public $name;
    public $voterServices;
    public $votingLocationFinderUrl;
    protected $collection_key = 'voter_services';
    protected $internal_gapi_mappings = array(
        "voterServices" => "voter_services",
    );
    protected $correspondenceAddressType = 'Google_Service_CivicInfo_SimpleAddressType';
    protected $correspondenceAddressDataType = '';
    protected $electionOfficialsType = 'Google_Service_CivicInfo_ElectionOfficial';
    protected $electionOfficialsDataType = 'array';
    protected $physicalAddressType = 'Google_Service_CivicInfo_SimpleAddressType';
    protected $physicalAddressDataType = '';

    public function getAbsenteeVotingInfoUrl()
    {
        return $this->absenteeVotingInfoUrl;
    }

    public function setAbsenteeVotingInfoUrl($absenteeVotingInfoUrl)
    {
        $this->absenteeVotingInfoUrl = $absenteeVotingInfoUrl;
    }

    public function getBallotInfoUrl()
    {
        return $this->ballotInfoUrl;
    }

    public function setBallotInfoUrl($ballotInfoUrl)
    {
        $this->ballotInfoUrl = $ballotInfoUrl;
    }

    public function setCorrespondenceAddress(Google_Service_CivicInfo_SimpleAddressType $correspondenceAddress)
    {
        $this->correspondenceAddress = $correspondenceAddress;
    }

    public function getCorrespondenceAddress()
    {
        return $this->correspondenceAddress;
    }

    public function getElectionInfoUrl()
    {
        return $this->electionInfoUrl;
    }

    public function setElectionInfoUrl($electionInfoUrl)
    {
        $this->electionInfoUrl = $electionInfoUrl;
    }

    public function setElectionOfficials($electionOfficials)
    {
        $this->electionOfficials = $electionOfficials;
    }

    public function getElectionOfficials()
    {
        return $this->electionOfficials;
    }

    public function getElectionRegistrationConfirmationUrl()
    {
        return $this->electionRegistrationConfirmationUrl;
    }

    public function setElectionRegistrationConfirmationUrl($electionRegistrationConfirmationUrl)
    {
        $this->electionRegistrationConfirmationUrl = $electionRegistrationConfirmationUrl;
    }

    public function getElectionRegistrationUrl()
    {
        return $this->electionRegistrationUrl;
    }

    public function setElectionRegistrationUrl($electionRegistrationUrl)
    {
        $this->electionRegistrationUrl = $electionRegistrationUrl;
    }

    public function getElectionRulesUrl()
    {
        return $this->electionRulesUrl;
    }

    public function setElectionRulesUrl($electionRulesUrl)
    {
        $this->electionRulesUrl = $electionRulesUrl;
    }

    public function getHoursOfOperation()
    {
        return $this->hoursOfOperation;
    }

    public function setHoursOfOperation($hoursOfOperation)
    {
        $this->hoursOfOperation = $hoursOfOperation;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPhysicalAddress(Google_Service_CivicInfo_SimpleAddressType $physicalAddress)
    {
        $this->physicalAddress = $physicalAddress;
    }

    public function getPhysicalAddress()
    {
        return $this->physicalAddress;
    }

    public function getVoterServices()
    {
        return $this->voterServices;
    }

    public function setVoterServices($voterServices)
    {
        $this->voterServices = $voterServices;
    }

    public function getVotingLocationFinderUrl()
    {
        return $this->votingLocationFinderUrl;
    }

    public function setVotingLocationFinderUrl($votingLocationFinderUrl)
    {
        $this->votingLocationFinderUrl = $votingLocationFinderUrl;
    }
}

class Google_Service_CivicInfo_Candidate extends Google_Collection
{
    public $candidateUrl;
    public $email;
    public $name;
    public $orderOnBallot;
    public $party;
    public $phone;
    public $photoUrl;
    protected $collection_key = 'channels';
    protected $internal_gapi_mappings = [];
    protected $channelsType = 'Google_Service_CivicInfo_Channel';
    protected $channelsDataType = 'array';

    public function getCandidateUrl()
    {
        return $this->candidateUrl;
    }

    public function setCandidateUrl($candidateUrl)
    {
        $this->candidateUrl = $candidateUrl;
    }

    public function setChannels($channels)
    {
        $this->channels = $channels;
    }

    public function getChannels()
    {
        return $this->channels;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getOrderOnBallot()
    {
        return $this->orderOnBallot;
    }

    public function setOrderOnBallot($orderOnBallot)
    {
        $this->orderOnBallot = $orderOnBallot;
    }

    public function getParty()
    {
        return $this->party;
    }

    public function setParty($party)
    {
        $this->party = $party;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }

    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;
    }
}

class Google_Service_CivicInfo_Channel extends Google_Model
{
    public $id;
    public $type;
    protected $internal_gapi_mappings = [];

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

class Google_Service_CivicInfo_Contest extends Google_Collection
{
    public $ballotPlacement;
    public $electorateSpecifications;
    public $id;
    public $level;
    public $numberElected;
    public $numberVotingFor;
    public $office;
    public $primaryParty;
    public $referendumSubtitle;
    public $referendumTitle;
    public $referendumUrl;
    public $roles;
    public $special;
    public $type;
    protected $collection_key = 'sources';
    protected $internal_gapi_mappings = [];
    protected $candidatesType = 'Google_Service_CivicInfo_Candidate';
    protected $candidatesDataType = 'array';
    protected $districtType = 'Google_Service_CivicInfo_ElectoralDistrict';
    protected $districtDataType = '';
    protected $sourcesType = 'Google_Service_CivicInfo_Source';
    protected $sourcesDataType = 'array';

    public function getBallotPlacement()
    {
        return $this->ballotPlacement;
    }

    public function setBallotPlacement($ballotPlacement)
    {
        $this->ballotPlacement = $ballotPlacement;
    }

    public function setCandidates($candidates)
    {
        $this->candidates = $candidates;
    }

    public function getCandidates()
    {
        return $this->candidates;
    }

    public function setDistrict(Google_Service_CivicInfo_ElectoralDistrict $district)
    {
        $this->district = $district;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    public function getElectorateSpecifications()
    {
        return $this->electorateSpecifications;
    }

    public function setElectorateSpecifications($electorateSpecifications)
    {
        $this->electorateSpecifications = $electorateSpecifications;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function getNumberElected()
    {
        return $this->numberElected;
    }

    public function setNumberElected($numberElected)
    {
        $this->numberElected = $numberElected;
    }

    public function getNumberVotingFor()
    {
        return $this->numberVotingFor;
    }

    public function setNumberVotingFor($numberVotingFor)
    {
        $this->numberVotingFor = $numberVotingFor;
    }

    public function getOffice()
    {
        return $this->office;
    }

    public function setOffice($office)
    {
        $this->office = $office;
    }

    public function getPrimaryParty()
    {
        return $this->primaryParty;
    }

    public function setPrimaryParty($primaryParty)
    {
        $this->primaryParty = $primaryParty;
    }

    public function getReferendumSubtitle()
    {
        return $this->referendumSubtitle;
    }

    public function setReferendumSubtitle($referendumSubtitle)
    {
        $this->referendumSubtitle = $referendumSubtitle;
    }

    public function getReferendumTitle()
    {
        return $this->referendumTitle;
    }

    public function setReferendumTitle($referendumTitle)
    {
        $this->referendumTitle = $referendumTitle;
    }

    public function getReferendumUrl()
    {
        return $this->referendumUrl;
    }

    public function setReferendumUrl($referendumUrl)
    {
        $this->referendumUrl = $referendumUrl;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    public function setSources($sources)
    {
        $this->sources = $sources;
    }

    public function getSources()
    {
        return $this->sources;
    }

    public function getSpecial()
    {
        return $this->special;
    }

    public function setSpecial($special)
    {
        $this->special = $special;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

class Google_Service_CivicInfo_DivisionSearchResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'results';
    protected $internal_gapi_mappings = [];
    protected $resultsType = 'Google_Service_CivicInfo_DivisionSearchResult';
    protected $resultsDataType = 'array';

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setResults($results)
    {
        $this->results = $results;
    }

    public function getResults()
    {
        return $this->results;
    }
}

class Google_Service_CivicInfo_DivisionSearchResult extends Google_Collection
{
    public $aliases;
    public $name;
    public $ocdId;
    protected $collection_key = 'aliases';
    protected $internal_gapi_mappings = [];

    public function getAliases()
    {
        return $this->aliases;
    }

    public function setAliases($aliases)
    {
        $this->aliases = $aliases;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getOcdId()
    {
        return $this->ocdId;
    }

    public function setOcdId($ocdId)
    {
        $this->ocdId = $ocdId;
    }
}

class Google_Service_CivicInfo_Election extends Google_Model
{
    public $electionDay;
    public $id;
    public $name;
    protected $internal_gapi_mappings = [];

    public function getElectionDay()
    {
        return $this->electionDay;
    }

    public function setElectionDay($electionDay)
    {
        $this->electionDay = $electionDay;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

class Google_Service_CivicInfo_ElectionOfficial extends Google_Model
{
    public $emailAddress;
    public $faxNumber;
    public $name;
    public $officePhoneNumber;
    public $title;
    protected $internal_gapi_mappings = [];

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getOfficePhoneNumber()
    {
        return $this->officePhoneNumber;
    }

    public function setOfficePhoneNumber($officePhoneNumber)
    {
        $this->officePhoneNumber = $officePhoneNumber;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}

class Google_Service_CivicInfo_ElectionsQueryResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'elections';
    protected $internal_gapi_mappings = [];
    protected $electionsType = 'Google_Service_CivicInfo_Election';
    protected $electionsDataType = 'array';

    public function setElections($elections)
    {
        $this->elections = $elections;
    }

    public function getElections()
    {
        return $this->elections;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_Service_CivicInfo_ElectoralDistrict extends Google_Model
{
    public $id;
    public $name;
    public $scope;
    protected $internal_gapi_mappings = [];

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getScope()
    {
        return $this->scope;
    }

    public function setScope($scope)
    {
        $this->scope = $scope;
    }
}

class Google_Service_CivicInfo_GeographicDivision extends Google_Collection
{
    public $alsoKnownAs;
    public $name;
    public $officeIndices;
    protected $collection_key = 'officeIndices';
    protected $internal_gapi_mappings = [];

    public function getAlsoKnownAs()
    {
        return $this->alsoKnownAs;
    }

    public function setAlsoKnownAs($alsoKnownAs)
    {
        $this->alsoKnownAs = $alsoKnownAs;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getOfficeIndices()
    {
        return $this->officeIndices;
    }

    public function setOfficeIndices($officeIndices)
    {
        $this->officeIndices = $officeIndices;
    }
}

class Google_Service_CivicInfo_Office extends Google_Collection
{
    public $divisionId;
    public $levels;
    public $name;
    public $officialIndices;
    public $roles;
    protected $collection_key = 'sources';
    protected $internal_gapi_mappings = [];
    protected $sourcesType = 'Google_Service_CivicInfo_Source';
    protected $sourcesDataType = 'array';

    public function getDivisionId()
    {
        return $this->divisionId;
    }

    public function setDivisionId($divisionId)
    {
        $this->divisionId = $divisionId;
    }

    public function getLevels()
    {
        return $this->levels;
    }

    public function setLevels($levels)
    {
        $this->levels = $levels;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getOfficialIndices()
    {
        return $this->officialIndices;
    }

    public function setOfficialIndices($officialIndices)
    {
        $this->officialIndices = $officialIndices;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    public function setSources($sources)
    {
        $this->sources = $sources;
    }

    public function getSources()
    {
        return $this->sources;
    }
}

class Google_Service_CivicInfo_Official extends Google_Collection
{
    public $emails;
    public $name;
    public $party;
    public $phones;
    public $photoUrl;
    public $urls;
    protected $collection_key = 'urls';
    protected $internal_gapi_mappings = [];
    protected $addressType = 'Google_Service_CivicInfo_SimpleAddressType';
    protected $addressDataType = 'array';
    protected $channelsType = 'Google_Service_CivicInfo_Channel';
    protected $channelsDataType = 'array';

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setChannels($channels)
    {
        $this->channels = $channels;
    }

    public function getChannels()
    {
        return $this->channels;
    }

    public function getEmails()
    {
        return $this->emails;
    }

    public function setEmails($emails)
    {
        $this->emails = $emails;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getParty()
    {
        return $this->party;
    }

    public function setParty($party)
    {
        $this->party = $party;
    }

    public function getPhones()
    {
        return $this->phones;
    }

    public function setPhones($phones)
    {
        $this->phones = $phones;
    }

    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }

    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;
    }

    public function getUrls()
    {
        return $this->urls;
    }

    public function setUrls($urls)
    {
        $this->urls = $urls;
    }
}

class Google_Service_CivicInfo_PollingLocation extends Google_Collection
{
    public $endDate;
    public $id;
    public $name;
    public $notes;
    public $pollingHours;
    public $startDate;
    public $voterServices;
    protected $collection_key = 'sources';
    protected $internal_gapi_mappings = [];
    protected $addressType = 'Google_Service_CivicInfo_SimpleAddressType';
    protected $addressDataType = '';
    protected $sourcesType = 'Google_Service_CivicInfo_Source';
    protected $sourcesDataType = 'array';

    public function setAddress(Google_Service_CivicInfo_SimpleAddressType $address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    public function getPollingHours()
    {
        return $this->pollingHours;
    }

    public function setPollingHours($pollingHours)
    {
        $this->pollingHours = $pollingHours;
    }

    public function setSources($sources)
    {
        $this->sources = $sources;
    }

    public function getSources()
    {
        return $this->sources;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getVoterServices()
    {
        return $this->voterServices;
    }

    public function setVoterServices($voterServices)
    {
        $this->voterServices = $voterServices;
    }
}

class Google_Service_CivicInfo_RepresentativeInfoData extends Google_Collection
{
    protected $collection_key = 'officials';
    protected $internal_gapi_mappings = [];
    protected $divisionsType = 'Google_Service_CivicInfo_GeographicDivision';
    protected $divisionsDataType = 'map';
    protected $officesType = 'Google_Service_CivicInfo_Office';
    protected $officesDataType = 'array';
    protected $officialsType = 'Google_Service_CivicInfo_Official';
    protected $officialsDataType = 'array';


    public function setDivisions($divisions)
    {
        $this->divisions = $divisions;
    }

    public function getDivisions()
    {
        return $this->divisions;
    }

    public function setOffices($offices)
    {
        $this->offices = $offices;
    }

    public function getOffices()
    {
        return $this->offices;
    }

    public function setOfficials($officials)
    {
        $this->officials = $officials;
    }

    public function getOfficials()
    {
        return $this->officials;
    }
}

class Google_Service_CivicInfo_RepresentativeInfoDataDivisions extends Google_Model
{
}

class Google_Service_CivicInfo_RepresentativeInfoResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'officials';
    protected $internal_gapi_mappings = [];
    protected $divisionsType = 'Google_Service_CivicInfo_GeographicDivision';
    protected $divisionsDataType = 'map';
    protected $normalizedInputType = 'Google_Service_CivicInfo_SimpleAddressType';
    protected $normalizedInputDataType = '';
    protected $officesType = 'Google_Service_CivicInfo_Office';
    protected $officesDataType = 'array';
    protected $officialsType = 'Google_Service_CivicInfo_Official';
    protected $officialsDataType = 'array';


    public function setDivisions($divisions)
    {
        $this->divisions = $divisions;
    }

    public function getDivisions()
    {
        return $this->divisions;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setNormalizedInput(Google_Service_CivicInfo_SimpleAddressType $normalizedInput)
    {
        $this->normalizedInput = $normalizedInput;
    }

    public function getNormalizedInput()
    {
        return $this->normalizedInput;
    }

    public function setOffices($offices)
    {
        $this->offices = $offices;
    }

    public function getOffices()
    {
        return $this->offices;
    }

    public function setOfficials($officials)
    {
        $this->officials = $officials;
    }

    public function getOfficials()
    {
        return $this->officials;
    }
}

class Google_Service_CivicInfo_RepresentativeInfoResponseDivisions extends Google_Model
{
}

class Google_Service_CivicInfo_SimpleAddressType extends Google_Model
{
    public $city;
    public $line1;
    public $line2;
    public $line3;
    public $locationName;
    public $state;
    public $zip;
    protected $internal_gapi_mappings = [];

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getLine1()
    {
        return $this->line1;
    }

    public function setLine1($line1)
    {
        $this->line1 = $line1;
    }

    public function getLine2()
    {
        return $this->line2;
    }

    public function setLine2($line2)
    {
        $this->line2 = $line2;
    }

    public function getLine3()
    {
        return $this->line3;
    }

    public function setLine3($line3)
    {
        $this->line3 = $line3;
    }

    public function getLocationName()
    {
        return $this->locationName;
    }

    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;
    }
}

class Google_Service_CivicInfo_Source extends Google_Model
{
    public $name;
    public $official;
    protected $internal_gapi_mappings = [];

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getOfficial()
    {
        return $this->official;
    }

    public function setOfficial($official)
    {
        $this->official = $official;
    }
}

class Google_Service_CivicInfo_VoterInfoResponse extends Google_Collection
{
    public $kind;
    public $precinctId;
    protected $collection_key = 'state';
    protected $internal_gapi_mappings = [];
    protected $contestsType = 'Google_Service_CivicInfo_Contest';
    protected $contestsDataType = 'array';
    protected $dropOffLocationsType = 'Google_Service_CivicInfo_PollingLocation';
    protected $dropOffLocationsDataType = 'array';
    protected $earlyVoteSitesType = 'Google_Service_CivicInfo_PollingLocation';
    protected $earlyVoteSitesDataType = 'array';
    protected $electionType = 'Google_Service_CivicInfo_Election';
    protected $electionDataType = '';
    protected $normalizedInputType = 'Google_Service_CivicInfo_SimpleAddressType';
    protected $normalizedInputDataType = '';
    protected $otherElectionsType = 'Google_Service_CivicInfo_Election';
    protected $otherElectionsDataType = 'array';
    protected $pollingLocationsType = 'Google_Service_CivicInfo_PollingLocation';
    protected $pollingLocationsDataType = 'array';
    protected $stateType = 'Google_Service_CivicInfo_AdministrationRegion';
    protected $stateDataType = 'array';


    public function setContests($contests)
    {
        $this->contests = $contests;
    }

    public function getContests()
    {
        return $this->contests;
    }

    public function setDropOffLocations($dropOffLocations)
    {
        $this->dropOffLocations = $dropOffLocations;
    }

    public function getDropOffLocations()
    {
        return $this->dropOffLocations;
    }

    public function setEarlyVoteSites($earlyVoteSites)
    {
        $this->earlyVoteSites = $earlyVoteSites;
    }

    public function getEarlyVoteSites()
    {
        return $this->earlyVoteSites;
    }

    public function setElection(Google_Service_CivicInfo_Election $election)
    {
        $this->election = $election;
    }

    public function getElection()
    {
        return $this->election;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setNormalizedInput(Google_Service_CivicInfo_SimpleAddressType $normalizedInput)
    {
        $this->normalizedInput = $normalizedInput;
    }

    public function getNormalizedInput()
    {
        return $this->normalizedInput;
    }

    public function setOtherElections($otherElections)
    {
        $this->otherElections = $otherElections;
    }

    public function getOtherElections()
    {
        return $this->otherElections;
    }

    public function setPollingLocations($pollingLocations)
    {
        $this->pollingLocations = $pollingLocations;
    }

    public function getPollingLocations()
    {
        return $this->pollingLocations;
    }

    public function getPrecinctId()
    {
        return $this->precinctId;
    }

    public function setPrecinctId($precinctId)
    {
        $this->precinctId = $precinctId;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}
