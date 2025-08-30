<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// ***************************************************************************
// Please note that this example is for PHP version 8 and above
// ***************************************************************************

// Constants for the UK Vehicle Data API
define('UKVD_ENDPOINT', 'https://uk.api.vehicledataglobal.com/r2/lookup');

// Process the command line arguments
// Since PHP does not have a direct equivalent of C#'s args, we use $argv for command line arguments.
$apiKey = '';
$packageName = 'VehicleDetails';
$vrm = ''; // Placeholder for vehicle registration mark, to be assigned a value later.


// Encode the query parameters
$queryParams = http_build_query([
    'packageName' => $packageName,
    'vrm' => $vrm,
]);

// Create the full URL with the query string
$fullUrl = UKVD_ENDPOINT . '?' . $queryParams;

// Create a stream context for the HTTP request
$options = [
    'http' => [
        'header'  => "Authorization: Bearer $apiKey",
        'method'  => 'GET'
    ]
];
$context = stream_context_create($options);

// Making the HTTP request to the UK Vehicle Data API with query parameters
$response = file_get_contents($fullUrl, false, $context);

// Check if the request was successful
if ($response === FALSE) {
    die('Error making the request');
}

// Decode the JSON response
$responseData = json_decode($response, true);

// Check if the API call was successful
if (!$responseData || $responseData['ResponseInformation']['IsSuccessStatusCode'] !== true) {
    die('Error in API response');
}

print($responseData['Results']['VehicleDetails']['VehicleIdentification']['DvlaMake']);
print($responseData['Results']['VehicleDetails']['VehicleIdentification']['DvlaModel']);

// ***************************************************************************
// This is the model class for the response from the API call
// The model contains all the data based on the specific package given
// If you change the package data on your control panel, you will need to
// regenerate this model class.
// ***************************************************************************

class UkvdResponse
{
    public function __construct(
        public RequestInformation $requestInformation,
        public ResponseInformation $responseInformation,
        public BillingInformation $billingInformation,
        public LookupResults $results
    ) {}
}

class RequestInformation
{
    public function __construct(
        public string $packageName, // Package Name : The name of the package that was used to make the request.
        public string $searchTerm, // Search Term : The value used to do the look up.
        public string $searchType, // Search Type : Which data item that is being looked up.
        public string $requestIp // Request IP Address : The IP address where the request was made from.
    ) {}
}
class ResponseInformation
{
    public function __construct(
        public int $statusCode, // Status Code Number : The status of the response
        public string $statusMessage, // Status Code Text : The status of the response as text
        public bool $isSuccessStatusCode, // Is Status Code Successful : This returns whether the status of the response indicates that the request was successful.
        public int $queryTimeMs, // Query Time : This is the amount of time the query took to execute in milliseconds
        public string $responseId // Response Identifier : This is the unique identifier of the report. Use this when referring to any issues with the results with support.
    ) {}
}
class BillingInformation
{
    public function __construct(
        public ?string $billingTransactionId, // Billing Transaction Id : This is the unique reference to the billing transaction for this lookup. If missing this transaction did not require any billing to take place.
        public int $accountType, // Account Type : This is the current type of account that defines how the account is billed.
        public ?float $accountBalance, // Account Balance : The current balance of the account if this is a pay as a go account.
        public ?float $transactionCost, // Transaction Cost : The total cost of the transaction if the transaction required billing.
        public int $billingResult, // Billing Result : Whether the account was billed
        public string $billingResultMessage, // Billing Result Text : Whether the account was billed in text format
        public ?float $refundAmount, // Refund Amount : The amount that was required to be refunded depending on what package data was able to be returned and how the package was set up.
        public ?int $refundResult, // Refund Result : Whether the transaction had a refund
        public string $refundResultMessage // Refund Result Text : Whether the transaction had a refund in text format
    ) {}
}

class LookupResults
{
    public function __construct(
        public VehicleCodes $vehicleCodes,
        public VehicleDetails $vehicleDetails,
        public ModelDetails $modelDetails
    ) {}
}

