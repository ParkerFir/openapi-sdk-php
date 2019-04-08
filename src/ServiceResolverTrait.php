<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\AlibabaCloud;

/**
 * Resolve product based on the static method name.
 *
 * @mixin     AlibabaCloud
 *
 * @codeCoverageIgnore
 *
 * @method static ARMS\ARMS aRMS()
 * @method static ARMS4FINANCE\ARMS4FINANCE aRMS4FINANCE()
 * @method static Aas\Aas aas()
 * @method static Actiontrail\Actiontrail actiontrail()
 * @method static Aegis\Aegis aegis()
 * @method static Afs\Afs afs()
 * @method static Airec\Airec airec()
 * @method static AliProbe\AliProbe aliProbe()
 * @method static Alidns\Alidns alidns()
 * @method static Alikafka\Alikafka alikafka()
 * @method static Alimt\Alimt alimt()
 * @method static Baas\Baas baas()
 * @method static BatchCompute\BatchCompute batchCompute()
 * @method static Bss\Bss bss()
 * @method static BssOpenApi\BssOpenApi bssOpenApi()
 * @method static CCC\CCC cCC()
 * @method static CF\CF cF()
 * @method static CS\CS cS()
 * @method static CSB\CSB cSB()
 * @method static Cbn\Cbn cbn()
 * @method static Ccs\Ccs ccs()
 * @method static Cdn\Cdn cdn()
 * @method static Cds\Cds cds()
 * @method static Chatbot\Chatbot chatbot()
 * @method static CloudAPI\CloudAPI cloudAPI()
 * @method static CloudPhoto\CloudPhoto cloudPhoto()
 * @method static Cloudauth\Cloudauth cloudauth()
 * @method static Cloudesl\Cloudesl cloudesl()
 * @method static Cloudmarketing\Cloudmarketing cloudmarketing()
 * @method static Cloudwf\Cloudwf cloudwf()
 * @method static Cms\Cms cms()
 * @method static Commondriver\Commondriver commondriver()
 * @method static Cr\Cr cr()
 * @method static Crm\Crm crm()
 * @method static DataworksPublic\DataworksPublic dataworksPublic()
 * @method static Dbs\Dbs dbs()
 * @method static Dcdn\Dcdn dcdn()
 * @method static Dds\Dds dds()
 * @method static Dm\Dm dm()
 * @method static DmsEnterprise\DmsEnterprise dmsEnterprise()
 * @method static Domain\Domain domain()
 * @method static DomainIntl\DomainIntl domainIntl()
 * @method static Drcloud\Drcloud drcloud()
 * @method static Drds\Drds drds()
 * @method static Dts\Dts dts()
 * @method static Dybaseapi\Dybaseapi dybaseapi()
 * @method static Dypnsapi\Dypnsapi dypnsapi()
 * @method static Dysmsapi\Dysmsapi dysmsapi()
 * @method static Dyvmsapi\Dyvmsapi dyvmsapi()
 * @method static EHPC\EHPC eHPC()
 * @method static Eci\Eci eci()
 * @method static Ecs\Ecs ecs()
 * @method static EcsInc\EcsInc ecsInc()
 * @method static Edas\Edas edas()
 * @method static Emr\Emr emr()
 * @method static Ess\Ess ess()
 * @method static Foas\Foas foas()
 * @method static Ft\Ft ft()
 * @method static Gpdb\Gpdb gpdb()
 * @method static Green\Green green()
 * @method static HPC\HPC hPC()
 * @method static Hsm\Hsm hsm()
 * @method static Httpdns\Httpdns httpdns()
 * @method static IDST\IDST iDST()
 * @method static ITaaS\ITaaS iTaaS()
 * @method static ImageSearch\ImageSearch imageSearch()
 * @method static Imm\Imm imm()
 * @method static IndustryBrain\IndustryBrain industryBrain()
 * @method static Iot\Iot iot()
 * @method static Jaq\Jaq jaq()
 * @method static Jarvis\Jarvis jarvis()
 * @method static JarvisPublic\JarvisPublic jarvisPublic()
 * @method static LinkFace\LinkFace linkFace()
 * @method static LinkWAN\LinkWAN linkWAN()
 * @method static Linkedmall\Linkedmall linkedmall()
 * @method static Live\Live live()
 * @method static Lubancloud\Lubancloud lubancloud()
 * @method static Lubanruler\Lubanruler lubanruler()
 * @method static Market\Market market()
 * @method static MoPen\MoPen moPen()
 * @method static Mts\Mts mts()
 * @method static NAS\NAS nAS()
 * @method static Nlp\Nlp nlp()
 * @method static NlsCloudMeta\NlsCloudMeta nlsCloudMeta()
 * @method static NlsFiletrans\NlsFiletrans nlsFiletrans()
 * @method static Oms\Oms oms()
 * @method static Ons\Ons ons()
 * @method static Openanalytics\Openanalytics openanalytics()
 * @method static OssAdmin\OssAdmin ossAdmin()
 * @method static Ots\Ots ots()
 * @method static PTS\PTS pTS()
 * @method static PetaData\PetaData petaData()
 * @method static Polardb\Polardb polardb()
 * @method static ProductCatalog\ProductCatalog productCatalog()
 * @method static Push\Push push()
 * @method static Pvtz\Pvtz pvtz()
 * @method static Qualitycheck\Qualitycheck qualitycheck()
 * @method static RKvstore\RKvstore rKvstore()
 * @method static ROS\ROS rOS()
 * @method static Ram\Ram ram()
 * @method static Rds\Rds rds()
 * @method static Rtc\Rtc rtc()
 * @method static Saf\Saf saf()
 * @method static SasApi\SasApi sasApi()
 * @method static Scdn\Scdn scdn()
 * @method static Skyeye\Skyeye skyeye()
 * @method static Slb\Slb slb()
 * @method static Smartag\Smartag smartag()
 * @method static Sms\Sms sms()
 * @method static Snsuapi\Snsuapi snsuapi()
 * @method static Sts\Sts sts()
 * @method static TagINner\TagINner tagINner()
 * @method static TeslaDam\TeslaDam teslaDam()
 * @method static TeslaMaxCompute\TeslaMaxCompute teslaMaxCompute()
 * @method static TeslaStream\TeslaStream teslaStream()
 * @method static Ubsms\Ubsms ubsms()
 * @method static UbsmsInner\UbsmsInner ubsmsInner()
 * @method static Uis\Uis uis()
 * @method static Vod\Vod vod()
 * @method static Vpc\Vpc vpc()
 * @method static WafOpenapi\WafOpenapi wafOpenapi()
 * @method static WelfareInner\WelfareInner welfareInner()
 * @method static Xspace\Xspace xspace()
 * @method static YqBridge\YqBridge yqBridge()
 * @method static Yundun\Yundun yundun()
 */
trait ServiceResolverTrait
{
}
