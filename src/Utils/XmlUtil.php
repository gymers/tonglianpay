<?php
namespace Gymers\TonglianPay\Utils;

class XmlUtil
{
    /**
     * 数组转XML.
     *
     * @param array $array
     * @return mixed
     */
    public static function arrayToXml(array $array)
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="GBK"?><transaction/>');
        if (isset($array['head'])) {
            $head = $xml->addChild('head');
            foreach($array['head'] as $k => $v){
                $head->addChild($k, $v);
            }
        }
        if (isset($array['request'])) {
            $request = $xml->addChild('request');
            foreach($array['request'] as $k => $v){
                $request->addChild($k, $v);
            }
        }

        return $xml->asXML();
    }

    /**
     * XML转数组.
     *
     * @param string $xml
     * @return mixed
     */
    public static function xmlToArray(string $xml)
    {
        $xml = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);

        return json_decode(json_encode($xml), true);
    }
}