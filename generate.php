<?php

require 'ApiClasses.php';

class Generate
{

    const FILE_TYPE = '.php';
    const PATH      = '/Users/marcelipodstawski/Sites/class-generator-app/PocztaPolska/ApiClasses/';

    /**
     * @var array
     */
    private $_classMap = array(
        'addShipment' => 'addShipment',
        'addShipmentResponse' => 'addShipmentResponse',
        'przesylkaType' => 'przesylkaType',
        'pocztexKrajowyType' => 'pocztexKrajowyType',
        'umowaType' => 'umowaType',
        'masaType' => 'masaType',
        'numerNadaniaType' => 'numerNadaniaType',
        'changePassword' => 'changePassword',
        'changePasswordResponse' => 'changePasswordResponse',
        'terminRodzajType' => 'terminRodzajType',
        'uiszczaOplateType' => 'uiszczaOplateType',
        'wartoscType' => 'wartoscType',
        'kwotaPobraniaType' => 'kwotaPobraniaType',
        'sposobPobraniaType' => 'sposobPobraniaType',
        'sposobPrzekazaniaType' => 'sposobPrzekazaniaType',
        'sposobDoreczeniaPotwierdzeniaType' => 'sposobDoreczeniaPotwierdzeniaType',
        'iloscPotwierdzenOdbioruType' => 'iloscPotwierdzenOdbioruType',
        'dataDlaDostarczeniaType' => 'dataDlaDostarczeniaType',
        'razemType' => 'razemType',
        'nazwaType' => 'nazwaType',
        'nazwa2Type' => 'nazwa2Type',
        'ulicaType' => 'ulicaType',
        'numerDomuType' => 'numerDomuType',
        'numerLokaluType' => 'numerLokaluType',
        'miejscowoscType' => 'miejscowoscType',
        'kodPocztowyType' => 'kodPocztowyType',
        'paczkaPocztowaType' => 'paczkaPocztowaType',
        'kategoriaType' => 'kategoriaType',
        'gabarytType' => 'gabarytType',
        'paczkaPocztowaPLUSType' => 'paczkaPocztowaPLUSType',
        'przesylkaPobraniowaType' => 'przesylkaPobraniowaType',
        'przesylkaNaWarunkachSzczegolnychType' => 'przesylkaNaWarunkachSzczegolnychType',
        'przesylkaPoleconaKrajowaType' => 'przesylkaPoleconaKrajowaType',
        'przesylkaListowaZadeklarowanaWartoscType' => 'przesylkaListowaZadeklarowanaWartoscType',
        'przesylkaFullType' => 'przesylkaFullType',
        'errorType' => 'errorType',
        'adresType' => 'adresType',
        'sendEnvelope' => 'sendEnvelope',
        'sendEnvelopeResponseType' => 'sendEnvelopeResponseType',
        'urzadNadaniaType' => 'urzadNadaniaType',
        'getUrzedyNadania' => 'getUrzedyNadania',
        'getUrzedyNadaniaResponse' => 'getUrzedyNadaniaResponse',
        'clearEnvelope' => 'clearEnvelope',
        'clearEnvelopeResponse' => 'clearEnvelopeResponse',
        'urzadNadaniaFullType' => 'urzadNadaniaFullType',
        'guidType' => 'guidType',
        'ePrzesylkaType' => 'ePrzesylkaType',
        'eSposobPowiadomieniaType' => 'eSposobPowiadomieniaType',
        'eKontaktType' => 'eKontaktType',
        'urzadWydaniaEPrzesylkiType' => 'urzadWydaniaEPrzesylkiType',
        'pobranieType' => 'pobranieType',
        'anonymous51' => 'anonymous51',
        'anonymous52' => 'anonymous52',
        'przesylkaPoleconaZagranicznaType' => 'przesylkaPoleconaZagranicznaType',
        'krajType' => 'krajType',
        'getUrzedyWydajaceEPrzesylki' => 'getUrzedyWydajaceEPrzesylki',
        'getUrzedyWydajaceEPrzesylkiResponse' => 'getUrzedyWydajaceEPrzesylkiResponse',
        'uploadIWDContent' => 'uploadIWDContent',
        'getEnvelopeStatus' => 'getEnvelopeStatus',
        'getEnvelopeStatusResponse' => 'getEnvelopeStatusResponse',
        'envelopeStatusType' => 'envelopeStatusType',
        'downloadIWDContent' => 'downloadIWDContent',
        'downloadIWDContentResponse' => 'downloadIWDContentResponse',
        'przesylkaShortType' => 'przesylkaShortType',
        'addShipmentResponseItemType' => 'addShipmentResponseItemType',
        'getKarty' => 'getKarty',
        'getKartyResponse' => 'getKartyResponse',
        'getPasswordExpiredDate' => 'getPasswordExpiredDate',
        'getPasswordExpiredDateResponse' => 'getPasswordExpiredDateResponse',
        'setAktywnaKarta' => 'setAktywnaKarta',
        'setAktywnaKartaResponse' => 'setAktywnaKartaResponse',
        'getEnvelopeContentFull' => 'getEnvelopeContentFull',
        'getEnvelopeContentFullResponse' => 'getEnvelopeContentFullResponse',
        'getEnvelopeContentShort' => 'getEnvelopeContentShort',
        'getEnvelopeContentShortResponse' => 'getEnvelopeContentShortResponse',
        'hello' => 'hello',
        'helloResponse' => 'helloResponse',
        'kartaType' => 'kartaType',
        'telefonType' => 'telefonType',
        'getAddressLabel' => 'getAddressLabel',
        'getAddressLabelResponse' => 'getAddressLabelResponse',
        'addressLabelContent' => 'addressLabelContent',
        'getOutboxBook' => 'getOutboxBook',
        'getOutboxBookResponse' => 'getOutboxBookResponse',
        'getFirmowaPocztaBook' => 'getFirmowaPocztaBook',
        'getFirmowaPocztaBookResponse' => 'getFirmowaPocztaBookResponse',
        'getEnvelopeList' => 'getEnvelopeList',
        'getEnvelopeListResponse' => 'getEnvelopeListResponse',
        'envelopeInfoType' => 'envelopeInfoType',
        'przesylkaZagranicznaType' => 'przesylkaZagranicznaType',
        'przesylkaRejestrowanaType' => 'przesylkaRejestrowanaType',
        'przesylkaNieRejestrowanaType' => 'przesylkaNieRejestrowanaType',
        'anonymous92' => 'anonymous92',
        'przesylkaBiznesowaType' => 'przesylkaBiznesowaType',
        'gabarytBiznesowaType' => 'gabarytBiznesowaType',
        'subPrzesylkaBiznesowaType' => 'subPrzesylkaBiznesowaType',
        'subPrzesylkaBiznesowaPlusType' => 'subPrzesylkaBiznesowaPlusType',
        'getAddresLabelByGuid' => 'getAddresLabelByGuid',
        'getAddresLabelByGuidResponse' => 'getAddresLabelByGuidResponse',
        'przesylkaBiznesowaPlusType' => 'przesylkaBiznesowaPlusType',
        'opisType' => 'opisType',
        'numerPrzesylkiKlientaType' => 'numerPrzesylkiKlientaType',
        'pakietType' => 'pakietType',
        'opakowanieType' => 'opakowanieType',
        'typOpakowaniaType' => 'typOpakowaniaType',
        'getPlacowkiPocztowe' => 'getPlacowkiPocztowe',
        'getPlacowkiPocztoweResponse' => 'getPlacowkiPocztoweResponse',
        'getGuid' => 'getGuid',
        'getGuidResponse' => 'getGuidResponse',
        'kierunekType' => 'kierunekType',
        'getKierunki' => 'getKierunki',
        'prefixKodPocztowy' => 'prefixKodPocztowy',
        'getKierunkiResponse' => 'getKierunkiResponse',
        'czynnoscUpustowaType' => 'czynnoscUpustowaType',
        'miejsceOdbioruType' => 'miejsceOdbioruType',
        'sposobNadaniaType' => 'sposobNadaniaType',
        'getKierunkiInfo' => 'getKierunkiInfo',
        'getKierunkiInfoResponse' => 'getKierunkiInfoResponse',
        'kwotaTranzakcjiType' => 'kwotaTranzakcjiType',
        'uslugiType' => 'uslugiType',
        'idWojewodztwoType' => 'idWojewodztwoType',
        'placowkaPocztowaType' => 'placowkaPocztowaType',
        'anonymous122' => 'anonymous122',
        'anonymous123' => 'anonymous123',
        'punktWydaniaPrzesylkiBiznesowejPlus' => 'punktWydaniaPrzesylkiBiznesowejPlus',
        'statusType' => 'statusType',
        'terminRodzajPlusType' => 'terminRodzajPlusType',
        'typOpakowanieType' => 'typOpakowanieType',
        'getEnvelopeBufor' => 'getEnvelopeBufor',
        'getEnvelopeBuforResponse' => 'getEnvelopeBuforResponse',
        'clearEnvelopeByGuids' => 'clearEnvelopeByGuids',
        'clearEnvelopeByGuidsResponse' => 'clearEnvelopeByGuidsResponse',
        'zwrotDokumentowType' => 'zwrotDokumentowType',
        'odbiorPrzesylkiOdNadawcyType' => 'odbiorPrzesylkiOdNadawcyType',
        'potwierdzenieDoreczeniaType' => 'potwierdzenieDoreczeniaType',
        'listRodzajType' => 'listRodzajType',
        'rodzajListType' => 'rodzajListType',
        'potwierdzenieOdbioruType' => 'potwierdzenieOdbioruType',
        'sposobPrzekazaniaPotwierdzeniaOdbioruType' => 'sposobPrzekazaniaPotwierdzeniaOdbioruType',
        'doreczenieType' => 'doreczenieType',
        'doreczenieUslugaPocztowaType' => 'doreczenieUslugaPocztowaType',
        'doreczenieUslugaKurierskaType' => 'doreczenieUslugaKurierskaType',
        'oczekiwanaGodzinaDoreczeniaType' => 'oczekiwanaGodzinaDoreczeniaType',
        'oczekiwanaGodzinaDoreczeniaUslugiType' => 'oczekiwanaGodzinaDoreczeniaUslugiType',
        'paczkaZagranicznaType' => 'paczkaZagranicznaType',
        'setEnvelopeBuforDataNadania' => 'setEnvelopeBuforDataNadania',
        'setEnvelopeBuforDataNadaniaResponse' => 'setEnvelopeBuforDataNadaniaResponse',
        'lokalizacjaGeograficznaType' => 'lokalizacjaGeograficznaType',
        'wspolrzednaGeograficznaType' => 'wspolrzednaGeograficznaType',
        'zwrotType' => 'zwrotType',
        'sposobZwrotuType' => 'sposobZwrotuType',
        'listZwyklyType' => 'listZwyklyType',
        'reklamowaType' => 'reklamowaType',
        'getEPOStatus' => 'getEPOStatus',
        'getEPOStatusResponse' => 'getEPOStatusResponse',
        'statusEPOEnum' => 'statusEPOEnum',
        'EPOType' => 'EPOType',
        'EPOSimpleType' => 'EPOSimpleType',
        'EPOExtendedType' => 'EPOExtendedType',
        'zasadySpecjalneEnum' => 'zasadySpecjalneEnum',
        'przesylkaEPOType' => 'przesylkaEPOType',
        'przesylkaFirmowaPoleconaType' => 'przesylkaFirmowaPoleconaType',
        'EPOInfoType' => 'EPOInfoType',
        'awizoPrzesylkiType' => 'awizoPrzesylkiType',
        'doreczeniePrzesylkiType' => 'doreczeniePrzesylkiType',
        'zwrotPrzesylkiType' => 'zwrotPrzesylkiType',
        'miejscaPozostawieniaAwizoEnum' => 'miejscaPozostawieniaAwizoEnum',
        'podmiotDoreczeniaEnum' => 'podmiotDoreczeniaEnum',
        'przyczynaZwrotuEnum' => 'przyczynaZwrotuEnum',
        'getAddresLabelCompact' => 'getAddresLabelCompact',
        'getAddresLabelCompactResponse' => 'getAddresLabelCompactResponse',
        'getAddresLabelByGuidCompact' => 'getAddresLabelByGuidCompact',
        'getAddresLabelByGuidCompactResponse' => 'getAddresLabelByGuidCompactResponse',
        'ubezpieczenieType' => 'ubezpieczenieType',
        'rodzajUbezpieczeniaType' => 'rodzajUbezpieczeniaType',
        'kwotaUbezpieczeniaType' => 'kwotaUbezpieczeniaType',
        'emailType' => 'emailType',
        'mobileType' => 'mobileType',
        'EMSType' => 'EMSType',
        'EMSTypOpakowaniaType' => 'EMSTypOpakowaniaType',
        'getEnvelopeBuforList' => 'getEnvelopeBuforList',
        'getEnvelopeBuforListResponse' => 'getEnvelopeBuforListResponse',
        'buforType' => 'buforType',
        'createEnvelopeBufor' => 'createEnvelopeBufor',
        'createEnvelopeBuforResponse' => 'createEnvelopeBuforResponse',
        'moveShipments' => 'moveShipments',
        'moveShipmentsResponse' => 'moveShipmentsResponse',
        'updateEnvelopeBufor' => 'updateEnvelopeBufor',
        'updateEnvelopeBuforResponse' => 'updateEnvelopeBuforResponse',
        'getUbezpieczeniaInfo' => 'getUbezpieczeniaInfo',
        'getUbezpieczeniaInfoResponse' => 'getUbezpieczeniaInfoResponse',
        'ubezpieczeniaInfoType' => 'ubezpieczeniaInfoType',
        'isMiejscowa' => 'isMiejscowa',
        'isMiejscowaResponse' => 'isMiejscowaResponse',
        'trasaRequestType' => 'trasaRequestType',
        'trasaResponseType' => 'trasaResponseType',
        'deklaracjaCelnaType' => 'deklaracjaCelnaType',
        'szczegolyDeklaracjiCelnejType' => 'szczegolyDeklaracjiCelnejType',
        'przesylkaPaletowaType' => 'przesylkaPaletowaType',
        'rodzajPaletyType' => 'rodzajPaletyType',
        'paletaType' => 'paletaType',
        'platnikType' => 'platnikType',
        'subPrzesylkaPaletowaType' => 'subPrzesylkaPaletowaType',
        'getBlankietPobraniaByGuids' => 'getBlankietPobraniaByGuids',
        'getBlankietPobraniaByGuidsResponse' => 'getBlankietPobraniaByGuidsResponse',
        'updateAccount' => 'updateAccount',
        'updateAccountResponse' => 'updateAccountResponse',
        'accountType' => 'accountType',
        'permisionType' => 'permisionType',
        'getAccountList' => 'getAccountList',
        'getAccountListResponse' => 'getAccountListResponse',
        'profilType' => 'profilType',
        'getProfilList' => 'getProfilList',
        'getProfilListResponse' => 'getProfilListResponse',
        'updateProfil' => 'updateProfil',
        'updateProfilResponse' => 'updateProfilResponse',
        'statusAccountType' => 'statusAccountType',
        'uslugaPaczkowaType' => 'uslugaPaczkowaType',
        'subUslugaPaczkowaType' => 'subUslugaPaczkowaType',
        'terminPaczkowaType' => 'terminPaczkowaType',
        'opakowaniePocztowaType' => 'opakowaniePocztowaType',
        'uslugaKurierskaType' => 'uslugaKurierskaType',
        'subUslugaKurierskaType' => 'subUslugaKurierskaType',
        'createAccount' => 'createAccount',
        'createAccountResponse' => 'createAccountResponse',
        'createProfil' => 'createProfil',
        'createProfilResponse' => 'createProfilResponse',
        'terminKurierskaType' => 'terminKurierskaType',
        'opakowanieKurierskaType' => 'opakowanieKurierskaType',
        'zwrotDokumentowPaczkowaType' => 'zwrotDokumentowPaczkowaType',
        'potwierdzenieOdbioruPaczkowaType' => 'potwierdzenieOdbioruPaczkowaType',
        'sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType' => 'sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType',
        'zwrotDokumentowKurierskaType' => 'zwrotDokumentowKurierskaType',
        'terminZwrotDokumentowKurierskaType' => 'terminZwrotDokumentowKurierskaType',
        'terminZwrotDokumentowPaczkowaType' => 'terminZwrotDokumentowPaczkowaType',
        'potwierdzenieOdbioruKurierskaType' => 'potwierdzenieOdbioruKurierskaType',
        'sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType' => 'sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType',
        'addReklamacje' => 'addReklamacje',
        'addReklamacjeResponse' => 'addReklamacjeResponse',
        'getReklamacje' => 'getReklamacje',
        'getReklamacjeResponse' => 'getReklamacjeResponse',
        'getZapowiedziFaktur' => 'getZapowiedziFaktur',
        'getZapowiedziFakturResponse' => 'getZapowiedziFakturResponse',
        'addOdwolanieDoReklamacji' => 'addOdwolanieDoReklamacji',
        'addOdwolanieDoReklamacjiResponse' => 'addOdwolanieDoReklamacjiResponse',
        'addRozbieznoscDoZapowiedziFaktur' => 'addRozbieznoscDoZapowiedziFaktur',
        'addRozbieznoscDoZapowiedziFakturResponse' => 'addRozbieznoscDoZapowiedziFakturResponse',
        'reklamowanaPrzesylkaType' => 'reklamowanaPrzesylkaType',
        'powodReklamacjiType' => 'powodReklamacjiType',
        'reklamacjaRozpatrzonaType' => 'reklamacjaRozpatrzonaType',
        'rozstrzygniecieType' => 'rozstrzygniecieType',
        'getListaPowodowReklamacji' => 'getListaPowodowReklamacji',
        'getListaPowodowReklamacjiResponse' => 'getListaPowodowReklamacjiResponse',
        'powodSzczegolowyType' => 'powodSzczegolowyType',
        'kategoriePowodowReklamacjiType' => 'kategoriePowodowReklamacjiType',
        'listBiznesowyType' => 'listBiznesowyType',
        'zamowKuriera' => 'zamowKuriera',
        'zamowKurieraResponse' => 'zamowKurieraResponse',
    );

