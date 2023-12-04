<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Countries extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->delete();
        $countries = [
            array('iso' => 'AF', 'name' => 'AFGHANISTAN', 'nicename' => 'Afghanistan', 'iso3' => 'AFG', 'numcode' => '4', 'phonecode' => '93'),
            array('iso' => 'AL', 'name' => 'ALBANIA', 'nicename' => 'Albania', 'iso3' => 'ALB', 'numcode' => '8', 'phonecode' => '355'),
            array('iso' => 'DZ', 'name' => 'ALGERIA', 'nicename' => 'Algeria', 'iso3' => 'DZA', 'numcode' => '12', 'phonecode' => '213'),
            array('iso' => 'AS', 'name' => 'AMERICAN SAMOA', 'nicename' => 'American Samoa', 'iso3' => 'ASM', 'numcode' => '16', 'phonecode' => '1684'),
            array('iso' => 'AD', 'name' => 'ANDORRA', 'nicename' => 'Andorra', 'iso3' => 'AND', 'numcode' => '20', 'phonecode' => '376'),
            array('iso' => 'AO', 'name' => 'ANGOLA', 'nicename' => 'Angola', 'iso3' => 'AGO', 'numcode' => '24', 'phonecode' => '244'),
            array('iso' => 'AI', 'name' => 'ANGUILLA', 'nicename' => 'Anguilla', 'iso3' => 'AIA', 'numcode' => '660', 'phonecode' => '1264'),
            array('iso' => 'AG', 'name' => 'ANTIGUA AND BARBUDA', 'nicename' => 'Antigua and Barbuda', 'iso3' => 'ATG', 'numcode' => '28', 'phonecode' => '1268'),
            array('iso' => 'AR', 'name' => 'ARGENTINA', 'nicename' => 'Argentina', 'iso3' => 'ARG', 'numcode' => '32', 'phonecode' => '54'),
            array('iso' => 'AM', 'name' => 'ARMENIA', 'nicename' => 'Armenia', 'iso3' => 'ARM', 'numcode' => '51', 'phonecode' => '374'),
            array('iso' => 'AW', 'name' => 'ARUBA', 'nicename' => 'Aruba', 'iso3' => 'ABW', 'numcode' => '533', 'phonecode' => '297'),
            array('iso' => 'AU', 'name' => 'AUSTRALIA', 'nicename' => 'Australia', 'iso3' => 'AUS', 'numcode' => '36', 'phonecode' => '61'),
            array('iso' => 'AT', 'name' => 'AUSTRIA', 'nicename' => 'Austria', 'iso3' => 'AUT', 'numcode' => '40', 'phonecode' => '43'),
            array('iso' => 'AZ', 'name' => 'AZERBAIJAN', 'nicename' => 'Azerbaijan', 'iso3' => 'AZE', 'numcode' => '31', 'phonecode' => '994'),
            array('iso' => 'BS', 'name' => 'BAHAMAS', 'nicename' => 'Bahamas', 'iso3' => 'BHS', 'numcode' => '44', 'phonecode' => '1242'),
            array('iso' => 'BH', 'name' => 'BAHRAIN', 'nicename' => 'Bahrain', 'iso3' => 'BHR', 'numcode' => '48', 'phonecode' => '973'),
            array('iso' => 'BD', 'name' => 'BANGLADESH', 'nicename' => 'Bangladesh', 'iso3' => 'BGD', 'numcode' => '50', 'phonecode' => '880'),
            array('iso' => 'BB', 'name' => 'BARBADOS', 'nicename' => 'Barbados', 'iso3' => 'BRB', 'numcode' => '52', 'phonecode' => '1246'),
            array('iso' => 'BY', 'name' => 'BELARUS', 'nicename' => 'Belarus', 'iso3' => 'BLR', 'numcode' => '112', 'phonecode' => '375'),
            array('iso' => 'BE', 'name' => 'BELGIUM', 'nicename' => 'Belgium', 'iso3' => 'BEL', 'numcode' => '56', 'phonecode' => '32'),
            array('iso' => 'BZ', 'name' => 'BELIZE', 'nicename' => 'Belize', 'iso3' => 'BLZ', 'numcode' => '84', 'phonecode' => '501'),
            array('iso' => 'BJ', 'name' => 'BENIN', 'nicename' => 'Benin', 'iso3' => 'BEN', 'numcode' => '204', 'phonecode' => '229'),
            array('iso' => 'BM', 'name' => 'BERMUDA', 'nicename' => 'Bermuda', 'iso3' => 'BMU', 'numcode' => '60', 'phonecode' => '1441'),
            array('iso' => 'BT', 'name' => 'BHUTAN', 'nicename' => 'Bhutan', 'iso3' => 'BTN', 'numcode' => '64', 'phonecode' => '975'),
            array('iso' => 'BO', 'name' => 'BOLIVIA', 'nicename' => 'Bolivia', 'iso3' => 'BOL', 'numcode' => '68', 'phonecode' => '591'),
            array('iso' => 'BA', 'name' => 'BOSNIA AND HERZEGOVINA', 'nicename' => 'Bosnia and Herzegovina', 'iso3' => 'BIH', 'numcode' => '70', 'phonecode' => '387'),
            array('iso' => 'BW', 'name' => 'BOTSWANA', 'nicename' => 'Botswana', 'iso3' => 'BWA', 'numcode' => '72', 'phonecode' => '267'),
            array('iso' => 'BR', 'name' => 'BRAZIL', 'nicename' => 'Brazil', 'iso3' => 'BRA', 'numcode' => '76', 'phonecode' => '55'),
            array('iso' => 'BN', 'name' => 'BRUNEI DARUSSALAM', 'nicename' => 'Brunei Darussalam', 'iso3' => 'BRN', 'numcode' => '96', 'phonecode' => '673'),
            array('iso' => 'BG', 'name' => 'BULGARIA', 'nicename' => 'Bulgaria', 'iso3' => 'BGR', 'numcode' => '100', 'phonecode' => '359'),
            array('iso' => 'BF', 'name' => 'BURKINA FASO', 'nicename' => 'Burkina Faso', 'iso3' => 'BFA', 'numcode' => '854', 'phonecode' => '226'),
            array('iso' => 'BI', 'name' => 'BURUNDI', 'nicename' => 'Burundi', 'iso3' => 'BDI', 'numcode' => '108', 'phonecode' => '257'),
            array('iso' => 'KH', 'name' => 'CAMBODIA', 'nicename' => 'Cambodia', 'iso3' => 'KHM', 'numcode' => '116', 'phonecode' => '855'),
            array('iso' => 'CM', 'name' => 'CAMEROON', 'nicename' => 'Cameroon', 'iso3' => 'CMR', 'numcode' => '120', 'phonecode' => '237'),
            array('iso' => 'CA', 'name' => 'CANADA', 'nicename' => 'Canada', 'iso3' => 'CAN', 'numcode' => '124', 'phonecode' => '1'),
            array('iso' => 'CV', 'name' => 'CAPE VERDE', 'nicename' => 'Cape Verde', 'iso3' => 'CPV', 'numcode' => '132', 'phonecode' => '238'),
            array('iso' => 'KY', 'name' => 'CAYMAN ISLANDS', 'nicename' => 'Cayman Islands', 'iso3' => 'CYM', 'numcode' => '136', 'phonecode' => '1345'),
            array('iso' => 'CF', 'name' => 'CENTRAL AFRICAN REPUBLIC', 'nicename' => 'Central African Republic', 'iso3' => 'CAF', 'numcode' => '140', 'phonecode' => '236'),
            array('iso' => 'TD', 'name' => 'CHAD', 'nicename' => 'Chad', 'iso3' => 'TCD', 'numcode' => '148', 'phonecode' => '235'),
            array('iso' => 'CL', 'name' => 'CHILE', 'nicename' => 'Chile', 'iso3' => 'CHL', 'numcode' => '152', 'phonecode' => '56'),
            array('iso' => 'CN', 'name' => 'CHINA', 'nicename' => 'China', 'iso3' => 'CHN', 'numcode' => '156', 'phonecode' => '86'),
            array('iso' => 'CO', 'name' => 'COLOMBIA', 'nicename' => 'Colombia', 'iso3' => 'COL', 'numcode' => '170', 'phonecode' => '57'),
            array('iso' => 'KM', 'name' => 'COMOROS', 'nicename' => 'Comoros', 'iso3' => 'COM', 'numcode' => '174', 'phonecode' => '269'),
            array('iso' => 'CG', 'name' => 'CONGO', 'nicename' => 'Congo', 'iso3' => 'COG', 'numcode' => '178', 'phonecode' => '242'),
            array('iso' => 'CD', 'name' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'nicename' => 'Congo, the Democratic Republic of the', 'iso3' => 'COD', 'numcode' => '180', 'phonecode' => '242'),
            array('iso' => 'CK', 'name' => 'COOK ISLANDS', 'nicename' => 'Cook Islands', 'iso3' => 'COK', 'numcode' => '184', 'phonecode' => '682'),
            array('iso' => 'CR', 'name' => 'COSTA RICA', 'nicename' => 'Costa Rica', 'iso3' => 'CRI', 'numcode' => '188', 'phonecode' => '506'),
            array('iso' => 'CI', 'name' => 'COTE D\'IVOIRE', 'nicename' => 'Cote D\'Ivoire', 'iso3' => 'CIV', 'numcode' => '384', 'phonecode' => '225'),
            array('iso' => 'HR', 'name' => 'CROATIA', 'nicename' => 'Croatia', 'iso3' => 'HRV', 'numcode' => '191', 'phonecode' => '385'),
            array('iso' => 'CU', 'name' => 'CUBA', 'nicename' => 'Cuba', 'iso3' => 'CUB', 'numcode' => '192', 'phonecode' => '53'),
            array('iso' => 'CY', 'name' => 'CYPRUS', 'nicename' => 'Cyprus', 'iso3' => 'CYP', 'numcode' => '196', 'phonecode' => '357'),
            array('iso' => 'CZ', 'name' => 'CZECH REPUBLIC', 'nicename' => 'Czech Republic', 'iso3' => 'CZE', 'numcode' => '203', 'phonecode' => '420'),
            array('iso' => 'DK', 'name' => 'DENMARK', 'nicename' => 'Denmark', 'iso3' => 'DNK', 'numcode' => '208', 'phonecode' => '45'),
            array('iso' => 'DJ', 'name' => 'DJIBOUTI', 'nicename' => 'Djibouti', 'iso3' => 'DJI', 'numcode' => '262', 'phonecode' => '253'),
            array('iso' => 'DM', 'name' => 'DOMINICA', 'nicename' => 'Dominica', 'iso3' => 'DMA', 'numcode' => '212', 'phonecode' => '1767'),
            array('iso' => 'DO', 'name' => 'DOMINICAN REPUBLIC', 'nicename' => 'Dominican Republic', 'iso3' => 'DOM', 'numcode' => '214', 'phonecode' => '1809'),
            array('iso' => 'EC', 'name' => 'ECUADOR', 'nicename' => 'Ecuador', 'iso3' => 'ECU', 'numcode' => '218', 'phonecode' => '593'),
            array('iso' => 'EG', 'name' => 'EGYPT', 'nicename' => 'Egypt', 'iso3' => 'EGY', 'numcode' => '818', 'phonecode' => '20'),
            array('iso' => 'SV', 'name' => 'EL SALVADOR', 'nicename' => 'El Salvador', 'iso3' => 'SLV', 'numcode' => '222', 'phonecode' => '503'),
            array('iso' => 'GQ', 'name' => 'EQUATORIAL GUINEA', 'nicename' => 'Equatorial Guinea', 'iso3' => 'GNQ', 'numcode' => '226', 'phonecode' => '240'),
            array('iso' => 'ER', 'name' => 'ERITREA', 'nicename' => 'Eritrea', 'iso3' => 'ERI', 'numcode' => '232', 'phonecode' => '291'),
            array('iso' => 'EE', 'name' => 'ESTONIA', 'nicename' => 'Estonia', 'iso3' => 'EST', 'numcode' => '233', 'phonecode' => '372'),
            array('iso' => 'ET', 'name' => 'ETHIOPIA', 'nicename' => 'Ethiopia', 'iso3' => 'ETH', 'numcode' => '231', 'phonecode' => '251'),
            array('iso' => 'FK', 'name' => 'FALKLAND ISLANDS (MALVINAS)', 'nicename' => 'Falkland Islands (Malvinas)', 'iso3' => 'FLK', 'numcode' => '238', 'phonecode' => '500'),
            array('iso' => 'FO', 'name' => 'FAROE ISLANDS', 'nicename' => 'Faroe Islands', 'iso3' => 'FRO', 'numcode' => '234', 'phonecode' => '298'),
            array('iso' => 'FJ', 'name' => 'FIJI', 'nicename' => 'Fiji', 'iso3' => 'FJI', 'numcode' => '242', 'phonecode' => '679'),
            array('iso' => 'FI', 'name' => 'FINLAND', 'nicename' => 'Finland', 'iso3' => 'FIN', 'numcode' => '246', 'phonecode' => '358'),
            array('iso' => 'FR', 'name' => 'FRANCE', 'nicename' => 'France', 'iso3' => 'FRA', 'numcode' => '250', 'phonecode' => '33'),
            array('iso' => 'GF', 'name' => 'FRENCH GUIANA', 'nicename' => 'French Guiana', 'iso3' => 'GUF', 'numcode' => '254', 'phonecode' => '594'),
            array('iso' => 'PF', 'name' => 'FRENCH POLYNESIA', 'nicename' => 'French Polynesia', 'iso3' => 'PYF', 'numcode' => '258', 'phonecode' => '689'),
            array('iso' => 'GA', 'name' => 'GABON', 'nicename' => 'Gabon', 'iso3' => 'GAB', 'numcode' => '266', 'phonecode' => '241'),
            array('iso' => 'GM', 'name' => 'GAMBIA', 'nicename' => 'Gambia', 'iso3' => 'GMB', 'numcode' => '270', 'phonecode' => '220'),
            array('iso' => 'GE', 'name' => 'GEORGIA', 'nicename' => 'Georgia', 'iso3' => 'GEO', 'numcode' => '268', 'phonecode' => '995'),
            array('iso' => 'DE', 'name' => 'GERMANY', 'nicename' => 'Germany', 'iso3' => 'DEU', 'numcode' => '276', 'phonecode' => '49'),
            array('iso' => 'GH', 'name' => 'GHANA', 'nicename' => 'Ghana', 'iso3' => 'GHA', 'numcode' => '288', 'phonecode' => '233'),
            array('iso' => 'GI', 'name' => 'GIBRALTAR', 'nicename' => 'Gibraltar', 'iso3' => 'GIB', 'numcode' => '292', 'phonecode' => '350'),
            array('iso' => 'GR', 'name' => 'GREECE', 'nicename' => 'Greece', 'iso3' => 'GRC', 'numcode' => '300', 'phonecode' => '30'),
            array('iso' => 'GL', 'name' => 'GREENLAND', 'nicename' => 'Greenland', 'iso3' => 'GRL', 'numcode' => '304', 'phonecode' => '299'),
            array('iso' => 'GD', 'name' => 'GRENADA', 'nicename' => 'Grenada', 'iso3' => 'GRD', 'numcode' => '308', 'phonecode' => '1473'),
            array('iso' => 'GP', 'name' => 'GUADELOUPE', 'nicename' => 'Guadeloupe', 'iso3' => 'GLP', 'numcode' => '312', 'phonecode' => '590'),
            array('iso' => 'GU', 'name' => 'GUAM', 'nicename' => 'Guam', 'iso3' => 'GUM', 'numcode' => '316', 'phonecode' => '1671'),
            array('iso' => 'GT', 'name' => 'GUATEMALA', 'nicename' => 'Guatemala', 'iso3' => 'GTM', 'numcode' => '320', 'phonecode' => '502'),
            array('iso' => 'GN', 'name' => 'GUINEA', 'nicename' => 'Guinea', 'iso3' => 'GIN', 'numcode' => '324', 'phonecode' => '224'),
            array('iso' => 'GW', 'name' => 'GUINEA-BISSAU', 'nicename' => 'Guinea-Bissau', 'iso3' => 'GNB', 'numcode' => '624', 'phonecode' => '245'),
            array('iso' => 'GY', 'name' => 'GUYANA', 'nicename' => 'Guyana', 'iso3' => 'GUY', 'numcode' => '328', 'phonecode' => '592'),
            array('iso' => 'HT', 'name' => 'HAITI', 'nicename' => 'Haiti', 'iso3' => 'HTI', 'numcode' => '332', 'phonecode' => '509'),
            array('iso' => 'VA', 'name' => 'HOLY SEE (VATICAN CITY STATE)', 'nicename' => 'Holy See (Vatican City State)', 'iso3' => 'VAT', 'numcode' => '336', 'phonecode' => '39'),
            array('iso' => 'HN', 'name' => 'HONDURAS', 'nicename' => 'Honduras', 'iso3' => 'HND', 'numcode' => '340', 'phonecode' => '504'),
            array('iso' => 'HK', 'name' => 'HONG KONG', 'nicename' => 'Hong Kong', 'iso3' => 'HKG', 'numcode' => '344', 'phonecode' => '852'),
            array('iso' => 'HU', 'name' => 'HUNGARY', 'nicename' => 'Hungary', 'iso3' => 'HUN', 'numcode' => '348', 'phonecode' => '36'),
            array('iso' => 'IS', 'name' => 'ICELAND', 'nicename' => 'Iceland', 'iso3' => 'ISL', 'numcode' => '352', 'phonecode' => '354'),
            array('iso' => 'IN', 'name' => 'INDIA', 'nicename' => 'India', 'iso3' => 'IND', 'numcode' => '356', 'phonecode' => '91'),
            array('iso' => 'ID', 'name' => 'INDONESIA', 'nicename' => 'Indonesia', 'iso3' => 'IDN', 'numcode' => '360', 'phonecode' => '62'),
            array('iso' => 'IR', 'name' => 'IRAN, ISLAMIC REPUBLIC OF', 'nicename' => 'Iran, Islamic Republic of', 'iso3' => 'IRN', 'numcode' => '364', 'phonecode' => '98'),
            array('iso' => 'IQ', 'name' => 'IRAQ', 'nicename' => 'Iraq', 'iso3' => 'IRQ', 'numcode' => '368', 'phonecode' => '964'),
            array('iso' => 'IE', 'name' => 'IRELAND', 'nicename' => 'Ireland', 'iso3' => 'IRL', 'numcode' => '372', 'phonecode' => '353'),
            array('iso' => 'IL', 'name' => 'ISRAEL', 'nicename' => 'Israel', 'iso3' => 'ISR', 'numcode' => '376', 'phonecode' => '972'),
            array('iso' => 'IT', 'name' => 'ITALY', 'nicename' => 'Italy', 'iso3' => 'ITA', 'numcode' => '380', 'phonecode' => '39'),
            array('iso' => 'JM', 'name' => 'JAMAICA', 'nicename' => 'Jamaica', 'iso3' => 'JAM', 'numcode' => '388', 'phonecode' => '1876'),
            array('iso' => 'JP', 'name' => 'JAPAN', 'nicename' => 'Japan', 'iso3' => 'JPN', 'numcode' => '392', 'phonecode' => '81'),
            array('iso' => 'JO', 'name' => 'JORDAN', 'nicename' => 'Jordan', 'iso3' => 'JOR', 'numcode' => '400', 'phonecode' => '962'),
            array('iso' => 'KZ', 'name' => 'KAZAKHSTAN', 'nicename' => 'Kazakhstan', 'iso3' => 'KAZ', 'numcode' => '398', 'phonecode' => '7'),
            array('iso' => 'KE', 'name' => 'KENYA', 'nicename' => 'Kenya', 'iso3' => 'KEN', 'numcode' => '404', 'phonecode' => '254'),
            array('iso' => 'KI', 'name' => 'KIRIBATI', 'nicename' => 'Kiribati', 'iso3' => 'KIR', 'numcode' => '296', 'phonecode' => '686'),
            array('iso' => 'KP', 'name' => 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'nicename' => 'Korea, Democratic People\'s Republic of', 'iso3' => 'PRK', 'numcode' => '408', 'phonecode' => '850'),
            array('iso' => 'KR', 'name' => 'KOREA, REPUBLIC OF', 'nicename' => 'Korea, Republic of', 'iso3' => 'KOR', 'numcode' => '410', 'phonecode' => '82'),
            array('iso' => 'KW', 'name' => 'KUWAIT', 'nicename' => 'Kuwait', 'iso3' => 'KWT', 'numcode' => '414', 'phonecode' => '965'),
            array('iso' => 'KG', 'name' => 'KYRGYZSTAN', 'nicename' => 'Kyrgyzstan', 'iso3' => 'KGZ', 'numcode' => '417', 'phonecode' => '996'),
            array('iso' => 'LA', 'name' => 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'nicename' => 'Lao People\'s Democratic Republic', 'iso3' => 'LAO', 'numcode' => '418', 'phonecode' => '856'),
            array('iso' => 'LV', 'name' => 'LATVIA', 'nicename' => 'Latvia', 'iso3' => 'LVA', 'numcode' => '428', 'phonecode' => '371'),
            array('iso' => 'LB', 'name' => 'LEBANON', 'nicename' => 'Lebanon', 'iso3' => 'LBN', 'numcode' => '422', 'phonecode' => '961'),
            array('iso' => 'LS', 'name' => 'LESOTHO', 'nicename' => 'Lesotho', 'iso3' => 'LSO', 'numcode' => '426', 'phonecode' => '266'),
            array('iso' => 'LR', 'name' => 'LIBERIA', 'nicename' => 'Liberia', 'iso3' => 'LBR', 'numcode' => '430', 'phonecode' => '231'),
            array('iso' => 'LY', 'name' => 'LIBYAN ARAB JAMAHIRIYA', 'nicename' => 'Libyan Arab Jamahiriya', 'iso3' => 'LBY', 'numcode' => '434', 'phonecode' => '218'),
            array('iso' => 'LI', 'name' => 'LIECHTENSTEIN', 'nicename' => 'Liechtenstein', 'iso3' => 'LIE', 'numcode' => '438', 'phonecode' => '423'),
            array('iso' => 'LT', 'name' => 'LITHUANIA', 'nicename' => 'Lithuania', 'iso3' => 'LTU', 'numcode' => '440', 'phonecode' => '370'),
            array('iso' => 'LU', 'name' => 'LUXEMBOURG', 'nicename' => 'Luxembourg', 'iso3' => 'LUX', 'numcode' => '442', 'phonecode' => '352'),
            array('iso' => 'MO', 'name' => 'MACAO', 'nicename' => 'Macao', 'iso3' => 'MAC', 'numcode' => '446', 'phonecode' => '853'),
            array('iso' => 'MK', 'name' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'nicename' => 'Macedonia, the Former Yugoslav Republic of', 'iso3' => 'MKD', 'numcode' => '807', 'phonecode' => '389'),
            array('iso' => 'MG', 'name' => 'MADAGASCAR', 'nicename' => 'Madagascar', 'iso3' => 'MDG', 'numcode' => '450', 'phonecode' => '261'),
            array('iso' => 'MW', 'name' => 'MALAWI', 'nicename' => 'Malawi', 'iso3' => 'MWI', 'numcode' => '454', 'phonecode' => '265'),
            array('iso' => 'MY', 'name' => 'MALAYSIA', 'nicename' => 'Malaysia', 'iso3' => 'MYS', 'numcode' => '458', 'phonecode' => '60'),
            array('iso' => 'MV', 'name' => 'MALDIVES', 'nicename' => 'Maldives', 'iso3' => 'MDV', 'numcode' => '462', 'phonecode' => '960'),
            array('iso' => 'ML', 'name' => 'MALI', 'nicename' => 'Mali', 'iso3' => 'MLI', 'numcode' => '466', 'phonecode' => '223'),
            array('iso' => 'MT', 'name' => 'MALTA', 'nicename' => 'Malta', 'iso3' => 'MLT', 'numcode' => '470', 'phonecode' => '356'),
            array('iso' => 'MH', 'name' => 'MARSHALL ISLANDS', 'nicename' => 'Marshall Islands', 'iso3' => 'MHL', 'numcode' => '584', 'phonecode' => '692'),
            array('iso' => 'MQ', 'name' => 'MARTINIQUE', 'nicename' => 'Martinique', 'iso3' => 'MTQ', 'numcode' => '474', 'phonecode' => '596'),
            array('iso' => 'MR', 'name' => 'MAURITANIA', 'nicename' => 'Mauritania', 'iso3' => 'MRT', 'numcode' => '478', 'phonecode' => '222'),
            array('iso' => 'MU', 'name' => 'MAURITIUS', 'nicename' => 'Mauritius', 'iso3' => 'MUS', 'numcode' => '480', 'phonecode' => '230'),
            array('iso' => 'MX', 'name' => 'MEXICO', 'nicename' => 'Mexico', 'iso3' => 'MEX', 'numcode' => '484', 'phonecode' => '52'),
            array('iso' => 'FM', 'name' => 'MICRONESIA, FEDERATED STATES OF', 'nicename' => 'Micronesia, Federated States of', 'iso3' => 'FSM', 'numcode' => '583', 'phonecode' => '691'),
            array('iso' => 'MD', 'name' => 'MOLDOVA, REPUBLIC OF', 'nicename' => 'Moldova, Republic of', 'iso3' => 'MDA', 'numcode' => '498', 'phonecode' => '373'),
            array('iso' => 'MC', 'name' => 'MONACO', 'nicename' => 'Monaco', 'iso3' => 'MCO', 'numcode' => '492', 'phonecode' => '377'),
            array('iso' => 'MN', 'name' => 'MONGOLIA', 'nicename' => 'Mongolia', 'iso3' => 'MNG', 'numcode' => '496', 'phonecode' => '976'),
            array('iso' => 'MS', 'name' => 'MONTSERRAT', 'nicename' => 'Montserrat', 'iso3' => 'MSR', 'numcode' => '500', 'phonecode' => '1664'),
            array('iso' => 'MA', 'name' => 'MOROCCO', 'nicename' => 'Morocco', 'iso3' => 'MAR', 'numcode' => '504', 'phonecode' => '212'),
            array('iso' => 'MZ', 'name' => 'MOZAMBIQUE', 'nicename' => 'Mozambique', 'iso3' => 'MOZ', 'numcode' => '508', 'phonecode' => '258'),
            array('iso' => 'MM', 'name' => 'MYANMAR', 'nicename' => 'Myanmar', 'iso3' => 'MMR', 'numcode' => '104', 'phonecode' => '95'),
            array('iso' => 'NA', 'name' => 'NAMIBIA', 'nicename' => 'Namibia', 'iso3' => 'NAM', 'numcode' => '516', 'phonecode' => '264'),
            array('iso' => 'NR', 'name' => 'NAURU', 'nicename' => 'Nauru', 'iso3' => 'NRU', 'numcode' => '520', 'phonecode' => '674'),
            array('iso' => 'NP', 'name' => 'NEPAL', 'nicename' => 'Nepal', 'iso3' => 'NPL', 'numcode' => '524', 'phonecode' => '977'),
            array('iso' => 'NL', 'name' => 'NETHERLANDS', 'nicename' => 'Netherlands', 'iso3' => 'NLD', 'numcode' => '528', 'phonecode' => '31'),
            array('iso' => 'AN', 'name' => 'NETHERLANDS ANTILLES', 'nicename' => 'Netherlands Antilles', 'iso3' => 'ANT', 'numcode' => '530', 'phonecode' => '599'),
            array('iso' => 'NC', 'name' => 'NEW CALEDONIA', 'nicename' => 'New Caledonia', 'iso3' => 'NCL', 'numcode' => '540', 'phonecode' => '687'),
            array('iso' => 'NZ', 'name' => 'NEW ZEALAND', 'nicename' => 'New Zealand', 'iso3' => 'NZL', 'numcode' => '554', 'phonecode' => '64'),
            array('iso' => 'NI', 'name' => 'NICARAGUA', 'nicename' => 'Nicaragua', 'iso3' => 'NIC', 'numcode' => '558', 'phonecode' => '505'),
            array('iso' => 'NE', 'name' => 'NIGER', 'nicename' => 'Niger', 'iso3' => 'NER', 'numcode' => '562', 'phonecode' => '227'),
            array('iso' => 'NG', 'name' => 'NIGERIA', 'nicename' => 'Nigeria', 'iso3' => 'NGA', 'numcode' => '566', 'phonecode' => '234'),
            array('iso' => 'NU', 'name' => 'NIUE', 'nicename' => 'Niue', 'iso3' => 'NIU', 'numcode' => '570', 'phonecode' => '683'),
            array('iso' => 'NF', 'name' => 'NORFOLK ISLAND', 'nicename' => 'Norfolk Island', 'iso3' => 'NFK', 'numcode' => '574', 'phonecode' => '672'),
            array('iso' => 'MP', 'name' => 'NORTHERN MARIANA ISLANDS', 'nicename' => 'Northern Mariana Islands', 'iso3' => 'MNP', 'numcode' => '580', 'phonecode' => '1670'),
            array('iso' => 'NO', 'name' => 'NORWAY', 'nicename' => 'Norway', 'iso3' => 'NOR', 'numcode' => '578', 'phonecode' => '47'),
            array('iso' => 'OM', 'name' => 'OMAN', 'nicename' => 'Oman', 'iso3' => 'OMN', 'numcode' => '512', 'phonecode' => '968'),
            array('iso' => 'PK', 'name' => 'PAKISTAN', 'nicename' => 'Pakistan', 'iso3' => 'PAK', 'numcode' => '586', 'phonecode' => '92'),
            array('iso' => 'PW', 'name' => 'PALAU', 'nicename' => 'Palau', 'iso3' => 'PLW', 'numcode' => '585', 'phonecode' => '680'),
            array('iso' => 'PA', 'name' => 'PANAMA', 'nicename' => 'Panama', 'iso3' => 'PAN', 'numcode' => '591', 'phonecode' => '507'),
            array('iso' => 'PG', 'name' => 'PAPUA NEW GUINEA', 'nicename' => 'Papua New Guinea', 'iso3' => 'PNG', 'numcode' => '598', 'phonecode' => '675'),
            array('iso' => 'PY', 'name' => 'PARAGUAY', 'nicename' => 'Paraguay', 'iso3' => 'PRY', 'numcode' => '600', 'phonecode' => '595'),
            array('iso' => 'PE', 'name' => 'PERU', 'nicename' => 'Peru', 'iso3' => 'PER', 'numcode' => '604', 'phonecode' => '51'),
            array('iso' => 'PH', 'name' => 'PHILIPPINES', 'nicename' => 'Philippines', 'iso3' => 'PHL', 'numcode' => '608', 'phonecode' => '63'),
            array('iso' => 'PN', 'name' => 'PITCAIRN', 'nicename' => 'Pitcairn', 'iso3' => 'PCN', 'numcode' => '612', 'phonecode' => '0'),
            array('iso' => 'PL', 'name' => 'POLAND', 'nicename' => 'Poland', 'iso3' => 'POL', 'numcode' => '616', 'phonecode' => '48'),
            array('iso' => 'PT', 'name' => 'PORTUGAL', 'nicename' => 'Portugal', 'iso3' => 'PRT', 'numcode' => '620', 'phonecode' => '351'),
            array('iso' => 'PR', 'name' => 'PUERTO RICO', 'nicename' => 'Puerto Rico', 'iso3' => 'PRI', 'numcode' => '630', 'phonecode' => '1787'),
            array('iso' => 'QA', 'name' => 'QATAR', 'nicename' => 'Qatar', 'iso3' => 'QAT', 'numcode' => '634', 'phonecode' => '974'),
            array('iso' => 'RE', 'name' => 'REUNION', 'nicename' => 'Reunion', 'iso3' => 'REU', 'numcode' => '638', 'phonecode' => '262'),
            array('iso' => 'RO', 'name' => 'ROMANIA', 'nicename' => 'Romania', 'iso3' => 'ROM', 'numcode' => '642', 'phonecode' => '40'),
            array('iso' => 'RU', 'name' => 'RUSSIAN FEDERATION', 'nicename' => 'Russian Federation', 'iso3' => 'RUS', 'numcode' => '643', 'phonecode' => '70'),
            array('iso' => 'RW', 'name' => 'RWANDA', 'nicename' => 'Rwanda', 'iso3' => 'RWA', 'numcode' => '646', 'phonecode' => '250'),
            array('iso' => 'SH', 'name' => 'SAINT HELENA', 'nicename' => 'Saint Helena', 'iso3' => 'SHN', 'numcode' => '654', 'phonecode' => '290'),
            array('iso' => 'KN', 'name' => 'SAINT KITTS AND NEVIS', 'nicename' => 'Saint Kitts and Nevis', 'iso3' => 'KNA', 'numcode' => '659', 'phonecode' => '1869'),
            array('iso' => 'LC', 'name' => 'SAINT LUCIA', 'nicename' => 'Saint Lucia', 'iso3' => 'LCA', 'numcode' => '662', 'phonecode' => '1758'),
            array('iso' => 'PM', 'name' => 'SAINT PIERRE AND MIQUELON', 'nicename' => 'Saint Pierre and Miquelon', 'iso3' => 'SPM', 'numcode' => '666', 'phonecode' => '508'),
            array('iso' => 'VC', 'name' => 'SAINT VINCENT AND THE GRENADINES', 'nicename' => 'Saint Vincent and the Grenadines', 'iso3' => 'VCT', 'numcode' => '670', 'phonecode' => '1784'),
            array('iso' => 'WS', 'name' => 'SAMOA', 'nicename' => 'Samoa', 'iso3' => 'WSM', 'numcode' => '882', 'phonecode' => '684'),
            array('iso' => 'SM', 'name' => 'SAN MARINO', 'nicename' => 'San Marino', 'iso3' => 'SMR', 'numcode' => '674', 'phonecode' => '378'),
            array('iso' => 'ST', 'name' => 'SAO TOME AND PRINCIPE', 'nicename' => 'Sao Tome and Principe', 'iso3' => 'STP', 'numcode' => '678', 'phonecode' => '239'),
            array('iso' => 'SA', 'name' => 'SAUDI ARABIA', 'nicename' => 'Saudi Arabia', 'iso3' => 'SAU', 'numcode' => '682', 'phonecode' => '966'),
            array('iso' => 'SN', 'name' => 'SENEGAL', 'nicename' => 'Senegal', 'iso3' => 'SEN', 'numcode' => '686', 'phonecode' => '221'),
            array('iso' => 'SC', 'name' => 'SEYCHELLES', 'nicename' => 'Seychelles', 'iso3' => 'SYC', 'numcode' => '690', 'phonecode' => '248'),
            array('iso' => 'SL', 'name' => 'SIERRA LEONE', 'nicename' => 'Sierra Leone', 'iso3' => 'SLE', 'numcode' => '694', 'phonecode' => '232'),
            array('iso' => 'SG', 'name' => 'SINGAPORE', 'nicename' => 'Singapore', 'iso3' => 'SGP', 'numcode' => '702', 'phonecode' => '65'),
            array('iso' => 'SK', 'name' => 'SLOVAKIA', 'nicename' => 'Slovakia', 'iso3' => 'SVK', 'numcode' => '703', 'phonecode' => '421'),
            array('iso' => 'SI', 'name' => 'SLOVENIA', 'nicename' => 'Slovenia', 'iso3' => 'SVN', 'numcode' => '705', 'phonecode' => '386'),
            array('iso' => 'SB', 'name' => 'SOLOMON ISLANDS', 'nicename' => 'Solomon Islands', 'iso3' => 'SLB', 'numcode' => '90', 'phonecode' => '677'),
            array('iso' => 'SO', 'name' => 'SOMALIA', 'nicename' => 'Somalia', 'iso3' => 'SOM', 'numcode' => '706', 'phonecode' => '252'),
            array('iso' => 'ZA', 'name' => 'SOUTH AFRICA', 'nicename' => 'South Africa', 'iso3' => 'ZAF', 'numcode' => '710', 'phonecode' => '27'),
            array('iso' => 'ES', 'name' => 'SPAIN', 'nicename' => 'Spain', 'iso3' => 'ESP', 'numcode' => '724', 'phonecode' => '34'),
            array('iso' => 'LK', 'name' => 'SRI LANKA', 'nicename' => 'Sri Lanka', 'iso3' => 'LKA', 'numcode' => '144', 'phonecode' => '94'),
            array('iso' => 'SD', 'name' => 'SUDAN', 'nicename' => 'Sudan', 'iso3' => 'SDN', 'numcode' => '736', 'phonecode' => '249'),
            array('iso' => 'SR', 'name' => 'SURINAME', 'nicename' => 'Suriname', 'iso3' => 'SUR', 'numcode' => '740', 'phonecode' => '597'),
            array('iso' => 'SJ', 'name' => 'SVALBARD AND JAN MAYEN', 'nicename' => 'Svalbard and Jan Mayen', 'iso3' => 'SJM', 'numcode' => '744', 'phonecode' => '47'),
            array('iso' => 'SZ', 'name' => 'SWAZILAND', 'nicename' => 'Swaziland', 'iso3' => 'SWZ', 'numcode' => '748', 'phonecode' => '268'),
            array('iso' => 'SE', 'name' => 'SWEDEN', 'nicename' => 'Sweden', 'iso3' => 'SWE', 'numcode' => '752', 'phonecode' => '46'),
            array('iso' => 'CH', 'name' => 'SWITZERLAND', 'nicename' => 'Switzerland', 'iso3' => 'CHE', 'numcode' => '756', 'phonecode' => '41'),
            array('iso' => 'SY', 'name' => 'SYRIAN ARAB REPUBLIC', 'nicename' => 'Syrian Arab Republic', 'iso3' => 'SYR', 'numcode' => '760', 'phonecode' => '963'),
            array('iso' => 'TW', 'name' => 'TAIWAN, PROVINCE OF CHINA', 'nicename' => 'Taiwan, Province of China', 'iso3' => 'TWN', 'numcode' => '158', 'phonecode' => '886'),
            array('iso' => 'TJ', 'name' => 'TAJIKISTAN', 'nicename' => 'Tajikistan', 'iso3' => 'TJK', 'numcode' => '762', 'phonecode' => '992'),
            array('iso' => 'TZ', 'name' => 'TANZANIA, UNITED REPUBLIC OF', 'nicename' => 'Tanzania, United Republic of', 'iso3' => 'TZA', 'numcode' => '834', 'phonecode' => '255'),
            array('iso' => 'TH', 'name' => 'THAILAND', 'nicename' => 'Thailand', 'iso3' => 'THA', 'numcode' => '764', 'phonecode' => '66'),
            array('iso' => 'TG', 'name' => 'TOGO', 'nicename' => 'Togo', 'iso3' => 'TGO', 'numcode' => '768', 'phonecode' => '228'),
            array('iso' => 'TK', 'name' => 'TOKELAU', 'nicename' => 'Tokelau', 'iso3' => 'TKL', 'numcode' => '772', 'phonecode' => '690'),
            array('iso' => 'TO', 'name' => 'TONGA', 'nicename' => 'Tonga', 'iso3' => 'TON', 'numcode' => '776', 'phonecode' => '676'),
            array('iso' => 'TT', 'name' => 'TRINIDAD AND TOBAGO', 'nicename' => 'Trinidad and Tobago', 'iso3' => 'TTO', 'numcode' => '780', 'phonecode' => '1868'),
            array('iso' => 'TN', 'name' => 'TUNISIA', 'nicename' => 'Tunisia', 'iso3' => 'TUN', 'numcode' => '788', 'phonecode' => '216'),
            array('iso' => 'TR', 'name' => 'TURKEY', 'nicename' => 'Turkey', 'iso3' => 'TUR', 'numcode' => '792', 'phonecode' => '90'),
            array('iso' => 'TM', 'name' => 'TURKMENISTAN', 'nicename' => 'Turkmenistan', 'iso3' => 'TKM', 'numcode' => '795', 'phonecode' => '7370'),
            array('iso' => 'TC', 'name' => 'TURKS AND CAICOS ISLANDS', 'nicename' => 'Turks and Caicos Islands', 'iso3' => 'TCA', 'numcode' => '796', 'phonecode' => '1649'),
            array('iso' => 'TV', 'name' => 'TUVALU', 'nicename' => 'Tuvalu', 'iso3' => 'TUV', 'numcode' => '798', 'phonecode' => '688'),
            array('iso' => 'UG', 'name' => 'UGANDA', 'nicename' => 'Uganda', 'iso3' => 'UGA', 'numcode' => '800', 'phonecode' => '256'),
            array('iso' => 'UA', 'name' => 'UKRAINE', 'nicename' => 'Ukraine', 'iso3' => 'UKR', 'numcode' => '804', 'phonecode' => '380'),
            array('iso' => 'AE', 'name' => 'UNITED ARAB EMIRATES', 'nicename' => 'United Arab Emirates', 'iso3' => 'ARE', 'numcode' => '784', 'phonecode' => '971'),
            array('iso' => 'GB', 'name' => 'UNITED KINGDOM', 'nicename' => 'United Kingdom', 'iso3' => 'GBR', 'numcode' => '826', 'phonecode' => '44'),
            array('iso' => 'US', 'name' => 'UNITED STATES', 'nicename' => 'United States', 'iso3' => 'USA', 'numcode' => '840', 'phonecode' => '1'),
            array('iso' => 'UY', 'name' => 'URUGUAY', 'nicename' => 'Uruguay', 'iso3' => 'URY', 'numcode' => '858', 'phonecode' => '598'),
            array('iso' => 'UZ', 'name' => 'UZBEKISTAN', 'nicename' => 'Uzbekistan', 'iso3' => 'UZB', 'numcode' => '860', 'phonecode' => '998'),
            array('iso' => 'VU', 'name' => 'VANUATU', 'nicename' => 'Vanuatu', 'iso3' => 'VUT', 'numcode' => '548', 'phonecode' => '678'),
            array('iso' => 'VE', 'name' => 'VENEZUELA', 'nicename' => 'Venezuela', 'iso3' => 'VEN', 'numcode' => '862', 'phonecode' => '58'),
            array('iso' => 'VN', 'name' => 'VIET NAM', 'nicename' => 'Viet Nam', 'iso3' => 'VNM', 'numcode' => '704', 'phonecode' => '84'),
            array('iso' => 'VG', 'name' => 'VIRGIN ISLANDS, BRITISH', 'nicename' => 'Virgin Islands, British', 'iso3' => 'VGB', 'numcode' => '92', 'phonecode' => '1284'),
            array('iso' => 'VI', 'name' => 'VIRGIN ISLANDS, U.S.', 'nicename' => 'Virgin Islands, U.s.', 'iso3' => 'VIR', 'numcode' => '850', 'phonecode' => '1340'),
            array('iso' => 'WF', 'name' => 'WALLIS AND FUTUNA', 'nicename' => 'Wallis and Futuna', 'iso3' => 'WLF', 'numcode' => '876', 'phonecode' => '681'),
            array('iso' => 'EH', 'name' => 'WESTERN SAHARA', 'nicename' => 'Western Sahara', 'iso3' => 'ESH', 'numcode' => '732', 'phonecode' => '212'),
            array('iso' => 'YE', 'name' => 'YEMEN', 'nicename' => 'Yemen', 'iso3' => 'YEM', 'numcode' => '887', 'phonecode' => '967'),
            array('iso' => 'ZM', 'name' => 'ZAMBIA', 'nicename' => 'Zambia', 'iso3' => 'ZMB', 'numcode' => '894', 'phonecode' => '260'),
            array('iso' => 'ZW', 'name' => 'ZIMBABWE', 'nicename' => 'Zimbabwe', 'iso3' => 'ZWE', 'numcode' => '716', 'phonecode' => '263'),
        ];

        DB::table('countries')->insert($countries);
    }
}
