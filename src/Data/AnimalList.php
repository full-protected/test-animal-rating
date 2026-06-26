<?php

namespace App\Data;

class AnimalList
{
    public static function getFrench(): array
    {
        return [
            // A
            'Accenteur mouchet', 'Addax', 'Aigle royal', 'Aigrette garzette',
            'Alligator américain', 'Alouette des champs', 'Alpaga', 'Anaconda géant',
            'Anoa des plaines', 'Antilope Cervicapre', 'Antilope de Clarke',
            'Antilope du Tibet', 'Antilope Nilgaut', 'Antilope Rouanne', 'Antilope Saiga',
            'Ara bleu', 'Argali', 'Autour des palombes', 'Autruche d\'Afrique', 'Avocette élégante',
            // B
            'Babiroussa', 'Babouin Chacma', 'Babouin de Guinée', 'Babouin Hamadryas',
            'Babouin jaune', 'Babouin olive', 'Baleine bleue', 'Banteng', 'Beira',
            'Belette d\'Europe', 'Bergeronnette grise', 'Bernache du Canada',
            'Bison d\'Amérique du Nord', 'Bison d\'Europe', 'Blaireau européen',
            'Blesbok', 'Boa constricteur', 'Boeuf musqué', 'Bongo', 'Bonobo',
            'Bouquetin d\'Abyssinie', 'Bouquetin de Nubie', 'Bouquetin de Sibérie',
            'Bouvreuil pivoine', 'Bruant jaune', 'Bruant ortolan', 'Bubale roux',
            'Buffle d\'Afrique', 'Buffle d\'Asie', 'Busard Saint-Martin', 'Buse variable',
            // C
            'Cacatoès rosalbin', 'Caille des blés', 'Caïman noir', 'Calopsitte élégante',
            'Campagnol des champs', 'Canard colvert', 'Canard mandarin', 'Canard siffleur',
            'Capucin', 'Capucin brun', 'Capybara', 'Caracal', 'Carcajou', 'Caribou',
            'Casoar à casque', 'Castor d\'Europe', 'Castor du Canada',
            'Céphalophe à dos jaune', 'Céphalophe à flancs roux', 'Céphalophe à front noir',
            'Céphalophe à ventre blanc', 'Céphalophe bleu', 'Céphalophe d\'Ader',
            'Céphalophe de Natal', 'Céphalophe de Peter', 'Céphalophe noir', 'Céphalophe zèbre',
            'Cerf Axis', 'Cerf cochon', 'Cerf élaphe',
            'Chacal à chabraque', 'Chacal à flancs rayés', 'Chacal doré',
            'Chameau domestique', 'Chameau sauvage de Tartarie', 'Chamois',
            'Chardonneret élégant', 'Chauve-souris pipistrelle commune',
            'Chèvre des montagnes rocheuses', 'Chèvre du Caucase Occidental', 'Chevreuil',
            'Chien chanteur de Nouvelle Guinée', 'Chien des buissons', 'Chimpanzé commun',
            'Choucas des tours', 'Chouette chevêche d\'Athéna', 'Chouette effraie des clochers',
            'Chouette hulotte', 'Cigogne blanche', 'Civette africaine', 'Coati commun',
            'Cobe à croissant', 'Cobe de Buffon', 'Cobe de Lechwe', 'Cobe de Mrs Gray',
            'Cobra royal', 'Colibri circé', 'Condor des Andes', 'Corbeau freux',
            'Corneille noire', 'Coucou gris', 'Couleuvre à collier', 'Coyote',
            'Crocodile américain', 'Crocodile du Nil', 'Cygne noir', 'Cygne tuberculé',
            // D
            'Daim', 'Dauphin commun à bec court', 'Dhole', 'Diable de Tasmanie',
            'Dik-dik argenté', 'Dik-dik de Gunther', 'Dik-dik de Kirk', 'Dik-dik de Salt',
            'Dingo', 'Douc', 'Dragon de Komodo', 'Drill', 'Dromadaire', 'Dugong',
            // E
            'Écureuil roux', 'Élan d\'Eurasie', 'Éland de Derby', 'Éland du Cap',
            'Éléphant d\'Afrique', 'Éléphant d\'Asie', 'Éléphant de mer du Sud',
            'Émeu d\'Australie', 'Engoulevent d\'Europe', 'Entelle', 'Entelle doré',
            'Épervier d\'Europe', 'Étourneau sansonnet',
            // F
            'Faisan de Colchide', 'Faucon crécerelle', 'Faucon pèlerin',
            'Fauvette à tête noire', 'Fennec', 'Flamant rose', 'Fossa', 'Fou de Bassan',
            'Fouine', 'Foulque macroule', 'Fourmilier', 'Furet',
            // G
            'Gallinule poule-d\'eau', 'Gaur', 'Gazelle à goître', 'Gazelle Dama',
            'Gazelle de Cuvier', 'Gazelle de Grant', 'Gazelle de montagne', 'Gazelle de Rhim',
            'Gazelle de Sommering', 'Gazelle de Speke', 'Gazelle de Thomson',
            'Gazelle de Waller', 'Gazelle Dorcas', 'Gazelle indienne',
            'Geai bleu', 'Geai des chênes', 'Gelada', 'Genette commune',
            'Gibbon à favoris blancs du Nord', 'Gibbon à joues jaunes',
            'Gibbon à mains blanches', 'Gibbon agile', 'Gibbon de Hainan',
            'Gibbon Hoolock Occidental', 'Gibbon noir', 'Gibbon à bonnet',
            'Gibbon cendré', 'Gibbon de Muller',
            'Girafe', 'Glouton', 'Gnou bleu', 'Gnou noir', 'Goéland argenté',
            'Goral à longue queue', 'Goral de l\'Himalaya', 'Goral roux',
            'Gorille de l\'Est', 'Gorille de l\'Ouest',
            'Grand bharal', 'Grand cachalot', 'Grand corbeau', 'Grand cormoran',
            'Grand koudou', 'Grand requin blanc', 'Grand requin marteau', 'Grand tétras',
            'Grande aigrette', 'Grèbe huppé', 'Grimpereau des jardins', 'Grison',
            'Grive musicienne', 'Grizzli', 'Grue cendrée', 'Grosbec casse-noyaux',
            'Guanaco', 'Guépard', 'Guêpier d\'Europe', 'Guib harnaché', 'Gypaète barbu',
            // H
            'Hamster d\'Europe', 'Harfang des neiges', 'Hérisson commun', 'Hermine',
            'Héron cendré', 'Héron garde-boeufs', 'Hibou Grand-duc d\'Europe',
            'Hibou moyen-duc', 'Hippopotame commun', 'Hippotrague noir',
            'Hirondelle rustique', 'Huppe fasciée', 'Hyène tachetée',
            // I
            'Ibis sacré', 'Impala', 'Isard',
            // J
            'Jaguar',
            // K
            'Kangourou roux', 'Kiwi austral', 'Koala',
            // L
            'Lama', 'Lamantin des Caraïbes', 'Langur à capuchon', 'Langur de Delacour',
            'Langur de Java', 'Lapin de garenne', 'Lemming commun', 'Léopard',
            'Léopard des neiges', 'Lièvre d\'Europe', 'Linotte mélodieuse',
            'Lion blanc', 'Lion d\'Afrique', 'Lion d\'Asie', 'Lion de mer de Californie',
            'Loriot d\'Europe', 'Loup arctique', 'Loup de Sibérie', 'Loup gris commun',
            'Loutre d\'Europe', 'Loutre de mer', 'Lycaon', 'Lynx',
            // M
            'Macaque commun', 'Macareux moine', 'Maki catta', 'Manchot empereur',
            'Mandrill', 'Mangabey couronné', 'Mangabey noir',
            'Mangouste à queue blanche', 'Mangouste rouge', 'Mara de Patagonie',
            'Marabout d\'Afrique', 'Markhor', 'Marmotte des Alpes', 'Marsouin commun',
            'Martin pêcheur d\'Europe', 'Martinet noir', 'Martre des pins',
            'Merle noir', 'Mésange à longue queue', 'Mésange bleue', 'Mésange charbonnière',
            'Mésange huppée', 'Mésange noire', 'Mésange nonnette',
            'Milan noir', 'Milan royal', 'Moineau domestique', 'Morse',
            'Mouffette rayée', 'Mulot sylvestre', 'Musaraigne carrelet',
            // N
            'Narval', 'Nasique', 'Nasique des îles de Pagai', 'Nyala', 'Nyala de montagne',
            // O
            'Ocelot', 'Oie cendrée', 'Okapi', 'Orang-outan de Bornéo',
            'Orang-outan de Sumatra', 'Orignal', 'Ornithorynque', 'Orque',
            'Orvet commun', 'Oryx algazelle', 'Oryx Beisa', 'Oryx d\'Arabie', 'Oryx gazelle',
            'Otarie de Kerguelen', 'Otocyon', 'Ouistiti à toupets blancs',
            'Ours brun', 'Ours kodiak', 'Ours polaire', 'Outarde canepetière',
            // P
            'Palombe', 'Panda géant', 'Panda roux', 'Pangolin géant', 'Paon bleu',
            'Paresseux à 2 doigts', 'Pélican blanc', 'Perdrix grise', 'Perdrix rouge',
            'Perruche à collier', 'Perruche ondulée', 'Petit bharal', 'Petit koudou',
            'Phacochère commun', 'Phoque veau marin', 'Pic épeiche', 'Pic vert',
            'Pie bavarde', 'Pigeon ramier', 'Pingouin torda', 'Pinson des arbres',
            'Porc-épic à crête', 'Potamochère du Cap', 'Puku', 'Puma',
            'Putois d\'Europe', 'Pygargue à tête blanche', 'Python de Seba',
            'Python réticulé', 'Python royal',
            // R
            'Ragondin', 'Raphicère', 'Rat musqué', 'Ratel', 'Raton laveur commun',
            'Renard polaire', 'Renard roux', 'Renne', 'Requin baleine',
            'Requin bouledogue', 'Requin tigre', 'Rorqual commun',
            'Rhinocéros blanc', 'Rhinocéros noir', 'Roitelet huppé',
            'Rossignol philomèle', 'Rouge-gorge familier', 'Rougequeue noir',
            // S
            'Sanglier', 'Sarcelle d\'hiver', 'Sassabi', 'Serin cini', 'Serval',
            'Siamang', 'Siamang de Kloss', 'Singe araignée à tête brune',
            'Singe araignée aux mains noires', 'Singe araignée commun',
            'Singe hurleur', 'Singe hurleur à manteau', 'Singe hurleur du Guatémala',
            'Singe hurleur noir', 'Singe hurleur roux', 'Sitatunga',
            'Sittelle torchepot', 'Spatule blanche', 'Springbok', 'Suricate',
            // T
            'Tamanoir', 'Tamarin-lion doré', 'Tapir malais', 'Tarsier des Philippines',
            'Taupe d\'Europe', 'Tigre', 'Tigre de Sibérie', 'Tigre du Bengale', 'Topi',
            'Tortue d\'Hermann', 'Tortue géante des Galapagos', 'Tortue luth',
            'Toucan toco', 'Tourterelle des bois', 'Tourterelle turque',
            // U
            'Unau', 'Urial', 'Urubu noir',
            // V
            'Vanneau huppé', 'Varan de Gould', 'Varan du Nil', 'Vautour fauve',
            'Verdier d\'Europe', 'Vipère aspic', 'Vigogne', 'Vison d\'Europe',
            // W
            'Wallaby de Bennett', 'Wapiti', 'Wombat',
            // Y
            'Yak sauvage',
            // Z
            'Zèbre de Burchell', 'Zèbre de Grevy', 'Zèbre de montagne', 'Zibeline',
            'Zorille du Cap',
        ];
    }

