<?php get_header(); ?>

<?PHP
$index1_post = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => '2',
  'post_status' => 'publish',
  'category_name' => 'green-house-blog'
));

if ($index1_post->have_posts()) {

?>

  <!-- component -->


  <div class="flex justify-center items-center">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    <div class="2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
      <div role="main" class="flex flex-col items-center justify-center">
        <h1 class="text-4xl font-semibold leading-9 text-center text-gray-900 dark:text-gray-900">به دنیای شگفت انگیز گلخانه داری خوش آمدید!</h1>
        <p class="text-base leading-normal text-center text-gray-600 dark:text-gray-900 mt-4 lg:w-1/2 md:w-10/12 w-11/12">در این صفحه، مجموعه ای از مقالات جامع و کاربردی در زمینه ی گلخانه داری گردآوری شده است. چه یک گلخانه دار باتجربه باشید و چه تازه کار، در اینجا می توانید اطلاعات و راهنمایی های ارزشمندی برای ارتقای مهارت های خود و پرورش گل ها و گیاهان تان به بهترین نحو پیدا کنید.</p>
      </div>
      <div class="lg:flex items-stretch md:mt-12 mt-8">
        <div class="lg:w-1/2">
          <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6">
            <?PHP while ($index1_post->have_posts()) {
              $index1_post->the_post();  ?>
                <div class="sm:w-1/2 relative">
                  <div>
                    <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0"><?PHP echo get_the_date(); ?></p>
                    <div class="absolute bottom-0 left-0 p-6">
                      <h2 class="text-xl font-semibold 5 text-white"><?PHP the_title(); ?></h2>
                      <div class="text-base leading-4 text-white mt-2"><?php echo wp_trim_words(get_the_excerpt(), 10); ?></div>
                      <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                        <div class="pr-2 text-sm font-medium leading-none text-white"><a href="<?PHP the_permalink(); ?>" class="font-bold"> ادامه مطلب</a></div>
                      </a>
                    </div>
                  </div>
                  <?PHP if (has_post_thumbnail()) { ?>
                    <img src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" class="w-ful h-80" />
                  <?PHP } ?>
                </div>
              <?PHP } // end if
              ?>
            <?PHP } //end while
            ?>
          </div>
            <!-- ----------------------------------حالت اول ----------------------------------------------- -->

          <div class="relative">
          <?PHP
            $index2_post = new WP_Query(array(
              'post_type' => 'post',
              'posts_per_page' => '1',
              'offset'=> '2',
              'post_status' => 'publish',
              'category_name' => 'green-house-blog'
            ));

            if ($index2_post->have_posts()) {
              while ($index2_post->have_posts()) {
                $index2_post->the_post();
            ?>
            <div>
              <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0"><?PHP echo get_the_date(); ?></p>
              <div class="absolute bottom-0 left-0 md:p-10 p-6">
                <h2 class="text-xl font-semibold 5 text-white"><?PHP the_title(); ?></h2>
                <p class="text-base leading-4 text-white mt-2"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                <div class="pr-2 text-sm font-medium leading-none text-white"><a href="<?PHP the_permalink(); ?>" class="font-bold"> ادامه مطلب</a></div>

                </a>
              </div>
            </div>
            <?PHP if (has_post_thumbnail()) { ?>
            <img src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" class="w-full mt-8 md:mt-6 hidden sm:block" />
            <img class="w-full mt-4 sm:hidden" src="<?PHP the_post_thumbnail_url(); ?>" alt="<?PHP the_title(); ?>" />
            <?PHP } ?>
          </div>
        </div>
        <?PHP
            }
          }
            ?>
      <!-- ----------------------------------حالت دوم ----------------------------------------------- -->
      <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">
        <div class="relative">
        <?PHP
            $index2_post = new WP_Query(array(
              'post_type' => 'post',
              'posts_per_page' => '1',
              'offset'=> '3',
              'post_status' => 'publish',
              'category_name' => 'green-house-blog'
            ));

            if ($index3_post->have_posts()) {
              while ($index3_post->have_posts()) {
                $index3_post->the_post();
            ?>
          <div>
            <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0"><?PHP echo get_the_date(); ?></p>
            <div class="absolute bottom-0 left-0 md:p-10 p-6">
              <h2 class="text-xl font-semibold 5 text-white">سوم</h2>
              <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
              <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
          <img src="https://i.ibb.co/6Wfjf2w/img-4.png" alt="sitting place" class="w-full sm:block hidden" />
          <img class="w-full sm:hidden" src="https://i.ibb.co/dpXStJk/Rectangle-29.png" alt="sitting place" />
        </div>
        <?PHP
            }
          }
            ?>
         <!-- ----------------------------------حالت سوم ----------------------------------------------- -->
        <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6 md:mt-6 mt-4">
          <div class="relative w-full">
            <div>
              <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
              <div class="absolute bottom-0 left-0 p-6">
                <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                  <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
            <img src="https://i.ibb.co/3yvZBpm/img-5.png" class="w-full" alt="chair" />
          </div>
          <div class="relative w-full sm:mt-0 mt-4">
            <div>
              <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">12 April 2021</p>
              <div class="absolute bottom-0 left-0 p-6">
                <h2 class="text-xl font-semibold 5 text-white">The Decorated Ways</h2>
                <p class="text-base leading-4 text-white mt-2">Dive into minimalism</p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                  <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
            <img src="https://i.ibb.co/gDdnJb5/img-6.png" class="w-full" alt="wall design" />
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- ------------------------------------------- -->
  <section class="dark:bg-gray-100 dark:text-gray-800">
    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
      <a rel="noopener noreferrer" href="#" class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-50">
        <img src="https://source.unsplash.com/random/480x360" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
        <div class="p-6 space-y-2 lg:col-span-5">
          <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster tincidunt reprimique ad pro</h3>
          <span class="text-xs dark:text-gray-600">February 19, 2021</span>
          <p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert putent doctus id.</p>
        </div>
      </a>
      <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50">
          <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?1">
          <div class="p-6 space-y-2">
            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
            <span class="text-xs dark:text-gray-600">January 21, 2021</span>
            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
          </div>
        </a>
        <a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50">
          <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?2">
          <div class="p-6 space-y-2">
            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
            <span class="text-xs dark:text-gray-600">January 22, 2021</span>
            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
          </div>
        </a>
        <a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50">
          <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?3">
          <div class="p-6 space-y-2">
            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
            <span class="text-xs dark:text-gray-600">January 23, 2021</span>
            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
          </div>
        </a>
        <a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50 hidden sm:block">
          <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?4">
          <div class="p-6 space-y-2">
            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
            <span class="text-xs dark:text-gray-600">January 24, 2021</span>
            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
          </div>
        </a>
        <a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50 hidden sm:block">
          <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?5">
          <div class="p-6 space-y-2">
            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
            <span class="text-xs dark:text-gray-600">January 25, 2021</span>
            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
          </div>
        </a>
        <a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-50 hidden sm:block">
          <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?6">
          <div class="p-6 space-y-2">
            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">In usu laoreet repudiare legendos</h3>
            <span class="text-xs dark:text-gray-600">January 26, 2021</span>
            <p>Mei ex aliquid eleifend forensibus, quo ad dicta apeirian neglegentur, ex has tantas percipit perfecto. At per tempor albucius perfecto, ei probatus consulatu patrioque mea, ei vocent delicata indoctum pri.</p>
          </div>
        </a>
      </div>
      <div class="flex justify-center">
        <button type="button" class="px-6 py-3 text-sm rounded-md hover:underline dark:bg-gray-50 dark:text-gray-600">Load more posts...</button>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>