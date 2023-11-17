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

  <section>
    <article>
      <h2 class="text-3xl font-semibold tracking-tighter py-2 mx-8">
        <span class="text-red-500">Tax </span>
        <span class="text-green-500">Incentive</span>
      </h2>
      <div class="mx-8 items-center">
        <img src="../../public/assets/images/tax-intensive.jpg"
          class="w-full h-96 brightness-100 mx-auto rounded-md py-2" />
      </div>
      <div class="px-4 px-8 py-4">
        <div class="md:grid md:grid-cols-3 md:gap-4 py-4">
          <!-- Column 1 -->
          <div class="md:col-span-1 md:my-4 bg-white  rounded-lg overflow-hidden relative">
            <img src="../../public/assets/images/bg-2.jpg" alt="Background Image"
              class="w-full h-60 opacity-80 py-2 brightness-50" />
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
              <h2 class="text-xl font-semibold text-justify text-green-500">Customs and Tariff Benefits</h2>
              <p class="px-4 text-justify tracking-tighter">
                Customs and tariff benefits may be provided to facilitate the
                import and export of goods related to the investment project;
                as the Federal Government’s policies are reviewed from time to
                time.
              </p>
            </div>
          </div>

          <!-- Column 2 -->
          <div class="md:col-span-1 md:my-4 bg-white  rounded-lg overflow-hidden relative">
            <img src="../../public/assets/images/bg-2.jpg" alt="Background Image"
              class="w-full h-60 opacity-80 py-2 brightness-50" />
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
              <h2 class="text-xl font-semibold text-center text-green-500">
                Access to Skilled Workforce
              </h2>
              <p class="px-4 tracking-tighter text-justify">
                Benue State offers access to a skilled and diverse workforce.
                Investors will have access to a pool of skilled professionals
                and technical experts. Collaboration with local universities
                and vocational institutions to offer training programs and
                tailored workforce development may be accessible.
              </p>
            </div>
          </div>

          <!-- Column 3 -->
          <div class="md:col-span-1 md:my-4 bg-white rounded-lg overflow-hidden relative">
            <img src="../../public/assets/images/bg-2.jpg" alt="Background Image"
              class="w-full h-60 opacity-80 py-2 brightness-50" />
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
              <h2 class="text-xl font-semibold text-center text-green-500">Infrastructure Support</h2>
              <p class="px-4 tracking-tighter text-justify">
                Investors in infrastructure projects may receive support in
                terms of land allocation, permits, and approvals.
                Collaboration with government agencies and development
                partners to facilitate infrastructure development, including
                roads, utilities, and transportation may benefit investors.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="px-8">
        <div class="md:grid md:grid-cols-3 md:gap-4">
          <div class="md:col-span-1 md:my-4 bg-white rounded-lg overflow-hidden relative">
            <img src="../../public/assets/images/bg-2.jpg" alt="Background Image"
              class="w-full h-60 opacity-80 py-2 brightness-50" />
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
              <h2 class="text-xl font-semibold text-center text-green-500">
                Regulatory and Administrative Support
              </h2>
              <p class="px-4 text-justify font-normal tracking-tighter">
                Dedicated one-stop-shop services to assist investors in
                navigating regulatory and administrative processes.
                Streamlined approval processes for permits, licenses, and
                registration to expedite project initiation.
              </p>
            </div>
          </div>

          <!-- Column 2 -->
          <div class="md:col-span-1 md:my-4 bg-white rounded-lg overflow-hidden relative">
            <img src="../../public/assets/images/bg-2.jpg" alt="Background Image"
              class="w-full h-60 opacity-80 py-2 brightness-50" />
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
              <h2 class="text-xl font-semibold text-center text-green-500">
                Investment Protection and Dispute Resolution
              </h2>
              <p class="px-4 text-justify font-normal tracking-tighter">
                Investor-friendly legal framework and protection of foreign
                investments. Establishment of dispute resolution mechanisms to
                address any issues that may arise.
              </p>
            </div>
          </div>

          <!-- Column 3 -->
          <div class="md:col-span-1 md:my-4 bg-white rounded-lg overflow-hidden relative">
            <img src="../../public/assets/images/bg-2.jpg" alt="Background Image"
              class="w-full h-60 opacity-80 py-2 brightness-50" />
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
              <h2 class="text-xl font-semibold text-center text-green-500">
                Community Engagement and Corporate Social Responsibility (CSR)
              </h2>
              <p class="px-4 text-justify font-normal tracking-tighter">
                Assistance in building positive relationships with local
                communities and engaging in CSR initiatives. Access to
                programs that promote sustainable and responsible business
                practices.
              </p>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>
  
  <!-- Footer section -->
    <?php
    require_once('components/footer.php')
      ?>

    <!-- End footer section  -->
</body>

</html>
