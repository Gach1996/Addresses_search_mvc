<?php


class Search
{

    public static function result($resultId, $addresses)
    {
        $tableAddressesHtml = '';
        $tableAddresses = [];

        if (!isset($addresses) || count($addresses) === 0) {
            return $tableAddressesHtml;
        }

        foreach ($addresses as $key => $address) {
            $addressName = $address['addresses_street'] . " " . $address['addresses_address'];
            $distance = Distance::getDistance($resultId['id'], $address['id']);

            $td = '';

            if ($distance < 5) {
//                $td .= "<td data-distance='$distance'>$addressName ($distance km)</td>";
                $tableAddresses['5'][$key]['distance'] = $distance;
                $tableAddresses['5'][$key]['name'] = $addressName;
            } else {
//                $td .= "<td data-distance=''></td>";
            }

            if ($distance >= 5 && $distance <= 30) {
//                $td .= "<td data-distance='$distance'>$addressName ($distance km)</td>";
                $tableAddresses['5_30'][$key]['distance'] = $distance;
                $tableAddresses['5_30'][$key]['name'] = $addressName;
            } else {
//                $td .= "<td data-distance=''></td>";

            }

            if ($distance > 30) {
                $tableAddresses['30'][$key]['distance'] = $distance;
                $tableAddresses['30'][$key]['name'] = $addressName;
//                $td .= "<td data-distance='$distance'>$addressName ($distance km)</td>";
            } else {
//                $td .= "<td data-distance=''></td>";
            }




//            $tableAddressesHtml .= "<tr>$td</tr>";
        }
//        dd($tableAddresses);
        return $tableAddresses;
    }
}