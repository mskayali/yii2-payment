<?php

use yii\db\Schema;
use yii\db\Migration;

class m151204_144849_currency extends Migration
{
    public function up()
    {
        $this->createTable('currency', [
            'code' => $this->string(5)->primaryKey(),
            'no' => $this->integer(),
            'symbol' => $this->string(5),
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
          ['AED','784', null,'2'],
      ['AFN','971', '؋','2'],
      ['ALL','8', 'Lek','2'],
      ['AMD','51', null,'2'],
      ['ANG','532', 'ƒ','2'],
      ['AOA','973', 'Kz','2'],
      ['ARS','32', '$','2'],
      ['AUD','36', '$','2'],
      ['AWG','533', 'ƒ','2'],
      ['AZN','944', 'ман','2'],
      ['BAM','977', 'KM','2'],
      ['BBD','52', '$','2'],
      ['BDT','50', null,'2'],
      ['BGN','975', 'лв','2'],
      ['BHD','48', null,'3'],
      ['BIF','108', null,'0'],
      ['BMD','60', '$','2'],
      ['BND','96', '$','2'],
      ['BOB','68', '$b','2'],
      ['BOV','984', null,'2'],
      ['BRL','986', 'R$','2'],
      ['BSD','44', '$','2'],
      ['BTN','64', null,'2'],
      ['BWP','72', 'P','2'],
      ['BYR','974', 'p.','0'],
      ['BZD','84', 'BZ$','2'],
      ['CAD','124', '$','2'],
      ['CDF','976', null,'2'],
      ['CHE','947', 'CHF','2'],
      ['CHF','756', 'CHF','2'],
      ['CHW','948', null,'2'],
      ['CLF','990', null,'4'],
      ['CLP','152', null,'0'],
      ['CNY','156', '¥','2'],
      ['COP','170', '$','2'],
      ['COU','970', null,'2'],
      ['CRC','188', '₡','2'],
      ['CUC','931', null,'2'],
      ['CUP','192', '₱','2'],
      ['CVE','132', null,'2'],
      ['CZK','203', 'Kč','2'],
      ['DJF','262', null,'0'],
      ['DKK','208', 'kr','2'],
      ['DOP','214', 'RD$','2'],
      ['DZD','12', null,'2'],
      ['EGP','818', '£','2'],
      ['ERN','232', 'Nfk','2'],
      ['ETB','230', null,'2'],
      ['EUR','978', '€','2'],
      ['FJD','242', '$','2'],
      ['FKP','238', '£','2'],
      ['GBP','826', '£','2'],
      ['GEL','981', null,'2'],
      ['GHS','936', null,'2'],
      ['GIP','292', '£','2'],
      ['GMD','270', 'D','2'],
      ['GNF','324', null,'0'],
      ['GTQ','320', 'Q','2'],
      ['GYD','328', '$','2'],
      ['HKD','344', '$','2'],
      ['HNL','340', 'L','2'],
      ['HRK','191', 'kn','2'],
      ['HTG','332', 'G','2'],
      ['HUF','348', 'Ft','2'],
      ['IDR','360', 'Rp','2'],
      ['ILS','376', '₪','2'],
      ['INR','356', '₹','2'],
      ['IQD','368', null,'3'],
      ['IRR','364', '﷼','2'],
      ['ISK','352', 'kr','0'],
      ['JMD','388', '$','2'],
      ['JOD','400', null,'3'],
      ['JPY','392', '¥','0'],
      ['KES','404', null,'2'],
      ['KGS','417', 'лв','2'],
      ['KHR','116', '៛','2'],
      ['KMF','174', null,'0'],
      ['KPW','408', '₩','2'],
      ['KRW','410', '₩','0'],
      ['KWD','414', null,'3'],
      ['KYD','136', '$','2'],
      ['KZT','398', 'лв','2'],
      ['LAK','418', '₭','2'],
      ['LBP','422', '£','2'],
      ['LKR','144', '₨','2'],
      ['LRD','430', '$','2'],
      ['LSL','426', 'L','2'],
      ['LTL','440', 'Lt','2'],
      ['LYD','434', null,'3'],
      ['MAD','504', null,'2'],
      ['MDL','498', null,'2'],
      ['MGA','969', null,'2'],
      ['MKD','807', 'ден','2'],
      ['MMK','104', 'K','2'],
      ['MNT','496', '₮','2'],
      ['MOP','446', 'MOP','2'],
      ['MRO','478', 'UM','2'],
      ['MUR','480', '₨','2'],
      ['MVR','462', 'Rf','2'],
      ['MWK','454', 'MK','2'],
      ['MXN','484', '$','2'],
      ['MXV','979', null,'2'],
      ['MYR','458', 'RM','2'],
      ['MZN','943', 'MT','2'],
      ['NAD','516', '$','2'],
      ['NGN','566', '₦','2'],
      ['NIO','558', 'C$','2'],
      ['NOK','578', 'kr','2'],
      ['NPR','524', '₨','2'],
      ['NZD','554', '$','2'],
      ['OMR','512', '﷼','3'],
      ['PAB','590', 'B/.','2'],
      ['PEN','604', 'S/.','2'],
      ['PGK','598', null,'2'],
      ['PHP','608', 'Php','2'],
      ['PKR','586', '₨','2'],
      ['PLN','985', 'zł','2'],
      ['PYG','600', 'Gs','0'],
      ['QAR','634', '﷼','2'],
      ['RON','946', 'lei','2'],
      ['RSD','941', 'Дин','2'],
      ['RUB','643', 'руб','2'],
      ['RWF','646', null,'0'],
      ['SAR','682', '﷼','2'],
      ['SBD','90', '$','2'],
      ['SCR','690', '₨','2'],
      ['SDG','938', null,'2'],
      ['SEK','752', 'kr','2'],
      ['SGD','702', '$','2'],
      ['SHP','654', '£','2'],
      ['SLL','694', 'Le','2'],
      ['SOS','706', 'S','2'],
      ['SRD','968', '$','2'],
      ['SSP','728', null,'2'],
      ['STD','678', 'Db','2'],
      ['SVC','222', '$','2'],
      ['SYP','760', '£','2'],
      ['SZL','748', null,'2'],
      ['THB','764', '฿','2'],
      ['TJS','972', null,'2'],
      ['TMT','934', null,'2'],
      ['TND','788', null,'3'],
      ['TOP','776', 'T$','2'],
      ['TRY','949', '₺','2'],
      ['TTD','780', 'TT$','2'],
      ['TWD','901', 'NT$','2'],
      ['TZS','834', null,'2'],
      ['UAH','980', '₴','2'],
      ['UGX','800', null,'0'],
      ['USD','840', '$','2'],
      ['USN','997', null,'2'],
      ['UYI','940', null,'0'],
      ['UYU','858', '$U','2'],
      ['UZS','860', 'лв','2'],
      ['VEF','937', 'Bs','2'],
      ['VND','704', '₫','0'],
      ['VUV','548', 'Vt','0'],
      ['WST','882', 'WS$','2'],
      ['XAF','950', null,'0'],
      ['XCD','951', '$','2'],
      ['XOF','952', null,'0'],
      ['XPF','953', null,'0'],
      ['YER','886', '﷼','2'],
      ['ZAR','710', 'R','2'],
      ['ZMW','967', null,'2'],
      ['ZWL','932', null,'2']
        ];

    }
   
}