<?php
return [ 'product' => [ 'name' => 'IDST', 'domain' => 'idst.[RegionId].aliyuncs.com', 'type' => 'Outer', ], 'version' => [ 'product' => 'IDST', 'name' => '2017-09-22', 'apiStyle' => 'ROA', ], 'api' => [ 'RoaSearch' => [ 'attributes' => [ 'version' => '2017-09-22', 'showJsonItemName' => 'true', 'name' => 'RoaSearch', 'parameterType' => 'Single', 'authType' => 'AK', 'responseLog' => 'enable', 'isolationType' => 'outer', 'status' => 'online', 'product' => 'IDST', ], 'parameters' => [ 'Parameter' => [ 'vid' => [ 'name' => 'vid', 'tagName' => 'vid', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'productid' => [ 'name' => 'product_id', 'tagName' => 'product_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'picname' => [ 'name' => 'pic_name', 'tagName' => 'pic_name', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'app' => [ 'name' => 'app', 'tagName' => 'app', 'type' => 'String', 'required' => 'true', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'catid' => [ 'name' => 'cat_id', 'tagName' => 'cat_id', 'type' => 'String', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 's' => [ 'name' => 's', 'tagName' => 's', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], 'n' => [ 'name' => 'n', 'tagName' => 'n', 'type' => 'Integer', 'required' => 'false', 'tagPosition' => 'Query', 'checkBlank' => 'false', ], ], ], 'IspProtocol' => [ 'protocol' => 'http', 'sign' => 'true', 'signKeyName' => 'idstoversea', 'signPolicy' => 'Local', 'resultType' => 'String', 'httpHost' => 'http://47.74.140.49', 'timeout' => '10000', 'httpsValidation' => 'true', ], 'IsvProtocol' => [ 'protocol' => 'HTTP|HTTPS', 'pattern' => '/bin/sp', 'method' => 'POST', ], 'FlowControl' => null, 'name' => 'RoaSearch', ], ],];