class VehicleCodes
{
    public function __construct(
        public string $uvc // UVC : Universal Vehicle Code. UK Vehicle Data internal vehicle model code. Code is unique to each vehicle model.
    ) {}
}
class VehicleDetails
{
    public function __construct(
        public ?VehicleDetails_VehicleIdentificationSection $vehicleIdentification, // Vehicle Identification : DVLA Vehicle Identification details.
        public ?VehicleDetails_VehicleStatusSection $vehicleStatus, // Vehicle Status : Vehicle status details (such as import, export and scrapped status).
        public ?VehicleDetails_VehicleHistorySection $vehicleHistory, // Vehicle History : Vehicle status details (such as import, export and scrapped status).
        public ?VehicleDetails_DvlaTechnicalDetailsSection $dvlaTechnicalDetails, // DVLA Technical Details : Additional technical details held by the DVLA on this vehicle.
        public int $statusCode, // Status Code : API Response Status Code.
        public string $statusMessage, // Status Message : API Response Status Message. Human description describing the API response.
        public int $documentVersion // Document Version : Data Source Versioning.
    ) {}
}
class VehicleDetails_VehicleIdentificationSection
{
    public function __construct(
        public string $vrm, // VRM : The Vehicle Registration Mark (VRM).
        public string $vin, // VIN : The Vehicle Identification Number (VIN) - sometimes referred to as the Chassis Number.
        public string $vinLast5, // VIN Last 5 : The last 5 digits of the Vehicle Identification Number (VIN).
        public string $dvlaMake, // DVLA Make : Vehicle make (eg: Ford, Volkswagen, Audi)
        public string $dvlaModel, // DVLA Model : Vehicle model (eg: Galaxy, Sharan, R8)
        public string $dvlaWheelPlan, // DVLA Wheel Plan : Vehicle wheel plan identifier (eg: 2 AXLE RIGID BODY)
        public ?DateTime $dateFirstRegisteredInUk, // Date First Registered in UK : Date/time the vehicle was first registered in the UK.
        public ?DateTime $dateFirstRegistered, // Date First Registered : Date/time the vehicle was first registered.
        public ?DateTime $dateOfManufacture, // Date Of Manufacture : Date/time the vehicle was manufactured.
        public ?int $yearOfManufacture, // Year Of Manufacture : Year the vehicle was manufactured.
        public bool $vehicleUsedBeforeFirstRegistration, // Vehicle Used Before First Registration : Indicates whether or not the vehicle used before first registration.
        public string $engineNumber, // Engine Number : The vehicle's Engine Number.
        public string $previousVrmNi, // Previous VRM NI : The vehicle's Northern Ireland plate - if the vehicle previously had a Northern Ireland VRM.
        public string $dvlaBodyType, // DVLA Body Type : The DVLA Body Type.
        public string $dvlaFuelType // DVLA Fuel Type : The DVLA Fuel Type.
    ) {}
}
class VehicleDetails_VehicleStatusSection
{
    public function __construct(
        public bool $isImported, // Is Imported : Indicates whether or not vehicle was imported from within the EU (European Union).
        public bool $isImportedFromNi, // Is Imported From NI : Indicates whether or not vehicle was imported from Northern Ireland.
        public bool $isImportedFromOutsideEu, // Is Imported From Non EU : Indicates whether or not vehicle was imported from outside the EU (European Union).
        public ?DateTime $dateImported, // Date Imported : Date/time the vehicle was imported.
        public bool $certificateOfDestructionIssued, // Certificate of Destruction Issued : Indicates whether or not a Certificate of Destruction been issued for this vehicle.
        public bool $isExported, // Is Exported : Indicates whether or not the vehicle is recorded as having been exported.
        public ?DateTime $dateExported, // Date Exported : Date and time the vehicle was exported.
        public bool $isScrapped, // Is Scrapped : Indicates whether or not the vehicle been recorded as scrapped.
        public bool $isUnscrapped, // Is Unscrapped : Indicates whether or not the vehicle has been recorded as un-scrapped.
        public ?DateTime $dateScrapped, // Date Scrapped : Date and time the vehicle was recorded as scrapped.
        public ?bool $dvlaCherishedTransferMarker, // DVLA Cherished Transfer Marker : Indicates whether or not the vehicle has been subject to cherished transfers, as disclosed by the DVLA
        public ?VehicleDetails_VehicleStatusSection_VehicleExciseDutyDetailsSection $vehicleExciseDutyDetails // Vehicle Excise Duty Details : Vehicle Excise Duty Details (Tax & CO2 ratings & values).
    ) {}
}
class VehicleDetails_VehicleStatusSection_VehicleExciseDutyDetailsSection
{
    public function __construct(
        public ?int $dvlaCo2, // DVLA CO2 : The CO2 value, unchecked direct from the DVLA.
        public string $dvlaCo2Band, // DVLA CO2 Band : The CO2 band, unchecked direct from the DVLA.
        public string $dvlaBand, // DVLA Band : DVLA band details.
        public ?VehicleDetails_VehicleStatusSection_VehicleExciseDutyDetailsSection_VedRateSection $vedRate // Ved Rate : Vehicle road tax charge details. Object contains information regarding the First Year, Premium Vehicle and Standard vehicle road taxes.
    ) {}
}
class VehicleDetails_VehicleStatusSection_VehicleExciseDutyDetailsSection_VedRateSection
{
    public function __construct(
        public ?VehicleDetails_VehicleStatusSection_VehicleExciseDutyDetailsSection_VedRateSection_RateValuePair $firstYear, // First Year : Vehicle road tax charge for the first year. Object contains 6 & 12 month values.
        public ?VehicleDetails_VehicleStatusSection_VehicleExciseDutyDetailsSection_VedRateSection_RateValuePair $premiumVehicle, // Premium Vehicle : Vehicle Road Tax charge for Premium rated vehicles OTR above £40,000. Object contains 6 & 12 month values.
        public ?VehicleDetails_VehicleStatusSection_VehicleExciseDutyDetailsSection_VedRateSection_RateValuePair $standard // Standard : Standard vehicle road tax. Object contains 6 & 12 month values.
    ) {}
}
class VehicleDetails_VehicleStatusSection_VehicleExciseDutyDetailsSection_VedRateSection_RateValuePair
{
    public function __construct(
        public ?float $sixMonths, // Six Months : Vehicle road tax charge for 6 months.
        public ?float $twelveMonths // Twelve Months : Vehicle road tax charge for 12 months.
    ) {}
}
class VehicleDetails_VehicleHistorySection
{
    public function __construct(
        public ?VehicleDetails_VehicleHistorySection_ColourDetailsSection $colourDetails, // Colour Details : Current & Previous vehicle colour details.
        public array $keeperChangeList, // Keeper Change List : List of Keeper changes.
        public array $plateChangeList, // Plate Change List : List of registration plate changes.
        public array $v5cCertificateList // V5C Certificate Issue Date List : A list of V5C Certificate issued dates.
    ) {}
}
class VehicleDetails_VehicleHistorySection_ColourDetailsSection
{
    public function __construct(
        public string $currentColour, // Current Colour : The vehicle's currently recorded colour.
        public ?int $numberOfColourChanges, // Number Of Colour Changes : Number of colour changes recorded for this vehicle.
        public string $originalColour, // Original Colour : The vehicle's original colour.
        public string $previousColour, // Previous Colour : The vehicle's previous colour.
        public ?DateTime $latestColourChangeDate // Latest Colour Change Date : The latest date when the vehicle's colour was recorded as having been changed.
    ) {}
}
class VehicleDetails_VehicleHistorySection_KeeperChangeItem
{
    public function __construct(
        public ?int $numberOfPreviousKeepers, // Number Of Previous Keepers : The number of previous keepers for this vehicle.
        public ?DateTime $keeperStartDate, // Keeper Start Date : Date when the current keeper started.
        public ?DateTime $previousKeeperDisposalDate // Previous Keeper Disposal Date : Date when the previous keeper disposed of the vehicle
    ) {}
}
class VehicleDetails_VehicleHistorySection_PlateChangeItem
{
    public function __construct(
        public string $currentVrm, // Current VRM : The vehicle's current VRM.
        public string $transferType, // Transfer Type : The type of plate transfer.
        public ?DateTime $dateOfReceipt, // Receipt : Date of receipt for the plate transfer.
        public string $previousVrm, // Previous VRM : The previous VRM, before the new (current VRM) was assigned.
        public ?DateTime $dateOfTransaction // Date Of Transaction : Date of the plate transfer transaction.
    ) {}
}
class VehicleDetails_VehicleHistorySection_V5cCertificateItem
{
    public function __construct(
        public DateTime $issueDate // Issue Date : Issue date of certificate.
    ) {}
}
class VehicleDetails_DvlaTechnicalDetailsSection
{
    public function __construct(
        public ?int $numberOfSeats, // Number Of Seats : Number of seats inside the vehicle, including the drivers seat
        public ?int $engineCapacityCc, // Engine Capacity : Engine Capacity as disclosed by the DVLA
        public ?int $grossWeightKg, // Gross Weight : Gross Vehicle Weight, as disclosed by the DVLA
        public ?int $maxNetPowerKw, // Max Net Power : Maximum Net Power of the vehicle, expressed in kW, as disclosed by the DVLA
        public ?int $massInServiceKg, // Mass In Service : Mass In Service, as disclosed by the DVLA
        public ?float $powerToWeightRatio, // Power To Weight Ratio : Power to Weight Ratio, as disclosed by the DVLA
        public ?int $maxPermissibleBrakedTrailerMassKg, // Max Permissible Braked Trailer Mass : Maximum technically permissible mass of a braked trailer.
        public ?int $maxPermissibleUnbrakedTrailerMassKg // Max Permissible Unbraked Trailer Mass : Maximum technically permissible mass of an unbraked trailer.
    ) {}
}
class ModelDetails
{
    public function __construct(
        public ?ModelDetails_ModelIdentificationSection $modelIdentification, // Model Identification : Object containing model identification data.
        public ?ModelDetails_ModelClassificationSection $modelClassification, // Model Classification : Object containing model classification data.
        public ?ModelDetails_AdditionalInformationSection $additionalInformation, // Additional Information : Object containing additional information data.
        public ?ModelDetails_BodyDetailsSection $bodyDetails, // Body Details : Object containing vehicle body details.
        public ?ModelDetails_DimensionsSection $dimensions, // Dimensions : Object containing vehicle dimensions data.
        public ?ModelDetails_WeightsSection $weights, // Weights : Object containing vehicle weights Data.
        public ?ModelDetails_PowertrainSection $powertrain, // Power Train : Object containing vehicle power source data.
        public ?ModelDetails_SafetySection $safety, // Safety : Object containing safety related data.
        public ?ModelDetails_EmissionsSection $emissions, // Emissions : Object containing vehicle emissions data.
        public ?ModelDetails_PerformanceSection $performance, // Performance : Object containing vehicle performance data.
        public int $statusCode, // Status Code : API Response Status Code.
        public string $statusMessage, // Status Message : API Response Status Message. Human description describing the API response.
        public int $documentVersion // Document Version : Data Source Versioning.
    ) {}
}
class ModelDetails_ModelIdentificationSection
{
    public function __construct(
        public string $make, // Make : Vehicle make (eg: Ford, Volkswagen, Audi).
        public string $range, // Range : Vehicle range (eg: C-Max, Focus).
        public string $model, // Model : Vehicle model (eg: C-Max Style TDCi, Focus LX).
        public string $modelVariant, // Model Variant : This is the model variant,  Will be null if we have no variants
        public string $series, // Series : The model series assigned by the manufacturer (eg: C214, E46).
        public ?int $mark, // Mark : eg: VW Golf Mark 2 where a manufacturer uses it, if they do not, it will always be 1.
        public ?DateTime $startDate, // Start Date : Manufacturer's start date for this vehicle Make, Model, Series.
        public ?DateTime $endDate, // End Date : Manufacturer's end date for this vehicle Make, Model, Series.
        public string $countryOfOrigin, // Country of Origin : Country where the vehicle was manufactured.
        public ?int $variantCode // Variant Code : Code number identifying the vehicle variant (model variation). Will be null if we have no variants.
    ) {}
}
class ModelDetails_ModelClassificationSection
{
    public function __construct(
        public string $typeApprovalCategory, // Type Approval Category : The type approval category code assigned to this type of vehicle.
        public string $marketSectorCode, // Market Sector Code : The market sector code assigned to this type of vehicle.
        public string $vehicleClass, // Vehicle Class : The class of vehicle (eg: Car).
        public string $taxationClass // Taxation Class : Taxation class is determined from type approval category, possible results are Car, PVC, LCV, HCV or Quad.
    ) {}
}
class ModelDetails_AdditionalInformationSection
{
    public function __construct(
        public ?ModelDetails_AdditionalInformationSection_VehicleWarrantyInformationSection $vehicleWarrantyInformation, // Vehicle Warranty Information : Object containing Vehicle Warranty Information.
        public array $subscriptionOptionList, // Subscription Options : List containing Subscription Options available for this vehicle.
        public ?ModelDetails_AdditionalInformationSection_SoftwareSection $software // Software : Object containing vehicle software details.
    ) {}
}
class ModelDetails_AdditionalInformationSection_VehicleWarrantyInformationSection
{
    public function __construct(
        public ?int $manufacturerWarrantyMiles, // Manufacturer Warranty Miles : Manufacturer warranty from new, in miles (ie: 30,000 miles warranty).
        public ?int $manufacturerWarrantyMonths // Manufacturer Warranty Months : Manufacturer warranty from new, in months (ie: 60 months warranty).
    ) {}
}
class ModelDetails_AdditionalInformationSection_SubscriptionOptionItem
{
    public function __construct(
        public string $name // Subscription Name : Name of the subscription service
    ) {}
}
class ModelDetails_AdditionalInformationSection_SoftwareSection
{
    public function __construct(
        public ?bool $supportsOverTheAirSoftwareUpdate // Supports Over The Air Software Update : Indicates whether or not the vehicle supports over the air software updates.
    ) {}
}
class ModelDetails_BodyDetailsSection
{
    public function __construct(
        public string $bodyShape, // Body Shape : Applicable to commercial vehicles to confirm the body shape.
        public string $bodyStyle, // Body Style : The body shape of this vehicle (eg: Saloon, Hatchback, MPV).
        public string $cabType, // Cab Type : Applicable to commercial vehicles (eg: Luton Van).
        public string $platformName, // Platform Name : The name of the platform the vehicle is based on.
        public ?bool $platformIsSharedAcrossModels, // Platform Is Shared Across Models : Indicates whether or not the platform is shared across multiple models.
        public string $wheelbaseType, // Wheelbase Type : The wheelbase type for this vehicle (eg: Short Wheelbase, Long Wheelbase).
        public ?int $numberOfAxles, // Number Of Axles : The number of axles on this vehicle.
        public ?int $numberOfDoors, // Number Of Doors : The number of doors on this vehicle.
        public ?int $numberOfSeats, // Number Of Seats : Number of seats for this vehicle.
        public ?float $payloadVolumeLitres, // Payload Volume : Applicable to commercial vehicle. The volume of the load area.
        public ?int $fuelTankCapacityLitres // Fuel Tank Capacity : Fuel tank capacity expressed in litres.
    ) {}
}
class ModelDetails_DimensionsSection
{
    public function __construct(
        public ?int $heightMm, // Height : Overall height of the vehicle, including roof-bars or aerial.
        public ?int $lengthMm, // Length : Overall length of the vehicle (bumper to bumper). Does not include any after market items, which may extended the length of the vehicle.
        public ?int $widthMm, // Width : Overall width, including the wing mirrors.
        public ?int $wheelbaseLengthMm, // Wheelbase Length : Wheelbase length of the vehicle expressed in mm.
        public ?int $internalLoadLengthMm // Internal Load Length : Applies to commercial vehicle. Length from the bulkhead to the rear of the load area expressed in mm.
    ) {}
}
class ModelDetails_WeightsSection
{
    public function __construct(
        public ?int $kerbWeightKg, // Kerb Weight : The weight of the vehicle, including a full tank of fuel and all standard equipment.
        public ?int $grossTrainWeightKg, // Gross Train Weight : The maximum permissible weight the vehicle, including any trailer.
        public ?int $unladenWeightKg, // Unladen Weight : The weight of the vehicle, including all standard equipment.
        public ?int $payloadWeightKg, // Payload Weight : The difference between the Kerb Weight and the Gross Weight.
        public ?int $grossVehicleWeightKg, // Gross Vehicle Weight : The total weight of the vehicle including the Kerb Weight and Payload Weight.
        public ?int $grossCombinedWeightKg // Gross Combined Weight : The total combined weight: Fully laden vehicle and fully laden trailer added together.
    ) {}
}
class ModelDetails_PowertrainSection
{
    public function __construct(
        public string $powertrainType, // Powertrain Type : Vehicle powertrain type (eg; ICE, REEV, BEV, PHEV).
        public string $fuelType, // Fuel Type : Fuel type for this vehicle (eg: DIESEL, PETROL).
        public ?ModelDetails_PowertrainSection_IceDetailsSection $iceDetails, // ICE Details : Object containing Internal Combustion Engine details Data.
        public ?ModelDetails_PowertrainSection_ElectricVehicleDetails $evDetails, // EV Details : Object containing Electric Vehicle details Data.
        public ?ModelDetails_PowertrainSection_TransmissionSection $transmission // Transmission : Object containing vehicle transmission data.
    ) {}
}
class ModelDetails_PowertrainSection_IceDetailsSection
{
    public function __construct(
        public string $engineFamily, // Engine Family : A family is a basic unit used to identify a family/group of engines for certification and compliance purposes.
        public string $engineLocation, // Engine Location : The relative location of the engine within the vehicle.
        public string $engineDescription, // Engine Description : Describes the type of engine.
        public string $engineManufacturer, // Engine Manufacturer : The manufacturer of the engine.
        public string $fuelDelivery, // Fuel Delivery : The fuel delivery mechanism used in the engine (eg: Injection).
        public string $aspiration, // Aspiration : The type of aspiration mechanism used in the engine (eg: Turbo charged, naturally aspirated).
        public string $cylinderArrangement, // Cylinder Arrangement : The arrangement of the cylinders within the engine (eg: Inline, Vee, W, Rotary).
        public ?int $numberOfCylinders, // Number of Cylinders : The number of cylinders within the engine.
        public ?int $boreMm, // Bore : Diameter of cylinder.
        public ?int $strokeMm, // Stroke : Length of the swept volume of the cylinder expressed in mm.  This is the distance the piston travels between top and bottom dead centre of the stroke.
        public string $valveGear, // Valve Gear : Describes the valve actuation mechanism used in the engine (eg: DOHC, OHC).
        public ?int $valvesPerCylinder, // Valves per Cylinder : The number of valves per cylinder.
        public ?int $engineCapacityCc, // Engine Capacity : The cubic capacity of the engine.
        public ?float $engineCapacityLitres // Engine Capacity : The cubic capacity in litres of the engine rounded up or down. Based on the Engine Capacity CC.
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails
{
    public function __construct(
        public ?ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection $technicalDetails, // Technical Details : An object containing technical details for the vehicle.
        public ?ModelDetails_PowertrainSection_ElectricVehicleDetails_PerformanceSection $performance, // Performance : An object containing performance details for the vehicle.
        public int $documentVersion // Document Version : Data Source Versioning.
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection
{
    public function __construct(
        public string $powertrainType, // Powertrain Type : Powertrain types (eg: ICE, REEV, BEV, PHEV).
        public bool $isTeslaSuperchargerCompatible, // Tesla Supercharger Compatible : Indicates whether or not the hardware is compatible with Tesla Superchargers.
        public int $numberOfChargePorts, // Number Of Charge Ports : Number of charge ports available on the vehicle.
        public ?ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_TeslaSuperchargingSection $teslaSupercharging, // Tesla Supercharging : Object describing Tesla Supercharging details.
        public array $chargeCableDetailsList, // Charge Cable Details : List of charge cable details for the vehicle.
        public array $chargePortDetailsList, // Charge Port Details List : List containing Charge Port details.
        public array $batteryDetailsList, // Battery Details List : List containing Battery details.
        public array $motorDetailsList, // Motor Details List : List containing Motor details.
        public array $transmissionDetailsList // Transmission Details List : List containing Transmission details.
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_TeslaSuperchargingSection
{
    public function __construct(
        public ?ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_TeslaSuperchargingSection_SuperchargerVersionDetails $version1, // Version 1 : Object describing Tesla Supercharger Version 1.
        public ?ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_TeslaSuperchargingSection_SuperchargerVersionDetails $version2, // Version 2 : Object describing Tesla Supercharger Version 2.
        public ?ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_TeslaSuperchargingSection_SuperchargerVersionDetails $version3 // Version 3 : Object describing Tesla Supercharger Version 3.
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_TeslaSuperchargingSection_SuperchargerVersionDetails
{
    public function __construct(
        public ?bool $isCompatibleWithVehicle, // Is Compatible With Vehicle : This supercharging version is compatible with the vehicle.
        public ?int $maxChargeKw, // Max Charge : The maximum charge in Kilowatts for this supercharger version
        public ?bool $requiresCcsAdaptor, // Requires Ccs Adaptor : CCS (Combined Charging System) Does this supercharger version require a CCS Adaptor?
        public ?int $averageChargeTime10To80Percent // Avg Charge Time 10-80% : The average time taken using this supercharger version from 10% to 80%
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_ChargeCableDetailsItem
{
    public function __construct(
        public bool $isSuppliedAsStandard, // Is Supplied As Standard : Indicates whether or not this charge cable is supplied as standard (rather than being an optional extra).
        public string $description // Description : Charge cable description.
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_ChargePortDetailsItem
{
    public function __construct(
        public string $portType, // Port Type : The type of port for this charge port item.
        public string $locationOnVehicle, // Location On Vehicle : The location of this charge port on vehicle.
        public ?float $maxChargePowerKw, // Max Charge Power : The maximum capacity of the onboard charger for this charge port item.
        public bool $isStandardChargePort, // Is Standard Charge Port : Is this a standard charge port?
        public ?ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_ChargePortDetailsItem_ChargeTimesSection $chargeTimes // Charge Times : Object containing details for charge times.
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_ChargePortDetailsItem_ChargeTimesSection
{
    public function __construct(
        public array $averageChargeTimes10To80Percent // Avg Charge Time 10-80% : List containing details for average charge times
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_ChargePortDetailsItem_ChargeTimesSection_ChargeTimeItem
{
    public function __construct(
        public ?float $chargePortKw, // Charge Port Kw : The rate of power delivery.
        public ?int $timeInMinutes // Time In Minutes : The time in minutes to go from 10% to 80%.
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_BatteryDetailsItem
{
    public function __construct(
        public ?float $totalCapacityKwh, // Total Capacity : The total (design maximum) capacity of the battery in Kilowatts/per hour.
        public ?float $usableCapacityKwh, // Usable Capacity : The usable capacity of the battery in Kilowatts/per hour.
        public string $description, // Description : Description of the battery.
        public string $chemistry, // Chemistry : Battery chemistry type (eg: Lithium-ion).
        public ?int $voltage, // Voltage : The voltage of the battery.
        public string $locationOnVehicle, // Location On Vehicle : Battery location on the vehicle.
        public ?int $manufacturerWarrantyMonths, // Manufacturer Warranty Months : The number of months (from new) where the battery is covered under a manufacturers warranty.
        public ?int $manufacturerWarrantyMiles // Manufacturer Warranty Miles : The number of miles (from new) where the battery is covered under a manufacturers warranty.
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_MotorDetailsItem
{
    public function __construct(
        public string $manufacturer, // Manufacturer : The manufacturer of the motor.
        public string $model, // Model : The model of the motor.
        public string $motorType, // Motor Type : Type of motor (eg: AC induction/asynchronous).
        public ?int $powerKw, // Power Kw : Total power in killowatts
        public ?int $maxPowerRpm, // Max Power Rpm : The maximum power described in RPM (Revolutions Per Minute).
        public ?int $maxTorqueNm, // Max Torque Nm : The maximum power described in Torque Nm (Torque Newton Metres).
        public ?bool $supportsRegenerativeBraking, // Supports Regenerative Braking : Supports recovery of kinetic energy to the battery whilst the vehicle is braking.
        public string $motorLocation, // Motor Location : The location of the motor.
        public string $axleDrivenByMotor, // Axle Driven By Motor : Identifies which axle is driven by this motor.
        public string $additionalInformation // Additional Information : Additional information for this motor.
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails_TechnicalDetailsSection_TransmissionDetailsItem
{
    public function __construct(
        public string $transmissionType, // Transmission Type : The transmission type (eg: Automatic, CVT, Manual).
        public ?int $numberOfGears, // Number Of Gears : The number of forward gears.
        public string $transmissionLocation // Transmission Location : The location of the transmission.
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails_PerformanceSection
{
    public function __construct(
        public ?int $maxChargeInputPowerKw, // Max Charge Input Power : Maximum input charge power the vehicle can accept in Kw.
        public ?int $whMile, // Wh Mile : The amount of energy used to travel one mile.
        public ?ModelDetails_PowertrainSection_ElectricVehicleDetails_PerformanceSection_RangeFiguresSection $rangeFigures // Range Figures : Object containing vehicle range figures.
    ) {}
}
class ModelDetails_PowertrainSection_ElectricVehicleDetails_PerformanceSection_RangeFiguresSection
{
    public function __construct(
        public ?int $realRangeMiles, // Real Range Miles : Vehicle range (in miles) tested under real driving conditions.
        public ?int $realRangeKm, // Real Range Km : Vehicle range (in kilometers) tested under real driving conditions.
        public ?int $milesPerChargeHour, // Miles Per Charge Hour : The estimated vehicle range gained hour of charge.
        public ?int $zeroEmissionMiles // Zero Emission Miles : How many miles the vehicle can travel producing zero emissions.
    ) {}
}
class ModelDetails_PowertrainSection_TransmissionSection
{
    public function __construct(
        public string $transmissionType, // Transmission Type : The transmission type (eg: Automatic, CVT, Manual).
        public ?int $numberOfGears, // Number Of Gears : The number of forward gears.
        public string $driveType, // Drive Type : Number of wheels x number of driven wheels (eg: 4x4, 4x2).
        public string $drivingAxle // Driving Axle : Which axle the motor is delivering power to.
    ) {}
}
class ModelDetails_SafetySection
{
    public function __construct(
        public ?ModelDetails_SafetySection_EuroNcapSection $euroNcap // Euro Ncap : Object containing Vehicle Euro NCAP data.
    ) {}
}
class ModelDetails_SafetySection_EuroNcapSection
{
    public function __construct(
        public ?int $ncapStarRating, // NCAP Star Rating : NCAP (The European New Car Assessment Programme) The safety rating as assigned by NCAP.
        public ?int $ncapChildPercent, // NCAP Child Percent : The NCAP percentage - rated level of protection for a child occupant, in the event of an impact.
        public ?int $ncapAdultPercent, // NCAP Adult Percent : The NCAP percentage - rated level of protection for a adult occupant, in the event of an impact.
        public ?int $ncapPedestrianPercent, // NCAP Pedestrian Percent : The NCAP percentage - rated level of protection for a pedestrian, in the event of an impact.
        public ?int $ncapSafetyAssistPercent // NCAP Safety Assist Percent : The NCAP percentage - rated level of the vehicles braking and warning systems.
    ) {}
}
class ModelDetails_EmissionsSection
{
    public function __construct(
        public string $euroStatus, // Euro Status : European emission standard. Value indicates the emission levels in line with the age of the vehicle.
        public ?int $manufacturerCo2, // Manufacturer CO2 : The manufacturer's claimed level of CO2 emissions.
        public ?ModelDetails_EmissionsSection_SoundLevelsSection $soundLevels // Sound Levels Section : Object containing Sound Levels Data.
    ) {}
}
class ModelDetails_EmissionsSection_SoundLevelsSection
{
    public function __construct(
        public ?int $stationaryDb, // Stationary : Sound level, in decibels, measured whilst vehicle is stationary.
        public ?int $engineSpeedRpm, // Engine Speed : Engine speed at which sound measurements are taken.
        public ?int $driveByDb // Drive By Db : Sound level, in decibels, measured for the drive by test.
    ) {}
}
class ModelDetails_PerformanceSection
{
    public function __construct(
        public ?float $dragCoefficient, // Drag Coefficient : A dimensionless quantity that is used to quantify the drag or resistance of an object in a fluid environment. Used for aerodynamic drag calculation in the case of a road vehicle.
        public ?ModelDetails_PerformanceSection_TorqueSection $torque, // Torque : Object containing torque data.
        public ?ModelDetails_PerformanceSection_PowerSection $power, // Power : Object containing power data.
        public ?ModelDetails_PerformanceSection_StatisticsSection $statistics, // Statistics : Object containing statistics data.
        public ?ModelDetails_PerformanceSection_FuelEconomySection $fuelEconomy // Fuel Economy : Object containing fuel economy data.
    ) {}
}
class ModelDetails_PerformanceSection_TorqueSection
{
    public function __construct(
        public ?float $nm, // Nm : Maximum torque expressed in Nm (Newton Metre).
        public ?float $lbFt, // LbFt : Maximum torque expressed in LbFt (Pound Foot).
        public ?int $rpm // RPM : Engine RPM where peak torque is achieved.
    ) {}
}
class ModelDetails_PerformanceSection_PowerSection
{
    public function __construct(
        public ?float $bhp, // BHP : Maximum power expressed in BHP (Brake Horse Power).
        public ?float $ps, // PS : Maximum power expressed in PS (PferdStarke is the metric measure of horsepower. It is the equivalent of 98.6% of one HP).
        public ?float $kw, // kW : Maximum power expressed in kW (Kilowatts).
        public ?int $rpm // RPM : Engine RPM where peak power is achieved.
    ) {}
}
class ModelDetails_PerformanceSection_StatisticsSection
{
    public function __construct(
        public ?float $zeroToSixtyMph, // Zero To Sixty MPH : Manufacturer's claimed time for accelerating from 0 to 60 miles per hour, expressed in seconds.
        public ?float $zeroToOneHundredKph, // Zero To One Hundred KPH : Manufacturer's claimed time for accelerating from 0 to 100 kilometers per hour, expressed in seconds.
        public ?int $maxSpeedKph, // Max Speed Kph : The manufacturer's claimed top speed expressed in kilometers per hour.
        public ?int $maxSpeedMph // Max Speed Mph : The manufacturer's claimed top speed expressed in miles per hour.
    ) {}
}
class ModelDetails_PerformanceSection_FuelEconomySection
{
    public function __construct(
        public ?float $urbanColdMpg, // Urban Cold : Urban Cold fuel consumption in Miles per Gallon.
        public ?float $extraUrbanMpg, // Extra Urban : Extra Urban fuel consumption in Miles per Gallon.
        public ?float $combinedMpg, // Combined : Combined fuel consumption in Miles per Gallon.
        public ?float $urbanColdL100Km, // Urban Cold : Urban Cold fuel consumption in Litres per 100 kilometers.
        public ?float $extraUrbanL100Km, // Extra Urban : Extra Urban fuel consumption in Litres per 100 kilometers.
        public ?float $combinedL100Km // Combined : Combined fuel consumption in Litres per 100 kilometers.
    ) {}
}

?>