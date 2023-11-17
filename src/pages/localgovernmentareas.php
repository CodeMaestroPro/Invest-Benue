<!DOCTYPE html>
<html lang="en">

<!-- Head section -->
<?php
require_once('components/header.php')
  ?>

<!-- End Head section  -->

<body>

    <!-- Navbar Section  -->

    <?php
    require_once('components/navbar.php')
      ?>

    <!-- End of Navbar Section  -->

  <div class="mt-10">
    <img src="../../public/assets/images/Map-of-Benue.png" alt="map-benue"
      class="w-full h-96 py-4  shadow brightness-100">
  </div>
  <div class="max-w-4xl mx-auto bg-white p-4 rounded shadow grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 mt-20">
    <!-- Local Government Area 1 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        ADO LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-1">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-1">
          <p>
            <b class="text-green-500">Creation Year: </b>1989<br /><b class="text-green-500">Headquarters: </b>Igumale
          </p>
          <p>
            <b class="text-green-500"> Council Wards/Districts: </b>Agila
            council ward, Igumale council ward, Ulayi council ward, Ijigban
            council ward, Utonkon council ward
          </p>
          <p>
            <b class="text-green-500">Local Government Boundaries (Benue State): </b>Otukpo Local Government Area
            Okpokwu Local Government Area, Obi
            Local Government Area, Oju Local Government Area
          </p>
          <p>
            <b class="text-green-500">Local Government Boundaries (Ebonyi State): </b>Ishielu Local Government Area,
            Ohaukwu Local Government Areas
          </p>
          <p>
            <b class="text-green-500">Agricultural Produce: </b>Yam
            production, Rice production, Cassava production Maize production,
            Palm oil production
          </p>
          <p>
            <b class="text-green-500">Popular Occupation: </b>Fishing due to
            the presence of streams
          </p>
          <p>
            <b class="text-green-500">Streams in Ado LGA: </b>Okpokwu stream,
            Ogege stream, Awu stream, Atsani stream, Ado stream
          </p>
          <p>
            <b class="text-green-500">Blacksmith Produce: </b>Hoes, Cutlasses,
            Other basic farm implements
          </p>
          <p>
            <b class="text-green-500">Mineral Resources: </b>Commercial
            quantity of limestone and other minerals
          </p>
          <p>
            <b class="text-green-500">Languages Spoken: </b> Idoma dialect,
            except for Utonkon, where Ufia language is spoken
          </p>
          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>

    <!-- Local Government Area 2 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        AGATU LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-2">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-2">
          <p><b class="text-green-500">Creation Year: </b>1989</p>
          <p><b class="text-green-500">Headquarters:</b> Igumale</p>
          <p>
            <b class="text-green-500">Council Wards/Districts:</b> Agila
            council ward, Igumale council ward, Ulayi council ward, Ijigban
            council ward, Utonkon council ward
          </p>
          <p>
            <b class="text-green-500">Local Government Boundaries (Benue State): </b>Otukpo Local Government Area,
            Okpokwu Local Government Area, Obi
            Local Government Area, Oju Local Government Area
          </p>
          <p>
            <b class="text-green-500">Local Government Boundaries (Ebonyi State):</b>
            Ishielu Local Government Area, Ohaukwu Local Government Areas
          </p>
          <p>
            <b class="text-green-500">Agricultural Produce:</b> Yam
            production, Rice production, Cassava production, Maize production,
            Palm oil production
          </p>
          <p>
            <b class="text-green-500">Popular Occupation: </b>Fishing due to
            the presence of streams
          </p>
          <p>
            <b class="text-green-500">Streams in Ado LGA: </b>Okpokwu stream,
            Ogege stream, Awu stream,Atsani stream, Ado stream
          </p>
          <p>
            <b class="text-green-500">Blacksmith Produce:</b> Hoes Cutlasses,
            Other basic farm implements
          </p>
          <p>
            <b class="text-green-500">Mineral Resources:</b> Commercial
            quantity of limestone and other minerals
          </p>
          <p>
            <b class="text-green-500">Languages Spoken: </b>Idoma dialect,
            except for Utonkon, where Ufia language is spoken
          </p>
          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>

    <!-- Local Government Area 3 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        APA LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-3">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-3">
          <p>
            <b class="text-green-500">Headquarters:</b> Ugbokpo, created in
            August 1991
          </p>
          <p>
            <b class="text-green-500">Boundaries (Benue State):</b> North:
            Agatu, South: Otukpo East: Gwer West local government areas
          </p>
          <p>
            <b class="text-green-500">Boundaries (Kogi State):</b> West: Ankpa
            Local Government Area, West: Omala Local Government Area
          </p>
          <p>
            <b class="text-green-500">Agricultural Produce: </b>Cassava,
            Maize, Yam, Melon, Guinea-corn
          </p>
          <p>
            <b class="text-green-500">Mineral Resources:</b> Gypsum,
            Limestone, and Salt, with great potential for commercial
            exploration
          </p>
          <p>
            <b class="text-green-500">Towns and Villages:</b> Ugboko,
            Iga-Okpaya, Ikobi, Odugbo, Oiji, Ofoke, Oba Alifeti, Idada,
            Ojantela, Edikwu-Icho, Ogbobi
          </p>
          <p>
            <b class="text-green-500">Languages Spoken:</b> Idoma language
          </p>
          <p></p>
          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>

    <!-- Local Government Area 4 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        BURUKU LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-4">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-4">
          <p>
            <b class="text-green-500">Created:</b> 1989 out of the present
            Gboko Local Government Area
          </p>
          <p>
            <b class="text-green-500">Previous Existence: </b>Once existed in
            1982 as Ambighir Local Government, phased out in 1984
          </p>
          <p>
            <b class="text-green-500">Boundaries (Benue State): </b> East:
            Logo and Katsina-Ala Local Government Area, West: Ushongo Local
            Government Area, North: Guma or Tarkaa Local Government Area,
            South: Gboko Local Government Area
          </p>
          <p>
            <b class="text-green-500">Boundaries (Kogi State): </b>West: Ankpa
            Local Government Area, West: Omala Local Government Area
          </p>
          <p>
            <b class="text-green-500">Ethnic Composition: </b> Tiv people
            (dominant), Etulo, Nyifon
          </p>
          <p>
            <b class="text-green-500">Population (2006): </b>203,721 people
          </p>
          <p>
            <b class="text-green-500">Landmass: </b>Approximately 1,246 square
            kilometers
          </p>
          <p>
            <b class="text-green-500">Coordinates: </b>Latitude: 10° 37′ 0″ N,
            Longitude: 7° 14′ 0″ E
          </p>
          <p>
            <b class="text-green-500">Council Wards: </b>Shorov Council Ward,
            Etulo Council Ward, Mbaityough Council Ward, Mbaazagee Council
            Ward, Mbaakura Council Ward, Binev Council Ward, Mbapen Council
            Ward, Mbaya Council Ward, Mbakyongo Council Ward, Mbaatirkyaa
            Council Ward, Mbayaka Council Ward, Mbakyaan Council Ward, Mbaade
            Council Ward
          </p>
          <p>
            <b class="text-green-500">Development Areas: </b>Buruku, Tyowanye,
            Abwa, Mbalagh development areas
          </p>
          <p>
            <b class="text-green-500">Major Markets: </b>Various markets
            including Tyowanye, Abwa, Adi, Ugbema, Ortese, Jingir, Uga, Usen,
            Fada, Kur, Tyogbenda-Mbajov, Anshav, Ashamena, Tomanyiin, Anvambe,
            Tomataan, and more (some markets have specific days of operation)
          </p>
          <p>
            <b class="text-green-500">Features: </b>Rivers (e.g., River
            Buruku), Streams, Ponds, Swampy areas, Loose soil, Thick forests,
            and others
          </p>
          <p>
            <b class="text-green-500">Agricultural Produce: </b>Rice, beans,
            cashew, cassava, yam, okro, palm nuts, cocoa nuts, guava, pawpaw,
            soyabeans, groundnut, dry fish, fresh fish, vegetables, melon,
            groundnut, Timber tree, economic trees like Orange and mangoes
          </p>
          <p>
            <b class="text-green-500">Mineral Resources: </b>Limestone, sharp
            sand, salt, gravel, natural gas, clay, coal, and more
          </p>
          <p>
            <b class="text-green-500">Temperature: </b>Ranges from 25°C to
            31°C
          </p>
          <p>
            <b class="text-green-500">People: </b>A significant percentage of
            literate population, contributing to various fields including
            academia, medicine, and civil service
          </p>
          <p>
            <b class="text-green-500">Religion: </b>Dominating Christian
            group, Muslim group, Traditional worshippers (Akombo and Tsav)
          </p>
          <p>
            <b class="text-green-500">Notable Churches: </b>Universal Reform
            Christian Church, Catholic Church, Reformed Evangelical Mission,
            Deeper Life Church, Living Faith Church, and others
          </p>
          <p>
            <b class="text-green-500">Culture</b>Rich and diverse cultural
            heritage expressed through clothing, masquerades, music, dances,
            and traditional Kwagh-hir theater with notable dances like
            Ingyough, Ange, Anchanakupa, Swange, Kureke, and Tomsule.
          </p>
          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 5 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        GBOKO LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-5">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-5">
          <p><b class="text-green-500">Date Created: </b>11th May 1970</p>
          <p><b class="text-green-500">Headquarter: </b>Gboko</p>
          <p>
            <b class="text-green-500">Landmass: </b>2,264 square kilometers
          </p>
          <p>
            <b class="text-green-500">Population (2006 Census): </b>358,936
          </p>
          <p>
            <b class="text-green-500">Languages: </b>Tiv, Hausa, and English
          </p>
          <p>
            <b class="text-green-500">Occupation: </b>Farming<br />-
            Trading<br />- Civil Service
          </p>
          <p><b class="text-green-500">Mineral Resources: </b>Limestone</p>
          <p><b class="text-green-500">Industry: </b>Dangote Cement Plc</p>
          <p>
            <b class="text-green-500">Special Tribute: </b>Traditional seat of
            Tor Tiv and Tiv traditional Headquarters
          </p>
          <p>
            <b class="text-green-500">Distance from Makurdi: </b>92 kilometers
            (1 hour)
          </p>
          <p>
            <b class="text-green-500">Landmark: </b>Gboko Hills in the North,
            Mkar Hills at the East, J. S. Tarka Tomb
          </p>
          <p><b class="text-green-500">Area Code: </b>GBK</p>
          <p>
            <b class="text-green-500">Districts, Council Wards, and Polling Units: </b>Mbakpegh Council Ward, Igyorov
            Council Ward, Mbatan Council Ward,
            Gboko-South Council Ward, Mbatser Council Ward, Mbakwen Council
            Ward, Gboko-North-West Council Ward, Mbaanku Council Ward, Mbadim
            Council Ward, Gboko-Central Market Council Ward, Yandev-South
            Council Ward, Yandev-North Council Ward, Ukpekpe Council Ward,
            Mbatyu Council Ward, Mbadam Council Ward, Gboko-East Council Ward,
            Mbaaverakaa Council Ward, (Seventeen council wards and Eighteen
            districts)
          </p>
          <p><b class="text-green-500">Polling Units: </b>345</p>
          <p>
            <b class="text-green-500">Markets: </b>Mbatyav, Mbatyierev,
            Mbayion, Yandev, Ipav
          </p>
          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 6 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        GUMA LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-6">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-6">
          <p>
            <b class="text-green-500">Creation Year: </b>1987 (from the former
            Makurdi Local Government Area)
          </p>
          <p><b class="text-green-500">Headquarters: </b>Gbajimba</p>
          <p>
            <b class="text-green-500">Distance from Makurdi: </b>37 kilometers
            (1-hour journey)
          </p>
          <p>
            <b class="text-green-500">Boundaries: </b>East: Logo Local
            Government Area<br />- South: Makurdi Local Government Area and
            Tarka Local Government Area<br />- West: Doma Local Government
            Area of Nassarawa State
          </p>
          <p>
            <b class="text-green-500">Major Towns</b>Gbajimba<br />- Daudu<br />-
            Torkula<br />- Kase-yough<br />- Abinsi<br />- Mbabegha Village<br />-
            Agasha
          </p>
          <p>
            <b class="text-green-500">Landmass: </b>240,000 square kilometers
          </p>
          <p>
            <b class="text-green-500">Population (2006 Census): </b>191,599
            people
          </p>
          <p>
            <b class="text-green-500">People: </b>Predominantly Tiv with
            Jukun, Hausa, and Kabuwa communities
          </p>
          <p>
            <b class="text-green-500">Council Wards or Districts: </b>-
            Kaambe<br />- Abinsi<br />- Uvir<br />- Saghev<br />- Nzorov<br />-
            Nyiev<br />- Mbabai<br />- Mbayer or Yandev<br />- Mbawa<br />-
            Mbadwen
          </p>
          <p><b class="text-green-500">Polling Units</b>160</p>
          <p>
            <b class="text-green-500">Political Representation: </b>Shares a
            Federal House of Representatives seat with Makurdi Local
            Government and has one House of Assembly seat
          </p>
          <p>
            <b class="text-green-500">Major Dances: </b>Tsuwe-Tsele, Ajo,
            Ihanga, and many folk singers
          </p>
          <p>
            <b class="text-green-500">Markets: </b>Gbajimba market<br />-
            Daudu market<br />- Agasha market<br />- Abinsi
          </p>
          <p>
            <b class="text-green-500">Investment Opportunities: </b>- Natural
            Resources<br />- Agricultural Produce<br />- Livestock Farming<br />-
            Trading<br />- Craftsmanship
          </p>
          <p>
            <b class="text-green-500">Craftsmanship: </b>Production of hoes,
            arrows, cutlasses, axes, and knives for domestic and commercial
            purposes
          </p>
          <p>
            <b class="text-green-500">Transportation: </b>Road links to
            Makurdi and Nassarawa State; water transport via River Gbajimba
            linked with River Benue
          </p>
          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 7 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        GWER EAST LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-7">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-7">
          <p>
            <b class="text-green-500">Date Created: </b>1976 (by General
            Murtala Mohammed)
          </p>
          <p><b class="text-green-500">Headquarters: </b>Aliade</p>
          <p>
            <b class="text-green-500">Landmass: </b>2,294 square kilometers
          </p>
          <p>
            <b class="text-green-500">Geographical Location: </b>Southwest of
            Tar-Tiv, between 8° and 9° east of the green meridian
          </p>
          <p>
            <b class="text-green-500">Population (2006 Census): </b>163,647
            people
          </p>
          <p>
            <b class="text-green-500">Districts: </b>- Yonov<br />- Njiriv<br />-
            Ngyohov
          </p>
          <p>
            <b class="text-green-500">Council Wards: </b>14 council wards with
            specific wards in Yonov, Ngyohov, and Njiriv axes
          </p>
          <p>
            <b class="text-green-500">Polling Units: </b>157 across 14
            districts in 14 council wards
          </p>
          <p>
            <b class="text-green-500">Boundaries: </b>Shares boundaries with
            seven other local government areas: Gwer-West, Tarka, Konshisha,
            Gboko, Oju, Obi, and Makurdi
          </p>
          <p>
            <b class="text-green-500">Tribes: </b>Predominantly Tiv with Igede
            community
          </p>
          <p>
            <b class="text-green-500">Religion: </b>Diverse denominations:
            Christians and Muslims co-existing
          </p>
          <p>
            <b class="text-green-500">Rivers and Streams: </b>Gwer, Gbaya,
            Uhugh, Fete, Mu, Ujilagbo, and others, all tributaries of River
            Benue
          </p>
          <p>
            <b class="text-green-500">Major Markets: </b>Aliade market,
            Ikpayongo market, Igbor market, Taraku market, Ivur market, Fiidi
            market
          </p>
          <p>
            <b class="text-green-500">Economic Organizations: </b>-
            Agriculture (farming, livestock farming, crops produce)<br />-
            Trading<br />- Craft making and smithing
          </p>
          <p>
            <b class="text-green-500">Transportation: </b>Served by motorable
            roads and the Nigerian Eastern railway with stations at Taraku,
            Moi-Igbo, Kinga, and Agana
          </p>
          <p>
            <b class="text-green-500">Mineral Resources/Deposit: </b>Salt at
            Mbayom, hard-core stones, laterite at Mbasombo, and clay found in
            virtually all three districts
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 8 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        GWER WEST LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-8">
          <i class="fas fa-info-circle mr-2"></i>View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-8">
          <p>
            <b class="text-green-500">Date Created: </b>29th September 1991
          </p>
          <p><b class="text-green-500">Headquarters: </b>Naka</p>
          <p>
            <b class="text-green-500">Geographical Location: </b>West of Benue
          </p>
          <p>
            <b class="text-green-500">Landmass: </b>Landmass 1,479 square
            kilometers
          </p>
          <p><b class="text-green-500">Languages: </b>Tiv, Injaha (Idoma)</p>
          <p>
            <b class="text-green-500">Occupation</b>- Farming<br />-
            Trading<br />- Fishing
          </p>
          <p>
            <b class="text-green-500">Mineral Resources: </b>Salt, Clay,
            Limestone, Byrite
          </p>
          <p>
            <b class="text-green-500">Distance from Makurdi: </b>40 kilometers
            (50 minutes)
          </p>
          <p><b class="text-green-500">Area Code: </b>NAK</p>
          <p>
            <b class="text-green-500">Features: </b>- Electricity<br />- Naka
            Earth Dam<br />- Nagi Transport Service
          </p>
          <p>
            <b class="text-green-500">Council Wards: </b>- Avihijime Council
            Ward<br />- Gaambe Ushin Council Ward<br />- Gbaange/Tongov
            Council Ward<br />- Ikyaghev Council Ward<br />- Ityougatee/Injaha
            Council Ward<br />- Mbachohom Council Ward<br />- Mbayamshi
            Council Ward<br />- Mbapa Council Ward<br />- Merkyen Council
            Ward<br />- Sengev<br />- Shaghev/Ukusu Council Ward<br />-
            Sengev/Yengev Council Ward<br />- Tijime Council Ward<br />-
            Tsambe/Mbesev Council Ward<br />- Mbabuande Council Ward
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 9 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        KATSINA-ALA LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-9">
          <i class="fas fa-info-circle mr-2"></i>View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-9">
          <p><b class="text-green-500">Date Created: </b>1976</p>
          <p><b class="text-green-500">Headquarters: </b>Katsina-Ala</p>
          <p>
            <b class="text-green-500">Districts or Council Wards: </b>-
            Katsina-Ala Township<br />- Ikyurav-tiev I<br />- Ikyurav-tiev
            II<br />- Yooyo<br />- Utange<br />- Tiir<br />- Iwar<br />-
            Michihe<br />- Mbakyongo<br />- Mbajir<br />- Mbatyura/Mberev<br />-
            Mbacher
          </p>
          <p>
            <b class="text-green-500">Polling Units: </b>185 across 12
            districts in 12 council wards
          </p>
          <p>
            <b class="text-green-500">Ethnic Composition: </b>Tiv, Etelo,
            Hausa, and Fulani
          </p>
          <p>
            <b class="text-green-500">Distance from Makurdi: </b>126
            kilometers
          </p>
          <p>
            <b class="text-green-500">Boundaries: </b>Benue State: To the
            North (Logo and Ukum), To the South (Kwande and Ushongo), To the
            West (Buruku); Taraba State: To the North East (Takum and Ussa)
          </p>
          <p>
            <b class="text-green-500">Weather: </b>- Rainy season (April to
            October)<br />- Dry season (November to March)<br />- Guinea
            savannah vegetation
          </p>
          <p>
            <b class="text-green-500">Main Occupation: </b>Farming (over 75%
            of the population engages in agriculture)
          </p>
          <p>
            <b class="text-green-500">Agricultural Produce: </b>Yams, Sorghum,
            Cassava, Yellow melon, Beniseed (sesame), Soybeans, Groundnut, and
            others
          </p>
          <p>
            <b class="text-green-500">Farm Tools</b>Traditional tools like
            Hoes, Machetes, and Cutlasses
          </p>
          <p>
            <b class="text-green-500">Cultural Heritage: </b>Famous cultural
            dances including Gbasela, Takera, Agbega, Kwagh-hir, and others
          </p>
          <p>
            <b class="text-green-500">Prominent Geographical Features: </b>River Katsina-Ala, The Harga Hills of Igneous
            Rock, River Yooyo,
            Loko, Lake Akata
          </p>
          <p>
            <b class="text-green-500">Transportation: </b>Located on trunk "A"
            highway connecting Calabar, Jalingo, and Yola
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>

    <!-- Local Government Area 10 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        KONSHISHA LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-10">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-10">
          <p>
            <b class="text-green-500">Date Created: </b>- Created in 1983,
            then scrapped in 1984<br />- Recreated on 4th February 1989
          </p>
          <p><b class="text-green-500">Headquarters: </b>Tse-Agberagba</p>
          <p>
            <b class="text-green-500">Population: </b>Approximately 225,672
            (2006 census)
          </p>
          <p>
            <b class="text-green-500">Landmass: </b>10,089 square kilometers
            (one of the largest in Benue State)
          </p>
          <p>
            <b class="text-green-500">Geographical Location: </b>North East of
            Benue State (between Longitude 8°40' East and Latitude 6°55' to
            7°23' North)
          </p>
          <p>
            <b class="text-green-500">Boundaries: </b>- Gboko Local Government
            Area (North)<br />- Gwer Local Government Area (West)<br />-
            Ushongo and Vandeikya Local Government Areas (East)<br />- Cross
            River (South)
          </p>
          <p>
            <b class="text-green-500">Ethnic Composition: </b>- Tivs (majority
            group)<br />- Igedes (minority group)
          </p>
          <p>
            <b class="text-green-500">Council Wards/Districts: </b>Eleven (11)
            Council Wards/Districts
          </p>
          <p>
            <b class="text-green-500">Polling Units: </b>212 across the Eleven
            (11) districts
          </p>
          <p>
            <b class="text-green-500">Development Area Offices: </b>Five (5)
            Development Area offices
          </p>
          <p>
            <b class="text-green-500">Agricultural Potentials: </b>Crops like
            yams, cassava, rice, soya beans, guinea corn, groundnuts, oranges,
            etc.
          </p>
          <p>
            <b class="text-green-500">Livestock</b>Goats, pigs, birds, Fulani
            cattle, and other domestic animals Cultural dances: Kyureke,
            Ingyinga, Ingyough, Takera, Kwagh-hir performance
          </p>
          <p>
            <b class="text-green-500">Social Amenities: </b>- Over 150 primary
            schools and about 107 Post Primary Institutions<br />- Women
            vocational centers, clubhouses, water schemes, and communication
            links
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>

    <!-- Local Government Area 11 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        KWANDE LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-11">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-11">
          <p>
            <b class="text-green-500">Date Created: </b>- Originally created
            as an Intermediates area<br />- Became a local government in
            September 1976
          </p>
          <p>
            <b class="text-green-500">Headquarters: </b>Adikpo (known as
            'London' due to friendly weather and urbanization)
          </p>
          <p>
            <b class="text-green-500">Geographical Location: </b>East-South of
            Benue State
          </p>
          <p><b class="text-green-500">Area Code: </b>WDP</p>
          <p>
            <b class="text-green-500">Landmass: </b>2,744 square kilometers
          </p>
          <p>
            <b class="text-green-500">Distance from Makurdi: </b>Approximately
            149 km (1 hour 30 minutes)
          </p>
          <p>
            <b class="text-green-500">Population: </b>345,850 (based on 2006
            census)
          </p>
          <p><b class="text-green-500">Languages: </b>Tiv, English</p>
          <p>
            <b class="text-green-500">Predominant Occupation: </b>- Farming<br />-
            Civil service<br />- Trading
          </p>
          <p>
            <b class="text-green-500">Mineral Resources: </b>Zinc, table salt,
            precious stones
          </p>
          <p>
            <b class="text-green-500">Boundaries: </b>Cameroon, Taraba,
            Cross-River, and Akwa-Ibom States
          </p>
          <p>
            <b class="text-green-500">Districts/Council Wards and Polling Units: </b>- Fifteen (15) council wards with
            16 districts<br />- A total of
            248 polling units across the council wards
          </p>
          <p>
            <b class="text-green-500">Major Towns: </b>- Adikpo<br />-
            Jato-Aka<br />- Ikyogen<br />- Koti
          </p>
          <p>
            <b class="text-green-500">Agricultural Produce: </b>- Cassava
            (Garri)<br />- Soya Beans<br />- Rice<br />- Mango<br />-
            Groundnuts<br />- Sweet potatoes
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>

    <!-- Local Government Area 12-->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        LOGO LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-12">
          <i class="fas fa-info-circle mr-2"></i>View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-12">
          <p>
            <b class="text-green-500">Date Created: </b>December 1996,
            separated from Katsina-Ala Local Government Area
          </p>
          <p><b class="text-green-500">Headquarters: </b>Ugba</p>
          <p>
            <b class="text-green-500">Location: </b>Longitude: 9°4 East<br />Latitude:
            7°40 North
          </p>
          <p>
            <b class="text-green-500">Boundaries: </b>- East: Ukum Local
            Government Area<br />- North: Wukari Local Government, Taraba
            State<br />- North-West: Guma Local Government Area<br />- West:
            Buruku Local Government Area<br />- South: Katsina-Ala Local
            Government Area
          </p>
          <p>
            <b class="text-green-500">Climate: </b>- Tropical climate with two
            distinct seasons:<br />
            1. Rainy season<br />
            2. Dry season
          </p>
          <p>
            <b class="text-green-500">Population: </b>Approximately 120,000
            (based on 2006 census report)
          </p>
          <p>
            <b class="text-green-500">People: </b>- Predominantly Tiv-speaking
            people<br />
            - Inhabited by Ugondo and Gaambe-Tiev groups
          </p>
          <p>
            <b class="text-green-500">Council Wards/Districts: </b>- Mbater,
            Ugondo<br />
            - Mbagber<br />
            - Tombo, Gaambe<br />
            - Mbayam, Ugondo<br />
            - Mbadyul, Ugondo<br />
            - Nenzev, Ugondo<br />
            - Mbavuur, Gaambe<br />
            - Turan, Gaambe<br />
            - Ukemberagya/Tswarev, Gaambe<br />
            - Yonov, Ugondo
          </p>
          <p>
            <b class="text-green-500">Major Towns</b>- Ugba<br />
            - Anyiin<br />
            - Anyilamo<br />
            - Abeda<br />
            - Zanzan
          </p>
          <p>
            <b class="text-green-500">Markets: </b>- Anyiin<br />
            - Ugba<br />
            - Ayilamo<br />
            - Abeda<br />
            - Iorza Dooshima<br />
            - Dusa Anyone<br />
            - Adzege<br />
            - Wende Gondozua<br />
            - Mbadyul<br />
            - Ikyoo
          </p>
          <p>
            <b class="text-green-500">Culture and Tourism: </b>- Salt mines at
            Mbatsum<br />
            - Hills at Shisho (with supernatural powers)<br />
            - Agbanyadio hills<br />
            - Lakes: Anyibe, Adzege Bernor, Warawa, Jevje
          </p>
          <p>
            <b class="text-green-500">Culture and Dance: </b>Rich culture
            expressed through colorful dances, music, and festivals including
            Kpenye, Takere, Oliver Anye, Bagu, Swange, and more
          </p>
          <p>
            <b class="text-green-500">Investment Opportunities: </b>Agricultural products, Natural resources, Trade,
            Tourism
            development including hotels and cultural village for training
          </p>
          <p>
            <b class="text-green-500">Transportation: </b>Well-connected by a
            network of Federal, State, and Local Government Roads with a
            Federal road running through Ugba from Yandev to Zaki Biam and
            Wukari, connecting to Taraba State
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 5 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        MAKURDI LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-13">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-13">
          <p>
            <b class="text-green-500">History: </b>- Established in the early
            twenties, gained prominence in 1927<br />
            - Became the Benue Province headquarters<br />
            - Became the capital of Benue State in 1976
          </p>
          <p>
            <b class="text-green-500">Headquarters: </b>Makurdi Local
            Government Area
          </p>
          <p>
            <b class="text-green-500">Council Wards: </b>- Agan<br />
            - Bar<br />
            - Central or South Mission<br />
            - Clerk or Market<br />
            - Fiidi<br />
            - Mbalagh<br />
            - Modern Market<br />
            - North Bank I<br />
            - North Bank II<br />
            - Wailomayo
          </p>
          <p>
            <b class="text-green-500">North Bank of Makurdi: </b>- Federal
            University of Agriculture<br />
            - Nigerian Army School of Military Engineering<br />
            - Headquarters of the 72 Airborne Battalion<br />
            - State Headquarters of the Department of Customs and Excise
          </p>
          <p>
            <b class="text-green-500">Southern Part of Makurdi: </b>-
            Government House<br />
            - State Secretariat<br />
            - Federal Secretariat<br />
            - Commercial Banks<br />
            - Police Headquarters<br />
            - Nigeria Prisons Service<br />
            - Aper Aku Township Stadium<br />
            - Nigeria Air Force Base, Makurdi<br />
            - Makurdi Modern Market<br />
            - Federal Medical Centre<br />
            - Nigeria Railway Station<br />
            - Benue Printing and Publishing Company Limited<br />
            - Radio Benue<br />
            - Nigeria Television Authority (NTA)<br />
            - Central Post Office<br />
            - Benue Hotels<br />
            - Benue State University (BSU)
          </p>
          <p>
            <b class="text-green-500">Temperature: </b>- Warm temperatures
            most of the year<br />
            - Cool period from November to January during harmattan season
          </p>
          <p>
            <b class="text-green-500">Transportation: </b>- Air: Nigeria
            Airways and private airlines<br />
            - Rail: Makurdi Rail Bridge connects northern and eastern
            Nigeria<br />
            - Road: Major routes to Lafia, Jos, Otukpo, Enugu, Yandev, Adikpo,
            Calabar, Wukari<br />
            - Water: River Benue
          </p>
          <p>
            <b class="text-green-500">Bridges: </b>Bridges - Railway Bridge
            (built in 1932) New Dual Carriage Bridge (commissioned in 1978)
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 13 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        OBI LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-14">
          <i class="fas fa-info-circle mr-2"></i>View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-14">
          <p>
            <b class="text-green-500">History: </b>- Created on October 10,
            1996<br />
            - Carved from the former Oju local government<br />
            - Named after River Obi
          </p>
          <p>
            <b class="text-green-500">Headquarters: </b>Obarike-Ito (Ito
            Barracks)
          </p>
          <p>
            <b class="text-green-500">Major Towns: </b>Adum East, Itogo,
            Okpokwu, Ikwokwu
          </p>
          <p>
            <b class="text-green-500">Geographical Location: </b>South Central
          </p>
          <p><b class="text-green-500">Landmass: </b>195 square kilometers</p>
          <p>
            <b class="text-green-500">Population: </b>98,550 (2006 census)
          </p>
          <p><b class="text-green-500">Languages: </b>Languages Igede</p>
          <p>
            <b class="text-green-500">Boundaries: </b>Ado Local Government
            Area, Otukpo Local Government Area, and Oju Local Government Area
            of Benue State
          </p>
          <p><b class="text-green-500">Occupation: </b>Farming</p>
          <p>
            <b class="text-green-500">Major Farm Produce: </b>Maize, Cassava,
            Groundnut, Yams
          </p>
          <p>
            <b class="text-green-500">Mineral Resources: </b>Bauxite,
            Limestone, Crude oil, Tin Ore, Copper
          </p>
          <p>
            <b class="text-green-500">Distance from Makurdi: </b>1 hour 30
            minutes
          </p>
          <p><b class="text-green-500">Area Code: </b>BRT</p>
          <p>
            <b class="text-green-500">Council Wards</b>- Obarike-Ito council
            ward<br />
            - Orihi council ward<br />
            - Okwutungbe council ward<br />
            - Ogore council ward<br />
            - Okpokwu council ward<br />
            - Odiapa council ward<br />
            - Obeko council ward<br />
            - Itogo council ward<br />
            - Irabi council ward<br />
            - Ikwokwu council ward<br />
            - Akum West council ward<br />
            - Adiko council ward
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 14 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        OGBADIBO LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-15">
          <i class="fas fa-info-circle mr-2"></i>View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-15">
          <p><b class="text-green-500">Creation Year: </b>1991</p>
          <p>
            <b class="text-green-500">Name Origin: </b>Named after the
            Ogbadibo stream that flows through the area
          </p>
          <p><b class="text-green-500">Headquarters: </b>Otukpa</p>
          <p>
            <b class="text-green-500">Councils or Districts: </b>- Otukpa
            (with 6 council wards) - Orokam (with 3 council wards) - Owukpa
            (with 4 council wards)
          </p>
          <p>
            <b class="text-green-500">Boundaries: </b>- To the East: Okpokwu
            Local Government Area - To the North: Olamaboro Local Government
            Area, Kogi State - To the West: Udenu and Igbo-Eze North Local
            Government Areas, Enugu State - To the South: Isi-Uzo Local
            Government Area, Enugu State
          </p>
          <p>
            <b class="text-green-500">Agriculture Produce: </b>- Cassava -
            Millet - Palm wine - Palm oil in commercial quantities
          </p>
          <p>
            <b class="text-green-500">Mineral Resources: </b>- Large coal and
            kaolin deposits in Owukpa and Orokam respectively
          </p>
          <p>
            <b class="text-green-500">Languages: </b>Predominantly Idoma
            dialect
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 15 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        OHIMINI LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-16">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-16">
          <p>
            <b class="text-green-500">Creation Year: </b>5th December, 1996
          </p>
          <p>
            <b class="text-green-500">Name Origin: </b>Named after the Ohimini
            stream in the area
          </p>
          <p><b class="text-green-500">Headquarters: </b>Idekpa</p>
          <p><b class="text-green-500">Geo-Location: </b>South-East</p>
          <p><b class="text-green-500">Population: </b>176,000 (2006)</p>
          <p><b class="text-green-500">Languages: </b>Idoma</p>
          <p>
            <b class="text-green-500">Distance from Makurdi: </b>Approximately
            2 hours and 25 minutes
          </p>
          <p><b class="text-green-500">Area Code: </b>DKP</p>
          <p>
            <b class="text-green-500">Council Wards: </b>- Ochobo - Onyangede
            - Agadagba - Atilo - Awulema - Awule - Ugene - Ehatokpe - Ojali -
            Ojano - Okete - Ankpechi
          </p>
          <p>
            <b class="text-green-500">Boundaries: </b>Benue Borders: Otukpo
            Local Government Area and Okpokwu Local Government Area Kogi State
            Borders: Olamaboro Local Government Area and Ankpa Local
            Government Area
          </p>
          <p><b class="text-green-500">Occupation: </b>Farming and Trading</p>
          <p>
            <b class="text-green-500">Agriculture Produce: </b>- Yam - Guinea
            corn - Groundnut - Maize - Cassava
          </p>
          <p>
            <b class="text-green-500">Mineral Resources: </b>- Coal - Chalk -
            Kerosene - Precious stone
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 16 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        OKPOKWU LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-17">
          <i class="fas fa-info-circle mr-2"></i>View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-17">
          <p><b class="text-green-500">Year of Creation: </b>1976</p>
          <p>
            <b class="text-green-500">Name Origin: </b>Derived from River
            Okpokwu
          </p>
          <p><b class="text-green-500">Headquarters: </b>Okpoga</p>
          <p>
            <b class="text-green-500">Location from Makurdi: </b>Approximately
            170 kilometers southwest of Makurdi (Benue State capital)
          </p>
          <p>
            <b class="text-green-500">Borders: </b>- North: Ohimini Local
            Government Area - West: Ogbadibo Local Government Area - East: Ado
            and Otukpo Local Government Area - South: Isiuzo Local Government
            of Enugu State - North West: Olamaboro Local Government Area of
            Kogi State
          </p>
          <p>
            <b class="text-green-500">Population: </b>Projected at over
            250,000
          </p>
          <p>
            <b class="text-green-500">Districts: </b>- Edumoga - Okpoga -
            Ichama
          </p>
          <p>
            <b class="text-green-500">Council Wards: </b>Twelve council wards
          </p>
          <p>
            <b class="text-green-500">Vegetation: </b>Transition between
            deciduous rainforest and grassland savannah
          </p>
          <p><b class="text-green-500">Predominant Occupation: </b>Farming</p>
          <p>
            <b class="text-green-500">Farm Produce: </b>- Citrus fruits -
            Guinea corn - Maize - Soybeans - Millet - Beni seed - Pepper -
            Groundnuts - Rice - Cassava (mainly exported as garri)
          </p>
          <p>
            <b class="text-green-500">Banks: </b>- Bank of the North, Ugbokolo
            - People's Bank, Ugbokolo - Okpoga Community Bank, Okpoga
          </p>
          <p>
            <b class="text-green-500">Major Markets: </b>- Afor market,
            Ugbokolo - Ichama and Ede markets in Aliaba, Ede-Okpoga - Eke
            market in Olegbocho, Ai-dogodo - Ukwo markets at Okpoga and Adoga
          </p>
          <p>
            <b class="text-green-500">Finished Products in Markets: </b>- Palm
            oil - Palm wine - Magazines - Baskets - Brooms - Chairs
          </p>
          <p>
            <b class="text-green-500">Investment Opportunities: </b>Open-door
            policy for investment with prompt land acquisition and security
            protection for prospective investors
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>

    <!-- Local Government Area 17 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        OJU LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-18">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-18">
          <p><b class="text-green-500">Year of Creation: </b>February 1976</p>
          <p>
            <b class="text-green-500">Headquarters: </b>Oju town / council
            ward
          </p>
          <p><b class="text-green-500">Dominant Ethnic Group: </b>Igede</p>
          <p>
            <b class="text-green-500">Population: </b>- 700,000 people (2013
            estimate) - 168,491 people (2006 estimated census)
          </p>
          <p>
            <b class="text-green-500">Occupation: </b>Farming, Trading, and
            Civil Service
          </p>
          <p>
            <b class="text-green-500">Agricultural Produce: </b>- Yam - Rice -
            Beni seed - Guinea corn - Palm - Soya beans - Cassava - Millet -
            Maize - Groundnut - Palm oil
          </p>
          <p><b class="text-green-500">Geo-Location: </b>South East</p>
          <p>
            <b class="text-green-500">Landmass: </b>1,283 square kilometers
          </p>
          <p>
            <b class="text-green-500">Boundaries: </b>- North: Obi and Gwer
            local government - East: Konshisha local government - West: Ado
            local government - South: Ebonyi and Cross River States of Nigeria
          </p>
          <p>
            <b class="text-green-500">Mineral Resources: </b>- Limestone -
            Precious stone - Bauxite - Coal - Clay - Zinc - Salt
          </p>
          <p><b class="text-green-500">Languages: </b>Igede</p>
          <p>
            <b class="text-green-500">Distance from Makurdi: </b>115 km (1
            hour 20 minutes)
          </p>
          <p><b class="text-green-500">Area Code: </b>JUX</p>
          <p>
            <b class="text-green-500">Districts: </b>- Igede Central (Oju I)
            district/state constituency - Uwokwu (Oju II) district/state
            constituency
          </p>
          <p>
            <b class="text-green-500">Council Wards</b>- Adokpa council ward -
            Ibilla council ward - Idelle council ward - Iyeche council ward -
            Oboru Oye council ward - Oju council ward - Okpokpo council ward -
            Okudu council ward - Owo council ward - Ukpa council ward - Ainu
            council ward
          </p>
          <p>
            <b class="text-green-500">Market Days: </b>- Ihigile - Ihio -
            Ihiobila - Ihiejwo - Ihiokwu
          </p>
          <p>
            <b class="text-green-500">Religion: </b>- Predominantly
            Christianity - About 85% Christians - About 15% traditional
            worshippers
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>

    <!-- Local Government Area 18 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        LOTUKPO LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-19">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-19">
          <p>
            <b class="text-green-500">Year of Creation: </b>- Not specified,
            but it's part of the initial local government creation in Nigeria
          </p>
          <p><b class="text-green-500">Headquarters: </b>Otukpo Town</p>
          <p>
            <b class="text-green-500">Ethnic Composition: </b>- Predominantly
            Idoma people - Communities of other Nigerian tribes, including
            Hausa, Yoruba, Ibo, and Tiv
          </p>
          <p>
            <b class="text-green-500">Languages: </b>- Predominantly a dialect
            of Idoma language - Akpa people (around Otobi – Allan axis) speak
            Akweya language
          </p>
          <p>
            <b class="text-green-500">Boundaries: </b>- North: Apa Local
            Government Area - South: Obi, Ado, and Okpokwu Local Government
            Area - East: Gwer West and Gwer East Local Government Areas -
            West: Ohimini Local Government Area - West (Kogi State): Ankpa
            Local Government Area
          </p>
          <p>
            <b class="text-green-500">Religion: </b>- Predominantly Christians
            and Muslims - Peaceful coexistence of both religions
          </p>
          <p>
            <b class="text-green-500">Main Economic Activities: </b>- Civil
            service - Commerce - Sandal making - Rice milling - Restaurants -
            Bars
          </p>
          <p>
            <b class="text-green-500">Agricultural Produce: </b>- Rice - Yam -
            Cassava - Guinea Corn - Maize
          </p>
          <p>
            <b class="text-green-500">Mineral Resources: </b>- Kaolin - Clay
            soil with clay brick cottage industries
          </p>
          <p>
            <b class="text-green-500">Prominent Places: </b>- Ogobia - Upu -
            Otukpoicho - Otobi - Adoka - Oyagede - Akpa-Igede
          </p>
          <p>
            <b class="text-green-500">Transportation: </b>- Road: Connected to
            the rest of the country via trunk A road - Road transportation
            through commercial bus and taxi services - Rail: Part of the Port
            Harcourt to Kaduna railway line with a railway station
          </p>
          <p>
            <b class="text-green-500">Banks: </b>- First Bank - Agriculture
            Bank - Co-operative Bank - Oceanic Bank - Intercontinental Bank -
            Unity Bank - Bank PHB - UBA - Zenith Bank
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>

    <!-- Local Government Area 19 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        TARKA LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-20">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-20">
          <p>
            <b class="text-green-500">Year of Creation: </b>December 8, 1996
          </p>
          <p><b class="text-green-500">Headquarters: </b>Wannune</p>
          <p>
            <b class="text-green-500">Ethnic Composition: </b>- Predominantly
            Mbakor of Tiv ethnic extraction - Other ethnic groups attracted
            for trade and public service jobs
          </p>
          <p>
            <b class="text-green-500">Boundaries: </b>- North: Guma Local
            Government Area - West: Gwer East Local Government Area - East:
            Buruku Local Government Area - South: Gboko Local Government Area
          </p>
          <p>
            <b class="text-green-500">Landmass: </b>Approximately 377.679
            square kilometers
          </p>
          <p>
            <b class="text-green-500">Population: </b>79,280 (Census, 2006)
          </p>
          <p>
            <b class="text-green-500">Location: </b>Longitude 8045’ to 9000’E
            and latitude 7030’ to 7045’N
          </p>
          <p>
            <b class="text-green-500">Council Wards and Polling Units: </b>-
            Ten council wards: Shitile, Tongov, Mbakwakem, Mbaajir, Mbaigba,
            Mbachaverikyondo, Mbaikyo or Mbayia, Mbaayo, Mbanyagber, and
            Mbaikyaa - Sixty Two (62) polling units
          </p>
          <p>
            <b class="text-green-500">Weather: </b>- Typical tropical climate
            - Two distinct seasons: - Rainy season (April to October) with 150
            – 180mm annual rainfall - Dry season (November to March) with
            temperature ranging from 23oC to 30oC
          </p>
          <p>
            <b class="text-green-500">Ethnic Composition: </b>- Predominantly
            Tiv - Other ethnic groups, including Hausa, Fulani, Ibo, Urhobo,
            Ijawa, Yoruba, etc.
          </p>
          <p>
            <b class="text-green-500">Agriculture: </b>- Main economic
            activity - About 95% of the population is rural - Agriculture
            includes root and grain crops, vegetable production
          </p>
          <p>
            <b class="text-green-500">Settlement Patterns: </b>- Changed from
            compound or village settlements to isolated hamlets due to search
            for agricultural land - Population density around 213 inhabitants
            per square kilometer
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 20 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        USHONGO LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-21">
          <i class="fas fa-info-circle mr-2"></i>View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-21">
          <p>
            <b class="text-green-500">Year of Creation: </b>May 1989 by the
            Babangida administration
          </p>
          <p><b class="text-green-500">Headquarters: </b>Lessel</p>
          <p><b class="text-green-500">Location: </b>Latitude 70</p>
          <p>
            <b class="text-green-500">Boundaries: </b>- North: Gboko Local
            Government Area and Buruku Local Government Area - South:
            Vandeikya Local Government Area - East: Kwande Local Government
            Area - West: Konshisha Local Government Area
          </p>
          <p>
            <b class="text-green-500">Population: </b>- Approximately 123,166
            (26th November 1991 census) - Approximately 191,935 (21st March
            2006 census)
          </p>
          <p>
            <b class="text-green-500">Districts: </b>- Atirkyese - Ikov -
            Lessel Township - Mbaaka - Mbaanyam - Mbaawe - Mbagba - Mbagwaza -
            Mbakuha - Mbayegh - Utange
          </p>
          <p>
            <b class="text-green-500">Agriculture: </b>Agriculture - Mainstay
            of the economy - Citrus fruits (largest producer in Benue State) -
            Grains (rice, maize, sorghum, groundnuts, Bambara nuts, soybeans)
            - Agricultural products serve as both cash and food crops
          </p>
          <p>
            <b class="text-green-500">Mineral Resources: </b>- Barites in
            commercial quantities in Mbagir and Mbakuta wards/districts -
            High-quality marble in large quantities at Ushongo Hills - Clay
            suitable for a ceramic industry at Anwo Gbor in Mbaaka District
          </p>
          <p>
            <b class="text-green-500">Infrastructure: </b>- Linked to other
            local government areas by federal and state roads - Moderate
            modern infrastructural facilities - Local government headquarters
            to be connected to the national grid - Potential for industries
            such as fruit juice, rice mill, cassava processing, flour mills,
            ceramic, stone crushing, mining, and glass
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 21 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        UKUM LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-22">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-22">
          <p>
            <b class="text-green-500">Year of Creation: </b>September 1991
          </p>
          <p><b class="text-green-500">Headquarters: </b>Sankera</p>
          <p>
            <b class="text-green-500">Location: </b>East-north of Benue state,
            Zone A senatorial district
          </p>
          <p>
            <b class="text-green-500">Boundaries: </b>- Katsina-Ala Local
            Government Area - Logo Local Government Area - Taraba and
            Nassarawa States
          </p>
          <p>
            <b class="text-green-500">Landmass: </b>429.10 square kilometers
          </p>
          <p>
            <b class="text-green-500">Climate: </b>Two distinct seasons: -
            Rainy season - Dry season
          </p>
          <p>
            <b class="text-green-500">Population: </b>Approximately 183,422
            people (2006 census)
          </p>
          <p>
            <b class="text-green-500">Ethnic Composition: </b>Predominantly
            Tiv people
          </p>
          <p>
            <b class="text-green-500">Council Wards/Districts and Polling Units: </b>- Aterayange - Mbatian - Boikyo -
            Uyan - Ugbam - Ituluv - Lumbuv
            - Mbazun - Tsaav - Mbayenge - Azendeshi - Kendav - Kundav - 223
            polling units
          </p>
          <p>
            <b class="text-green-500">Culture and Tourism: </b>- Hospitable
            people with Tiv culture - Traditional dances, folk songs, and
            cultural events
          </p>
          <p>
            <b class="text-green-500">Investment Opportunities: </b>- Abundant
            agricultural products: yam, rice, corn, sesame - Forest reserve in
            Sankera for furniture and saw mills - Vast land for crop
            cultivation - Natural resources: sand reserve, byrite, salt, zinc
            (quantity and full locations require further research)
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
    <!-- Local Government Area 22 -->
    <div class="border p-4">
      <h2 class="text-lg font-semibold mb-2 text-gray-500">
        VANDEIKYA LOCAL GOVERNMENT
      </h2>

      <!-- Dropdown Menu -->
      <div class="relative">
        <button class="block p-2 rounded bg-green-500 text-white hover:bg-green-700" id="dropdown-btn-23">
          <i class="fas fa-info-circle mr-2"></i> View Details
        </button>
        <div class="absolute hidden bg-white border p-2 top-12 right-0 z-10" id="dropdown-content-23">
          <p>
            <b class="text-green-500">Year of Creation: </b>August 28, 1976
          </p>
          <p>
            <b class="text-green-500">The People: </b>Descendants of one great
            ancestor, Achira or Jechira. Vandeikya name derived from a rock
            settlement of baboons or monkeys.
          </p>
          <p>
            <b class="text-green-500">Landmass: </b>183,939/68 square meters
          </p>
          <p>
            <b class="text-green-500">Council Wards/Districts: </b>- Mbagbam -
            Mbadede - Mbagbera - Mbajor - Mbayongo - Mbakaange - Nyimangbah -
            Ningev - Mbatyough - Tsambe - Mbakyaha - Vandeikya township
          </p>
          <p>
            <b class="text-green-500">Population: </b>Over 532,881 (1999
            census projection)
          </p>
          <p>
            <b class="text-green-500">Shares Boundaries With: </b>- Obudu and
            Bekwara local government councils in Cross River State. -
            Konshisha, Kwande, and Ushongo local governments in Benue State.
          </p>
          <p>
            <b class="text-green-500">Location: </b>South Eastern, Benue State
          </p>
          <p>
            <b class="text-green-500">Agricultural Produce: </b>Rice, sweet
            potatoes, sorghum, citrus, cassava, bananas, spices, tomatoes,
            pepper, oil palm, and oil palm products. Sheep and cattle rearing.
            Sheep grazing area in Ningev Council Ward.
          </p>
          <p>
            <b class="text-green-500">Industrial Potentials: </b>Starch and
            glucose production, fruit juice extraction, vegetable oil,
            bottling of palm wine, and solid minerals (zinc, barite, kaolin,
            rutile, etc.)
          </p>
          <p>
            <b class="text-green-500">Weather: </b>Short dry season (November
            – March) and long wet season (April – October)
          </p>
          <p>
            <b class="text-green-500">Infrastructural Facilities: </b>Trunk
            ‘A’ federal highway connecting Cross-River State to Katsina-Ala
            and other northern states. Electricity supply extends to Vandeikya
            township, Chi village, and Tsar. Modern general hospital,
            missionary hospital, and local government clinics. Water supply
            program provides pipe-borne water. Rivers: River Aya and River Be.
          </p>
          <p>
            <b class="text-green-500">Markets: </b>- Primary/major markets:
            Ihugh and Agbo. - Secondary markets: Tsar, Koti-Yough, and Gbem. -
            Other markets: Dagba, Betse, Agidi Mbakena, Anhyla, Agu, Sambo,
            Pev, Taatihi, Adeiyongo, Tor Tiv, Mede, Anongo, and Ugba.
          </p>

          <!-- Add more resources and descriptions here -->
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript to handle dropdown functionality for each local government area -->
  <script>
    function toggleDropdown(id) {
      const dropdown = document.getElementById(`dropdown-content-${id}`);
      dropdown.classList.toggle("hidden");
    }

    // Add event listeners for each local government area
    for (let i = 1; i <= 23; i++) {
      document
        .getElementById(`dropdown-btn-${i}`)
        .addEventListener("click", () => toggleDropdown(i));
    }
  </script>


   <!-- Footer section -->
    <?php
    require_once('components/footer.php')
        ?>

    <!-- End footer section  -->
</body>

</html>
