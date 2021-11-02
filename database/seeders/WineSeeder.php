<?php

namespace Database\Seeders;

use App\Models\Wine;
use Illuminate\Database\Seeder;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wine = new Wine();
        $wine->naam = 'Señorio de las Viñas joven (6 flessen)';
        $wine->regio = 'La Rioja';
        $wine->wijngebied = 'D.O.C. Rioja Alavesa';
        $wine->wijnhuis = 'Bodegas Señorio de las Viñas';
        $wine->druivensoort = '90% Tempranillo en 10% Viura';
        $wine->inhoud = '75 cl';
        $wine->serveren_op = '12 – 15';
        $wine->ook_lekker_bij = 'Grillades. pittige stoofschotels. dagdagelijkse vleesgerechten en pasta.';
        $wine->prijs = '35.60';
        $wine->beschrijving = 'Bij deze wijn werd een moderne wijntechniek (maceración carbónica) toegepast waardoor
                               het aroma beter tot ontwikkeling komt. Deze wijn heeft een purperen. kersenrode kleur.
                               Een lichtcomplexe wijn met aroma’s van rode vruchten. In de mond een zuivere aanzet
                               met een aroma van kersen. De wijn heeft zachte zuren en is halfkrachtig.';
        $wine->categorie = 'Rode wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "Bij deze wijn werd een moderne wijntechniek toegepast waardoor het aroma beter tot ontwikkeling komt. Deze wijn heeft een purperen. kersenrode kleur. In de mond een zuivere aanzet met aroma van kersen. De wijn heeft zachte zuren en is halfkrachtig.";
        $wine->wijn_afbeelding = '';
        $wine->naam = "Tinto Joven";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Señorio de las Viñas";
        $wine->druivensoort = "100% Tempranillo";
        $wine->serveren_op = "14";
        $wine->ook_lekker_bij = "Pasta's; Worstjes; Karbonades & sardines van de gril";
        $wine->inhoud = "75 cl";
        $wine->prijs = "5.95";
        $wine->categorie = 'Rode wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "De druiven zijn afkomstig uit een geselecteerd oogstjaar. Rijping van 20 maanden op Amerikaans en Frans eiken gevolgd door een flesrijping van minimaal 30 maanden. De wijn heeft een granaat rode kleur. Een kruidige neus met aroma’s van rijpe vruchten. Een volle aanzet in de mond met rijpe tannines. Eindigend met een lange afdronk met cacao en toast.";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Reserva";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Señorio de las Viñas";
        $wine->druivensoort = "100% Tempranillo";
        $wine->serveren_op = "18";
        $wine->ook_lekker_bij = "Wild. lamsvlees. gevogelte. rood vlees & kazen";
        $wine->inhoud = "75 cl";
        $wine->prijs = "12.95";
        $wine->categorie = 'Rode wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "Een heldere wijn met een intense zalmroze kleur.  Zeer fruitig. met aroma's van framboos en bloemen. Tinten van rozenblaadjes. Droog in de mond met een prettige zuursmaak.";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Rosado Joven";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Señorio de las Viñas";
        $wine->druivensoort = "50% Tempranillo; 50% Granacha Tinta";
        $wine->serveren_op = "10 - 12";
        $wine->ook_lekker_bij = "Pasta en rijstgerechten. witte vis & lichte vleesgerechten";
        $wine->inhoud = "75 cl";
        $wine->prijs = "5.95";
        $wine->categorie = 'Rose wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "Deze wijn onderging een rijping van 28 maanden in Amerikaanse en Franse eiken vaten. gevolgd door een flesrijping van opnieuw 42 maanden. De wijn heeft een heldere. briljante robijnrode kleur. In de neus een complexe geur met aroma’s van gestoofd fruit. specerijen. tabak leer en vanille. Toch elegant en fruitig in de mond. Een sensationele wijn met versmolten tannines.";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Gran Reserva";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Señorio de las Viñas";
        $wine->druivensoort = "100% Tempranillo";
        $wine->serveren_op = "18";
        $wine->ook_lekker_bij = "Wild. rood vlees en kazen";
        $wine->inhoud = "75 cl";
        $wine->prijs = "14.95";
        $wine->categorie = 'Rode wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "Deze wijn heeft een helder lichtgele kleur. Een licht intense geur met aroma’s van wit fruit. appel. peer en witte bloemen. Een frisse fruitige wijn met een onmiskenbare smaak die gemakkelijk drinkt. Een frisse droge wijn met een evenwichtige zuurgraad.";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Blanco Seco";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Señorio de las Viñas";
        $wine->druivensoort = "100% Viura";
        $wine->serveren_op = "9";
        $wine->ook_lekker_bij = "Aperitieven' vegetarische schotels' salades & visgerechten";
        $wine->inhoud = "75 cl";
        $wine->prijs = "5.95";
        $wine->categorie = 'Witte wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "De druiven zijn afkomstig uit een geselecteerd oogstjaar. Rijping van 20 maanden op Amerikaans en Frans eiken gevolgd door een flesrijping van minimaal 36 maanden. De wijn heeft een granaat rode kleur aan de randen verkleurend naar oranje. Expressieve aroma's van rode vruchten en pruim. van vanille met een mooie houttoets. Harmonisch in de mond. rijpe tannine  en een sensatie van toast (chocola en koffie).";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Sellado";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Señorio de las Viñas";
        $wine->druivensoort = "100% Tempranillo";
        $wine->serveren_op = "18";
        $wine->ook_lekker_bij = "Wild. lamsvlees. gevogelte. rood vlees & kazen";
        $wine->inhoud = "75 cl";
        $wine->prijs = "19.95";
        $wine->categorie = 'Rode wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "Rijping van 14 maanden in Amerikaans en Frans eiken. gevolgd door een flesrijping. De wijn heeft een intense robijnrode kleur. Een neus van rijpe vruchten met een lichte houttoets en basilicum. Aangenaam vol. Nasale aroma’s van fruit ook terug te vinden in de mond. Afdronk. sensationeel!";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Crianza";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Señorio de las Viñas";
        $wine->druivensoort = "95% Tempranillo 5% Gra";
        $wine->serveren_op = "18";
        $wine->ook_lekker_bij = "Vlees; wild; stoofschotels; pasta’s & stamppot";
        $wine->inhoud = "75 cl";
        $wine->prijs = "7.95";
        $wine->categorie = 'Rode wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "Een jonge paarse wijn zonder houttoets. Een mond vol fruit. aardbei. framboos en bosbes. Deze frisse soepele wijn drinkt het lekkerst als hij iets onder kamertemperatuur wordt geserveerd. Een aanrader bij worstjes. karbonades en sardines van de gril!";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Ijalba Livor";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Viña Ijalba";
        $wine->druivensoort = "100% Tempranillo";
        $wine->serveren_op = "14";
        $wine->ook_lekker_bij = "Pasta’s; worstjes. karbonades en sardines van de gril.";
        $wine->inhoud = "75 cl";
        $wine->prijs = "5"; //dit is een niet de echte prijs
        $wine->categorie = 'Rode wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "De wijn heeft een briljante kersrode kleur. Wordt gekenmerkt door complexe aroma's van rijpe rode vruchten en marmelade. cacao en een lichte toast  tiperend voor de Crianza. Droog in de mond bedeeld met een aangename zuurgraad eindigend in een volle harmonische afdronk.";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Ijalba crianza";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Viña Ijalba";
        $wine->druivensoort = "Druif: 90% Tempranillo. 10% Garnacho";
        $wine->serveren_op = "15-16";
        $wine->ook_lekker_bij = "Hartige taarten. stoofschotels. stampotjes. vleesgerechten en pasta's";
        $wine->inhoud = "75 cl";
        $wine->prijs = "53.95";
        $wine->categorie = 'Rode wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "Een heldere wijn met een intense zalmroze kleur.  Zeer fruitig. met aroma's van framboos en bloemen. Tinten van rozenblaadjes. Droog in de mond met een prettige zuursmaak.";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Ijalba aloque";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Viña Ijalba";
        $wine->druivensoort = "Druif: 50% Tempranillo. 50% Garnacha Tinta";
        $wine->serveren_op = "10-12";
        $wine->ook_lekker_bij = "Ideaal bij pasta en rijstgerechten; witte vis en lichte vleesgerechten.";
        $wine->inhoud = "75 cl";
        $wine->prijs = "41.95";
        $wine->categorie = 'Rose wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "Deze wijn heeft een goudgele kleur met een iets groenige briljanten schittering. In de neus zeer aromatisch waarin perzik. banaan en rijpe tropische vruchten te onderscheiden zijn.Vol in de mond met de frisheid van citrusvruchten en een  intense afdronk. Deze wijn is uniek in de wereld vanwege het gebruik van de smaakvolle maar zeer kleine duivensoort waaraan zij haar naam te danken heeft.";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Ijalba Maturana Blanca";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Viña Ijalba";
        $wine->druivensoort = "100% Maturana Blanca";
        $wine->serveren_op = "10";
        $wine->ook_lekker_bij = "Aperitieven. salades vegetarische schotels. zeevruchten en visgerechten";
        $wine->inhoud = "75 cl";
        $wine->prijs = "77.95";
        $wine->categorie = 'Witte wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "Deze wijn heeft een zonnige strogele kleur met een ivoren nuance. Een intense geur met aroma's van wit fruit. appel. grapefruit witte bloemen. Een frisse droge wijn met een evenwichtige zuurgraad.";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Ijalba Genolí";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Viña Ijalba";
        $wine->druivensoort = "100% Viura";
        $wine->serveren_op = "9";
        $wine->ook_lekker_bij = "Aperitieven. vegetarische schotels. salades en visgerechten.";
        $wine->inhoud = "75 cl";
        $wine->prijs = "41.95";
        $wine->categorie = 'Witte wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "Deze wijn heeft een purperen. kersrode kleur. Aroma’s van braam en bos van kersenlikeur en een vleugje drop. De aanzet in de mond is droog waarna donkere en rode  vruchten  naar voren komen. Een krachtige en intense wijn  in alle facetten.";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Ijalba Graciano";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Viña Ijalba";
        $wine->druivensoort = "100% Graciano";
        $wine->serveren_op = "18";
        $wine->ook_lekker_bij = "Hartige taarten met kaas. vegetarische en rijst gerechten. rood vlees en wild.";
        $wine->inhoud = "75 cl";
        $wine->prijs = "77.95";
        $wine->categorie = 'Rode wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "Deze wijn heeft een purperen. kersenrode kleur met lichtcomplexe smaak van rode vruchten. In de mond een zuivere aanzet met aroma’s van kersen en een lichte houttoets. De wijn heeft zachte zuren en is halfkrachtig.";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Ijalba Solferino";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Viña Ijalba";
        $wine->druivensoort = "100% Tempranillo";
        $wine->serveren_op = "14";
        $wine->ook_lekker_bij = "Hartige taarten. stoofschotels. stampotjes. vleesgerechten en pasta's.";
        $wine->inhoud = "75 cl";
        $wine->prijs = "47.95";
        $wine->categorie = 'Rode wijn';
        $wine->save();

        $wine = new Wine();
        $wine->beschrijving = "De wijn heeft een granaatrode kleur en een voortreffelijke textuur. Een intense neus met aroma’s van rijpe zwarte vruchten. In de mond een zijdezachte aanzet met rijpe tannines en evenwichtige zuren. eindigend met een volle afdronk met zachte aroma’s van cacao en kaneel.";
        $wine->wijn_afbeelding = "";
        $wine->naam = "Dionisio Ruiz Ijalba";
        $wine->regio = "La Rioja";
        $wine->wijngebied = '';
        $wine->wijnhuis = "Viña Ijalba";
        $wine->druivensoort = "100% Maturana Tinta";
        $wine->serveren_op = "18";
        $wine->ook_lekker_bij = "Stamppotjes. rood vlees. wild en kazen.";
        $wine->inhoud = "75 cl";
        $wine->prijs = "119.95";
        $wine->categorie = 'Rode wijn';
        $wine->save();
    }
}
