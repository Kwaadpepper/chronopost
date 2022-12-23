<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'resultGetReservedSkybillValue' => '\\StructType\\ResultGetReservedSkybillValue',
            'resultReservationExpeditionValue' => '\\StructType\\ResultReservationExpeditionValue',
            'esdValue' => '\\StructType\\EsdValue',
            'headerValue' => '\\StructType\\HeaderValue',
            'shipperValue' => '\\StructType\\ShipperValue',
            'customerValue' => '\\StructType\\CustomerValue',
            'recipientValue' => '\\StructType\\RecipientValue',
            'refValue' => '\\StructType\\RefValue',
            'skybillValue' => '\\StructType\\SkybillValue',
            'skybillParamsValue' => '\\StructType\\SkybillParamsValue',
            'scheduledValue' => '\\StructType\\ScheduledValue',
            'appointmentValue' => '\\StructType\\AppointmentValue',
            'resultExpeditionValue' => '\\StructType\\ResultExpeditionValue',
            'esdWithRefClientValue' => '\\StructType\\EsdWithRefClientValue',
            'esdWithRefClientValueV2' => '\\StructType\\EsdWithRefClientValueV2',
            'esdValue3' => '\\StructType\\EsdValue3',
            'headerValueV2' => '\\StructType\\HeaderValueV2',
            'shipperValueV2' => '\\StructType\\ShipperValueV2',
            'recipientValueV2' => '\\StructType\\RecipientValueV2',
            'refValueV2' => '\\StructType\\RefValueV2',
            'skybillWithDimensionsValue' => '\\StructType\\SkybillWithDimensionsValue',
            'skybillWithDimensionsValueV2' => '\\StructType\\SkybillWithDimensionsValueV2',
            'skybillWithDimensionsValueV3' => '\\StructType\\SkybillWithDimensionsValueV3',
            'skybillWithDimensionsValueV4' => '\\StructType\\SkybillWithDimensionsValueV4',
            'skybillWithDimensionsValueV5' => '\\StructType\\SkybillWithDimensionsValueV5',
            'skybillWithDimensionsValueV6' => '\\StructType\\SkybillWithDimensionsValueV6',
            'skybillParamsValueV2' => '\\StructType\\SkybillParamsValueV2',
            'recipientLocalValue' => '\\StructType\\RecipientLocalValue',
            'recipientLocalValueV2' => '\\StructType\\RecipientLocalValueV2',
            'customsValue' => '\\StructType\\CustomsValue',
            'articleValue' => '\\StructType\\ArticleValue',
            'resultShippingValue' => '\\StructType\\ResultShippingValue',
            'resultMultiParcelExpeditionValue' => '\\StructType\\ResultMultiParcelExpeditionValue',
            'resultMultiParcelValue' => '\\StructType\\ResultMultiParcelValue',
            'resultExpeditionValueV3' => '\\StructType\\ResultExpeditionValueV3',
            'resultMonoParcelExpeditionValue' => '\\StructType\\ResultMonoParcelExpeditionValue',
            'resultGetRouting' => '\\StructType\\ResultGetRouting',
            'geopostResult' => '\\StructType\\GeopostResult',
            'skybillValueV2' => '\\StructType\\SkybillValueV2',
            'resultFaisabiliteESD' => '\\StructType\\ResultFaisabiliteESD',
            'donneurDOrdre' => '\\StructType\\DonneurDOrdre',
            'adresseEnlevement' => '\\StructType\\AdresseEnlevement',
            'adresseEnlevementV2' => '\\StructType\\AdresseEnlevementV2',
            'adresseEnlevementV3' => '\\StructType\\AdresseEnlevementV3',
            'particularitesEsd' => '\\StructType\\ParticularitesEsd',
            'options' => '\\StructType\\Options',
            'resultEnlevementNational' => '\\StructType\\ResultEnlevementNational',
            'infoEnlevement' => '\\StructType\\InfoEnlevement',
            'resultGetReservedSkybillWithTypeValue' => '\\StructType\\ResultGetReservedSkybillWithTypeValue',
            'destinatairesDpd' => '\\StructType\\DestinatairesDpd',
            'destinataireDpd' => '\\StructType\\DestinataireDpd',
            'adresseDestinataire' => '\\StructType\\AdresseDestinataire',
            'infoClient' => '\\StructType\\InfoClient',
            'particularites' => '\\StructType\\Particularites',
            'particularitesColisDpd' => '\\StructType\\ParticularitesColisDpd',
            'infoDouanieres' => '\\StructType\\InfoDouanieres',
            'resultPickupOrCollectionRequest' => '\\StructType\\ResultPickupOrCollectionRequest',
            'resultReservationMultiParcelExpeditionValue' => '\\StructType\\ResultReservationMultiParcelExpeditionValue',
            'resultParcelValue' => '\\StructType\\ResultParcelValue',
            'esdResultContraintesAgenceValue' => '\\StructType\\EsdResultContraintesAgenceValue',
            'esdContraintesAgence' => '\\StructType\\EsdContraintesAgence',
            'resultReservationMultiParcelExpeditionValueV2' => '\\StructType\\ResultReservationMultiParcelExpeditionValueV2',
            'resultAnnulerEnlevement' => '\\StructType\\ResultAnnulerEnlevement',
            'statut' => '\\StructType\\Statut',
            'entry' => '\\StructType\\Entry',
            'resultReservationExpeditionValueV2' => '\\StructType\\ResultReservationExpeditionValueV2',
            'skybillValueBase' => '\\StructType\\SkybillValueBase',
            'resultShippingInfo' => '\\StructType\\ResultShippingInfo',
            'error' => '\\StructType\\Error',
            'detail' => '\\StructType\\Detail',
            'shippingInfo' => '\\StructType\\ShippingInfo',
            'getReservedSkybill' => '\\StructType\\GetReservedSkybill',
            'getReservedSkybillResponse' => '\\StructType\\GetReservedSkybillResponse',
            'shippingWithReservationAndESDWithRefClientPC' => '\\StructType\\ShippingWithReservationAndESDWithRefClientPC',
            'shippingWithReservationAndESDWithRefClientPCResponse' => '\\StructType\\ShippingWithReservationAndESDWithRefClientPCResponse',
            'shippingV3' => '\\StructType\\ShippingV3',
            'shippingV3Response' => '\\StructType\\ShippingV3Response',
            'shippingV2' => '\\StructType\\ShippingV2',
            'shippingV2Response' => '\\StructType\\ShippingV2Response',
            'shippingWithESDOnlyV2' => '\\StructType\\ShippingWithESDOnlyV2',
            'shippingWithESDOnlyV2Response' => '\\StructType\\ShippingWithESDOnlyV2Response',
            'shippingMultiParcelV5' => '\\StructType\\ShippingMultiParcelV5',
            'shippingMultiParcelV5Response' => '\\StructType\\ShippingMultiParcelV5Response',
            'shippingV7' => '\\StructType\\ShippingV7',
            'shippingV7Response' => '\\StructType\\ShippingV7Response',
            'getRouting' => '\\StructType\\GetRouting',
            'getRoutingResponse' => '\\StructType\\GetRoutingResponse',
            'shippingMultiParcelV4' => '\\StructType\\ShippingMultiParcelV4',
            'shippingMultiParcelV4Response' => '\\StructType\\ShippingMultiParcelV4Response',
            'shippingV6' => '\\StructType\\ShippingV6',
            'shippingV6Response' => '\\StructType\\ShippingV6Response',
            'shippingMultiParcelV3' => '\\StructType\\ShippingMultiParcelV3',
            'shippingMultiParcelV3Response' => '\\StructType\\ShippingMultiParcelV3Response',
            'shippingV5' => '\\StructType\\ShippingV5',
            'shippingV5Response' => '\\StructType\\ShippingV5Response',
            'shippingMultiParcelV2' => '\\StructType\\ShippingMultiParcelV2',
            'shippingMultiParcelV2Response' => '\\StructType\\ShippingMultiParcelV2Response',
            'shippingV4' => '\\StructType\\ShippingV4',
            'shippingV4Response' => '\\StructType\\ShippingV4Response',
            'faisabiliteESD' => '\\StructType\\FaisabiliteESD',
            'faisabiliteESDResponse' => '\\StructType\\FaisabiliteESDResponse',
            'creerEnlevementNational' => '\\StructType\\CreerEnlevementNational',
            'creerEnlevementNationalResponse' => '\\StructType\\CreerEnlevementNationalResponse',
            'shippingWithESDOnly' => '\\StructType\\ShippingWithESDOnly',
            'shippingWithESDOnlyResponse' => '\\StructType\\ShippingWithESDOnlyResponse',
            'getReservedSkybillWithTypeAndModeByReservation' => '\\StructType\\GetReservedSkybillWithTypeAndModeByReservation',
            'getReservedSkybillWithTypeAndModeByReservationResponse' => '\\StructType\\GetReservedSkybillWithTypeAndModeByReservationResponse',
            'creerEnlevementEurope' => '\\StructType\\CreerEnlevementEurope',
            'creerEnlevementEuropeResponse' => '\\StructType\\CreerEnlevementEuropeResponse',
            'shippingMultiParcelWithReservation' => '\\StructType\\ShippingMultiParcelWithReservation',
            'shippingMultiParcelWithReservationResponse' => '\\StructType\\ShippingMultiParcelWithReservationResponse',
            'rechercherContraintesEnlevement' => '\\StructType\\RechercherContraintesEnlevement',
            'rechercherContraintesEnlevementResponse' => '\\StructType\\RechercherContraintesEnlevementResponse',
            'shippingWithReservationAndESDWithRefClient' => '\\StructType\\ShippingWithReservationAndESDWithRefClient',
            'shippingWithReservationAndESDWithRefClientResponse' => '\\StructType\\ShippingWithReservationAndESDWithRefClientResponse',
            'shippingMultiParcel' => '\\StructType\\ShippingMultiParcel',
            'shippingMultiParcelResponse' => '\\StructType\\ShippingMultiParcelResponse',
            'getReservedSkybillWithTypeAndModeAuth' => '\\StructType\\GetReservedSkybillWithTypeAndModeAuth',
            'getReservedSkybillWithTypeAndModeAuthResponse' => '\\StructType\\GetReservedSkybillWithTypeAndModeAuthResponse',
            'shipping' => '\\StructType\\Shipping',
            'shippingResponse' => '\\StructType\\ShippingResponse',
            'getReservedSkybillWithTypeAndMode' => '\\StructType\\GetReservedSkybillWithTypeAndMode',
            'getReservedSkybillWithTypeAndModeResponse' => '\\StructType\\GetReservedSkybillWithTypeAndModeResponse',
            'getReservedSkybillWithType' => '\\StructType\\GetReservedSkybillWithType',
            'getReservedSkybillWithTypeResponse' => '\\StructType\\GetReservedSkybillWithTypeResponse',
            'shippingMultiParcelWithReservationV3' => '\\StructType\\ShippingMultiParcelWithReservationV3',
            'shippingMultiParcelWithReservationV3Response' => '\\StructType\\ShippingMultiParcelWithReservationV3Response',
            'annulerEnlevements' => '\\StructType\\AnnulerEnlevements',
            'annulerEnlevementsResponse' => '\\StructType\\AnnulerEnlevementsResponse',
            'shippingMultiParcelWithReservationV2' => '\\StructType\\ShippingMultiParcelWithReservationV2',
            'shippingMultiParcelWithReservationV2Response' => '\\StructType\\ShippingMultiParcelWithReservationV2Response',
            'shippingWithReservationV2' => '\\StructType\\ShippingWithReservationV2',
            'shippingWithReservationV2Response' => '\\StructType\\ShippingWithReservationV2Response',
            'getShippingInformation' => '\\StructType\\GetShippingInformation',
            'getShippingInformationResponse' => '\\StructType\\GetShippingInformationResponse',
            'shippingWithReservation' => '\\StructType\\ShippingWithReservation',
            'shippingWithReservationResponse' => '\\StructType\\ShippingWithReservationResponse',
        ];
    }
}
