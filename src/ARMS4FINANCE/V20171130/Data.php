<?php
return [ 'product' => [ 'name' => 'ARMS4FINANCE', 'domain' => 'arms4finance.aliyuncs.com,arms4finance.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'ARMS4FINANCE', 'name' => '2017-11-30', ], 'api' => [ 'WhereInDimQuery' => [ 'attributes' => [ 'version' => '2017-11-30', 'showJsonItemName' => 'true', 'name' => 'WhereInDimQuery', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'ARMS4FINANCE', ], 'parameters' => [ 'Parameter' => [ 'DatasetId' => [ 'name' => 'datasetId', 'tagName' => 'DatasetId', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IntervalInSec' => [ 'name' => 'intervalInSec', 'tagName' => 'IntervalInSec', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'DateStr' => [ 'name' => 'dateStr', 'tagName' => 'DateStr', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MinTime' => [ 'name' => 'minTime', 'tagName' => 'MinTime', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MaxTime' => [ 'name' => 'maxTime', 'tagName' => 'MaxTime', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Dimensions' => [ 'name' => 'dimensions', 'tagName' => 'Dimensions', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'invokeDataType' => 'Map', ], 'WhereInKey' => [ 'name' => 'whereInKey', 'tagName' => 'WhereInKey', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'WhereInValues' => [ 'name' => 'whereInValues', 'tagName' => 'WhereInValues', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '50', 'subType' => 'String', 'invokeDataType' => 'Map', ], 'Measures' => [ 'name' => 'measures', 'tagName' => 'Measures', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'subType' => 'String', 'invokeDataType' => 'Map', ], 'IsDrillDown' => [ 'name' => 'isDrillDown', 'tagName' => 'IsDrillDown', 'type' => 'Boolean', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://arms4finance.${regionId}.aliyun-inc.com:8099/dataset/GeneralQuery.json', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'WhereInDimQuery', ], 'ARMSQueryDataSet' => [ 'attributes' => [ 'version' => '2017-11-30', 'showJsonItemName' => 'true', 'name' => 'ARMSQueryDataSet', 'parameterType' => 'Single', 'authType' => 'AK', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'ARMS4FINANCE', ], 'parameters' => [ 'Parameter' => [ 'DatasetId' => [ 'name' => 'datasetId', 'tagName' => 'DatasetId', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'IntervalInSec' => [ 'name' => 'intervalInSec', 'tagName' => 'IntervalInSec', 'type' => 'Integer', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'DateStr' => [ 'name' => 'dateStr', 'tagName' => 'DateStr', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MinTime' => [ 'name' => 'minTime', 'tagName' => 'MinTime', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'MaxTime' => [ 'name' => 'maxTime', 'tagName' => 'MaxTime', 'type' => 'Long', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'Dimensions' => [ 'name' => 'dimensions', 'tagName' => 'Dimensions', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'invokeDataType' => 'Map', ], 'Measures' => [ 'name' => 'measures', 'tagName' => 'Measures', 'type' => 'RepeatList', 'required' => 'false', 'tagPosition' => 'Query', 'maxNumber' => '5', 'subType' => 'String', 'invokeDataType' => 'Map', ], 'IsDrillDown' => [ 'name' => 'isDrillDown', 'tagName' => 'IsDrillDown', 'type' => 'Boolean', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'resultType' => 'Object', 'httpHost' => 'http://arms4finance.${regionId}.aliyun-inc.com:8099/dataset/GeneralQuery.json', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'method' => 'POST|GET', ], 'FlowControl' => null, 'name' => 'ARMSQueryDataSet', ], ],];