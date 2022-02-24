<?php

namespace Database\Seeders;

use App\Models\EnumState;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnumStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = ['Slovensko', 'Česká republika', 'Afganistan', 'Alandy', 'Albánsko', 'Alžírsko', 'Americká Samoa', 'Americké Panenské ostrovy', 'Andorra', 'Angola', 'Anguilla', 'Antarktída', 'Antigua a Barbuda', 'Argentína', 'Arménsko', 'Aruba', 'Austrália', 'Azerbajdžan', 'Bahamy', 'Bahrajn', 'Bangladéš', 'Barbados', 'Belgicko', 'Belize', 'Benin', 'Bermudy', 'Bhután', 'Bielorusko', 'Bolívia', 'Bonaire, Svätý Eustach a Saba', 'Bosna a Hercegovina', 'Botswana', 'Bouvetov ostrov', 'Brazília', 'Britské indickooceánske územie', 'Britské Panenské ostrovy', 'Brunej', 'Bulharsko', 'Burkina Faso', 'Burundi', 'Cookove ostrovy', 'Curaçao', 'Cyprus', 'Čad', 'Čierna Hora', 'Čile', 'Čína', 'Dánsko', 'Dominika', 'Dominikánska republika', 'Džibutsko', 'Egypt', 'Ekvádor', 'Eritrejský štát', 'Estónsko', 'Etiópia', 'Faerské ostrovy', 'Falklandy', 'Fidži', 'Filipíny', 'Fínsko', 'Francúzska Guyana', 'Francúzska Polynézia', 'Francúzske južné a antarktické územia', 'Francúzsko', 'Gabon', 'Gambia', 'Ghana', 'Gibraltár', 'Grécko', 'Grenada', 'Grónsko', 'Gruzínska republika', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Heardov ostrov a Macdonaldove ostrovy', 'Holandské Antily', 'Holandsko', 'Honduras', 'Hongkong', 'Chorvátsko', 'India', 'Indonézia', 'Irak', 'Irán', 'Írsko', 'Island', 'Izrael', 'Jamajka', 'Japonsko', 'Jemen', 'Jersey', 'Jordánsko', 'Južná Afrika', 'Južná Georgia a Južné Sandwichove ostrovy', 'Južný Sudán', 'Kajmanské ostrovy', 'Kambodža', 'Kamerun', 'Kanada', 'Kapverdy', 'Katar', 'Kazachstan', 'Keňa', 'Kirgizsko', 'Kiribati', 'Kokosové (Keelingove ostrovy', 'Kolumbia', 'Komory', 'Konžská demokratická republika', 'Konžská republika', 'Kórejská ľudovodemokratická republika', 'Kórejská republika', 'Kosovo', 'Kostarika', 'Kuba', 'Kuvajt', 'Laos', 'Lesotho', 'Libanon', 'Libéria', 'Líbyjský štát', 'Lichtenštajnsko', 'Litva', 'Lotyšsko', 'Luxembursko', 'Macao', 'Madagaskar', 'Maďarsko', 'Malajzia', 'Malawi', 'Maledivy', 'Mali', 'Malta', 'Man', 'Maroko', 'Marshallove ostrovy', 'Martinik', 'Mauricius', 'Mauritánia', 'Mayotte', 'Menšie odľahlé ostrovy USA', 'Mexiko', 'Mikronézia', 'Mjanmarsko', 'Moldavsko', 'Monako', 'Mongolská republika', 'Montserrat', 'Mozambik', 'Namíbia', 'Nauru', 'Nemecko', 'Nepál', 'Niger', 'Nigéria', 'Nikaragua', 'Niue', 'Norfolk', 'Nórsko', 'Nová Kaledónia', 'Nový Zéland', 'Omán', 'Pakistan', 'Palau', 'Palestína', 'Panama', 'Papua Nová Guinea', 'Paraguay', 'Peru', 'Pitcairn (ostrov', 'Pobrežie Slonoviny', 'Poľsko', 'Portoriko', 'Portugalsko', 'Rakúsko', 'Réunion', 'Rovníková Guinea', 'Rumunsko', 'Rusko', 'Rwanda', 'Saint Pierre a Miquelon', 'Salvador', 'Samoa', 'San Maríno', 'Saudská Arábia', 'Senegal', 'Severné Macedónsko', 'Severné Mariány', 'Seychely', 'Sierra Leone', 'Singapur', 'Slovinsko', 'Somálsko', 'Spojené arabské emiráty', 'Spojené štáty', 'Srbsko', 'Srí Lanka', 'Stredoafrická republika', 'Sudán', 'Surinam', 'Svazijsko', 'Svätá Helena', 'Svätá Lucia', 'Svätý Bartolomej', 'Svätý Krištof a Nevis', 'Svätý Martin (FR', 'Svätý Martin (holandská časť', 'Svätý Tomáš a Princov ostrov', 'Svätý Vincent a Grenadíny', 'Sýria', 'Šalamúnove ostrovy', 'Španielsko', 'Špicbergy a Jan Mayen', 'Švajčiarsko', 'Švédsko', 'Tadžikistan', 'Taiwan', 'Taliansko', 'Tanzánia', 'Thajsko', 'Togo', 'Tokelau', 'Tonga', 'Trinidad a Tobago', 'Tunisko', 'Turecko', 'Turkménsko', 'Turks a Caicos', 'Tuvalu', 'Uganda', 'Ukrajina', 'Uruguaj', 'Uzbekistan', 'Vanuatu', 'Vatikán', 'Veľká Británia (bez Severného Írska', 'Veľká Británia (pred Brexitom', 'Veľká Británia (Severné Írsko', 'Venezuela', 'Vianočný ostrov', 'Vietnam', 'Východný Timor', 'Wallis a Futuna', 'Zambia', 'Západná Sahara', 'Zimbabwe'];

        foreach ( $states as $state ) {
            EnumState::create([
                'name' => $state,
            ]);
        }

    }
}
