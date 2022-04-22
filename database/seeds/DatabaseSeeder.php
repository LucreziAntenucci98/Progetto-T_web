<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categoria')->insert([
            ['catId' => 1, 'name' => 'Auto', 'parId' => 0],
            ['catId' => 2, 'name' => 'Moto', 'parId' => 0],
            ['catId' => 3, 'name' => 'Berlina', 'parId' => 1],
            ['catId' => 4, 'name' => 'Suv', 'parId' => 1],
            ['catId' => 5, 'name' => 'Utilitaria', 'parId' => 1],
            ['catId' => 6, 'name' => 'Cross', 'parId' => 2],
            ['catId' => 7, 'name' => 'Sportiva', 'parId' => 2],
            ['catId' => 8, 'name' => 'Turismo', 'parId' => 2],
        ]);
    
      DB::table('prodotto')->insert([
            ['name' => 'Edge', 'catId' => 4, 'marca' => 'Ford',
                'descShort' => 'Suv “americana”, la Ford Edge ha dimensioni abbondanti e si adatta alle esigenze di una famiglia, grazie a un abitacolo molto spazioso, confortevole e rifinito con discreta cura.', 'descLong' => 'Non è solo un\'auto da viaggio e da famiglia. L\'assetto la rende gradevole da guidare e persino agile, oltre che sicura, così come lo sterzo, rapido, diretto (molto più di altre concorrenti), progressivo e sincero. Fra i punti di forza della Edge spicca l\'insonorizzazione. Buono anche il confort delle sospensioni, anche se dietro filtrano meno dolcemente sul breve. Completa la dotazione degli Adas, con il plus del Co-Pilot (optional), che include Cruise adattivo e Stop&Go, mantenimento della traiettoria, avviso angoli bui e traffico trasversale.',
                'price' => 50000.00, 'discountPerc' => 5, 'discounted' => 1, 'image' => 'ford_edge_suv.jpg'],
            ['name' => 'Classe A 180', 'catId' => 3, 'marca' => 'Mercedes',
                'descShort' => 'I moderni sistemi di sicurezza fanno di Classe A un assistente personale attento. Nelle emergenze sono in grado di reagire automaticamente, aiutando efficacemente il guidatore.', 'descLong' => 'I moderni sistemi di sicurezza fanno di Classe A un assistente personale attento. Nelle emergenze sono in grado di reagire automaticamente, aiutando efficacemente il guidatore.',
                'price' => 40000.00, 'discountPerc' => 7, 'discounted' => 0, 'image' => 'mercedes_classe_a_180.jpg'],
            ['name' => 'Classe B 200', 'catId' => 3, 'marca' => 'Mercedes',
                'descShort' => 'La nuova Mercedes Classe B è stata pensata per chi cerca spazio ed eleganza, è ideale per le famiglie e garantisce il massimo comfort sia in città che nel tempo libero. E\' inoltre dotata dei più avanzati sistemi di sicurezza attiva alla guida per la massima sicurezza del guidatore e dei passeggeri.', 'descLong' => 'Stabile nelle situazioni d\'emergenza, equilibrata nei percorsi guidati. Il baricentro alto si avverte, ma non in misura tale da inficiare la guidabilità. Lo sterzo è leggero in manovra e a basse velocità, ma diventa più consistente sulle strade ricche di curve e quando il ritmo aumenta. Precisione e progressività sono le sue doti migliori. Il confort è complessivamente buono, per assorbimento e insonorizzazione. ',
                'price' => 25750.00, 'discountPerc' => 15, 'discounted' => 1, 'image' => 'mercedes_classe_b_200.jpg'],
            ['name' => 'Brabus GV 12 900', 'catId' => 4, 'marca' => 'Mercedes',
                'descShort' => 'Grazie ai 900 CV espressi dal suo motore V12 twin turbo l’ultima creazione di Brabus si presenta come il fuoristrada più potente al mondo.', 'descLong' => 'Dal punto di vista estetico, la creazione del tuner di Bottrop sfoggia un look “total Black” che si distingue per la presenza di un completo kit estetico aerodinamico realizzato interamente in fibra di carbonio. I fascioni paraurti sono stati sostituiti con nuovi componenti dotati di prese d’aria di maggiori dimensioni, non mancano bandelle laterali e passaruota allargati in grado di ospitare enormi cerchi in lega specifici da ben 23 pollici. Anche il cofano motore è di inedita concezione ed è stato studiato per far respirare al meglio il propulsore, così come si è optato per un nuovo scarico sportivo per esaltare il sound ed ottimizzare le prestazioni della vettura.',
                'price' => 600000.00, 'discountPerc' => 10, 'discounted' => 1, 'image' => 'mercedes_brabus.jpg'],
            ['name' => 'Classe S', 'catId' => 3, 'marca' => 'Mercedes',
                'descShort' => 'Classe S Berlina sa fondere lavoro e vita privata nel migliore dei modi. Materiali, atmosfera e qualità delle rifiniture negli interni soddisfano tutte le aspettative nei confronti di una berlina di fascia superiore. Senza contare l\'inclinazione naturale di Classe S: darti in anteprima innovazioni tecnologiche che ancora nessun\'altra auto possiede.', 'descLong' => 'Come un corridore che compensa ogni cambio di movimento in modo assolutamente naturale con il proprio corpo, così anche il MAGIC BODY CONTROL con funzione di inclinazione dinamica in curva reagisce automaticamente alle forze di accelerazione in curva. Per i tuoi passeggeri, questa e tante altre innovazioni rendono più confortevole viaggiare a bordo di Classe S Berlina.
Classe S Berlina monitora l\'area circostante in modo ancora più preciso e previdente. Ora reagisce ancora più rapidamente, riducendo fin da subito i pericoli. In particolare, supporta il guidatore e gli altri passeggeri in modo più efficace che mai.',
                'price' => 98000.00, 'discountPerc' => 5, 'discounted' => 0, 'image' => 'mercedes-classe_s.jpg']
            
        ]);
    }

}

