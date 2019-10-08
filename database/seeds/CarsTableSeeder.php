<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            ['name' => 'Acura', 'model' => 'NSX, RSX/Integra'],
            ['name' => 'Alfa Romeo', 'model' => '145/146/147, 156/159, 4C, GIULIETTA,Giulia,Mito,Spider,Stelvio'],
            ['name' => 'Austin Martin', 'model' => 'DB7,DB9,DBS,Lagonda,Rapide,Vanquish,Vantage (14),Virage,Zagato'],
            ['name' => 'Audi', 'model' => 'A1,A3 (47),A4 (84),A5 (76),A6 (102),A7 (18),A8 (62),Q3 (15),Q5 (76),Q7 (162),R8 (30),S3/RS3 (29),S4/RS4,S5/RS5,S6/RS6,S7/RS7,S8 (14),TT (57)'],
            ['name' => 'BAIC', 'model' => 'A1, A115'],
            ['name' => 'BMW', 'model' => '1-Series (42),2-Series (23),3-Series (330),4-Series (106),5-Series (272),6-Series (92),7-Series (247),M-Coupe,M2,M3 (23),M4,M5,M6 (17),X1 (21),X2,X3 (29),X4,X5 (290),X6 (110),Z3,Z4 (46),Z8,i3,i8'],
            ['name' => 'Bentley', 'model' => 'Arnage,Bentayga (32),Brooklands,Continental,Continental Flying Spur (55),Continental GT (119),Mulsanne'],
            ['name' => 'Borgward', 'model' => 'BX5,BX7'],
            ['name' => 'Bugatti', 'model' => 'Chiron,Veyron'],
            ['name' => 'CMC', 'model' => 'Veryca (16)'],
            ['name' => 'Cadillac', 'model' => 'ATS (39),BLS,CT6,CTS/Catera (29),DTS/De Ville,Escalade (87),Fleetwood,SRX (26),STS/Seville,XT5,XTR/Eldorado,XTS'],
            ['name' => 'Caterham', 'model' => 'Seven 360,Seven 420'],
            ['name' => 'Changan', 'model' => 'Alswin,CS95,Cs35,Eado'],
            ['name' => 'Cherry', 'model' => 'E5, Tiggo 3,Tiggo 5'],
            ['name' => 'Chevrolet', 'model' => 'Astro,Avalanche,Aveo,Camaro,Caprice,Captiva,Corvette,Cruze,Epica,Express,HHR,Impala,Malibu (42),Lumina (27),Optra,Pickup,SSR,Silverado (51),Sonic,Spark (19),Suburban,Tahoe (77),Trailblazer (71),Traverse (38),Trax (15)'],
            ['name' => 'Chrysler', 'model' => '200/200C EV,300M/300C (35),Crossfire,PT Cruiser,Prowler,Sebring,Voyager/Caravan'],
            ['name' => 'Daihatsu', 'model' => 'Charade,Gran Max,Sirion'],
            ['name' => 'Datsun', 'model' => '240Z,280Z'],
            ['name' => 'Dodge', 'model' => 'Avenger,Caliber,Caravan,Challenger (120),Charger (169),Dart,Durango (55),Magnum,Neon,Nitro,Pickup,Ram (48),Viper'],
            ['name' => 'Ferrari', 'model' => '355,360,458 (15),458 Speciale (17),458 Spider,488,488 GTB (16),488 Spider ,512,599,599 GTB ,812 Superfast,California (14),California T (18),F12 (22),F430,F430 Spider,FF,GTC4 Lusso ‬,LaFerrari,Scaglietti'],
            ['name' => 'Fiat', 'model' => 'Fiat-500 (27),Linea'],
            ['name' => 'Fisker', 'model' => 'Karma'],
            ['name' => 'Ford', 'model' => 'Crown Victoria,Ecosport (44),Edge (229),Escape (94),Expedition (72),Explorer (205),F-Series Pickup (113),Fiesta (45),Figo (36),Five Hundred,Flex (14),Focus (117),Fusion (36),GT,Mondeo,Mustang (328),Pickup (21),Ranger (17),Taurus (29),Thunderbird,Van'],
            ['name' => 'Foton', 'model' => 'SUP,View'],
            ['name' => 'GMC', 'model' => 'Acadia (53),Envoy,Pickup,Savana,Sierra (67),Suburban,Terrain (47),Yukon (82)'],
            ['name' => 'Geely', 'model' => 'Emgrand GT'],
            ['name' => 'Honda', 'model' => 'Accord (266),CR-V (93),City (43),Civic (199),Crosstour,Jazz (19),MR-V ,Odyssey (32),Pilot (72),S2000'],
            ['name' => 'Hummer', 'model' => 'H1,H2 (27),H3 (50),H3T'],
            ['name' => 'Hyundai', 'model' => 'Accent (38),Azera,Centennial,Coupe,Creta,Elantra (42),Entourage,Genesis (25),Getz,H1 (42),Matrix,Santa Fe (79),Sonata (71),Terracan,Trajet,Tucson (76),Veloster (48),Veracruz,i10,i20,i30,i40'],
            ['name' => 'Infinity', 'model' => 'EX35 (20),FX45/FX35  (64),FX50,G-Series (53),G25,I35/I30,JX-Series,M-Series,Q30,Q45,Q50 (45),Q60 (14),Q70 (14),QX4,QX50 (26),QX56 (18),QX60 (31),QX70 (66),QX80 (37)'],
            ['name' => 'Isuzu', 'model' => 'Trooper'],
            ['name' => 'JAC', 'model' => 'City Bus,S3,HK6730'],
            ['name' => 'JMC', 'model' => 'NHR'],
            ['name' => 'Jaguar', 'model' => 'E-Type,F-Pace,F-Type (18),S-Type (17),X-Type,XE,XF (60),XJ-Series (30),XJ12,XJ6,,XJ8,XK (20),XK8,XKR'],
            ['name' => 'Jeep', 'model' => 'Cherokee (66),Commander,Compass,Grand Cherokee (189),Liberty,Patriot,Renegade,Wrangler (341),Wrangler Unlimited (59)'],
            ['name' => 'Kia', 'model' => 'Cadenza,Carens,Carnival (18),Cerato (32),Koup,Mohave,Oprius,Optima,Picanto,Quoris,Sedona,Rio,Sorento,Soul,Sportage'],
            ['name' => 'Lambourghini', 'model' => 'Aventador,Diablo,Gallardo,Huracan,Murcielago,Urus'],
            ['name' => 'Lancia', 'model' => 'Delta'],
            ['name' => 'Land Rover', 'model' => 'Defender,Discovery,Discovery Sport,Evoque,Freelander,HSE V8,LR2,LR3,LR4,Range Rover,Range Rover Sport '],
            ['name' => 'Lexus', 'model' => 'CT-Series,ES-Series,GS-Series,GX-Series,IS-C,IS-F,IS-Series,LFA,LS-Series,LX-Series,NX 200t,NX 300,RC,RC F,RX-Series,SC-Series'],
            ['name' => 'Lincoln', 'model' => 'Continental,MKC,MKS,MKT,MKX,MKZ,Navigator,Town Car'],
            ['name' => 'Lotus', 'model' => 'Evora,Exige'],
            ['name' => 'MG', 'model' => 'GS,MG3,MG350,MG5,MG550,MG750,RX5,ZS'],
            ['name' => 'Mini', 'model' => 'Clubman,Cooper,Countryman,Coupe,Paceman,Roadster'],
            ['name' => 'Mahindra', 'model' => 'Scorpio Pickup,XUV 500'],
            ['name' => 'Maserati', 'model' => 'Ghibli,GranCabrio,GranTurismo,Levante,Quattroporte,Spyder'],
            ['name' => 'Maybach', 'model' => '57,62,S500'],
            ['name' => 'Mazda', 'model' => '2,3,6,CX-3,CX-5,CX-7,CX-9,MX-5,RX-8'],
            ['name' => 'Mclaren', 'model' => '540C,570GT,570S,650S,675LT,720S,MP4-12C,P1'],
            ['name' => 'Mercedes', 'model' => '190,240/260/280,300/350/380,500/560,A-Class,AMG,B-Class,C-Class,C43,CL-Class,CLA,CLC,CLK-Class,CLS-Class,E-Class,G-Class,GL-Class,GLA,GLC,GLE Coupe,GLE SUV ,GLK-Class,GLS,GT,M-Class,R-Class,S-Class,SL-Class,SLC,SLK-Class,SLR,SLS,Sprinter,Viano'],
            ['name' => 'Mercury', 'model' => 'Grand Marquis,Mariner,Montego,Mountaineer'],
            ['name' => 'Mitsubishi', 'model' => 'ASX,Attrage,Canter,Eclipse,Evolution,Galant,L200,Lancer,Magna,Mirage,Montero,Nativa,Outlander,Pajero,Pajero Sport,Pickup,Van'],
            ['name' => 'Morgan', 'model' => '4/4 ,Plus 4'],
            ['name' => 'Nissan', 'model' => '300ZX,350Z,370z,Altima,Armada,GT-R,Juke,Kicks,Maxima,Micra,Murano,Navara,Pathfinder,Patrol,Patrol Pickup,Pickup,Qashqai,Rogue,Sentra,Skyline,Sunny,Terrano,Tiida,Titan,Van,X-Trail,Xterra'],
            ['name' => 'Opel', 'model' => 'Astra,Cascada,Corsa,Insignia,Mokka,Omega,Zafira'],
            ['name' => 'Peugeot', 'model' => '2008,206,206cc,207,207cc,208,3008,301,307,307cc,308,308cc,407,5008,508,607,Partner,RC7,RCZ'],
            ['name' => 'Porche', 'model' => '918 Spyder,944,Boxster,Carrera / 911,Cayenne,Cayman,Macan,Panamera'],
            ['name' => 'Renault', 'model' => 'Captur,Clio,Dokker,Duster,Fluence,Koleos,Logan,Megane,Safrane,Symbol,Trafic,Twizy'],
            ['name' => 'Rolls Royce', 'model' => 'Dawn,Ghost,Phantom,Silver Seraph,Silver Spur,Wraith'],
            ['name' => 'Saab', 'model' => '43346'],
            ['name' => 'Seat', 'model' => 'Ibiza,Leon'],
            ['name' => 'Skoda', 'model' => 'Fabia,Octavia,Superb'],
            ['name' => 'Subaru', 'model' => 'BRZ,Forester,Impreza,Legacy,Tribeca,WRX,XV'],
            ['name' => 'Suzuki', 'model' => 'APV Van,Celerio,Ciaz,Grand Vitara,Jimny,Kizashi,SX4,Swift,Vitara,XL7'],
            ['name' => 'Tata', 'model' => 'Pickup'],
            ['name' => 'Toyota', 'model' => '4Runner,86,Alphard,Aurion,Avalon,Avanza,C-HR,Camry,Celica,Corolla,Corona,Echo,FJ Cruiser,Fortuner,Hiace,Highlander,Hilux,IQ,Innova,Land Cruiser,Land Cruiser 76 series,Pickup,Prado,Previa,Prius,Rav 4,Rush,Sequoia,Sienna,Supra,Tacoma,Tundra,XA,Yaris,Zelas'],
            ['name' => 'Volkswagen', 'model' => 'Amarok,Beetle,CC,Caddy,Eos,GTI,Golf,Golf R,Jetta,Multivan,Passat,Polo,Scirocco,Tiguan,Touareg,Transporter'],
            ['name' => 'Volvo', 'model' => 'C-Class,S-Class,V-Class,XC40,XC60,XC70,XC90']
        ]);
    }
}
