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
 * Service definition for QPXExpress (v1).
 *
 * <p>
 * Lets you find the least expensive flights between an origin and a
 * destination.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="http://developers.google.com/qpx-express" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_QPXExpress extends Google_Service
{


    public $trips;


    /**
     * Constructs the internal representation of the QPXExpress service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'qpxExpress/v1/trips/';
        $this->version = 'v1';
        $this->serviceName = 'qpxExpress';

        $this->trips = new Google_Service_QPXExpress_Trips_Resource(
            $this,
            $this->serviceName,
            'trips',
            array(
                'methods' => array(
                    'search' => array(
                        'path' => 'search',
                        'httpMethod' => 'POST',
                        'parameters' => [],
                    ),
                )
            )
        );
    }
}


/**
 * The "trips" collection of methods.
 * Typical usage is:
 *  <code>
 *   $qpxExpressService = new Google_Service_QPXExpress(...);
 *   $trips = $qpxExpressService->trips;
 *  </code>
 */
class Google_Service_QPXExpress_Trips_Resource extends Google_Service_Resource
{

    /**
     * Returns a list of flights. (trips.search)
     *
     * @param Google_TripsSearchRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_QPXExpress_TripsSearchResponse
     */
    public function search(Google_Service_QPXExpress_TripsSearchRequest $postBody, $optParams = [])
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_QPXExpress_TripsSearchResponse");
    }
}


class Google_Service_QPXExpress_AircraftData extends Google_Model
{
    public $code;
    public $kind;
    public $name;
    protected $internal_gapi_mappings = [];

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
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

class Google_Service_QPXExpress_AirportData extends Google_Model
{
    public $city;
    public $code;
    public $kind;
    public $name;
    protected $internal_gapi_mappings = [];

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
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

class Google_Service_QPXExpress_BagDescriptor extends Google_Collection
{
    public $commercialName;
    public $count;
    public $description;
    public $kind;
    public $subcode;
    protected $collection_key = 'description';
    protected $internal_gapi_mappings = [];

    public function getCommercialName()
    {
        return $this->commercialName;
    }

    public function setCommercialName($commercialName)
    {
        $this->commercialName = $commercialName;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getSubcode()
    {
        return $this->subcode;
    }

    public function setSubcode($subcode)
    {
        $this->subcode = $subcode;
    }
}

class Google_Service_QPXExpress_CarrierData extends Google_Model
{
    public $code;
    public $kind;
    public $name;
    protected $internal_gapi_mappings = [];

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
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

class Google_Service_QPXExpress_CityData extends Google_Model
{
    public $code;
    public $country;
    public $kind;
    public $name;
    protected $internal_gapi_mappings = [];

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
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

class Google_Service_QPXExpress_Data extends Google_Collection
{
    public $kind;
    protected $collection_key = 'tax';
    protected $internal_gapi_mappings = [];
    protected $aircraftType = 'Google_Service_QPXExpress_AircraftData';
    protected $aircraftDataType = 'array';
    protected $airportType = 'Google_Service_QPXExpress_AirportData';
    protected $airportDataType = 'array';
    protected $carrierType = 'Google_Service_QPXExpress_CarrierData';
    protected $carrierDataType = 'array';
    protected $cityType = 'Google_Service_QPXExpress_CityData';
    protected $cityDataType = 'array';
    protected $taxType = 'Google_Service_QPXExpress_TaxData';
    protected $taxDataType = 'array';


    public function setAircraft($aircraft)
    {
        $this->aircraft = $aircraft;
    }

    public function getAircraft()
    {
        return $this->aircraft;
    }

    public function setAirport($airport)
    {
        $this->airport = $airport;
    }

    public function getAirport()
    {
        return $this->airport;
    }

    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }

