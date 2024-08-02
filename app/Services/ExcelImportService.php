<?php

namespace App\Services;

use App\Imports\AetnaImportFile;
use App\Imports\AigInsuranceImport;
use App\Imports\AmamInsuranceImport;
use App\Imports\AmericanLegacyImport;
use App\Imports\DigitalAgentImport;
use App\Imports\GoldenAgentImport;
use App\Imports\GreatWesternImport;
use App\Imports\HeritageInsuranceImport;
use App\Imports\LBLInsuranceImport;
use App\Imports\NewVistaImport;
use App\Imports\SiwlInsuranceImport;
use App\Imports\CompanyStateExistsFileImport;
use App\Imports\CVSImportFile;
use App\Imports\GeneralImport;
use App\Imports\SeniorLifeImport;
use App\Imports\SSLImport;
use App\Imports\TrinityInsuranceImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImportService
{
    public function __construct()
    {
        //
    }


    public static function importGeneralFile(array $data, $fk = NULL)
    {
        return Excel::import(new GeneralImport($fk), $data['file']);
    }



    public static function importAIGInsuranceCompany(array $data, $fk = NULL)
    {
        return Excel::import(new AigInsuranceImport($data['gender'], $data['smoker_status'], $fk), $data['file']);
    }

    public static function importAMAMRates(array $data, $fk = NULL)
    {
        return Excel::import(new AmamInsuranceImport($data['gender'], $data['smoker_status'], $fk), $data['file']);
    }
    public static function importAmericanLegacyRates(array $data, $fk = NULL)
    {
        // it is same as AMAM.
        return Excel::import(new AmericanLegacyImport($data['gender'], $data['smoker_status'], $fk), $data['file']);
    }

    public static function importNewVistaInsurance(array $data, $fk = NULL)
    {
        return Excel::import(new NewVistaImport($data['gender'], $fk), $data['file']);
    }
    public static function importLBLInsurance(array $data, $fk = NULL)
    {
        return Excel::import(new LBLInsuranceImport($data['gender'], $data['smoker_status'], $fk), $data['file']);
    }
    public static function importSIWlInsurance(array $data, $fk = NULL)
    {
        return Excel::import(new SiwlInsuranceImport($data['face_amount'] ?? 1000, $fk), $data['file']);
    }

    public static function ImportCompanyExistsFile(array $data)
    {
        return Excel::import(new CompanyStateExistsFileImport(), $data['file']);
    }

    public static function importSentinelSecurityLife(array $data, $fk)
    {
        return Excel::import(new SSLImport($data['gender'], $data['smoker_status'], $fk), $data['file']);
    }

    public static function importSeniorLifeInsurance(array $data, $fk)
    {
        return Excel::import(new SeniorLifeImport($data['gender'], $data['smoker_status'], $fk), $data['file']);
    }
    public static function importHeritageInsuranceCompany(array $data, $fk = NULL)
    {
        return Excel::import(new HeritageInsuranceImport(NULL, $data['face_amount']  ?? 1000, $fk), $data['file']);
    }
    public static function importGoldenAgentInsurance(array $data, $fk = NULL)
    {
        return Excel::import(new GoldenAgentImport($data['face_amount'] ?? 1000, $fk), $data['file']);
    }
    public static function importGreatWestern(array $data, $fk = NULL)
    {
        return Excel::import(new GreatWesternImport($fk), $data['file']);
    }
    public static function importTrinityInsurance(array $data, $fk = NULL)
    {
        return Excel::import(new TrinityInsuranceImport($data['gender'], $fk), $data['file']);
    }
    public static function importDigitalAgentInsurance(array $data, $fk = NULL)
    {
        return Excel::import(new DigitalAgentImport($fk), $data['file']);
    }

    public static function importContinentalLifeInsuranceCompany(array $data, $fk = NULL)
    {
        return Excel::import(new AetnaImportFile($fk), $data['file']);
    }

    public static function importAccendoInsuranceCompany(array $data, $fk = NULL)
    {
        return Excel::import(new CVSImportFile($fk), $data['file']);
    }
}