    public function run()
    {
        $x = 1;
        foreach ($this->_classMap as $className) {
            try {
                if (class_exists($className)) {
                    echo $x . " - Generating class form : " . $className . "\n";
                    $fileName = $this->_createFileName($className);
                    $this->_createFile($fileName, $className);
                    $x++;
                }
            } catch (Exception $e) {
                throw new Exception($e);
            }
        }
    }

    /**
     * @param string $className
     * @return string
     */
    private function _createFileName($className)
    {
        return ucfirst($className . self::FILE_TYPE);
    }

    /**
     * @param string $fileName
     * @param string $className
     */
    private function _createFile($fileName, $className)
    {
        $file = $this->_getFile($fileName);
        $this->_dirExists();

        file_put_contents($file, $this->_getFileContent($className));
    }

    /**
     * @param string $fileName
     * @return string
     */
    private function _getFile($fileName)
    {
        return self::PATH . $fileName;
    }

    /**
     * Check if path to save files exists
     */
    private function _dirExists()
    {
        if (!file_exists(self::PATH)) {
            mkdir(self::PATH, 0700, true);
        }
    }

    /**
     * @param string $className
     * @return string
     */
    private function _getFileContent($className)
    {
        $reflection = new ReflectionClass($className);
        $className  = ucfirst($className);
        $classBody  = '';

        if ($constants = $reflection->getConstants()) {
            foreach ($constants as $key => $val) {
                $classBody .= "\tconst " . $key . " = '" . $val . "';\n";
            }
        }

        if ($properties = $reflection->getProperties()) {
            foreach ($properties as $property) {
                $classBody .= "\tpublic $" . $property->name . ";\n";
            }
        }

        $namespace = "namespace PocztaPolska\ApiClasses;";
        $comment = "/**\n * Class $className\n * @package PocztaPolska\ApiClasses";
        $comment .= "\n * @author Marceli Podstawski <marceli.podstawski@unity.pl>\n */\nclass";
        $php = "<?php";

        if (empty($classBody)) {
            $classBody = "{\n}";
        } else {
            $classBody = "{\n$classBody}";
        }

        return <<<EOE
$php\n$namespace\n\n$comment $className\n$classBody
EOE;
    }

}

$generate = new Generate();
$generate->run();