    public function getCarrier()
    {
        return $this->carrier;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    public function getTax()
    {
        return $this->tax;
    }
}

class Google_Service_QPXExpress_FareInfo extends Google_Model
{
    public $basisCode;
    public $carrier;
    public $destination;
    public $id;
    public $kind;
    public $origin;
    public $private;
    protected $internal_gapi_mappings = [];

    public function getBasisCode()
    {
        return $this->basisCode;
    }

    public function setBasisCode($basisCode)
    {
        $this->basisCode = $basisCode;
    }

    public function getCarrier()
    {
        return $this->carrier;
    }

    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getOrigin()
    {
        return $this->origin;
    }

    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    public function getPrivate()
    {
        return $this->private;
    }

    public function setPrivate($private)
    {
        $this->private = $private;
    }
}

class Google_Service_QPXExpress_FlightInfo extends Google_Model
{
    public $carrier;
    public $number;
    protected $internal_gapi_mappings = [];

    public function getCarrier()
    {
        return $this->carrier;
    }

    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }
}

class Google_Service_QPXExpress_FreeBaggageAllowance extends Google_Collection
{
    public $kilos;
    public $kilosPerPiece;
    public $kind;
    public $pieces;
    public $pounds;
    protected $collection_key = 'bagDescriptor';
    protected $internal_gapi_mappings = [];
    protected $bagDescriptorType = 'Google_Service_QPXExpress_BagDescriptor';
    protected $bagDescriptorDataType = 'array';

    public function setBagDescriptor($bagDescriptor)
    {
        $this->bagDescriptor = $bagDescriptor;
    }

    public function getBagDescriptor()
    {
        return $this->bagDescriptor;
    }

    public function getKilos()
    {
        return $this->kilos;
    }

    public function setKilos($kilos)
    {
        $this->kilos = $kilos;
    }

    public function getKilosPerPiece()
    {
        return $this->kilosPerPiece;
    }

    public function setKilosPerPiece($kilosPerPiece)
    {
        $this->kilosPerPiece = $kilosPerPiece;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getPieces()
    {
        return $this->pieces;
    }

    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
    }

    public function getPounds()
    {
        return $this->pounds;
    }

    public function setPounds($pounds)
    {
        $this->pounds = $pounds;
    }
}

class Google_Service_QPXExpress_LegInfo extends Google_Model
{
    public $aircraft;
    public $arrivalTime;
    public $changePlane;
    public $connectionDuration;
    public $departureTime;
    public $destination;
    public $destinationTerminal;
    public $duration;
    public $id;
    public $kind;
    public $meal;
    public $mileage;
    public $onTimePerformance;
    public $operatingDisclosure;
    public $origin;
    public $originTerminal;
    public $secure;
    protected $internal_gapi_mappings = [];

    public function getAircraft()
    {
        return $this->aircraft;
    }

    public function setAircraft($aircraft)
    {
        $this->aircraft = $aircraft;
    }

    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    public function setArrivalTime($arrivalTime)
    {
        $this->arrivalTime = $arrivalTime;
    }

    public function getChangePlane()
    {
        return $this->changePlane;
    }

    public function setChangePlane($changePlane)
    {
        $this->changePlane = $changePlane;
    }

    public function getConnectionDuration()
    {
        return $this->connectionDuration;
    }

