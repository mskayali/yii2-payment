<?php

use yii\db\Schema;
use yii\db\Migration;

class m151204_144901_exchange_rates extends Migration
{
    public function up()
    {

    }

    public function down()
    {
        echo "m151204_144901_exchange_rates cannot be reverted.\n";

        return false;
    }

<?php

use yii\db\Schema;
use yii\db\Migration;

class m151204_144849_currency extends Migration
{
    public function up()
    {
        $this->createTable('exchange_rates', [
            'currency_code' => $this->string(5)->primaryKey(),
            'rate' => $this->integer(),
            'updated' => $this->string(5),
            'E' => $this->integer()
        ]);

        $this->batchInsert('currency',['code' ,'no' ,'symbol' ,'E' ], $this->data());

    }

    public function down()
    {
        $this->dropTable('currency');

        return false;
    }


    public function data()
    {

    return [
  ['AED','3.672872','2015-12-04 16:00:02'],
  ['AFN','66.879999','2015-12-04 07:00:02'],
  ['ALL','127.254100','2015-12-04 16:00:02'],
  ['AMD','484.537499','2015-12-04 16:00:02'],
  ['ANG','1.788700','2015-12-04 16:00:02'],
  ['AOA','134.982666','2015-12-04 14:00:02'],
  ['ARS','9.692177','2015-12-04 16:00:02'],
  ['AUD','1.365644','2015-12-04 16:00:02'],
  ['AWG','1.793333','2015-12-04 06:00:02'],
  ['AZN','1.048538','2015-12-04 16:00:02'],
  ['BAM','1.804429','2015-12-04 16:00:02'],
  ['BBD','2.000000','2014-11-10 13:15:30'],
  ['BDT','78.319880','2015-12-04 16:00:02'],
  ['BGN','1.804490','2015-12-04 16:00:02'],
  ['BHD','0.377206','2015-12-04 16:00:02'],
  ['BIF','1569.565000','2015-12-04 16:00:02'],
  ['BMD','1.000000','2014-11-10 13:15:30'],
  ['BND','1.399536','2015-12-04 16:00:02'],
  ['BOB','6.906811','2015-12-04 16:00:02'],
  ['BRL','3.781641','2015-12-04 16:00:02'],
  ['BSD','1.000000','2014-11-10 13:15:30'],
  ['BTC','0.002777','2015-12-04 16:00:02'],
  ['BTN','66.723234','2015-12-04 16:00:02'],
  ['BWP','10.820863','2015-12-04 16:00:02'],
  ['BYR','18109.300000','2015-12-04 16:00:02'],
  ['BZD','1.994284','2015-12-04 16:00:02'],
  ['CAD','1.333946','2015-12-04 16:00:02'],
  ['CDF','927.750000','2015-12-04 16:00:02'],
  ['CHF','1.002424','2015-12-04 16:00:02'],
  ['CLF','0.024598','2015-12-04 13:00:03'],
  ['CLP','701.012294','2015-12-04 16:00:02'],
  ['CNY','6.400680','2015-12-04 16:00:02'],
  ['COP','3141.588366','2015-12-04 16:00:02'],
  ['CRC','532.240000','2015-12-04 16:00:02'],
  ['CUC','1.000000','2015-02-23 23:00:03'],
  ['CUP','0.999638','2015-12-04 16:00:02'],
  ['CVE','101.265832','2015-12-04 16:00:02'],
  ['CZK','24.921320','2015-12-04 16:00:02'],
  ['DJF','177.565001','2015-12-04 16:00:02'],
  ['DKK','6.875433','2015-12-04 16:00:02'],
  ['DOP','45.352840','2015-12-04 16:00:02'],
  ['DZD','107.265700','2015-12-04 16:00:02'],
  ['EEK','14.501325','2015-12-04 16:00:02'],
  ['EGP','7.828393','2015-12-04 16:00:02'],
  ['ERN','15.001500','2015-12-04 13:00:03'],
  ['ETB','21.084980','2015-12-04 16:00:02'],
  ['EUR','0.918386','2015-12-04 16:00:02'],
  ['FJD','2.134483','2015-12-04 16:00:02'],
  ['FKP','0.661153','2015-12-04 16:00:02'],
  ['GBP','0.661153','2015-12-04 16:00:02'],
  ['GEL','2.389500','2015-12-04 16:00:02'],
  ['GGP','0.661153','2015-12-04 16:00:02'],
  ['GHS','3.808824','2015-12-04 16:00:02'],
  ['GIP','0.661153','2015-12-04 16:00:02'],
  ['GMD','39.582140','2015-12-04 16:00:02'],
  ['GNF','7740.925098','2015-12-04 16:00:02'],
  ['GTQ','7.607755','2015-12-04 16:00:02'],
  ['GYD','205.908836','2015-12-04 04:00:02'],
  ['HKD','7.750073','2015-12-04 16:00:02'],
  ['HNL','21.902810','2015-12-04 16:00:02'],
  ['HRK','7.037457','2015-12-04 16:00:02'],
  ['HTG','56.125687','2015-12-04 16:00:02'],
  ['HUF','288.363897','2015-12-04 16:00:02'],
  ['IDR','13824.083333','2015-12-04 16:00:02'],
  ['ILS','3.844568','2015-12-04 16:00:02'],
  ['IMP','0.661153','2015-12-04 16:00:02'],
  ['INR','66.726030','2015-12-04 16:00:02'],
  ['IQD','1104.008325','2015-12-04 04:00:02'],
  ['IRR','29995.000000','2015-12-04 07:00:02'],
  ['ISK','130.368001','2015-12-04 16:00:02'],
  ['JEP','0.661153','2015-12-04 16:00:02'],
  ['JMD','119.111100','2015-12-04 16:00:02'],
  ['JOD','0.709862','2015-12-04 16:00:02'],
  ['JPY','122.934501','2015-12-04 16:00:02'],
  ['KES','102.130301','2015-12-04 16:00:02'],
  ['KGS','75.888851','2015-12-04 12:00:02'],
  ['KHR','4054.302500','2015-12-04 16:00:02'],
  ['KMF','450.828125','2015-12-04 16:00:02'],
  ['KPW','899.910000','2015-12-04 12:00:02'],
  ['KRW','1160.760007','2015-12-04 16:00:02'],
  ['KWD','0.303868','2015-12-04 16:00:02'],
  ['KYD','0.824907','2015-12-04 04:00:02'],
  ['KZT','307.096991','2015-12-04 16:00:02'],
  ['LAK','8019.854951','2015-12-04 10:00:03'],
  ['LBP','1505.835000','2015-12-04 16:00:02'],
  ['LKR','143.157899','2015-12-04 16:00:02'],
  ['LRD','84.651538','2015-12-04 15:00:02'],
  ['LSL','14.413200','2015-12-04 16:00:02'],
  ['LTL','3.088533','2015-12-04 16:00:02'],
  ['LVL','0.651339','2015-12-04 16:00:02'],
  ['LYD','1.403624','2015-12-04 16:00:02'],
  ['MAD','9.910614','2015-12-04 16:00:02'],
  ['MDL','19.844180','2015-12-04 16:00:02'],
  ['MGA','3228.226667','2015-12-04 16:00:02'],
  ['MKD','56.752670','2015-12-04 16:00:02'],
  ['MMK','1271.442512','2015-12-04 11:00:03'],
  ['MNT','1994.166667','2015-12-04 12:00:02'],
  ['MOP','7.933941','2015-12-04 16:00:02'],
  ['MRO','300.271000','2015-12-04 16:00:02'],
  ['MTL','0.683738','2015-12-04 14:00:03'],
  ['MUR','36.046237','2015-12-04 16:00:02'],
  ['MVR','15.330000','2015-12-04 06:00:02'],
  ['MWK','603.025606','2015-12-04 16:00:02'],
  ['MXN','16.720260','2015-12-04 16:00:02'],
  ['MYR','4.202669','2015-12-04 16:00:02'],
  ['MZN','43.795620','2015-12-04 16:00:02'],
  ['NAD','14.416120','2015-12-04 16:00:02'],
  ['NGN','198.840101','2015-12-04 16:00:02'],
  ['NIO','27.957450','2015-12-04 16:00:02'],
  ['NOK','8.530139','2015-12-04 16:00:02'],
  ['NPR','105.361199','2015-12-04 16:00:02'],
  ['NZD','1.496101','2015-12-04 16:00:02'],
  ['OMR','0.382613','2015-12-04 16:00:02'],
  ['PAB','1.000000','2014-11-10 13:15:30'],
  ['PEN','3.363726','2015-12-04 16:00:02'],
  ['PGK','2.980700','2015-12-04 16:00:02'],
  ['PHP','47.086850','2015-12-04 16:00:02'],
  ['PKR','105.343701','2015-12-04 16:00:02'],
  ['PLN','3.969894','2015-12-04 16:00:02'],
  ['PYG','5749.015078','2015-12-04 16:00:02'],
  ['QAR','3.640659','2015-12-04 16:00:02'],
  ['RON','4.119107','2015-12-04 16:00:02'],
  ['RSD','111.951079','2015-12-04 16:00:02'],
  ['RUB','67.601430','2015-12-04 16:00:02'],
  ['RWF','745.320500','2015-12-04 16:00:02'],
  ['SAR','3.752831','2015-12-04 16:00:02'],
  ['SBD','8.028554','2015-12-04 16:00:02'],
  ['SCR','12.167375','2015-12-04 16:00:02'],
  ['SDG','6.088870','2015-12-04 16:00:02'],
  ['SEK','8.536206','2015-12-04 16:00:02'],
  ['SGD','1.398835','2015-12-04 16:00:02'],
  ['SHP','0.661153','2015-12-04 16:00:02'],
  ['SLL','4117.500000','2015-12-04 06:00:02'],
  ['SOS','619.382497','2015-12-04 16:00:02'],
  ['SRD','3.274673','2015-12-04 16:00:02'],
  ['STD','22678.250000','2015-12-04 16:00:02'],
  ['SVC','8.678123','2015-12-04 16:00:02'],
  ['SYP','220.999335','2015-12-04 16:00:02'],
  ['SZL','14.416120','2015-12-04 16:00:02'],
  ['THB','35.864560','2015-12-04 16:00:02'],
  ['TJS','6.758650','2015-12-04 07:00:03'],
  ['TMT','3.501333','2015-12-04 16:00:02'],
  ['TND','2.026971','2015-12-04 16:00:02'],
  ['TOP','2.246257','2015-12-04 09:00:03'],
  ['TRY','2.902727','2015-12-04 16:00:02'],
  ['TTD','6.376806','2015-12-04 16:00:02'],
  ['TWD','32.764710','2015-12-04 16:00:02'],
  ['TZS','2160.654984','2015-12-04 16:00:02'],
  ['UAH','23.574310','2015-12-04 16:00:02'],
  ['UGX','3319.781667','2015-12-04 16:00:02'],
  ['USD','1.000000','2014-11-10 13:15:30'],
  ['UYU','29.598960','2015-12-04 16:00:02'],
  ['UZS','2752.714966','2015-12-03 06:00:02'],
  ['VEF','6.320471','2015-12-04 04:00:02'],
  ['VND','22484.066667','2015-12-04 14:00:03'],
  ['VUV','111.898749','2015-12-04 06:00:03'],
  ['WST','2.634599','2015-12-04 09:00:03'],
  ['XAF','607.138157','2015-12-04 16:00:02'],
  ['XAG','0.070890','2015-12-04 16:00:02'],
  ['XAU','0.000941','2015-12-04 13:00:04'],
  ['XCD','2.701020','2015-11-14 15:00:03'],
  ['XDR','0.725569','2015-12-04 16:00:02'],
  ['XOF','607.263477','2015-12-04 16:00:02'],
  ['XPD','0.001866','2015-12-03 22:00:02'],
  ['XPF','110.265851','2015-12-04 16:00:02'],
  ['XPT','0.001180','2015-12-03 22:00:02'],
  ['YER','214.940000','2015-12-04 16:00:02'],
  ['ZAR','14.420680','2015-12-04 16:00:02'],
  ['ZMK','5252.024745','2015-12-04 15:00:02'],
  ['ZMW','10.596825','2015-12-04 16:00:02'],
  ['ZWL','322.387247','2015-12-04 16:00:02']
];

    }
   
}

}