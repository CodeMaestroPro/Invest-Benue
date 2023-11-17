<!DOCTYPE html>
<html lang="en">
<!-- head  -->

<?php
require_once('components/header.php')
    ?>

<!-- end head  -->

<body class="bg-neutral-100">
    <!-- Navbar Section  -->

    <?php
    require_once('components/navbar.php')
        ?>


    <!-- End of Navbar Section  -->
    <div class="bg-cover bg-center relative h-96 brightness-100 "
    style="background-image: url('../../public/assets/images/population.jpg');">
    <div class="absolute inset-0 flex items-center justify-center bg-green-700 bg-opacity-75">
        <div class="text-white text-center">
            <h1 class="text-4xl font-bold" data-aos="fade-down" data-aos-duration="2000">Benue State Population Data</h1>
            <P data-aos="fade-right" data-aos-duration="2000" class="text-lg">
                Benue State population across various local governments!
            </P>
        </div>
    </div>
</div>


<div class="container mx-auto mt-24 px-16 mb-10">

    <h1 class="text-2xl font-semibold mb-10 text-center text-gray-500"data-aos="fade-down" data-aos-duration="2000">The population development in Benue as well as related information and services </h1>

    <!-- Population Table -->
    <!-- Population Table -->
    <div class="table-responsive" data-aos="fade-up" data-aos-duration="2000">
      <table class="min-w-full bg-white border border-gray-300">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b">Name</th>
            <th class="py-2 px-4 border-b">Status</th>
            <th class="py-2 px-4 border-b">Population (1991)</th>
            <th class="py-2 px-4 border-b">Population (2006)</th>
            <th class="py-2 px-4 border-b">Population Projection (2022)</th>
          </tr>
        </thead>
        <tbody>
          <!-- Benue State Row -->
          <tr>
            <td class="py-2 px-4 border-b">Benue State</td>
            <td class="py-2 px-4 border-b">State</td>
            <td class="py-2 px-4 border-b">2,753,077</td>
            <td class="py-2 px-4 border-b">4,253,641</td>
            <td class="py-2 px-4 border-b">6,141,300</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Additional Information -->
    <div class="mt-8">
      <div class="border-t pt-4">
        <p class="text-lg font-bold mb-2"data-aos="fade-down" data-aos-duration="2000">Additional Information</p>
        <ul class="list-disc pl-6" data-aos="fade-right" data-aos-duration="2000">
          <li>6,141,300 Population [2022] – Projection</li>
          <li>30,783 km² Area</li>
          <li>199.5/km² Population Density [2022]</li>
          <li>2.3% Annual Population Change [2006 → 2022]</li>
        </ul>
      </div>

      <!-- Benue State Information -->
      <div class="border-t pt-4" data-aos="fade-down" data-aos-duration="2000">
        <p class="text-lg font-bold mb-2">Benue State Information</p>
        <p>Benue State: state in Nigeria – Inception: 1976 – Official Website</p>
      </div>
    </div>

    <!-- Local Government Areas -->
    <div class="mt-8"data-aos="fade-up" data-aos-duration="2000">
      <div class="table-responsive">
        <table class="min-w-full bg-white border border-gray-300">
          <thead>
            <tr>
              <th class="py-2 px-4 border-b">Name</th>
              <th class="py-2 px-4 border-b">Status</th>
              <th class="py-2 px-4 border-b">Population (1991)</th>
              <th class="py-2 px-4 border-b">Population (2006)</th>
              <th class="py-2 px-4 border-b">Population Projection (2022)</th>
            </tr>
          </thead>
          <tbody>
            <!-- Add rows for each local government area -->
            <tr>
              <td class="py-2 px-4 border-b">Ado</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">104,137</td>
              <td class="py-2 px-4 border-b">184,389</td>
              <td class="py-2 px-4 border-b">266,200</td>
            </tr>
            <tr>
              <td class="py-2 px-4 border-b">Agatu</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">...</td>
              <td class="py-2 px-4 border-b">115,597</td>
              <td class="py-2 px-4 border-b">166,900</td>
            </tr>
            <tr>
              <td class="py-2 px-4 border-b">Apa</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">...</td>
              <td class="py-2 px-4 border-b">96,780</td>
              <td class="py-2 px-4 border-b">139,700</td>
            </tr>
            <tr>
              <td class="py-2 px-4 border-b">Buruku</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">130,450</td>
              <td class="py-2 px-4 border-b">206,215</td>
              <td class="py-2 px-4 border-b">297,700</td>
            </tr>
            <tr>
              <td class="py-2 px-4 border-b">Gboko</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">...</td>
              <td class="py-2 px-4 border-b">361,325</td>
              <td class="py-2 px-4 border-b">521,700</td>
            </tr>
             <tr>
              <td class="py-2 px-4 border-b">Guma</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">116,336</td>
              <td class="py-2 px-4 border-b">194,164</td>
              <td class="py-2 px-4 border-b">280,300</td>
            </tr>

            <tr>
              <td class="py-2 px-4 border-b">Gwer East</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">117,630</td>
              <td class="py-2 px-4 border-b">168,660</td>
              <td class="py-2 px-4 border-b">243,500</td>
            </tr>
            <tr>
              <td class="py-2 px-4 border-b">Gwer West</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">74,588</td>
              <td class="py-2 px-4 border-b">122,313</td>
              <td class="py-2 px-4 border-b">176,600</td>
            </tr>

            <tr>
              <td class="py-2 px-4 border-b">Katsina-Ala</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">...</td>
              <td class="py-2 px-4 border-b">225,471</td>
              <td class="py-2 px-4 border-b">325,500</td>
            </tr>
            <tr>
              <td class="py-2 px-4 border-b">Konshisha</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">145,614</td>
              <td class="py-2 px-4 border-b">226,492</td>
              <td class="py-2 px-4 border-b">327,000</td>
            </tr>
            <tr>
              <td class="py-2 px-4 border-b">Kwande</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">180,327</td>
              <td class="py-2 px-4 border-b">248,642</td>
              <td class="py-2 px-4 border-b">359,000</td>
            </tr>

            <tr>
              <td class="py-2 px-4 border-b">Logo</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">...</td>
              <td class="py-2 px-4 border-b">169,570</td>
              <td class="py-2 px-4 border-b">244,800</td>
            </tr>
             <tr>
              <td class="py-2 px-4 border-b">Makurdi</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">239,889</td>
              <td class="py-2 px-4 border-b">239,889</td>
              <td class="py-2 px-4 border-b">433,700</td>
            </tr>

            <tr>
              <td class="py-2 px-4 border-b">Okpokwu</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">90,241</td>
              <td class="py-2 px-4 border-b">175,596</td>
              <td class="py-2 px-4 border-b">253,500</td>
            </tr>
             <tr>
              <td class="py-2 px-4 border-b">Oturkpo</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">...</td>
              <td class="py-2 px-4 border-b">266,411</td>
              <td class="py-2 px-4 border-b">384,600</td>
            </tr>
             <tr>
              <td class="py-2 px-4 border-b">Tarka</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">...</td>
              <td class="py-2 px-4 border-b">79,280</td>
              <td class="py-2 px-4 border-b">114,500</td>
            </tr>

            <tr>
              <td class="py-2 px-4 border-b">Ukum</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">167,266</td>
              <td class="py-2 px-4 border-b">216,983</td>
              <td class="py-2 px-4 border-b">313,300</td>
            </tr>
             <tr>
              <td class="py-2 px-4 border-b">Ushongo</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">123,166</td>
              <td class="py-2 px-4 border-b">191,935</td>
              <td class="py-2 px-4 border-b">277,100</td>
            </tr>
             <tr>
              <td class="py-2 px-4 border-b">Vandeikya</td>
              <td class="py-2 px-4 border-b">Local Government Area</td>
              <td class="py-2 px-4 border-b">161,863</td>
              <td class="py-2 px-4 border-b">234,567</td>
              <td class="py-2 px-4 border-b">338,700</td>
            </tr>

            <!-- Add more rows for other local government areas -->
          </tbody>
        </table>

      </div>
    </div>

  </div>
 <h1 class="text-2xl font-bold mb-4 px-16">Benue State Population Data</h1>

    <!-- Population Table -->
    <div class="table-responsive px-16"data-aos="fade-up" data-aos-duration="2000">
      <table class="min-w-full bg-white border border-gray-300 ">
        <thead>
          <tr>
            <th class="py-2 px-4 border-b">Name</th>
            <th class="py-2 px-4 border-b">Status</th>
            <th class="py-2 px-4 border-b">Population (1991)</th>
            <th class="py-2 px-4 border-b">Population (2006)</th>
            <th class="py-2 px-4 border-b">Population Projection (2022)</th>
            <th class="py-2 px-4 border-b">Computation</th> <!-- Added Computation Column -->
          </tr>
        </thead>
        <tbody>
          <!-- Benue State Row -->
          <tr>
            <td class="py-2 px-4 border-b">Benue State</td>
            <td class="py-2 px-4 border-b">State</td>
            <td class="py-2 px-4 border-b">2,753,077</td>
            <td class="py-2 px-4 border-b">4,253,641</td>
            <td class="py-2 px-4 border-b">6,141,300</td>
            <td class="py-2 px-4 border-b">...</td> <!-- Placeholder for computation -->
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Additional Information -->
    <div class="mt-8 px-16">
      <div class="border-t pt-4">
        <p class="text-lg font-bold mb-2"data-aos="fade-down" data-aos-duration="2000">Additional Information</p>
        <ul class="list-disc pl-6"data-aos="fade-right" data-aos-duration="2000">
          <li>6,141,300 Population [2022] – Projection</li>
          <li>30,783 km² Area</li>
          <li>199.5/km² Population Density [2022]</li>
          <li>2.3% Annual Population Change [2006 → 2022]</li>
        </ul>
      </div>

      <!-- Benue State Information -->
      <div class="border-t pt-4">
        <p class="text-lg font-bold mb-2"data-aos="fade-down" data-aos-duration="2000">Benue State Information</p>
        <p data-aos="fade-left" data-aos-duration="2000">Benue State: state in Nigeria – Inception: 1976 – Official Website</p>
      </div>
    </div>


  <!-- Population Table -->
  <div class="table-responsive px-4 sm:px-8 md:px-16 lg:px-16 xl:px-16"data-aos="fade-up" data-aos-duration="2000">
    <table class="min-w-full bg-white border border-gray-300">
      <thead>
        <tr>
          <th class="py-2 px-4 border-b">Name</th>
          <th class="py-2 px-4 border-b">Status</th>
          <th class="py-2 px-4 border-b">Population (1991)</th>
          <th class="py-2 px-4 border-b">Population (2006)</th>
          <th class="py-2 px-4 border-b">Population Projection (2022)</th>
          <th class="py-2 px-4 border-b">Computation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="py-2 px-4 border-b">Benue State</td>
          <td class="py-2 px-4 border-b">State</td>
          <td class="py-2 px-4 border-b">2,753,077</td>
          <td class="py-2 px-4 border-b">4,253,641</td>
          <td class="py-2 px-4 border-b">6,141,300</td>
          <td class="py-2 px-4 border-b">...</td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>

  <!-- Additional Information and Benue State Information -->
  <div class="mt-8 px-4 sm:px-8 md:px-16 lg:px-16 xl:px-16">
    <!-- Additional Information -->
    <div class="border-t pt-4">
      <p class="text-lg font-bold mb-2">Additional Information</p>
      <ul class="list-disc pl-6">
        <li>6,141,300 Population [2022] – Projection</li>
        <li>30,783 km² Area</li>
        <li>199.5/km² Population Density [2022]</li>
        <li>2.3% Annual Population Change [2006 → 2022]</li>
      </ul>
    </div>

    <!-- Benue State Information -->
    <div class="border-t pt-4">
      <p class="text-lg font-bold mb-2">Benue State Information</p>
      <p>Benue State: state in Nigeria – Inception: 1976 – Official Website</p>
    </div>
  </div>




  <!-- Gender and Age Group Data -->
  <div class="container mx-auto px-4 sm:px-8 md:px-16 lg:px-16 xl:px-16">
    <h1 class="text-2xl font-bold mb-4"data-aos="fade-down" data-aos-duration="2000">Gender and Age Group Data</h1>

    <!-- Gender Data -->
    <div class="mt-8"data-aos="fade-right" data-aos-duration="2000">
      <p class="text-lg font-bold mb-2">Gender Distribution</p>
      <p class="mb-2">Persons:</p>
      <ul class="list-disc pl-6">
        <li>Males: 2,144,043</li>
        <li>Females: 2,109,598</li>
      </ul>
      <p class="mb-2">Gender (C 2006):</p>
      <ul class="list-disc pl-6">
        <li>Males: 2,144,043</li>
        <li>Females: 2,109,598</li>
      </ul>
    </div>

    <!-- Age Groups Data -->
    <div class="mt-8"data-aos="fade-right" data-aos-duration="2000">
      <p class="text-lg font-bold mb-2" data-aos="fade-down" data-aos-duration="2000">Age Group Distribution</p>
      <p class="mb-2">Persons:</p>
      <ul class="list-disc pl-6">
        <li>0-14 years: 1,958,919</li>
        <li>15-64 years: 2,158,292</li>
        <li>65+ years: 136,430</li>
      </ul>
    </div>
  </div>

  <!-- Age Group Distribution Data -->
  <div class="container mx-auto px-4 sm:px-8 md:px-16 lg:px-20 xl:px-16">
    <h1 class="text-2xl font-bold mb-4"data-aos="fade-down" data-aos-duration="2000">Age Group Distribution Data</h1>

    <!-- Age Groups (C 2006) -->
    <div class="mt-8"data-aos="fade-right" data-aos-duration="2000"
      <p class="text-lg font-bold mb-2">Age Groups (C 2006)</p>
      <ul class="list-disc pl-6">
        <li>0-14 years: 1,958,919</li>
        <li>15-64 years: 2,158,292</li>
        <li>65+ years: 136,430</li>
      </ul>
    </div>

    <!-- Age Distribution Data -->
    <div class="mt-8"data-aos="fade-right" data-aos-duration="2000">
      <p class="text-lg font-bold mb-2">Age Distribution</p>
      <p class="mb-2">Persons:</p>
      <ul class="list-disc pl-6">
        <li>0-9 years: 1,445,573</li>
        <li>10-19 years: 970,971</li>
        <li>20-29 years: 720,544</li>
        <!-- Add more age groups as needed -->
      </ul>
    </div>
  </div>

  <!-- Age Distribution Data (2022 and C 2006) -->
  <div class="container mx-auto px-4 sm:px-8 md:px-16 lg:px-20 xl:px-16">
    <h1 class="text-2xl font-bold mb-4"data-aos="fade-up" data-aos-duration="2000">Age Distribution Data</h1>

    <!-- Age Distribution (2022) -->
    <div class="mt-8">
      <p class="text-lg font-bold mb-2"data-aos="fade-down" data-aos-duration="2000">Age Distribution (2022)</p>
      <ul class="list-disc pl-6"data-aos="fade-right" data-aos-duration="2000">
        <li>30-39 years: 453,464</li>
        <li>40-49 years: 292,048</li>
        <li>50-59 years: 163,294</li>
        <li>60-69 years: 101,418</li>
        <li>70-79 years: 56,206</li>
        <li>80+ years: 50,123</li>
      </ul>
    </div>

    <!-- Age Distribution (C 2006) -->
    <div class="mt-8">
      <p class="text-lg font-bold mb-2"data-aos="fade-down" data-aos-duration="2000">Age Distribution (C 2006)</p>
      <ul class="list-disc pl-6" data-aos="fade-right" data-aos-duration="2000">
        <li>0-9 years: 1,445,573</li>
        <li>10-19 years: 970,971</li>
        <li>20-29 years: 720,544</li>
        <li>30-39 years: 453,464</li>
        <li>40-49 years: 292,048</li>
        <li>50-59 years: 163,294</li>
        <li>60-69 years: 101,418</li>
        <li>70-79 years: 56,206</li>
        <li>80+ years: 50,123</li>
      </ul>
    </div>
  </div>


  <!-- Source and Explanation -->
  <div class="mt-8 px-16 mb-10"data-aos="fade-left" data-aos-duration="2000">
    <p class="text-lg font-bold mb-2">Source and Explanation</p>
    <p>Source: National Population Commission of Nigeria (web), National Bureau of Statistics (web).</p>
    <p>Explanation: The population projection assumes the same rate of growth for all LGAs within a state. The undercount of the 1991 census is estimated to be about 25 million. All population figures for Nigeria show high error rates; census results are disputed. Area figures are computed using geospatial data.</p>
  </div>




<!-- footer section  -->
<?php
    require_once('components/footer.php')
        ?>
    </body>

    <!-- End footer section -->

</body>
</html>