    public function setConnectionDuration($connectionDuration)
    {
        $this->connectionDuration = $connectionDuration;
    }

    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    public function setDepartureTime($departureTime)
    {
        $this->departureTime = $departureTime;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    public function getDestinationTerminal()
    {
        return $this->destinationTerminal;
    }

    public function setDestinationTerminal($destinationTerminal)
    {
        $this->destinationTerminal = $destinationTerminal;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getMeal()
    {
        return $this->meal;
    }

    public function setMeal($meal)
    {
        $this->meal = $meal;
    }

    public function getMileage()
    {
        return $this->mileage;
    }

    public function setMileage($mileage)
    {
        $this->mileage = $mileage;
    }

    public function getOnTimePerformance()
    {
        return $this->onTimePerformance;
    }

    public function setOnTimePerformance($onTimePerformance)
    {
        $this->onTimePerformance = $onTimePerformance;
    }

    public function getOperatingDisclosure()
    {
        return $this->operatingDisclosure;
    }

    public function setOperatingDisclosure($operatingDisclosure)
    {
        $this->operatingDisclosure = $operatingDisclosure;
    }

    public function getOrigin()
    {
        return $this->origin;
    }

    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    public function getOriginTerminal()
    {
        return $this->originTerminal;
    }

    public function setOriginTerminal($originTerminal)
    {
        $this->originTerminal = $originTerminal;
    }

    public function getSecure()
    {
        return $this->secure;
    }

    public function setSecure($secure)
    {
        $this->secure = $secure;
    }
}

class Google_Service_QPXExpress_PassengerCounts extends Google_Model
{
    public $adultCount;
    public $childCount;
    public $infantInLapCount;
    public $infantInSeatCount;
    public $kind;
    public $seniorCount;
    protected $internal_gapi_mappings = [];

    public function getAdultCount()
    {
        return $this->adultCount;
    }

    public function setAdultCount($adultCount)
    {
        $this->adultCount = $adultCount;
    }

    public function getChildCount()
    {
        return $this->childCount;
    }

    public function setChildCount($childCount)
    {
        $this->childCount = $childCount;
    }

    public function getInfantInLapCount()
    {
        return $this->infantInLapCount;
    }

    public function setInfantInLapCount($infantInLapCount)
    {
        $this->infantInLapCount = $infantInLapCount;
    }

    public function getInfantInSeatCount()
    {
        return $this->infantInSeatCount;
    }

    public function setInfantInSeatCount($infantInSeatCount)
    {
        $this->infantInSeatCount = $infantInSeatCount;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getSeniorCount()
    {
        return $this->seniorCount;
    }

    public function setSeniorCount($seniorCount)
    {
        $this->seniorCount = $seniorCount;
    }
}

class Google_Service_QPXExpress_PricingInfo extends Google_Collection
{
    public $baseFareTotal;
    public $fareCalculation;
    public $kind;
    public $latestTicketingTime;
    public $ptc;
    public $refundable;
    public $saleFareTotal;
    public $saleTaxTotal;
    public $saleTotal;
    protected $collection_key = 'tax';
    protected $internal_gapi_mappings = [];
    protected $fareType = 'Google_Service_QPXExpress_FareInfo';
    protected $fareDataType = 'array';
    protected $passengersType = 'Google_Service_QPXExpress_PassengerCounts';
    protected $passengersDataType = '';
    protected $segmentPricingType = 'Google_Service_QPXExpress_SegmentPricing';
    protected $segmentPricingDataType = 'array';
    protected $taxType = 'Google_Service_QPXExpress_TaxInfo';
    protected $taxDataType = 'array';

    public function getBaseFareTotal()
    {
        return $this->baseFareTotal;
    }

    public function setBaseFareTotal($baseFareTotal)
    {
        $this->baseFareTotal = $baseFareTotal;
    }

    public function setFare($fare)
    {
        $this->fare = $fare;
    }

    public function getFare()
    {
        return $this->fare;
    }

    public function getFareCalculation()
    {
        return $this->fareCalculation;
    }

    public function setFareCalculation($fareCalculation)
    {
        $this->fareCalculation = $fareCalculation;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getLatestTicketingTime()
    {
        return $this->latestTicketingTime;
    }

    public function setLatestTicketingTime($latestTicketingTime)
    {
        $this->latestTicketingTime = $latestTicketingTime;
    }

    public function setPassengers(Google_Service_QPXExpress_PassengerCounts $passengers)
    {
        $this->passengers = $passengers;
    }

    public function getPassengers()
    {
        return $this->passengers;
    }

    public function getPtc()
    {
        return $this->ptc;
    }

    public function setPtc($ptc)
    {
        $this->ptc = $ptc;
    }

    public function getRefundable()
    {
        return $this->refundable;
    }

    public function setRefundable($refundable)
    {
        $this->refundable = $refundable;
    }

    public function getSaleFareTotal()
    {
        return $this->saleFareTotal;
    }

    public function setSaleFareTotal($saleFareTotal)
    {
        $this->saleFareTotal = $saleFareTotal;
    }

    public function getSaleTaxTotal()
    {
        return $this->saleTaxTotal;
    }

    public function setSaleTaxTotal($saleTaxTotal)
    {
        $this->saleTaxTotal = $saleTaxTotal;
    }

    public function getSaleTotal()
    {
        return $this->saleTotal;
    }

    public function setSaleTotal($saleTotal)
    {
        $this->saleTotal = $saleTotal;
    }

    public function setSegmentPricing($segmentPricing)
    {
        $this->segmentPricing = $segmentPricing;
    }

    public function getSegmentPricing()
    {
        return $this->segmentPricing;
    }

    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    public function getTax()
    {
        return $this->tax;
    }
}

class Google_Service_QPXExpress_SegmentInfo extends Google_Collection
{
    public $bookingCode;
    public $bookingCodeCount;
    public $cabin;
    public $connectionDuration;
    public $duration;
    public $id;
    public $kind;
    public $marriedSegmentGroup;
    public $subjectToGovernmentApproval;
    protected $collection_key = 'leg';
    protected $internal_gapi_mappings = [];
    protected $flightType = 'Google_Service_QPXExpress_FlightInfo';
    protected $flightDataType = '';
    protected $legType = 'Google_Service_QPXExpress_LegInfo';
    protected $legDataType = 'array';

    public function getBookingCode()
    {
        return $this->bookingCode;
    }

    public function setBookingCode($bookingCode)
    {
        $this->bookingCode = $bookingCode;
    }

    public function getBookingCodeCount()
    {
        return $this->bookingCodeCount;
    }

    public function setBookingCodeCount($bookingCodeCount)
    {
        $this->bookingCodeCount = $bookingCodeCount;
    }

    public function getCabin()
    {
        return $this->cabin;
    }

    public function setCabin($cabin)
    {
        $this->cabin = $cabin;
    }

    public function getConnectionDuration()
    {
        return $this->connectionDuration;
    }

    public function setConnectionDuration($connectionDuration)
    {
        $this->connectionDuration = $connectionDuration;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function setFlight(Google_Service_QPXExpress_FlightInfo $flight)
    {
        $this->flight = $flight;
    }

    public function getFlight()
    {
        return $this->flight;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setLeg($leg)
    {
        $this->leg = $leg;
    }

    public function getLeg()
    {
        return $this->leg;
    }

    public function getMarriedSegmentGroup()
    {
        return $this->marriedSegmentGroup;
    }

    public function setMarriedSegmentGroup($marriedSegmentGroup)
    {
        $this->marriedSegmentGroup = $marriedSegmentGroup;
    }

    public function getSubjectToGovernmentApproval()
    {
        return $this->subjectToGovernmentApproval;
    }

    public function setSubjectToGovernmentApproval($subjectToGovernmentApproval)
    {
        $this->subjectToGovernmentApproval = $subjectToGovernmentApproval;
    }
}

class Google_Service_QPXExpress_SegmentPricing extends Google_Collection
{
    public $fareId;
    public $kind;
    public $segmentId;
    protected $collection_key = 'freeBaggageOption';
    protected $internal_gapi_mappings = [];
    protected $freeBaggageOptionType = 'Google_Service_QPXExpress_FreeBaggageAllowance';
    protected $freeBaggageOptionDataType = 'array';

    public function getFareId()
    {
        return $this->fareId;
    }

    public function setFareId($fareId)
    {
        $this->fareId = $fareId;
    }

    public function setFreeBaggageOption($freeBaggageOption)
    {
        $this->freeBaggageOption = $freeBaggageOption;
    }

    public function getFreeBaggageOption()
    {
        return $this->freeBaggageOption;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getSegmentId()
    {
        return $this->segmentId;
    }

    public function setSegmentId($segmentId)
    {
        $this->segmentId = $segmentId;
    }
}

class Google_Service_QPXExpress_SliceInfo extends Google_Collection
{
    public $duration;
    public $kind;
    protected $collection_key = 'segment';
    protected $internal_gapi_mappings = [];
    protected $segmentType = 'Google_Service_QPXExpress_SegmentInfo';
    protected $segmentDataType = 'array';

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setSegment($segment)
    {
        $this->segment = $segment;
    }

    public function getSegment()
    {
        return $this->segment;
    }
}

class Google_Service_QPXExpress_SliceInput extends Google_Collection
{
    public $alliance;
    public $date;
    public $destination;
    public $kind;
    public $maxConnectionDuration;
    public $maxStops;
    public $origin;
    public $permittedCarrier;
    public $preferredCabin;
    public $prohibitedCarrier;
    protected $collection_key = 'prohibitedCarrier';
    protected $internal_gapi_mappings = [];
    protected $permittedDepartureTimeType = 'Google_Service_QPXExpress_TimeOfDayRange';
    protected $permittedDepartureTimeDataType = '';

    public function getAlliance()
    {
        return $this->alliance;
    }

    public function setAlliance($alliance)
    {
        $this->alliance = $alliance;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getMaxConnectionDuration()
    {
        return $this->maxConnectionDuration;
    }

    public function setMaxConnectionDuration($maxConnectionDuration)
    {
        $this->maxConnectionDuration = $maxConnectionDuration;
    }

    public function getMaxStops()
    {
        return $this->maxStops;
    }

    public function setMaxStops($maxStops)
    {
        $this->maxStops = $maxStops;
    }

    public function getOrigin()
    {
        return $this->origin;
    }

    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    public function getPermittedCarrier()
    {
        return $this->permittedCarrier;
    }

    public function setPermittedCarrier($permittedCarrier)
    {
        $this->permittedCarrier = $permittedCarrier;
    }

    public function setPermittedDepartureTime(Google_Service_QPXExpress_TimeOfDayRange $permittedDepartureTime)
    {
        $this->permittedDepartureTime = $permittedDepartureTime;
    }

    public function getPermittedDepartureTime()
    {
        return $this->permittedDepartureTime;
    }

    public function getPreferredCabin()
    {
        return $this->preferredCabin;
    }

    public function setPreferredCabin($preferredCabin)
    {
        $this->preferredCabin = $preferredCabin;
    }

    public function getProhibitedCarrier()
    {
        return $this->prohibitedCarrier;
    }

    public function setProhibitedCarrier($prohibitedCarrier)
    {
        $this->prohibitedCarrier = $prohibitedCarrier;
    }
}

class Google_Service_QPXExpress_TaxData extends Google_Model
{
    public $id;
    public $kind;
    public $name;
    protected $internal_gapi_mappings = [];

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
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

class Google_Service_QPXExpress_TaxInfo extends Google_Model
{
    public $chargeType;
    public $code;
    public $country;
    public $id;
    public $kind;
    public $salePrice;
    protected $internal_gapi_mappings = [];

    public function getChargeType()
    {
        return $this->chargeType;
    }

    public function setChargeType($chargeType)
    {
        $this->chargeType = $chargeType;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getSalePrice()
    {
        return $this->salePrice;
    }

    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;
    }
}

class Google_Service_QPXExpress_TimeOfDayRange extends Google_Model
{
    public $earliestTime;
    public $kind;
    public $latestTime;
    protected $internal_gapi_mappings = [];

    public function getEarliestTime()
    {
        return $this->earliestTime;
    }

    public function setEarliestTime($earliestTime)
    {
        $this->earliestTime = $earliestTime;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getLatestTime()
    {
        return $this->latestTime;
    }

    public function setLatestTime($latestTime)
    {
        $this->latestTime = $latestTime;
    }
}

class Google_Service_QPXExpress_TripOption extends Google_Collection
{
    public $id;
    public $kind;
    public $saleTotal;
    protected $collection_key = 'slice';
    protected $internal_gapi_mappings = [];
    protected $pricingType = 'Google_Service_QPXExpress_PricingInfo';
    protected $pricingDataType = 'array';
    protected $sliceType = 'Google_Service_QPXExpress_SliceInfo';
    protected $sliceDataType = 'array';

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setPricing($pricing)
    {
        $this->pricing = $pricing;
    }

    public function getPricing()
    {
        return $this->pricing;
    }

    public function getSaleTotal()
    {
        return $this->saleTotal;
    }

    public function setSaleTotal($saleTotal)
    {
        $this->saleTotal = $saleTotal;
    }

    public function setSlice($slice)
    {
        $this->slice = $slice;
    }

    public function getSlice()
    {
        return $this->slice;
    }
}

class Google_Service_QPXExpress_TripOptionsRequest extends Google_Collection
{
    public $maxPrice;
    public $refundable;
    public $saleCountry;
    public $solutions;
    protected $collection_key = 'slice';
    protected $internal_gapi_mappings = [];
    protected $passengersType = 'Google_Service_QPXExpress_PassengerCounts';
    protected $passengersDataType = '';
    protected $sliceType = 'Google_Service_QPXExpress_SliceInput';
    protected $sliceDataType = 'array';

    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;
    }

    public function setPassengers(Google_Service_QPXExpress_PassengerCounts $passengers)
    {
        $this->passengers = $passengers;
    }

    public function getPassengers()
    {
        return $this->passengers;
    }

    public function getRefundable()
    {
        return $this->refundable;
    }

    public function setRefundable($refundable)
    {
        $this->refundable = $refundable;
    }

    public function getSaleCountry()
    {
        return $this->saleCountry;
    }

    public function setSaleCountry($saleCountry)
    {
        $this->saleCountry = $saleCountry;
    }

    public function setSlice($slice)
    {
        $this->slice = $slice;
    }

    public function getSlice()
    {
        return $this->slice;
    }

    public function getSolutions()
    {
        return $this->solutions;
    }

    public function setSolutions($solutions)
    {
        $this->solutions = $solutions;
    }
}

class Google_Service_QPXExpress_TripOptionsResponse extends Google_Collection
{
    public $kind;
    public $requestId;
    protected $collection_key = 'tripOption';
    protected $internal_gapi_mappings = [];
    protected $dataType = 'Google_Service_QPXExpress_Data';
    protected $dataDataType = '';
    protected $tripOptionType = 'Google_Service_QPXExpress_TripOption';
    protected $tripOptionDataType = 'array';


    public function setData(Google_Service_QPXExpress_Data $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    public function setTripOption($tripOption)
    {
        $this->tripOption = $tripOption;
    }

    public function getTripOption()
    {
        return $this->tripOption;
    }
}

class Google_Service_QPXExpress_TripsSearchRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $requestType = 'Google_Service_QPXExpress_TripOptionsRequest';
    protected $requestDataType = '';


    public function setRequest(Google_Service_QPXExpress_TripOptionsRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest()
    {
        return $this->request;
    }
}

class Google_Service_QPXExpress_TripsSearchResponse extends Google_Model
{
    public $kind;
    protected $internal_gapi_mappings = [];
    protected $tripsType = 'Google_Service_QPXExpress_TripOptionsResponse';
    protected $tripsDataType = '';

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setTrips(Google_Service_QPXExpress_TripOptionsResponse $trips)
    {
        $this->trips = $trips;
    }

    public function getTrips()
    {
        return $this->trips;
    }
}