    public static function getEnglish(): array
    {
        return [
            // A
            'Dunnock', 'Addax', 'Golden Eagle', 'Little Egret', 'American Alligator',
            'Skylark', 'Alpaca', 'Giant Anaconda', 'Plains Anoa', 'Blackbuck Antelope',
            'Clarke\'s Antelope', 'Tibetan Antelope', 'Nilgai Antelope', 'Roan Antelope',
            'Saiga Antelope', 'Blue Macaw', 'Argali', 'African Ostrich', 'Elegant Avocet',
            // B
            'Babiroussa', 'Chacma Baboon', 'Guinea Baboon', 'Hamadryas Baboon',
            'Yellow Baboon', 'Olive Baboon', 'Blue Whale', 'Banteng', 'Beira',
            'European Weasel', 'Grey Wagtail', 'Canada Goose',
            'North American Bison', 'European Bison', 'European Badger',
            'Blesbok', 'Boa Constrictor', 'Musk Ox', 'Bongo', 'Bonobo',
            'Abyssinian Ibex', 'Nubian Ibex', 'Siberian Ibex',
            'Bullfinch', 'Yellowhammer', 'Ortolan Bunting', 'Red Bubala',
            'African Buffalo', 'Asian Buffalo', 'Hen Harrier', 'Variable Buzzard',
            // C
            'Galah', 'Common Quail', 'Black Caiman', 'Elegant Cockatiel',
            'Field Vole', 'Mallard Duck', 'Mandarin Duck', 'Whistling Duck',
            'Capuchin', 'Brown Capuchin', 'Capybara', 'Caracal', 'Wolverine', 'Caribou',
            'Helmeted Cassowary', 'European Beaver', 'Canadian Beaver',
            'Yellow-backed Duiker', 'Red-sided Duiker', 'Black-fronted Duiker',
            'White-bellied Duiker', 'Blue Duiker', 'Ader\'s Duiker',
            'Natal Duiker', 'Peter\'s Duiker', 'Black Duiker', 'Zebra Duiker',
            'Axis Deer', 'Deer Pig', 'Red Deer',
            'Jackal with Saddlecloth', 'Striped-sided Jackal', 'Golden Jackal',
            'Domestic Camel', 'Wild Camel of Tartary', 'Chamois',
            'Elegant Goldfinch', 'Common Pipistrelle Bat',
            'Rocky Mountain Goat', 'Western Caucasian Goat', 'Roe Deer',
            'New Guinea Singing Dog', 'Bush Dog', 'Common Chimpanzee',
            'Jackdaw', 'Little Owl of Athena', 'Barn Owl',
            'Tawny Owl', 'White Stork', 'African Civet', 'Common Coati',
            'Cobe with a Crescent', 'Cobe de Buffon', 'Lechwe', 'Cobe of Mrs Gray',
            'Royal Cobra', 'Circe Hummingbird', 'Andean Condor', 'Rook',
            'Carrion Crow', 'Grey Cuckoo', 'Grass Snake', 'Coyote',
            'American Crocodile', 'Nile Crocodile', 'Black Swan', 'Mute Swan',
            // D
            'Fallow Deer', 'Short-beaked Common Dolphin', 'Dhole', 'Tasmanian Devil',
            'Silver Dik-dik', 'Gunther\'s Dik-dik', 'Kirk\'s Dik-dik', 'Salt\'s Dik-dik',
            'Dingo', 'Douc', 'Komodo Dragon', 'Drill', 'Dromedary', 'Dugong',
            // E
            'Red Squirrel', 'Eurasian Elk', 'Derby Eland', 'Cape Eland',
            'African Elephant', 'Asian Elephant', 'South Sea Elephant',
            'Australian Emu', 'European Nightjar', 'Langur', 'Golden Langur',
            'European Sparrowhawk', 'Common Starling',
            // F
            'Common Pheasant', 'Kestrel', 'Peregrine Falcon',
            'Blackcap', 'Fennec', 'Pink Flamingo', 'Fossa', 'Gannet',
            'Weasel', 'Common Coot', 'Giant Anteater', 'Ferret',
            // G
            'Common Moorhen', 'Gaur', 'Goitered Gazelle', 'Dama Gazelle',
            'Cuvier\'s Gazelle', 'Grant\'s Gazelle', 'Mountain Gazelle', 'Rhim Gazelle',
            'Sommering Gazelle', 'Speke\'s Gazelle', 'Thomson\'s Gazelle',
            'Waller\'s Gazelle', 'Dorcas Gazelle', 'Indian Gazelle',
            'Blue Jay', 'Eurasian Jay', 'Gelada', 'Common Genet',
            'Northern White-cheeked Gibbon', 'Yellow-cheeked Gibbon',
            'White-handed Gibbon', 'Agile Gibbon', 'Hainan Gibbon',
            'Western Hoolock Gibbon', 'Black Gibbon', 'Bonnet Gibbon',
            'Grey Gibbon', 'Muller\'s Gibbon',
            'Giraffe', 'Glutton', 'Blue Gnu', 'Black Gnu', 'Herring Gull',
            'Long-tailed Goral', 'Himalayan Goral', 'Red Goral',
            'Eastern Gorilla', 'Western Gorilla',
            'Grand Bharal', 'Sperm Whale', 'Common Raven', 'Great Cormorant',
            'Greater Kudu', 'Great White Shark', 'Great Hammerhead Shark', 'Capercaillie',
            'Great Egret', 'Great Crested Grebe', 'Garden Treecreeper', 'Grison',
            'Song Thrush', 'Grizzly', 'Common Crane', 'Hawfinch',
            'Guanaco', 'Cheetah', 'European Bee-eater', 'Harnessed Bushbuck', 'Bearded Vulture',
            // H
            'European Hamster', 'Snowy Owl', 'Common Hedgehog', 'Ermine',
            'Grey Heron', 'Cattle Egret', 'European Eagle-Owl',
            'Long-eared Owl', 'Common Hippopotamus', 'Black Antelope',
            'Barn Swallow', 'Hoopoe', 'Spotted Hyena',
            // I
            'Sacred Ibis', 'Impala', 'Isard',
            // J
            'Jaguar',
            // K
            'Red Kangaroo', 'Southern Kiwi', 'Koala',
            // L
            'Llama', 'Caribbean Manatee', 'Hooded Langur', 'Delacour\'s Langur',
            'Java Langur', 'European Rabbit', 'Common Lemming', 'Leopard',
            'Snow Leopard', 'European Hare', 'Common Linnet',
            'White Lion', 'African Lion', 'Asian Lion', 'California Sea Lion',
            'European Golden Oriole', 'Arctic Wolf', 'Siberian Wolf', 'Common Grey Wolf',
            'European Otter', 'Sea Otter', 'Lycaon', 'Lynx',
            // M
            'Common Macaque', 'Atlantic Puffin', 'Ring-tailed Lemur', 'Emperor Penguin',
            'Mandrill', 'Crowned Mangabey', 'Black Mangabey',
            'White-tailed Mongoose', 'Red Mongoose', 'Patagonian Mara',
            'African Marabou', 'Markhor', 'Alpine Marmot', 'Common Porpoise',
            'European Kingfisher', 'Black Swift', 'Pine Marten',
            'Blackbird', 'Long-tailed Tit', 'Blue Tit', 'Great Tit',
            'Crested Tit', 'Black Tit', 'Marsh Tit',
            'Black Kite', 'Red Kite', 'House Sparrow', 'Walrus',
            'Striped Skunk', 'Wood Mouse', 'Common Shrew',
            // N
            'Narwhal', 'Proboscis Monkey', 'Proboscis Monkey of the Pagai Islands',
            'Nyala', 'Mountain Nyala',
            // O
            'Ocelot', 'Greylag Goose', 'Okapi', 'Bornean Orangutan',
            'Sumatran Orangutan', 'Moose', 'Platypus', 'Orca',
            'Common Slow Worm', 'Scimitar Oryx', 'Oryx Beisa', 'Arabian Oryx', 'Oryx Gazelle',
            'Kerguelen Sea Lion', 'Otocyon', 'White-tufted Marmoset',
            'Brown Bear', 'Kodiak Bear', 'Polar Bear', 'Little Bustard',
            // P
            'Wood Pigeon', 'Giant Panda', 'Red Panda', 'Giant Pangolin', 'Blue Peacock',
            'Two-toed Sloth', 'White Pelican', 'Grey Partridge', 'Red-legged Partridge',
            'Ring-necked Parakeet', 'Budgerigar', 'Little Bharal', 'Lesser Kudu',
            'Common Warthog', 'Harbor Seal', 'Great Spotted Woodpecker', 'Green Woodpecker',
            'Magpie', 'Wood Pigeon', 'Razorbill', 'Chaffinch',
            'Crested Porcupine', 'Cape Bushpig', 'Puku', 'Puma',
            'European Polecat', 'Bald Eagle', 'Seba\'s Python',
            'Reticulated Python', 'Royal Python',
            // R
            'Nutria', 'Steenbok', 'Muskrat', 'Ratel', 'Common Raccoon',
            'Arctic Fox', 'Red Fox', 'Reindeer', 'Whale Shark',
            'Bull Shark', 'Tiger Shark', 'Fin Whale',
            'White Rhinoceros', 'Black Rhinoceros', 'Goldcrest',
            'Nightingale', 'Common Robin', 'Black Redstart',
            // S
            'Wild Boar', 'Teal', 'Sassabi', 'Serin', 'Serval',
            'Siamang', 'Kloss\'s Siamang', 'Brown-headed Spider Monkey',
            'Black-handed Spider Monkey', 'Common Spider Monkey',
            'Howler Monkey', 'Mantled Howler Monkey', 'Guatemalan Howler Monkey',
            'Black Howler Monkey', 'Red Howler Monkey', 'Sitatunga',
            'Eurasian Nuthatch', 'White Spoonbill', 'Springbok', 'Meerkat',
            // T
            'Giant Anteater', 'Golden Lion Tamarin', 'Malayan Tapir', 'Philippine Tarsier',
            'European Mole', 'Tiger', 'Siberian Tiger', 'Bengal Tiger', 'Topi',
            'Hermann\'s Tortoise', 'Galapagos Giant Tortoise', 'Leatherback Turtle',
            'Toco Toucan', 'Turtle Dove', 'Turkish Dove',
            // U
            'Two-toed Sloth', 'Urial', 'Black Vulture',
            // V
            'Northern Lapwing', 'Gould\'s Monitor', 'Nile Monitor', 'Griffon Vulture',
            'European Greenfinch', 'Asp Viper', 'Vicuña', 'European Mink',
            // W
            'Bennett\'s Wallaby', 'Elk', 'Wombat',
            // Y
            'Wild Yak',
            // Z
            'Burchell\'s Zebra', 'Grevy\'s Zebra', 'Mountain Zebra', 'Sable',
            'Cape Zorilla',
        ];
    }
}
